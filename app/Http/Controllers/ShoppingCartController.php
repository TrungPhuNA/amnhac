<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\tour;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontendController
{
	private  $vnp_TmnCode = "0B7MQPMF"; //Mã website tại VNPAY
	private  $vnp_HashSecret = "HNRLKDFZEJJWKUEHUOSYSMWWESNGDPZE"; //Chuỗi bí mật
	private  $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
	private  $vnp_Returnurl = "http://laravel56.abc/gio-hang/thanh-toan-pay";

	public function addShoppingCart(Request $request, $id)
	{
		$tour = Tour::find($id);
		if (!$tour) return redirect('/');
		$qty = $request->qty;
		if ($tour->t_count_ticket == 0 || $tour->t_count_ticket < $qty)
		{
			return redirect()->back()->with('warning','Tour diễn đã hết vé');
		}

		\Cart::instance('cart')->add([
			'id'      => $id,
			'name'    => $tour->t_title,
			'qty'     => $qty,
			'price'   => $tour->t_price,
			'options' => [
				'avatar' => $tour->t_avatar
			],
		]);

		return redirect()->back()->with('success','Đăng ký vé thành công, mời bạn xác nhận thông tin thanh toán');

	}

	public function deletetourItem($key)
	{
		\Cart::instance('cart')->remove($key);
		return redirect()->back();
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * Danh sách giỏ hàng
	 */
	public function getListShoppingCart()
	{
		$tours = \Cart::instance('cart')->content();
		return view('shopping.index',compact('tours'));
	}

	/**
	 * Form thanh toan
	 */
	public function getFormPay()
	{
		$tours = \Cart::instance('cart')->content();
		return view('shopping.pay',compact('tours'));
	}

	/**
	 * Lưu thông tin giỏ hàng
	 */
	public function saveInfoShoppingCart(Request $request)
	{
		$totalMoney = str_replace(',','',\Cart::instance('cart')->subtotal(0,3));
		$transactionId = 	Transaction::insertGetId([
			'tr_user_id' => get_data_user('web'),
			'tr_total'   =>  (int)$totalMoney,
//			'tr_note'    => $request->note,
			'tr_address' => $request->address,
			'tr_phone'   => $request->phone,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		if ($transactionId)
		{
			$tours = \Cart::instance('cart')->content();
			foreach ($tours as $tour)
			{
				Order::insert([
					'or_transaction_id' => $transactionId,
					'or_tour_id'        => $tour->id,
					'or_qty'            => $tour->qty,
					'or_price'          => $tour->price,
					'created_at'        => Carbon::now(),
					'updated_at'        => Carbon::now(),
				]);
			}
		}

		\Cart::instance('cart')->destroy();
		return redirect()->to('/');

//		return redirect()->route('get.invoice',$transactionId);
	}

	/**
	 * Cập nhật số lượng giỏ hàng
	 */
	public function updateShoppingCart(Request $request, $id)
	{
		\Cart::instance('cart')->update($id, ['qty' => $request->qty]);
		return redirect()->back()->with('success','Cập nhật thành công');
	}

	public function showFormPay(Request $request)
	{
		if ($request->vnp_ResponseCode == '00')
		{
		      $transactionID = $request->vnp_TxnRef;

		      $transaction = Transaction::find($transactionID);
		      if ($transaction)
			  {
				  \Cart::instance('cart')->destroy();
				  $transaction->tr_type = Transaction::TYPE_PAY;
				  $transaction->save();

				  return redirect()->route('get.invoice',$transaction->id);

//				  return redirect()->to('/')->with('success','Xác nhận giao dịch thành công');
			  }

			return redirect()->to('/')->with('danger','Mã đơn hàng không tồn tại');

		}

		$tours = \Cart::instance('cart')->content();
		return view('shopping.pay_online',compact('tours'));
	}

	/**
	 * @param Request $request
	 * Lưu online
	 */
	public function savePayOnline(Request $request)
	{
		$totalMoney = str_replace(',','',\Cart::subtotal(0,3));
		$transactionId = 	Transaction::insertGetId([
			'tr_user_id' => get_data_user('web'),
			'tr_total'   =>  (int)$totalMoney,
			'tr_note'    => $request->note,
			'tr_address' => $request->address,
			'tr_phone'   => $request->phone,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);

		if ($transactionId)
		{
			$tours = \Cart::content();
			foreach ($tours as $tour)
			{
				Order::insert([
					'or_transaction_id'	 => $transactionId,
					'or_tour_id'         => $tour->id,
					'or_qty'                => $tour->qty,
					'or_price'              => $tour->price,
					'or_sale'               => $tour->options->sale,
				]);
			}
		}

		// Sau khi xử lý xong bắt đầu xử lý online
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

		// tham so dau vao
		$inputData = array(
			"vnp_Version"    => "2.0.0",
			"vnp_TmnCode"    => $this->vnp_TmnCode,
			"vnp_Amount"     => $totalMoney * 100, // so tien thanh toan,
			"vnp_Command"    => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode"   => "VND",
			"vnp_IpAddr"     => $_SERVER['REMOTE_ADDR'], // IP
			"vnp_Locale"     => $request->language, // ngon ngu,
			"vnp_OrderInfo"  => $request->note, // noi dung thanh toan,
			"vnp_OrderType"  => $request->order_type,    // loai hinh thanh toan
			"vnp_ReturnUrl"  => $this->vnp_Returnurl,   // duong dan tra ve
			"vnp_TxnRef"     => $transactionId , // ma don hang,
		);

		if ($request->bank_code) {
			$inputData['vnp_BankCode'] = $request->bank_code;
		}
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . $key . "=" . $value;
			} else {
				$hashdata .= $key . "=" . $value;
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}


		$vnp_Url = $this->vnp_Url . "?" . $query;
		if ($this->vnp_HashSecret) {
			$vnpSecureHash = hash('sha256', $this->vnp_HashSecret . $hashdata);
			$vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
		}

		$returnData = array(
			'code' => '00',
			'message' => 'success',
			'data' => $vnp_Url
		);

		return redirect()->to($returnData['data']) ;
	}

	public function getInvoice($id)
	{
		$transaction = Transaction::find($id);
		$orders = Order::with('tour')
			->where('or_transaction_id',$id)->get();

		return view('shopping.invoice',compact('transaction','orders'));
	}

}


//Ngân hàng: NCB
//Số thẻ: 9704198526191432198
//Tên chủ thẻ:NGUYEN VAN A
//Ngày phát hành:07/15
//Mật khẩu OTP:123456

//http://laravel56.abc/gio-hang/thanh-toan-pay?vnp_Amount=6500000&vnp_BankCode=NCB&vnp_BankTranNo=20190519170832&vnp_CardType=ATM&vnp_OrderInfo=ok&vnp_PayDate=20190519171230&vnp_ResponseCode=00&vnp_TmnCode=0B7MQPMF&vnp_TransactionNo=13144574&vnp_TxnRef=19&vnp_SecureHashType=SHA256&vnp_SecureHash=a5316a614b22af756889d21d4d382f0fa124e40b6df08d4f214892dceb799f55

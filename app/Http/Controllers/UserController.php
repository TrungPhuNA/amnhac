<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPassword;
use App\Models\tour;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends FrontendController
{
    /**
     * show tong quan user
     */
    public function index()
    {
        $transactions     = Transaction::where('tr_user_id', get_data_user('web'));
        $listTransactions = $transactions;

        $transactions         = $transactions->addSelect('id', 'tr_total', 'tr_address', 'tr_phone', 'created_at', 'tr_status')->paginate(10);
        $totalTransaction     = $listTransactions->select('id')->count();
        $totalTransactionDone = $listTransactions->where('tr_status', Transaction::STATUS_DONE)
            ->select('id')
            ->count();

        $viewData = [
            'totalTransaction'     => $totalTransaction,
            'totalTransactionDone' => $totalTransactionDone,
            'transactions'         => $transactions
        ];

        return view('user.index', $viewData);
    }

    public function updateInfo()
    {
        $user = User::find(get_data_user('web'));
        return view('user.info', compact('user'));
    }

    /**
     * luu thong tin
     */
    public function saveUpdateInfo(Request $request)
    {
        User::where('id', get_data_user('web'))
            ->update($request->except('_token'));

        return redirect()->back()->with('success', 'Cập nhật thông tin thành công');
    }

    public function updatePassword()
    {
        return view('user.password');
    }

    public function saveUpdatePassword(RequestPassword $requestPassword)
    {
        if (Hash::check($requestPassword->password_old, get_data_user('web', 'password'))) {
            $user           = User::find(get_data_user('web'));
            $user->password = bcrypt($requestPassword->password);
            $user->save();

            return redirect()->back()->with('success', 'Cập nhật thành công');
        }

        return redirect()->back()->with('danger', 'Mật khẩu cũ không đúng');
    }

    public function gettourPay()
    {
        $tours = tour::orderBy('pro_pay', 'DESC')->limit(10)->get();
        return view('user.tour', compact('tours'));
    }

    public function gettourWishlist()
    {
        return view('user.tour_care');
    }

    public function getTransaction()
    {
        $transactions = Transaction::with('user')
            ->where('tr_user_id', get_data_user('web'))
            ->orderByDesc('id')->paginate(10);

        $viewData     = [
            'transactions' => $transactions
        ];

        return view('user.transaction_history', $viewData);
    }

    public function deleteItemTransaction(Request $request, $id)
	{
		$transaction = Transaction::find($id);
		if ($transaction && $transaction->tr_status != 1) {
			\DB::table('orders')->where('or_transaction_id', $id)->delete();
			$transaction->delete();
		}

		return redirect()->back()->with('success', 'Huỷ bỏ vé thành công');
	}
}

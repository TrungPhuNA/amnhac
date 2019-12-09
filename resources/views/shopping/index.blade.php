@extends('layouts.master')
@section('content')
    <div class="our-tour-area new-tour">
        <div class="container">
            <div class="area-title">
                <h2 style="margin-top: 20px">Giỏ hàng của bạn</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach($tours as  $key => $tour)

                            <tr>
                                <td>#{{ $i }}</td>
                                <td>
                                    <p><a href="">{{ $tour->name }}</a></p>
                                </td>
                                <td>
                                    <img style="width: 80px;height: 60px" src="{{ pare_url_file($tour->options->avatar) }}" alt="">
                                </td>
                                <td>{{ number_format($tour->price,0,',','.') }}đ</td>
                                <td>
                                    <form action="{{ route('updateShoppingCart',$tour->rowId) }}" method="GET" style="display: flex;">
                                        <input type="number" min="1" max="10" class="form-control" style="width: 70px;margin-right: 5px" value="{{ $tour->qty }}" name="qty">
                                        <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-pencil"></i> Update</button>
                                    </form>
                                </td>
                                <td>{{ number_format($tour->qty * $tour->price,0,',','.') }} đ</td>
                                <td>

                                    <a href="{{ route('delete.shopping.cart',$key) }}"><i class="fa fa-trash-o"></i> Delete</a>
                                </td>
                            </tr>
                        <?php $i ++  ?>
                    @endforeach
                </tbody>
            </table>
            <h5 class="pull-right">Tổng tiền cần thanh toán {{ \Cart::instance('cart')->subtotal() }} <a href="{{ route('get.form.pay') }}" class="btn-success btn">Thanh toán</a></h5>

        </div>
    </div>
@stop
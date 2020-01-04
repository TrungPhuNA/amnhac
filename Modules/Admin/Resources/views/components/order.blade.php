@if ($orders)
    <table class="table">
        <thead>
        <tr>
            <th>STT</th>
            <th style="width: 30%">Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
		<?php $i = 1 ?>
        @foreach($orders as  $key => $order)
            <tr>
                <td>#{{ $i }}</td>
                <td><a href="{{ route('get.detail.tour',[str_slug($order->tour->t_title),$order->or_tour_id]) }}" target="_blank">{{ isset($order->tour->t_title) ? $order->tour->t_title : '' }}</a></td>
                <td>
                    <img style="width: 80px;height: 60px" src="{{ isset($order->tour->t_avatar) ? pare_url_file($order->tour->t_avatar) : ''}}" alt="">
                </td>
                <td>{{ number_format($order->or_price,0,',','.') }}đ x {{ $order->or_qty }}</td>
                <td>{{ number_format($order->or_price * $order->or_qty,0,',','.') }} đ</td>
                <td>
                    <a href=""><i class="fa fa-trash-o"></i> Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

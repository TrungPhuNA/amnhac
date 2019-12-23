@extends('layouts.master')
@section('content')
    <div class="container">
        <h1>Thông tin vé bạn đã đặt nhưng chưa xác nhận</h1>
        <table class="table table-hover">
            <tr>
                <td>STT</td>
                <td>Tên Tour</td>
                <td>Số Vé</td>
                <td>Số Tiền</td>
                <td>Thành tiền</td>
                <td>Thao tác</td>
            </tr>
            @foreach($tours as $key => $tour)
                <tr>
                    <th>{{ ($key ++) }}</th>
                    <th>{{ $tour->name }}</th>
                    <th>{{ $tour->qty }}</th>
                    <th>{{ number_format($tour->price,0,',','.') }} VNĐ</th>
                    <th>{{ number_format($tour->price * $tour->qty,0,',','.') }} VNĐ</th>
                    <th>
                        <a href=""><i class="fa fa-trash-o"></i></a>
                    </th>
                </tr>
            @endforeach
        </table>
        <h1>Thông tin xác nhận</h1>
        <form action="" style="margin-bottom: 100px" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" placeholder="Enter email" name="name" value="{{ get_data_user('web','name') }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ get_data_user('web','email') }}">
            </div>
            <div class="form-group">
                <label for="email">Phone:</label>
                <input type="number" class="form-control" placeholder="Enter email" name="phone" value="{{ get_data_user('web','phone') }}">
            </div>
            <div class="form-group">
                <label for="email">Address: <span style="color: red">(*)</span></label>
                <input type="text" class="form-control" placeholder="Địa chỉ nhận vé" name="address" value="" required>
            </div>
            <button type="submit" style="border: 1px solid;" class="btn btn-default send">Xác nhận</button>
        </form>
    </div>
@stop
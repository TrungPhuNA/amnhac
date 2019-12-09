@extends('admin::layouts.master')
@section('content')
    <style>
        .rating .active { color: #ff9705 !important;}
    </style>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Tours</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline" action="" style="margin-bottom: 20px">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Tên tours ..." name="name" value="{{ \Request::get('name') }}">
                </div>

                <div class="form-group">
                    <select name="cate" id="" class="form-control">
                        <option value="">Danh mục</option>
                         @if (isset($categories))
                             @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ \Request::get('cate') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                             @endforeach
                         @endif
                    </select>
                </div>
                <button type="submit"  class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Quản lý tours <a href="{{ route('admin.get.create.tour') }}" class="pull-right"><span class="glyphicon glyphicon-ok"></span></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên tours</th>
                    <th>Category</th>
                    <th>Avatar</th>
                    <th>Trạng thái</th>
                    <th>Địa chỉ</th>
                    <th>Nổi bật</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                 @if (isset($tours))
                     @foreach($tours as $tour)
                         <tr>
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->t_title }}</td>
                            <td>{{ $tour->category->c_name }}</td>
                            <td>
                                <img src="{{ pare_url_file($tour->t_avatar) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
                            </td>
                            <td>{{ $tour->t_status }}</td>
                            <td>{{ $tour->t_address }}</td>
                            <td>
                              {{ $tour->t_hot }}
                            </td>


                             <td>
                                 <a class="btn_customer_action" href="{{ route('admin.get.edit.tour',$tour->id) }}"><i class="fas fa-pen" ></i> Cập nhật</a>
                                 <a class="btn_customer_action" href="{{ route('admin.get.delete.tour',$tour->id) }}"><i class="fas fa-trash-alt"></i> Xoá</a>
                             </td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        <div class="row">
            {!! $tours->links() !!}
        </div>
    </div>
@stop
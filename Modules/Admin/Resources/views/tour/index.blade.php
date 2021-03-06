@extends('admin::layouts.master')
@section('content')
    <style>
        .rating .active { color: #ff9705 !important;}
    </style>
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tours</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline" action="" style="margin-bottom: 20px">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="name tours ..." name="name" value="{{ \Request::get('name') }}">
                </div>

                <div class="form-group">
                    <select name="cate" id="" class="form-control">
                        <option value="">Category</option>
                         @if (isset($categories))
                             @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ \Request::get('cate') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                             @endforeach
                         @endif
                    </select>
                </div>
                <button type="submit"  class="btn btn-default"><span class="glyphicon glyphicon-search"></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Manage tours <a href="{{ route('admin.get.create.tour') }}" class="pull-right"><span class="glyphicon glyphicon-plus"></span></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Band</th>
                    <th>Avatar</th>
                    <th>Active</th>
                    <th>Address</th>
                    <th>Number of tickets</th>
                    <th>Price</th>
                    <th>Hot</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 @if (isset($tours))
                     @foreach($tours as $tour)
                         <tr>
                            <td>{{ $tour->id }}</td>
                            <td>{{ $tour->t_title }}</td>
                            <td>{{ $tour->category->c_name ?? "[N\A]" }}</td>
                            <td>{{ $tour->singerBand->name ?? "[N\A]" }}</td>
                            <td>
                                <img src="{{ pare_url_file($tour->t_avatar) }}" alt="" class="img img-responsive"
                                     style="width: 80px;height: 80px;">
                            </td>
                            <td>
                                <a href="" class="{{ $tour->getStatus($tour->t_status)['class'] }}">
                                    {{ $tour->getStatus($tour->t_status)['name'] }}
                                </a>
                            </td>
                            <td>{{ $tour->t_address }}</td>
                            <td>{{ $tour->t_count_ticket }}</td>
                            <td>{{ $tour->t_price }} đ</td>
                            <td>
                                <a href="" class="{{ $tour->getHot($tour->t_hot)['class'] }}">
                                    {{ $tour->getHot($tour->t_hot)['name'] }}
                                </a>
                            </td>


                             <td>
                                 <a class="btn_customer_action" href="{{ route('admin.get.edit.tour',$tour->id) }}"><i class="fas fa-pen" ></i> Update</a>
                                 <a class="btn_customer_action" href="{{ route('admin.get.delete.tour',$tour->id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
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
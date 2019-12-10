@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Danh mục</a></li>
            <li class="active">Danh sách nhóm nhạc và ca sĩ</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lý danh sách nhóm nhạc và ca sĩ <a href="{{ route('admin.get.create.singer-bands') }}" class="pull-right"><i class="glyphicon glyphicon-plus"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tên </th>
                    <th>Type</th>
                    <th>Tên thành viên</th>
                    <th>Avatar</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if ( isset($singerBands))
                    @foreach($singerBands as $singerBand)
                        <tr>
                            <td>{{ $singerBand->id }}</td>
                            <td>
                                {{ $singerBand->name }}
                            </td>
                            <td>
                                {{$singerBand->type == 0 ? 'Nhóm' : 'Ca sĩ' }}
                            </td>
                            <td>
                                {{$singerBand->name_member }}
                            </td>
                            <td>
                                <img src="{{ pare_url_file($singerBand->avatar) }}" alt="" class="img img-responsive" style="width: 80px;height: 80px;">
                            </td>
                            <td>{{ $singerBand->description }}</td>
                            <td>
                                <a href="{{ route('admin.get.edit.singer-bands', $singerBand->id) }}">Edit</a>
                                <a href="{{ route('admin.get.delete.singer-bands', $singerBand->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop
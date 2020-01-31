@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Menu</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Article <a href="{{ route('admin.get.create.menu') }}" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Menu</th>
                    <th>Slug</th>
                    <th>ACtion</th>
                </tr>
            </thead>
            <tbody>
                @if ( isset($menus))
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{ $menu->id }}</td>
                            <td>{{ $menu->m_name }}</td>
                            <td>{{ $menu->m_slug }}</td>
                            <td>
                                <a href="{{ route('admin.get.edit.menu',$menu->id) }}">Edit</a>
                                <a href="{{ route('admin.get.delete.menu',$menu->id) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop
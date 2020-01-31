
@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Home</a></li>
            <li><a href="{{ route('admin.get.list.menu') }}" title="Danh mục">Menu</a></li>
            <li class="active">Update</li>
        </ol>
    </div>
    <div class="">
        @include ("admin::menu.form")
    </div>
@stop
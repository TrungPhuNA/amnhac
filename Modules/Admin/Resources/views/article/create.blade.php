
@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Home</a></li>
            <li><a href="{{ route('admin.get.list.article') }}" title="Danh mục">ARticle</a></li>
            <li class="active">Add</li>
        </ol>
    </div>
    <div class="">
        @include ("admin::article.form")
    </div>
@stop
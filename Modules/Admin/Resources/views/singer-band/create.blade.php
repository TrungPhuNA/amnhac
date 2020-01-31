
@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Home</a></li>
            <li><a href="{{ route('admin.get.list.singer-bands') }}" title="Danh mục">singer bands</a></li>
            <li class="active">Add</li>
        </ol>
    </div>
    <div class="">
        @include ("admin::singer-band.form")
    </div>
@stop
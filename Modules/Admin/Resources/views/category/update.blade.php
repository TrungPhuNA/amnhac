
@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}">Home</a></li>
            <li><a href="{{ route('admin.get.list.category') }}" title="Category">Category</a></li>
            <li class="active">Update</li>
        </ol>
    </div>
    <div class="">
        @include ("admin::category.form")
    </div>
@stop
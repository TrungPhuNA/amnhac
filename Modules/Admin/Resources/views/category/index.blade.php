@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">List</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Category <a href="{{ route('admin.get.create.category') }}" class="pull-right"><i class="glyphicon glyphicon-plus"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Home</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ( isset($categories))
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                <?php $str = '' ;for($i = 0; $i < $category->level; $i ++){ echo $str; $str .= '---| '; }?>
                                {{ $category->c_name }}
                            </td>
                            <td>
                                <a href="{{ route('admin.get.action.category',['home',$category->id]) }}"
                                class="label {{ $category->getHome($category->c_home)['class'] }}">
                                    {{ $category->getHome($category->c_home)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.get.action.category',['active',$category->id]) }}"
                                class="label {{ $category->getStatus($category->c_active)['class'] }}">
                                    {{ $category->getStatus($category->c_active)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('admin.get.edit.category',$category->id) }}">Edit</a>
                                <a href="{{ route('admin.get.action.category',['delete',$category->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop
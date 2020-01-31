@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>User</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
                 @if (isset($users))
                     @foreach($users as $user)
                         <tr>
                             <td>{{ $user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->phone }}</td>
                             <td>
                                 <a href="{{ route('admin.get.delete.user', $user->id) }}">Delete</a>
                             </td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        <div class="row">
            {!! $users->links() !!}
        </div>
    </div>
@stop
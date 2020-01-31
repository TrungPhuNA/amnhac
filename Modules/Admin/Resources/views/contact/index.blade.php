@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li class="active">List</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Contact</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Name</th>
                <th>Email</th>
                <th>Content</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if (isset($contacts))
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->c_title }}</td>
                        <td>{{ $contact->c_name }}</td>
                        <td>{{ $contact->c_email }}</td>
                        <td>{{ $contact->c_content }}</td>
                         <td>
                             @if ( $contact->c_status == 1)
                                 <span class="label label-success">Success</span>
                             @else
                                 <span class="label label-default">Process</span>
                             @endif
                         </td>
                        <td>
                            <a class="btn_customer_action" href="{{ route('admin.action.contact',['status',$contact->id]) }}"><i class="fas fa-pen" ></i> Update </a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@stop
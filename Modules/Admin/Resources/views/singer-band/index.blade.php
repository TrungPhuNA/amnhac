@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">singer bands</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Management list of groups and singers <a href="{{ route('admin.get.create.singer-bands') }}" class="pull-right"><i class="glyphicon glyphicon-plus"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Name </th>
                    <th>Type</th>
                    <th>Name user</th>
                    <th>Avatar</th>
                    <th>Description</th>
                    <th>Action</th>
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
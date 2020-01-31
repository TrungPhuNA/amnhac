@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Article</a></li>
            <li class="active">Index</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline" action="" style="margin-bottom: 20px">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Name ..." name="name" value="{{ \Request::get('name') }}">
                </div>

                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Article <a href="{{ route('admin.get.create.article') }}" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="20%">Name</th>
                    <th style="width: 100px">Avatar</th>
                    <th style="width: 300px">Description</th>
                    <th>Hot</th>
                    <th>Active</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                 @if (isset($articles))
                     @foreach($articles as $article)
                         <tr>
                             <td>{{ $article->id }}</td>
                             <td>
                                 {{ $article->a_name }}
                             </td>
                             <td>
                                 <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive" style="width: 100px;height: 80px;">
                             </td>
                             <td>{{ $article->a_description }}</td>
                             
                             <td>
                                 <a href="{{ route('admin.get.action.article',['hot',$article->id]) }}" class="label {{ $article->getHot($article->a_hot)['class'] }}">{{ $article->getHot($article->a_hot)['name'] }}</a>
                             </td>
                             <td>
                                 <a href="{{ route('admin.get.action.article',['active',$article->id]) }}" class="label {{ $article->getStatus($article->a_active)['class'] }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                             </td>
                             <td>
                                 {{ $article->created_at }}
                             </td>
                             <td>
                                 <a class="btn_customer_action" href="{{ route('admin.get.edit.article',$article->id) }}"><i class="fas fa-pen" ></i> Update</a>
                                 <a class="btn_customer_action" href="{{ route('admin.get.delete.article',$article->id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                             </td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        <div>
            {!! $articles->links() !!}
        </div>
    </div>
@stop
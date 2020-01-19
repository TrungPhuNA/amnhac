@extends('layouts.master')
@section('content')
    <div class="Lastestnews blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h1>Article</h1>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                @include('article._inc_articles',['articles' => $articles])
            </div>
        </div>
    </div>
@stop
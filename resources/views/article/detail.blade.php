@extends('layouts.master')
@section('content')
    <style>
        .article_content h2 { font-size: 1.4rem}
        .article_content h1 { font-size: 18px !important;line-height: 24px}
        .article_content  { font-family:  Roboto, sans-serif;}
        .main-contact-area { margin-top: 20px}
    </style>
    <div class="main-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="article_content" style="margin-bottom: 20px">
                        <h1>{{ $articleDetail->a_name }}</h1>
                        <p style="font-weight: 500;color: #333">{{ $articleDetail->a_description }}</p>
                        <div>
                            {!! $articleDetail->a_content !!}
                        </div>
                    </div>
                    <h4>Article suggest</h4>
                    @include('article._inc_articles',['articles' => $articles])
                </div>
            </div>
        </div>
    </div>
@stop
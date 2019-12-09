@extends('layouts.master')
@section('title_page',$catetour->c_name ?? "Tìm Kiếm")
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    @include('components.sidebar')
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">

                    <!-- store tours -->
                    <div class="row">
                        @if (isset($catetour))
                            <h1 style="font-size: 20px;margin-top: 10px">{{ $catetour->c_name }}</h1>
                        @endif
                        @foreach($tours as $tour)
                            <div class="col-md-4 col-xs-6">
                                @include('components.tour_item_v1',['tour' => $tour])
                            </div>
                        @endforeach
                    </div>
                    <!-- /store tours -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        {!! $tours->appends($query)->links() !!}
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@stop

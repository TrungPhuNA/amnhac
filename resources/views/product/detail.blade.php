@extends('layouts.master')
@section('title_page',$tourDetail->pro_name)
@section('content')
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">{{ $catetour->c_name }}</a></li>
                        <li class="active">{{ $tourDetail->pro_name }}</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- tour main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="tour-main-img">
                        @foreach($images as $image)
                        <div class="tour-preview">
                            <img src="{{ pare_url_file($image->pi_slug) }}" alt="" style="height: 360px">
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- /tour main img -->
                <!-- tour thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="tour-imgs">
                        @foreach($images as $image)
                            <div class="tour-preview">
                                <img src="{{ pare_url_file($image->pi_slug) }}" alt="" style="height: 120px">
                            </div>
                        @endforeach
                        {{----}}
                        {{--<div class="tour-preview">--}}
                            {{--<img src="{{ asset('img/tour01.png') }}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="tour-preview">--}}
                            {{--<img src="{{ asset('img/tour03.png') }}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="tour-preview">--}}
                            {{--<img src="{{ asset('img/tour06.png') }}" alt="">--}}
                        {{--</div>--}}
                        {{--<div class="tour-preview">--}}
                            {{--<img src="{{ asset('img/tour08.png') }}" alt="">--}}
                        {{--</div>--}}
                    </div>
                </div>
                <!-- /tour thumb imgs -->
                <!-- tour details -->
                <div class="col-md-5">
                    <div class="tour-details">
                        <h2 class="tour-name">{{ $tourDetail->pro_name }}</h2>
                        <div>
                            <div class="tour-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            {{--<a class="review-link" href="#">10 Review(s) | Add your review</a>--}}
                        </div>
                        <div>
                            <h3 class="tour-price">
                                @if ($tourDetail->pro_sale)
                                    {{ number_format($tourDetail->pro_price * (100 - $tourDetail->pro_sale) / 100,0,',','.') }} VNĐ
                                    <del class="tour-old-price">{{ number_format($tourDetail->pro_price,0,',','.') }}</del> VNĐ</h4>
                                @else
                                    {{ number_format($tourDetail->pro_price,0,',','.') }} VNĐ
                                @endif
                            </h3>
                            <span class="tour-available">{{ $tourDetail->supplier->s_name ?? "[N\A]" }}</span>
                        </div>
                        <p>{{ $tourDetail->pro_description }}</p>
                        <div class="add-to-cart">
                            <form action="{{ route('add.shopping.cart', $tourDetail->id) }}" method="GET">
                                <div class="qty-label">
                                    Qty
                                    <div class="input-number">
                                        <input type="number" value="1" name="qty">
                                    </div>
                                </div>
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm giỏ hàng</button>
                            </form>
                        </div>

                        <ul class="tour-links">
                            <li>Chia sẻ:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /tour details -->
                <!-- tour tab -->
                <div class="col-md-12">
                    <div id="tour-tab">
                        <!-- tour tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Mô tả sản phẩm</a></li>
                            {{--<li><a data-toggle="tab" href="#tab3">Đánh giá sản phẩm</a></li>--}}
                        </ul>
                        <!-- /tour tab nav -->
                        <!-- tour tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! $tourDetail->pro_content !!}
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->
                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Rating -->
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Rating -->
                                    <!-- Reviews -->
                                    <div class="col-md-6">
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name">John</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-body">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /Reviews -->
                                    <!-- Review Form -->
                                    <div class="col-md-3">
                                        <div id="review-form">
                                            <form class="review-form">
                                                <input class="input" type="text" placeholder="Your Name">
                                                <input class="input" type="email" placeholder="Your Email">
                                                <textarea class="input" placeholder="Your Review"></textarea>
                                                <div class="input-rating">
                                                    <span>Your Rating: </span>
                                                    <div class="stars">
                                                        <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                                                        <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                                                        <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                                                        <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                                                        <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                                                    </div>
                                                </div>
                                                <button class="primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Review Form -->
                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /tour tab content  -->
                    </div>
                </div>
                <!-- /tour tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- Section -->
    @if (isset($tourSuggest))
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Sản phẩm liên quan</h3>
                    </div>
                </div>
                @foreach($tourSuggest as $tour)
                <!-- tour -->
                    <div class="col-md-3 col-xs-6">
                    <div class="tour">
                        <div class="tour-img">
                            <img src="{{ pare_url_file($tour->pro_avatar) }}" alt="{{ $tour->pro_name }}" style="width: 263px;height: 263px">
                            <div class="tour-label">
                                @if ($tour->pro_sale)
                                    <span class="sale">-{{ $tour->pro_sale }}%</span>
                                @endif
                            </div>
                        </div>
                        <div class="tour-body">
                            <p class="tour-category">Category</p>
                            <h3 class="tour-name"><a href="#">{{ $tour->pro_name }}</a></h3>
                            <h4 class="tour-price">
                                @if ($tour->pro_sale)
                                    {{ number_format($tour->pro_price * (100 - $tour->pro_sale) / 100,0,',','.') }} VNĐ
                                    <del class="tour-old-price">{{ number_format($tour->pro_price,0,',','.') }}</del> VNĐ</h4>
                                @else
                                    {{ number_format($tour->pro_price,0,',','.') }} VNĐ
                                @endif
                            <div class="tour-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Thêm vào yêu thích</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">Thêm vào giỏ hàng</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Mua Nhanh</button>
                        </div>
                    </div>
                </div>
                <!-- /tour -->
                @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    @endif
    <!-- /Section -->
@stop

<!doctype html>
<html lang="en">
<head>
    <title>Vé hòa nhạc, vé hội thảo, vé sự kiện, vé thể thao ở Việt Nam | TicketBox</title>
    <meta name="description" content="TicketBox là hệ thống phân phối vé và quản lý sự kiện trực tuyến, giúp bạn bán và mua vé các sự kiện thật dễ dàng.">
    <meta name="keywords" content="Vé hòa nhạc, vé hội thảo, vé sự kiện, vé thể thao ở Việt Nam">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://static.ticketbox.vn/dist/tkbvn/css/event/event-detail-v2-min.css?v=4135" rel="stylesheet" />
</head>
<body id="page-top" data-spy="scroll">


<div id="snap-drawers" class="snap-drawers visible-xs">
    <div class="snap-drawer snap-drawer-right">
        <div class="menu-containter relative w-100 h-100 table margin-bottom-0">
            <div class="menu-header table-row">
                <!-- if not logedin -->
                <div class="sign-block padding-5 text-center">
                    <div class="sign-tkb">
                        <div class="table valign-middle uppercase font-085">
                            <div class="signin-tkb table-cell w-50">
                                <a data-toggle="modal" data-target="[modal='signin-modal']">Đăng nhập</a>
                            </div>
                            <div class="signup-tkb table-cell">
                                <a data-toggle="modal" data-target="[modal='signup-modal']" data-dismiss="modal">Đăng ký</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-row">
                <div class="menu-body h-100">
                    <ul class="padding-left-0">
                        <li>
                            <a href="/events">
                                <span class="ello-th menu-icon"></span> <span class="menu-name">Khám phá</span>
                            </a>
                        </li>
                        <li>
                            <a href="/help-center" title="">
                                <span class="ello-help-1 menu-icon"></span> <span class="menu-name">Giải đáp thắc mắc</span>
                            </a>
                        </li>
                        <li>
                            <a href="/contact">
                                <span class="ello-phone menu-icon"></span> <span class="menu-name">Liên hệ hợp tác</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content" class="snap-content box-shadow">
    <div class="relative">
        @include('components.nav')
        <section class="banner bg-white margin-bottom-20 border-bottom-grey-dark">

            <!-- <img src="https://az810747.vo.msecnd.net/eventcover/2016/06/27/6C68F2.jpg?w=1040&maxheight=400&mode=crop&anchor=topcenter"> -->
            <!-- <img class="cover-photo" src="https://static.ticketbox.vn/Upload/eventcover/2019/11/22/F70127.jpg"> -->

            <div class="cover-photo" style="height: 553.846px; background-image: url(&quot;https://static.ticketbox.vn/Upload/eventcover/2019/11/22/F70127.jpg&quot;);">
            </div>
            <div class="container">
                <div class="row">
                    <!-- event's info summary -->
                    <div class="event-info">
                        <div class="event-name text-center">
                            <div class="col-sm-7 col-md-8">
                                <div class="calendar-image single-border mobile-invisible padding-left-0 padding-right-0 text-bold">
                                    <p class="month">Tháng 12</p>
                                    <p class="date">07</p>
                                    <p class="day">Thứ 7</p>
                                </div>

                                <div class="event-name-content padding-left-0 padding-right-0">
                                    <div class="col-sm-12">
                                        <h1 class="title grey-dark-color">{{ $tourDetail->t_title }}</h1>
                                        <!-- START Mobile Display Only
                                        <p class="grey-color desktop-invisible">Thứ 7, 07 Th&#225;ng 12 2019</p>
                                        END Mobile Display Only -->
                                    </div>
                                    <!-- START Mobile Display Only-->
                                    <div class="button-gr btn-count col-xs-12 col-sm-12 visible-xs">
                                        <div id="shareBtn3" sharesocial="fbShare" class="col-xs-6 btn-wr">
                                            <a class="btn-first fshare-button border-grey" target="blank"><i class="ello-facebook-squared"></i>Chia sẻ</a>
                                        </div>

                                        <div class="dropdown col-xs-6 btn-wr ">
                                            <a class="btn-last add-calendar-button border-grey dropdown-toggle " data-toggle="dropdown"><i class="demo-icon icon-calendar-plus-o"></i>Thêm lịch</a>

                                            <ul class="dropdown-menu calendar-dropdown">
                                                <li><a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=SGO48+Koisuru+Xmas+Party&amp;dates=20191207T090000Z/20191207T140000Z&amp;details=&amp;location=Nh%c3%a0+h%c3%a1t+Qu%c3%a2n+%c4%90%e1%bb%99i%2c+140+C%e1%bb%99ng+H%c3%b2a%2c+Ph%c6%b0%e1%bb%9dng+4%2c+Qu%e1%ba%adn+T%c3%a2n+B%c3%acnh%2c+Th%c3%a0nh+Ph%e1%bb%91+H%e1%bb%93+Ch%c3%ad+Minh&amp;trp=false&amp;sprop=TicketBox&amp;sprop=name:ticketbox.vn"><span class="ello-google-calendar grey-bright-color"></span>Google Calendar</a></li>
                                                <li><a href="/event/ical/77908"><span class="ello-outlook grey-bright-color"></span>Outlook Calendar</a></li>
                                                <li><a href="/event/ical/77908"><span class="ello-ical grey-bright-color"></span>iCal</a></li>
                                            </ul>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- END Mobile Display Only -->
                                    <div class="cnt-left col-xs-12 col-sm-12 padding-left-0 padding-right-0">
                                        <div class="event-time col-sm-12 pd-hor-15">
                                            <div class="inline-bl">
                                                <p class="grey-dark-color text-bold text-indent txt-16"><i class="ello-clock-2 icon text-bold grey-bright-color"></i>Thứ 7, 07 Tháng 12 2019 (04:00 PM - 09:00 PM)
                                                </p>

                                            </div>

                                            <div class="clear"></div>
                                        </div>
                                        <div class="event-venue border-top-grey col-sm-12 pd-hor-15">

                                            <p class="grey-dark-color text-bold text-indent txt-16"><i class="ello-location-3 icon grey-bright-color"></i>Nhà hát Quân Đội</p>
                                            <p class="grey-white-color note">140 Cộng Hòa, Phường 4, Quận Tân Bình, Thành Phố Hồ Chí Minh</p>
                                        </div>

                                        <a href="#booking" class="event-price border-top-grey col-sm-12 pd-hor-15 desktop-invisible page-scroll" style="display:block;">
                                            <p class="text-indent"><i class="ello-ticket icon grey-bright-color"></i>Từ <strong>200.000 VND</strong></p>
                                            <i class="ello-right-open grey-bright-color"></i>
                                            <div class="clear"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="button-gr col-sm-5 col-md-4 pd-left-6 hidden-xs" banner-btn="banner-btn">
                                <!-- <div class=""> -->
                                <a buttontype="buy-ticket" data-style="zoom-out" class="ladda-button text-center white-color button-lg col-sm-12 table-cell ver-middle btn-booking" target="blank"><span class="ladda-label">Mua vé ngay</span><span class="ladda-spinner"></span></a>

                                <!-- </div> -->
                                <div class="col-sm-12 padding-left-0 padding-right-0 btn-count">
                                    <div id="shareBtn" sharesocial="fbShare" class="col-sm-6 btn-wr">
                                        <a class="btn-first fshare-button border-grey" target="blank"><i class="ello-facebook-squared"></i>Chia sẻ</a>
                                    </div>
                                    <div class="dropdown col-sm-6 btn-wr ">
                                        <a class="btn-last add-calendar-button border-grey dropdown-toggle " data-toggle="dropdown"><i class="demo-icon icon-calendar-plus-o"></i>Thêm lịch</a>

                                        <ul class="dropdown-menu calendar-dropdown">
                                            <li><a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=SGO48+Koisuru+Xmas+Party&amp;dates=20191207T090000Z/20191207T140000Z&amp;details=&amp;location=Nh%c3%a0+h%c3%a1t+Qu%c3%a2n+%c4%90%e1%bb%99i%2c+140+C%e1%bb%99ng+H%c3%b2a%2c+Ph%c6%b0%e1%bb%9dng+4%2c+Qu%e1%ba%adn+T%c3%a2n+B%c3%acnh%2c+Th%c3%a0nh+Ph%e1%bb%91+H%e1%bb%93+Ch%c3%ad+Minh&amp;trp=false&amp;sprop=TicketBox&amp;sprop=name:ticketbox.vn"><span class="ello-google-calendar grey-bright-color"></span>Google Calendar</a></li>
                                            <li><a href="/event/ical/77908"><span class="ello-outlook grey-bright-color"></span>Outlook Calendar</a></li>
                                            <li><a href="/event/ical/77908"><span class="ello-ical grey-bright-color"></span>iCal</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- #Mobile Display Only-->
                <div class="col-xs-12 fixed desktop-invisible bg-white border-top-grey booking-bl padding-left-0 padding-right-0">
                    <div class="col-xs-4 table-cell price-box ver-middle">
                        <a href="#booking" class="page-scroll" target="blank">Từ <span class="text-bold">200.000 VND</span></a>
                    </div>
                    <div class="col-xs-8 table-cell book-box text-center ver-middle">
                        <a buttontype="buy-ticket" data-style="zoom-out" class="ladda-button white-color button-lg btn-booking" target="blank"><span class="ladda-label">Mua vé ngay</span><span class="ladda-spinner"></span></a>
                    </div>
                </div>
                <!-- #Mobile Display Only-->
                <div class="clearfix"></div>
            </div>

            <!-- More Showing Time-->
            <div id="demo" class="bootstrap content">
                <section id="examples">
                    <!-- Modal -->
                    <div class="modal fade show-time" id="showTime" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h4 class="modal-title">Chọn thời gian diễn</h4>
                                    <span class="ello-cancel-2 close-show-time hidden-xs" data-dismiss="modal"></span>
                                </div>
                                <div class="modal-body mCustomScrollbar pd-0 _mCS_1 mCS_no_scrollbar" data-mcs-theme="dark"><div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">

                                            <div class="clearfix"></div>
                                        </div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 0px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                                <a class="close-show-time visible-xs" data-dismiss="modal">Đóng</a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Modal addCalendar -->
            <div id="addCalendar" class="modal fade add-calendar" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body pd-0">
                            <a href="/event/ical/77908" class="item border-top-grey col-xs-12 pd-hor-15">
                                <div class="table-cell text-center col-sm-7 col-xs-7 padding-right-0 padding-left-0">
                                    <p class="margin-bottom-0"><i class="ello-ical mg-5"></i>iCalendar</p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=SGO48+Koisuru+Xmas+Party&amp;dates=20191207T090000Z/20191207T140000Z&amp;details=&amp;location=Nh%c3%a0+h%c3%a1t+Qu%c3%a2n+%c4%90%e1%bb%99i%2c+140+C%e1%bb%99ng+H%c3%b2a%2c+Ph%c6%b0%e1%bb%9dng+4%2c+Qu%e1%ba%adn+T%c3%a2n+B%c3%acnh%2c+Th%c3%a0nh+Ph%e1%bb%91+H%e1%bb%93+Ch%c3%ad+Minh&amp;trp=false&amp;sprop=TicketBox&amp;sprop=name:ticketbox.vn" class="item border-top-grey col-xs-12 pd-hor-15">
                                <div class="table-cell text-center col-sm-7 col-xs-7 padding-right-0 padding-left-0">
                                    <p class="margin-bottom-0"><i class="ello-google-calendar mg-5"></i>GOOGLE Calendar</p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <a href="/event/ical/77908" class="item border-top-grey col-xs-12 pd-hor-15">
                                <div class="table-cell text-center col-sm-7 col-xs-7 padding-right-0 padding-left-0">
                                    <p class="margin-bottom-0"><i class="ello-outlook mg-5"></i>Outlook Calendar</p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                        <a class="modal-footer bg-grey border-top-grey" style="display:block;">
                            <div data-dismiss="modal">Đóng</div>
                        </a>
                    </div>

                </div>
            </div>

        </section>
        <section class="mainContainer">
            <nav class="navbar navbar-default hidden-xs scroll">
                <div class="container">
                    <div class="collapse navbar-collapse pl-pr-0" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="page-scroll text-center" href=".intro" title="Giới thiệu">Giới thiệu</a>
                            </li>
                            <li>
                                <a class="page-scroll text-center" href=".booking" title="Thông tin vé">Thông tin vé</a>
                            </li>
                            <li>
                                <a class="page-scroll text-center" href=".organizer" title="Nhà tổ chức">Nhà tổ chức</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
            <div class="container left-bl pl-pr-0" style="min-height: 328px;">
                <div class="col-sm-12 col-md-8 pl-pr-0 specialBox">
                    <section class="intro" id="intro">
                        <!--Use id for adding "active" class since it's unique-->
                        <!-- <div class=""> -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 pl-pr-0">
                                <h3 class="title">Giới thiệu</h3>
                                <div class="col-xs-12 box detail-box" style="max-height: 236px; height: 236px;">
                                    <div class="really-height">
                                        {!! $tourDetail->t_content !!}
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <p class="read-more arrow--sec blur-white">
                                    <a href="javascript:void(0)" class="btn" btntype="readmore"><span class="arrow ello-down-open grey-bright-color"></span></a>
                                </p>
                                <!-- <p class="read-more arrow--sec visible-xs">
                                    <a href="javascript:void(0)" class="btn" btntype="readmore"><span class="arrow ello-down-open grey-bright-color"></span></a>
                                </p> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- </div> -->
                    </section>
                    <section class="ticket booking" id="booking">
                        <!-- <div class=""> -->
                        <div class="row margin-bottom-0">
                            <div class="col-sm-12 pl-pr-0">
                                <h3 class="title">Thông tin vé</h3>
                                <div class="panel-group margin-bottom-0" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="SVIP" style="overflow-wrap: break-word;">
                                                            Giá vé
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>{{ number_format($tourDetail->t_price ,0,',','.')}} VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </section>
                    <section class="organizer" id="organizer">

                        <div class="row margin-bottom-0">
                            <div class="col-sm-12 pl-pr-0">
                                <h3 class="title">Show diễn</h3>
                                <div class="col-xs-12">
                                    <div class="really-height">
                                        <div class="org-img">
                                            <img class="" src="https://static.ticketbox.vn/Upload/organizer.png">
                                        </div>
                                        <div class="org-detail">
                                            <h2 class="text-uppercase title--sub">Công Ty cổ phần YAG ENTERTAINMENT</h2>
                                            <p>
                                                Đơn vị tổ chức
                                            </p>
                                            <div class="cell2">
                                                <div class="btn-contact-organizer" data-toggle="modal" data-target="#pop-up-message">
                                                <span contact-button="contact-organizer">
                                                    <i class="ello-mail-alt"></i>
                                                    Liên hệ nhà tổ chức
                                                </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <!-- <p class="read-more arrow--sec visible-xs"><a href="javascript:void(0)" class="btn" btntype="organizer"><span class="arrow ello-down-open grey-bright-color"></span></a></p> -->
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!-- <div class="container-fluid relate-post parallax">
                            <div class="button-gr">
                                <h2>Kh&#225;m ph&#225; nhiều sự kiện kh&#225;c</h2>
                                <a class="btn btn-default font-bold" href="/past-events" target="blank">Xem sự kiện kh&#225;c</a>
                            </div>
                        </div> -->

                        <!--/popup-->

                        <div id="pop-up-message" class="modal fade dl-one" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content rounded color-6">
                                    <button type="button" class="close dl-close hidden-xs" data-dismiss="modal"><span class="ello-cancel-2"></span></button>
                                    <div class="modal-header dl-one-header">
                                        <div class="modal-hl">
                                            <h4 class="modal-title font-bold">Liên hệ nhà tổ chức</h4>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <div class="dl-row mover-up-el">
                                            <div class="cs1-inp-group dl-input-groups">
                                                <div class="dl-input-row select-custom input-group">
                                                    <span class="input-group-addon"><span class="ello-th-list color-c"></span></span>
                                                    <select class="form-control padding-left-0" placeholder="Chọn chủ đề" required="required">
                                                        <option default="" value="">Chọn chủ đề</option>
                                                        <option value="1">Thông tin vé</option>
                                                        <option value="2">Hợp tác kinh doanh</option>
                                                        <option value="3">Nội dung sự kiện</option>
                                                        <option value="4">Chương trình khuyến mãi</option>
                                                        <option value="5">Soát vé</option>
                                                        <option value="6">Câu hỏi chung</option>
                                                    </select>
                                                    <span class="caret"></span>
                                                </div>
                                                <div class="dl-input-row input-group">
                                                    <span class="input-group-addon"><span class="ello-mail-alt color-c"></span></span>
                                                    <input class="form-control padding-left-0" type="email" placeholder="Email của bạn" name="email" required="required">
                                                </div>
                                                <div class="dl-input-row input-group content-area">
                                                    <span class="input-group-addon"><span class="ello-doc-text-inv color-c"></span></span>
                                                    <textarea class="form-control padding-left-0" style="height: 120px" placeholder="Lời nhắn của bạn" required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer padding-top-0">
                                        <button class="send-message ladda-button btn tkb-bg-color rounded w-100 font-bold" id="send-message" data-error-mess="Vui lòng chọn loại câu hỏi, điền nội dung và kiểm tra địa chỉ email." data-style="zoom-out" data-eventid="77908">Gửi lời nhắn</button>
                                    </div>
                                </div>
                                <div class="visible-xs clearfix underline text-center padding-20 color-white close-txt" data-dismiss="modal">Đóng</div>

                            </div>
                        </div>





                    </section>

                    <div class="breakpoint"></div>
                </div>

                <div class="col-sm-4 pd-left-6 padding-right-0 info-box-wr">
                    <div class="col-sm-12 pl-pr-0 hidden-xs hidden-sm">
                        <div class="event-name-content animated" info-box="info-box" style="position: initial;">
                            <div class="bg-white event-name-wrap">
                                <h2 class="title">{{ $tourDetail->t_title }}</h2>
                                <div class="s1">
                                    <i class="ello-clock-2 icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span class="block">{{ $tourDetail->t_time_start }}</span>
                                    </div>
                                </div>
                                <div class="s2">
                                    <i class="ello-location-3 icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span>Địa chỉ</span>
                                        <p class="grey-white-color">{{ $tourDetail->t_address }}</p>
                                    </div>
                                </div>
                                <a href=".booking" class="border-top-grey page-scroll pd-15 block">
                                    <i class="ello-ticket icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span>Từ <strong>{{ number_format($tourDetail->t_price ,0,',','.')}} VND</strong></span>
                                        <i class="ello-right-open grey-bright-color"></i>
                                    </div>
                                </a>
                                <a data-style="zoom-out" class="ladda-button text-center white-color text-bold table-cell button-lg ver-middle btn-booking" buttontype="buy-ticket"><span class="ladda-label">Mua vé ngay</span><span class="ladda-spinner"></span></a>
                            </div>
                            <div class="btn-count">
                                <div id="shareBtn2" sharesocial="fbShare" class="col-sm-6 btn-wr">
                                    <a class="btn-first fshare-button border-grey"><i class="ello-facebook-squared"></i>Chia sẻ</a>
                                </div>
                                <div class="dropdown col-sm-6 btn-wr ">
                                    <a class="btn-last add-calendar-button border-grey dropdown-toggle " data-toggle="dropdown"><i class="demo-icon icon-calendar-plus-o"></i>Thêm lịch</a>

                                    <ul class="dropdown-menu calendar-dropdown">
                                        <li><a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=SGO48+Koisuru+Xmas+Party&amp;dates=20191207T090000Z/20191207T140000Z&amp;details=&amp;location=Nh%c3%a0+h%c3%a1t+Qu%c3%a2n+%c4%90%e1%bb%99i%2c+140+C%e1%bb%99ng+H%c3%b2a%2c+Ph%c6%b0%e1%bb%9dng+4%2c+Qu%e1%ba%adn+T%c3%a2n+B%c3%acnh%2c+Th%c3%a0nh+Ph%e1%bb%91+H%e1%bb%93+Ch%c3%ad+Minh&amp;trp=false&amp;sprop=TicketBox&amp;sprop=name:ticketbox.vn"><span class="ello-google-calendar"></span>Google Calendar</a></li>
                                        <li><a href="/event/ical/77908"><span class="ello-outlook"></span>Outlook Calendar</a></li>
                                        <li><a href="/event/ical/77908"><span class="ello-ical"></span>iCal</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- <div class="button-gr">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="https://www.facebook.com/ticketbox.vn" class="fshare-button text-center bg-white" target="blank"><i class="ello-facebook"></i>Share</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a data-toggle="modal" data-target="#addCalendar" class="add-calendar-button text-center bg-white">Thêm vào lịch</a>
                                    </div>
                                </div>
                            </div>     -->
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </section>
        @include('components.footer')
    </div>
</div>
@include('components.list_form')
{{--<script src="https://static.ticketbox.vn/dist/tkbvn/js/shared/layoutv2-libs.js?v2"></script>--}}
<script src="{{ asset('js/home.js') }}"></script>
<style>
    .sp-content {
        display: flex;
        flex-flow: column;
        justify-content: center;
        width: auto;
    }
    .sp-dialog img {
        width: 100%;
        max-width: 600px;
    }
    @media  (min-width: 992px) {
        .sp-content {
            flex-flow: row;
        }
    }
</style>
<script type="text/javascript" src="https://static.ticketbox.vn/dist/tkbvn/js/event/event-details-v5.min.js?v=4135"></script>

<script>
    $(document).ready(function () {

        $(".close-btn").click(function () {
            $(".zalora-link").css("display", "none");
            $(".zalora-link-lg").attr("href", "javascript:void(0)");
        });
    });
</script>

</body>
</body>
</html>
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
                                        <p style="text-align:justify"><span style="font-size:14px"><strong>Koisuru Xmas Party</strong><span style="background-color:transparent; color:rgb(0, 0, 0)"> là chương trình Giáng sinh yêu thương của nhóm nhạc đông thành viên nhất Việt Nam SGO48 diễn ra vào ngày </span><strong>7/12/2019 tại Nhà Hát Quân Đội</strong><span style="background-color:transparent; color:rgb(0, 0, 0)">. Chương trình đánh dấu chặng đường một năm hoạt động nghệ thuật của nhóm SGO48, đồng thời tri ân khán giả những người đã theo dõi và đồng hành cùng nhóm suốt thời gian qua. Nội dung chương trình bao gồm:</span></span></p>

                                        <ul>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>16h đến 19h - Thời gian đón khách: </strong><span style="background-color:transparent">Trong thời gian này, khách có thể tham quan không gian trung bày “SGO Gallery”, chụp ảnh trong không khí lễ hội ngày giáng sinh, tham quan và mua các vật phẩm của nhóm (đặc biệt là những vật phẩm đặc biệt sẽ ra mắt lần đầu tiên tại sự kiện). Ngoài ra, đối với hạng vé “Special” hoặc “Extra set Koisuru”, bạn còn được sử dụng teabreak ở khu vực riêng và được đột nhập hậu trường để trò chuyện và chụp ảnh cùng các cô gái.</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>19h đến 21h - Bữa tiệc âm nhạc hứa hẹn đầy cảm xúc:</strong><span style="background-color:transparent"> Trong chương trình lần này, các cô gái sẽ trình diễn khoảng 10 ca khúc với nhiều bất ngờ. Đặc biệt, nhóm SGO48 cũng sẽ chính thức giới thiệu dàn “Senbatsu” của single 2 – đặc sản của nhà 48. Mặc dù nhóm có đến 27 thành viên nhưng ở mỗi single hay MV ra mắt thì chỉ có 16 idol được chọn. Đây là mô hình không chỉ đào tạo đơn thuần mà là nơi để các bạn cạnh tranh bằng chính thực lực và tài năng của mình. Khoảnh khắc từng thành viên được xướng tên bước ra vẫy chào người hâm mộ, đó chính là giây phút các cô gái được công nhận và được trao cơ hội để góp mặt trong single 2 lần này. Tiếp đó, 16 cô gái được chọn sẽ có màn ra mắt lần đầu tiên ca khúc mới chủ đề của Single 2 và MV cũng được tiết lộ trong buổi biểu diễn này. Đây là một chương trình không livestream, nên khán giả của chương trình sẽ là những người đầu tiên được xem MV cũng như xem phần trình diễn đầu tiên ca khúc mới này.</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>21h đến 22h – Sự kiện High-five:</strong><span style="background-color:transparent"> Mỗi vé tham dự chương trình sẽ được tặng kèm 1 vé high-five (đập tay) với các thành viên nhóm SGO48. Mỗi vé high-five là một lần đập tay, bạn có thể mua thêm vé high-five để sử dụng nhiều lần hơn.</span></span></p>
                                            </li>
                                        </ul>

                                        <p>&nbsp;</p>

                                        <p style="text-align:justify"><span style="font-size:14px"><strong>Các loại vé, thông tin từng loại vé</strong></span></p>

                                        <ul>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>Special</strong></span></p>

                                                <ul>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Giá vé: 8.000.000 đ/vé.</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Số lượng có hạn, chỉ có tổng cộng 11 vé ở vị trí trung tâm và gần sân khấu nhất.</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Bao gồm quyền lợi:</span></span></p>

                                                        <ul>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Tham quan tour hậu trường</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Sử dụng teabreak trong thời gian đón khách</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Chụp ảnh với thành viên yêu thích trong hậu trường</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">1 set 6 vật phẩm của SGO48:&nbsp;</span>Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút<span style="background-color:transparent"> có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">1 vé Highfive.</span></span></p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>SViIP</strong><span style="background-color:transparent">&nbsp;1.200.000 đ/vé (Bao gồm vé High-five)</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>VIP:</strong><span style="background-color:transparent"> 1.000.000 đ/vé (Bao gồm vé Hghi-five)&nbsp;</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>Fanzone:</strong><span style="background-color:transparent"> 800.000 đ/vé (Bao gồm vé High-five)</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>Standard A:</strong><span style="background-color:transparent"> 500.000 đ/vé (Bao gồm vé High-five)</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>Standard B (Tầng 2):</strong><span style="background-color:transparent"> 300.000 đ/vé (Bao gồm vé High-five)</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><strong>Standard C (Tầng 2):</strong><span style="background-color:transparent"> 200.000 đ/vé (Bao gồm vé High-five</span></span></p>
                                            </li>
                                        </ul>

                                        <p style="text-align:justify">[Mua Extra set tại&nbsp;https://ticketbox.vn/event/extra-set-sgo48-koisuru-xmas-party-77973]</p>

                                        <p style="text-align:justify"><span style="font-size:14px"><strong>Extra set:</strong></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">Nếu bạn không nhanh tay mua được vé “Special” nhưng vẫn muốn nhận được các quyền lợi đặc biệt như trên thì có thể mua thêm Extra Set với số lượng có hạn, như thông tin bên dưới:</span></span></p>

                                        <ul>
                                            <li>
                                                <p style="text-align:justify"><strong><span style="font-size:14px"><span style="background-color:transparent">Extra Set Koisuru: 8.000.000 đ/set</span></span></strong></p>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Số lượng có hạn: 4 set</span></span></p>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Bao gồm quyền lợi:</span></span></p>

                                                <ul>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Tham quan tour hậu trường</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Sử dụng teabreak trong thời gian đón khách</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Chụp ảnh với thành viên yêu thích trong hậu trường</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Được tặng 1 set 6 vật phẩm của SGO48:&nbsp;</span>Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút<span style="background-color:transparent"> có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">1 vé High-five</span></span></p>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <p style="text-align:justify"><strong><span style="font-size:14px"><span style="background-color:transparent">Set X-mas: 3.000.000 đ/vé</span></span></strong></p>

                                                <ul>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Số lượng có hạn: 10 set</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Quyền lợi:</span></span></p>

                                                        <ul>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Sử dụng teabreak trong thời gian đón khách</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Được tặng 1 set 6 vật phẩm SGO48:&nbsp;</span>Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút<span style="background-color:transparent"> có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)</span></span></p>
                                                            </li>
                                                            <li>
                                                                <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">1 vé highfive</span></span></p>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <p style="text-align:justify"><strong><span style="font-size:14px"><span style="background-color:transparent">Extra Set Party: 200.000 đ/set</span></span></strong></p>

                                                <ul>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Số lượng có hạn: 30 set</span></span></p>
                                                    </li>
                                                    <li>
                                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent">Quyền lợi:1 vé High-five</span></span></p>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <p>&nbsp;</p>

                                        <p style="text-align:justify"><span style="font-size:14px"><strong>Các lưu ý khác:</strong></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">- </span><span style="background-color:transparent; color:rgb(34, 34, 34)">Vé chỉ dành cho một (01) người. Vui lòng mang theo vé khi tham dự sự kiện.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Vui lòng ngồi đúng số ghế trên vé và làm theo hướng dẫn của nhân viên.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Vui lòng không đem theo máy ghi âm, máy quay phim hoặc chụp ảnh chuyên nghiệp và các vật dụng nguy hiểm, sắc nhọn vào “Bữa tiệc âm nhạc” và “Sự kiện High-five” (Từ 19h đến 22h). Nếu lỡ đem theo, bạn vui lòng gửi tại khu vực tủ giữ đồ cho khách với chi phí thuê tủ là 50.000 VNĐ/ tủ.&nbsp;</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Vé và hóa đơn sẽ không được cấp lại vì bất kỳ lý do gì bao gồm mất mát, trộm cắp, hư hỏng...</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Trẻ em hay bất cứ lứa tuổi nào đều phải có vé để tham gia sự kiện.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Tất cả chi phí di chuyển và chỗ ở sẽ do khách hàng chịu trách nhiệm. Trong trường hợp khách hàng không thể tham gia vào sự kiện vì những lý do không đáp ứng điều kiện theo quy định sẽ không được bồi thường.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Địa điểm không được trang bị thiết bị y tế đặc biệt. Đối với những người cần chăm sóc đặc biệt, vui lòng tự chăm sóc cá nhân.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(34, 34, 34)">- Vui lòng quản lý các đồ vật có giá trị của bạn. BTC sẽ không chịu trách nhiệm cho bất kỳ tai nạn hoặc trộm cắp nào xảy ra trong hoặc ngoài địa điểm.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">- Chỉ cho phép các vật dụng cầm tay nhỏ hơn 90cm (L/W /H). Những người có hành lý lớn không được phép đem vào trong sự kiện.&nbsp;</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">- Hoa và quà của người hâm mộ không được chấp nhận tại sự kiện.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">- Người dùng chất kích thích hoặc say xỉn sẽ bị từ chối vào sự kiện.</span></span></p>

                                        <p style="text-align:justify"><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">- Chỉ nhân viên và những trường hợp đặc biệt mới được phép đi vào khu vực cánh gà hoặc hậu trường của sân khấu.</span></span></p>

                                        <p>&nbsp;</p>

                                        <p style="text-align:right"><strong><span style="font-size:14px"><span style="background-color:transparent; color:rgb(0, 0, 0)">BAN TỔ CHỨC</span></span></strong></p>

                                        <p>&nbsp;</p>

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
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Special" style="overflow-wrap: break-word;">
                                                            Special
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>8.000.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            o	Số lượng có hạn, chỉ có tổng cộng 11 vé ở vị trí trung tâm và gần sân khấu nhất.<br>o	Bao gồm quyền lợi:<br>-	Tham quan tour hậu trường<br>-	Sử dụng teabreak trong thời gian đón khách<br>-	Chụp ảnh với thành viên yêu thích trong hậu trường<br>-	1 set 6 vật phẩm của SGO48: Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)<br>-	1 vé Highfive.;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="SVIP" style="overflow-wrap: break-word;">
                                                            SVIP
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>1.200.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            -Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="VIP" style="overflow-wrap: break-word;">
                                                            VIP
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>1.000.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            - Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Fanzone" style="overflow-wrap: break-word;">
                                                            Fanzone
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>800.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            -Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Standard A" style="overflow-wrap: break-word;">
                                                            Standard A
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>500.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            -Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Standard B" style="overflow-wrap: break-word;">
                                                            Standard B
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>300.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            -Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Standard C" style="overflow-wrap: break-word;">
                                                            Standard C
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>200.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            -Highfive ticket;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Extra Set Koisuru" style="overflow-wrap: break-word;">
                                                            Extra Set Koisuru
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>8.000.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            o	Số lượng có hạn: 4 set<br>o	Bao gồm quyền lợi:<br>	Tham quan tour hậu trường<br>	Sử dụng teabreak trong thời gian đón khách<br>	Chụp ảnh với thành viên yêu thích trong hậu trường<br>	Được tặng 1 set 6 vật phẩm của SGO48: Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)<br>	1 vé Highfive;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Extra Set X’mas" style="overflow-wrap: break-word;">
                                                            Extra Set X’mas
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>3.000.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            o	Số lượng có hạn: 10 set<br>o	Quyền lợi:<br>	Sử dụng teabreak trong thời gian đón khách<br>	Được tặng 1 set 6 vật phẩm SGO48: Bộ lịch để bàn 2020, áo mưa, ly sứ, 2 photoset mới, balo dây rút có chữ ký của thành viên yêu thích (vì vậy khi mua vé bạn vui lòng ghi chú thành viên yêu thích của mình để BTC tiện sắp xếp việc lấy chữ ký của thành viên đó lên tất cả các vật phẩm trong set nhé)<br>	1 vé highfive;

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <div class="row arrow--sec blur-white" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                                                    <div class="col-sm-7">
                                                        <span class="arrow ello-down-open grey-bright-color"></span>
                                                        <p class="tic__name" data-ot="Extra Set Party" style="overflow-wrap: break-word;">
                                                            Extra Set Party
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <span class="arrow ello-up-open visible-xs invisible grey-bright-color"></span>
                                                        <p class="tic__price">

                                                            <strong>200.000 VND</strong><br>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div tic="pic" class="col-sm-3 " style="display: none;">
                                                        <img class="tic__pic">
                                                    </div>
                                                    <div tic="detail" class="col-sm-12">
                                                        <p class="tic__des">

                                                            o	Số lượng có hạn: 20 set<br>o	Quyền lợi:1 vé High-five;

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
                                <h3 class="title">Nhà tổ chức</h3>
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
                                <h2 class="title">SGO48 Koisuru Xmas Party</h2>
                                <div class="s1">
                                    <i class="ello-clock-2 icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span class="block">04:00 PM - 09:00 PM</span>
                                    </div>
                                </div>
                                <div class="s2">
                                    <i class="ello-location-3 icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span>Nhà hát Quân Đội</span>
                                        <p class="grey-white-color">140 Cộng Hòa, Phường 4, Quận Tân Bình, Thành Phố Hồ Chí Minh</p>
                                    </div>
                                </div>
                                <a href=".booking" class="border-top-grey page-scroll pd-15 block">
                                    <i class="ello-ticket icon grey-bright-color"></i>
                                    <div class="ev-txt">
                                        <span>Từ <strong>200.000 VND</strong></span>
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
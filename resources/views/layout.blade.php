<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <title>Tiền số Offline.com nơi chia sẻ về đam mê marketing online</title>

    {{-- <!-- Fonts --> --}}
    {{--  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Poppins:wght@400;600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    {{--  <link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    {{--  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">  --}}


    <link href="{{ asset('public/css/style.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    {{--  <!---- start-smoth-scrolling---->  --}}
    <script type="text/javascript" src="{{ asset('public/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    {{-- <!--start-smoth-scrolling--> --}}

</head>

<body>
    {{--  <!--header-top-starts-->  --}}
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <style>
                    h3.logo {
                        font-size: 50px;
                        font-weight: bold;
                        font-family: Florence, cursive;
                        color: black;
                    }
                </style>
                {{--  <a href="{{ url('/') }}"><img style="width: 20%; height: 20%;" src="{{ asset('public/logo-blog.jpg') }}" alt="" /></a>  --}}
                <a href="{{ url('/') }}">
                    <h3 class="logo">WELCOME TO MY BLOG</h3>
                </a>
            </div>
        </div>
    </div>
    {{--  <!--header-top-end-->  --}}
    {{--  <!--start-header-->  --}}
    <div class="header">
        <div class="container">
            <div class="head">
                <div class="navigation">
                    <span class="menu"></span>
                    <ul class="navig">
                        <li><a style="font-weight: bold; font-size: 20px" href="{{ url('/') }}" class="active">Trang chủ</a></li>
                        @foreach ($category as $key => $cate)
                            <li><a style="font-weight: bold; font-size: 20px"
                                    href="{{ route('danh-muc.show', ['id' => $cate->id, 'slug' => Str::slug($cate->title)]) }}">{{ $cate->title }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="header-right">
                    <form action="{{ url('tim-kiem') }}" method="GET">
						@csrf
                        <div class="search-bar">
                            <input type="text" name="keywords" placeholder="Tìm kiếm...">
                            <input type="submit" value="" name="timkiem">
                        </div>
                    </form>
                    <ul>
                        {{--  <li><a href="#"><span class="fb"> </span></a></li>  --}}

                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    {{--  <!-- script-for-menu -->  --}}
    {{--  <!-- script-for-menu -->  --}}
    <script>
        $("span.menu").click(function() {
            $(" ul.navig").slideToggle("slow", function() {});
        });
    </script>
    {{--  <!-- script-for-menu -->  --}}

    {{-- <!--about-starts--> --}}
    @yield('content')
    {{-- <!--about-end--> --}}

    {{--  <!--slide-starts-->  --}}
    <div class="slide">
        <div class="container">
            <div class="fle-xsel">
                <ul id="flexiselDemo3">
                    <li>
                        <a href="https://blog.shopline.com.vn/seo-xu-huong-chien-dich-marketing-hien-nay/" target="_blank">
                            <div class="banner-1">
                                <img src="{{ asset('public/images/seo.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://bizfly.vn/techblog/content-marketing-la-gi.html" target="_blank">
                            <div class="banner-1">
                                <img src="{{ asset('public/images/Content-Marketing-1.png') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://vi.wikipedia.org/wiki/Google_Ads" target="_blank">
                            <div class="banner-1">
                                <img src="{{ asset('public/images/google-ads.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://skillking.fpt.edu.vn/tin-tuc/seo-youtube/" target="_blank">
                            <div class="banner-1">
                                <img src="{{ asset('public/images/youtube-seo.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.thegioididong.com/tin-tuc/7-web-kiem-tien-online-tai-nha-tot-nhat-2022-1408999" target="_blank">
                            <div class="banner-1">
                                <img style="height: 150px" src="{{ asset('public/images/kiem-tien-online.jpg') }}" class="img-responsive" alt="">
                            </div>
                        </a>
                    </li>

                </ul>

                <script type="text/javascript">
                    $(window).load(function() {

                        $("#flexiselDemo3").flexisel({
                            visibleItems: 5,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 2
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="{{ asset('public/js/jquery.flexisel.js') }}"></script>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    {{--  <!--slide-end-->  --}}
    {{--  <!--footer-starts-->  --}}
    <div class="footer">
        <div class="container">
            <div class="footer-text">
                <p>© 2022 My Blog. All Rights Reserved | Design by
                    <a style="color: blue; text-decoration: none" href="https://github.com/0xhtax0" target="_blank">Me</a></p>
            </div>
        </div>
    </div>
    {{--  <!--footer-end-->  --}}
</body>

</html>

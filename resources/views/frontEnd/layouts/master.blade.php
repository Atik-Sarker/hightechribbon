<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>High Tech ::@yield('title','Home')</title>
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/bootstrap.min.css">
    <!-- bootstrap css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/font-awesome.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/owl.carousel.css">
    <!--owl carousel css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/owl.theme.default.min.css">
    <!--owl carousel theme default css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/animate.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/meanmenu.min.css">
    <!--meanmenu css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/style.css">
    <!-- style css-->
    <link rel="stylesheet" href="{{asset('public/frontEnd/')}}/css/responsive.css">
    <!-- responsive css-->
</head>
<body>
    <header id="header">
        <div id="main-header" class="main-header hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        @foreach($logo as $key=>$value)
                        <div class="main-logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset($value->image)}}" alt="natural vantage">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <!--col-end-->
                    <div class="col-lg-8 col-md-7 col-sm-7">
                        <div class="main-menu">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about-us')}}">About</a></li>
                                <li><a class="anchor">Products</a>
                                    <ul class="sub-menu-parent">
                                        @foreach($category as $key=>$value)
                                       <li><a href="{{url('category/'.$value->name)}}">{{$value->name}}</a></li>
                                       @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{url('/contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--col end-->
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="head-call">
                            <i class="fa fa-phone">
                                <p>+881711114361</p>
                            </i>
                        </div>
                    </div>
                </div>
                <!--row end-->
            </div>
            <!--container end-->
        </div>
        <!--main-header end-->
        <!--mobile menu section start-->
        <section id="mobile-menu" class="hidden-sm hidden-md hidden-lg">
           <a href="index.html"><img src="{{asset('public/frontEnd/')}}/images/logo.png" alt=""></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <ul>
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/about-us')}}">About</a></li>
                                <li><a class="anchor">Products</a>
                                    <ul class="sub-menu-parent">
                                        @foreach($category as $key=>$value)
                                       <li><a href="{{url('category/'.$value->name)}}">{{$value->name}}</a></li>
                                       @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{url('/contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
            </div>
            <!--container end-->
        </section>
        <!--mobile menu section end-->
    </header>
    <!--header end-->

    @yield('homepage')
    @yield('aboutpage')
    @yield('details')
    @yield('contactpage')
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright">
                        <p>@copyrights reserved by Hightechribbon</p>
                    </div>
                </div>
                <!--col end-->
                <div class="col-sm-6">
                    <div class="copyright text-right">
                        <p> <span>developed by<a href="http://gatewayit.net/" target="_blank"> gatewayit</a></span></p>
                    </div>
                </div>
                <!--col end-->
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </footer>
    <!--section end-->
    <!-- footer end-->
    <script src="{{asset('public/frontEnd/')}}/js/jquery-3.3.1.min.js"></script>
    <!--jquery library-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!--    ajax library for counter-->
    <script src="{{asset('public/frontEnd/')}}/js/bootstrap.min.js"></script>
    <!-- bootstrap js-->
    <script src="{{asset('public/frontEnd/')}}/js/owl.carousel.min.js"></script>
    <!--owl carousel js-->
    <script src="{{asset('public/frontEnd/')}}/js/jquery.sticky.js"></script>
    <!--sticky js-->
    <script src="{{asset('public/frontEnd/')}}/js/jquery.meanmenu.min.js"></script>
    <!--meanmenu js-->
    <script src="{{asset('public/frontEnd/')}}/js/jquery.scrollUp.js"></script>
    <!--scrollUp js-->
    <script src="{{asset('public/frontEnd/')}}/js/main.js"></script>
</body>

</html>

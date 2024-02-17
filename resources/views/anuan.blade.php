<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Layanan Pengaduan Siswa Cibione</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- style css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">
    <!-- fevicon -->
    <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
    <link href="{{ asset('/assets/images/fevicon.png') }}" rel="icon" type="image/gif">
    <!-- Scrollbar Custom CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <link href="{{ asset('/assets/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('/assets/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <div class="wrapper">
        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="index.html">Welcome</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#review">Review</a>
                    </li>
                    {{-- <li>
                        <a href="#contact">Conatct</a>
                    </li> --}}
                </ul>
            </nav>
        </div>
        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="menu_sitbar">
                    <ul class="menu">
                        <li><button type="button" id="sidebarCollapse">
                                <img src="{{ asset('/assets/images/menu_icon.png') }}" alt="#" />
                            </button></a>
                        </li>
                    </ul>
                </div>
                <div class="header_full_banner">
                    <div class="header">
                        <div class="container">
                            <div class="row d-flex justify-content-between">
                                <div class=" logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.html"><img src="{{ asset('/assets/images/kampak.png') }}" alt="#" width="50" height="50"/></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    @if (Route::has('login'))
                                        @auth
                                            <ul class="btn">
                                                <li class="login_btn">
                                                    <a href="{{ url('/home') }}">Home</a>
                                                </li>
                                            @else
                                                <li class="login_btn">
                                                    <a href="{{ route('login') }}">Login</a>
                                                </li>
                                                @if (Route::has('register'))
                                                    <li class="login_btn">
                                                        <a href="{{ route('register') }}">Register</a>
                                                    </li>
                                                @endif
                                                {{-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </li> --}}
                                            </ul>
                                        @endauth
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end header inner -->
                    <!-- end header -->
                    <!-- banner -->
                    <section class="banner_main">
                        <div class="container">
                            <div class="row d_flex">
                                <div class="col-md-126">
                                    <div class="text-bg">
                                        <h1>Layanan Pengaduan Siswa SMKN 1 Cibinong</h1>
                                        <span>Selamat datang di Web Pengaduan SMKN 1 CIBINONG, luapkan segala pengaduan dan aspirasimu!</span>
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </header>
            <!-- end banner -->
            <!-- about -->
            <div id="about" class="about">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="about_img">
                                <figure><img src="{{ asset('/assets/images/home.jpg') }}" alt="#" /></figure>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="titlepage">
                                <h2>About <span class="blu">us</span></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi nesciunt molestias corrupti, quae magnam quos et, voluptatum maiores recusandae blanditiis asperiores veniam quia dicta aperiam?</p>
                                <a class="read_more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end about -->
            <!-- classified  section -->
            <div class="classified ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Our<span class="blu"> Services</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                    <div class="classified_box">
                                        <span>0<strong class="blu2">1</strong>.</span>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                    <div class="classified_box">
                                        <div class="fornt">
                                            <h3> Lorem, ipsum.</h3>
                                            <p>using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as
                                                opposed to using 'Content here, content here', making it look like
                                                readable English.
                                                Many desktop publishing packages and web page editors now use Lorem
                                                Ipsum as their
                                                default model</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                        <div class="classified_box">
                                            <span>0<strong class="blu2">2</strong>.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                        <div class="classified_box">
                                            <div class="fornt">
                                                <h3>Lorem, ipsum dolor.</h3>
                                                <p>using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters,
                                                    as opposed to using 'Content here, content here', making it look
                                                    like readable
                                                    English. Many desktop publishing packages and web page editors now
                                                    use Lorem
                                                    Ipsum as their default model</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                        <div class="classified_box">
                                            <span>0<strong class="blu2">3</strong>.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                        <div class="classified_box">
                                            <div class="fornt">
                                                <h3>Lorem, ipsum.</h3>
                                                <p>using Lorem Ipsum is that it has a more-or-less normal distribution
                                                    of letters,
                                                    as opposed to using 'Content here, content here', making it look
                                                    like readable
                                                    English. Many desktop publishing packages and web page editors now
                                                    use Lorem
                                                    Ipsum as their default model</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end classified  section -->
        </div>
        <!--  footer -->
        <footer id="contact">
            <div class="footer">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="titlepage">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <ul class="location_icon">
                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                    Locatins</li>
                                <li><a href="#"><i class="fa fa-volume-control-phone"
                                            aria-hidden="true"></i></a> +71 9087654321
                                </li>
                                <li><a href="#"><i class="fa fa-envelope"
                                            aria-hidden="true"></i></a>demo@gmail.com</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <form id="request" class="main_form">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <input class="contactus" placeholder="Full Name" type="type"
                                            name="Full Name">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Email" type="type" name="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Phone Number" type="type"
                                            name="Phone Number">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message
                              </textarea>
                                    </div>
                                    <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <button class="send_btn">Send</button>
                                    </div>
                                    <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <ul class="social_icon">
                                            <li><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="map">
                                <figure><img src="{{ asset('/assets/images/map.jpg') }}" alt="#" /></figure>
                            </div>
                            <form class="bottom_form">
                                <h3>Newsletter</h3>
                                <input class="enter" placeholder="Enter your email" type="text"
                                    name="Enter your email">
                                <button class="sub_btn">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Copyright 2023 All Right Reserved By <a href="https://seiyanz16.git.io"> Zaskia</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <!-- <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script> -->
    <!-- sidebar -->
    <!-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('/assets/js/custom.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>

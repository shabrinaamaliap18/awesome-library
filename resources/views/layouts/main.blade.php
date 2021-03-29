<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>

    <!-- 

Eatery Cafe Template 

http://www.templatemo.com/tm-515-eatery

-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/animate.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../../../css/templatemo-style.css">

</head>

<body>

    <!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">

            <span class="spinner-rotate"></span>

        </div>
    </section>


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>

                <!-- lOGO TEXT HERE -->
                <a href="{{url('/dashboard')}}" class="navbar-brand">Awesome <span>.</span> Library</a>
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="{{url('/dashboard')}}" class="smoothScroll">Home</a></li>
                    <li><a href="{{url('/books')}}" class="smoothScroll">Books</a></li>
                    <li><a href="{{url('/needs')}}" class="smoothScroll">Donasi Buku</a></li>
                    <li><a href="{{url('/testimonis')}}" class="smoothScroll">Testimoni</a></li>
                    <li><a href="{{url('/about')}}" class="smoothScroll">About</a></li>
                    <li><a class="smoothScroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
            </div>

        </div>
    </section>
    <br><br>

    @yield("container")




    <!-- FOOTER -->
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Malang,<br> Jln Panjaitan 10870<br>id ultricies sapien</p>
                        </address>
                    </div>
                </div>

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Reservation</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>090-080-0650 | 090-070-0430</p>
                            <p><a href="mailto:info@company.com">info@company.com</a></p>
                            <p>LINE: booklibrary247 </p>
                        </address>
                    </div>
                </div>

                <div class="col-md-4 col-sm-8">
                    <div class="footer-info footer-open-hour">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Open Hours</h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Monday: Closed</p>
                            <div>
                                <strong>Tuesday to Friday</strong>
                                <p>7:00 AM - 9:00 PM</p>
                            </div>
                            <div>
                                <strong>Saturday - Sunday</strong>
                                <p>11:00 AM - 10:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>Copyright &copy; 2018 <br>AwesomeLibrary

                            <br><br>Design: <a rel="nofollow" href="http://templatemo.com" target="_parent">Awesome
                                Library</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.stellar.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/smoothscroll.js"></script>
    <script src="../../js/custom.js"></script>

</body>

</html>

<style>
body {

    background-image: linear-gradient(80deg, #CD853F, #8B4513, black);
    color: white;
}


.nav navbar-nav navbar-nav-first {
    background-color: black !important;
}
</style>
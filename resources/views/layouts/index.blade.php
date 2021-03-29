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

    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../css/animate.css">
    <link rel="stylesheet" href="../../../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../../css/magnific-popup.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../../../../css/templatemo-style.css">

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

                 @auth
                 <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                 @else
                <li><a href="{{ route('login') }}" class="smoothScroll">Login</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="smoothScroll">Register</a></li>
                </li>
               
            </div>

        </div>
        @endif
            @endauth
    </section>
    <br><br>

    @yield("container")






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

    background-image: linear-gradient(50deg, #CD853F, #8B4513);
    color: white;
}


.nav navbar-nav navbar-nav-first {
    background-color: black !important;
}
</style>
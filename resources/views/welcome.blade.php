@extends('layouts/index')
@section('title' , 'Welcome')
@section('container')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
   
</head>
<br><br><br><br><br>
<body>
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>Awesome Library</h3>
                            <h1>WELCOME TO AWESOME LIBRARY</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>Your Perfect Library</h3>
                            <h1>The best books quality can be here too!</h1>

                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>New Books Edition is Coming!</h3>
                            <h1>Enjoy our special list books every Sunday and Friday</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

  

    <!-- <style>
    body {
        font-family: 'Nunito', sans-serif;
    } -->
    </style> 
        </div>
    </div>
</body>

</html>
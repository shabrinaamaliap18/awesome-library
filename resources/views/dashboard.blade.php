@extends('layouts/main')

<link rel="stylesheet" type="text/css" href="{!! asset('assets/css/master.css') !!}">

@section('title' , 'Perpustakaan')

@section('container')
<!-- HOME -->
<br>
<br>
<section id="home" class="slider" data-stellar-background-ratio="0.5">
    <div class="row">
        <div class="owl-carousel owl-theme">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-8 col-sm-12">
                            <h3>Awesome Library</h3>
                            <h1>Our mission is to provide an unforgettable experience</h1>
                            <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our team</a>
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



<!-- TEAM -->
<section id="team" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-sm-8">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Meet our team</h2>
                    <h4>They are nice &amp; friendly</h4>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                    <img src="images/fixsima.png" class="img-responsive" alt="">
                    <div class="team-hover">
                        <div class="team-item">
                            <h4>Mahasiswa</h4>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-info">
                    <h3>Adithia Risma</h3>
                    <p>185150700111002</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                    <img src="images/man.png" class="img-responsive" alt="">
                    <div class="team-hover">
                        <div class="team-item">
                            <h4>Mahasiswa</h4>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-info">
                    <h3>Amanda Rizky</h3>
                    <p>185150700111006</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/fixshab.png" class="img-responsive" alt="">
                    <div class="team-hover">
                        <div class="team-item">
                            <h4>Mahasiswa</h4>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-github"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-info">
                    <h3>Shabrina Amalia</h3>
                    <p>185150701111008</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                    <img src="images/jak.png" class="img-responsive" alt="">
                    <div class="team-hover">
                        <div class="team-item">
                            <h4>Mahasiswa</h4>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-github"></a></li>
                                <li><a href="#" class="fa fa-google"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="team-info">
                    <h3>Reza Pulungan</h3>
                    <p>185150701111009</p>
                </div>
            </div>



        </div>
    </div>
</section>



<!-- TESTIMONIAL -->
<section id="testimonial" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Testimonials</h2>
                </div>
            </div>

            <div class="col-md-offset-2 col-md-8 col-sm-12">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <p>Awesome library sangat mengerti mengenai buku buku yang sedang dibicarakan dan dicari</p>
                        <div class="tst-author">
                            <h4>Yasmin Puteri</h4>
                            <span>Mahasiswa</span>
                        </div>
                    </div>

                    <div class="item">
                        <p>Buku nya sangat lengkap, jika buku tidak ada, maka kita bisa request buku dan jika beruntung,
                            buku akan ada setiap sunday dan friday</p>
                        <div class="tst-author">
                            <h4>Johnny Stephen</h4>
                            <span>Wiraswasta</span>
                        </div>
                    </div>

                    <div class="item">
                        <p>Terimakasih awesome library, karena selalu mengerti hehe</p>
                        <div class="tst-author">
                            <h4>Jessie White</h4>
                            <span>Mahasiswa</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                <div id="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Contact Us</h2>
                    </div>
                </div>

                <!-- CONTACT FORM -->
                <form action="#" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                    <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                    <h6 class="text-success">Your message has been sent successfully.</h6>

                    <!-- IF MAIL NOT SENT -->
                    <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                        <textarea class="form-control" rows="6" id="cf-message" name="message"
                            placeholder="Tell about your project"></textarea>

                        <button type="submit" class="form-control" id="cf-submit" name="submit">Send
                            Message</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection
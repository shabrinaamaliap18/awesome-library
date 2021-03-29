@extends('layouts/main')

@section('title' , 'About Us')


@section('container')

<!-- ABOUT -->
<section id="about" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">

                        <h4>Read our story</h4>
                        <h2>We've been Making The Awesome Library Since 1999</h2>
                    </div>

                    <div class="wow" data-wow-delay="0.4s">
                        <h5>Awesome library didirikan pada tahun 1999 di kota malang. Tujuan kami membangun perpustakaan
                            ini untuk membangun minat belajar masyarakat.

                        </h5>
                        <h5>Kami sangat menerima saran atau masukan membangun untuk library kami, maka dari itu kami
                            menyediakan kolom request buku yang bertujuan untuk memuaskan
                            <a href="https://plus.google.com/+templatemo" target="_parent">Ambisi Membaca</a>
                            para pembaca. Thank you.
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                    <img src="images/about-image.jpg" class="img-responsive" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<style>
body {

    background-image: linear-gradient(160deg, #CD853F, #8B4513, black);
}

.wow {
    color: #D2B48C;
}
</style>

@endsection
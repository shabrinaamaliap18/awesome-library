@extends('layouts/main')
@section('title' , 'Tetsimoni')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <br><br><br><br>
            <h1 class="list">Testimoni</h1>



            <!-- 
            <div class="row">
                <form action="/books/search" method="get" class="form-inline">
                    @csrf
                    <div class="col-12">
                        <input type="text" class="form-control" name="q" placeholder="Cari buku disini"
                            value="{{ old('search') }}">
                        <button type="submit" class="btn btn-primary my-3" value="search">Cari Buku</button>
                </form> -->


            <a href="/testimonis/create" class="btn">Tulis disini</a>


            @if (session('status'))
            <br>
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

        </div>
    </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<style>
body {

    background-image: linear-gradient(160deg, #CD853F, #8B4513, black);
    color: white;
}

.btn {
    background: #DAA520;
}

.fa {
    color: white;
}

.list {
    color: #D2B48C;
}

.list1 {
    color: yellow;
}

.jumbotron {
    background-color: pink !important;
}

.img {
    width: 200px !important;
    height: 200px !important;
}

.img2 {
    width: 300px !important;
    height: 300px !important;
}

.span {
    color: black !important;
    ;
}
</style>
@endsection
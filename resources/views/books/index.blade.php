@extends('layouts/main')
@section('title' , 'Daftar Buku')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <br><br><br>
            <h1 class="list">List Book</h1>
            <p class="list1">List book of Awesome Library : </p>




            <div class="row">
                <form action="/books" method="get" class="form-inline">
                    @csrf
                    <div class="col-12">
                        <input type="text" class="form-control" name="q" placeholder="Cari buku disini"
                            value="{{ old('search') }}">
                        <button type="submit" class="btn btn-primary my-3" value="search">Cari Buku</button>
                </form>

                <!-- <a href="/books/create" class="btn">Tambah buku</a> -->




                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif


                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penulis</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($book as $bk)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td><img class="img" src="/image/{{$bk->gambar}}"></td>
                            <td>{{ $bk->judul}}</td>
                            <td>{{ $bk->penulis}}</td>
                            <td>{{ $bk->penerbit}}</td>
                            <td>{{ $bk->tahun}}</td>
                            <td>
                                <a href="/books/{{$bk->id}}" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                    <table>
            </div>
        </div>

    </div>

    <style>
    body {

        background-image: linear-gradient(160deg, #CD853F, #8B4513, black);
        color: white;
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

    .nav navbar-nav navbar-nav-first {
        background-color: black !important;
    }
    </style>
    @endsection
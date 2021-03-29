@extends('layouts/main')

@section('title' , 'Detail Buku')


@section('container')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Buku</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$book->judul}}</h5>
                    <td><img class="img2" src="/image/{{$book->gambar}}"></td>
                    <br>
                    <br>
                    <p class="card-subtitle mb-2 text-muted"><span class="span"> Penulis : </span> {{$book->penulis}}
                    </p>
                    <p class="card-subtitle mb-2 text-muted"><span class="span"> Penerbit : </span> {{$book->penerbit}}
                    </p>
                    <p class="card-subtitle mb-2 text-muted"><span class="span"> Tahun : </span>{{$book->tahun}}</p>
                    <p class="card-subtitle mb-2 text-muted"><span class="span"> Sinopsis : </span>{{$book->sinopsis}}
                    </p>
                    <a href="/books" class="btn btn-success">Kembali</a><br>
                </div>
            </div>


        </div>
    </div>
</div>
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

.h6 {
    color: black !important;
    ;
}

.card-title {
    color: black !important;
    ;
}



.card {
    background-color: white !important;
    padding: 20px !important;
}
</style>

@endsection
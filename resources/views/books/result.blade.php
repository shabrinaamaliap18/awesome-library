@extends('layouts/main')
@section('title' , 'Daftar Buku')
@section('container')

@if(count($result))

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <br>
            <h1 class="list">List Book</h1>
            <p class="list1">List book of Awesome Library : </p>

            <div class="alert alert-success">Data yang anda cari {{$search}} </div>

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
                    @foreach($result as $bk)
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

                    @else
                    <h1>Data tidak ditemukan</h1>

                    @endif


                </tbody>
                <table>


        </div>
    </div>
</div>

{{$books->links()}}

<style>
body {

    background: linear-gradient(160deg, var(--primary-color) 40%, var(--dark-color) 60%);
    color: white;
}

.fa {
    color: white;
}

.list {
    color: white;
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
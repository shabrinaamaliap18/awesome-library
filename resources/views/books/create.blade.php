@extends('layouts/main')
@section('title' , 'Tambah Buku')
@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Tambah Buku</h1>

            <form method="post" action="/books" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="gambar">Cover Buku</label>
                    <input type="file" class="form-control-file" id="gambar" placeholder="Masukkan cover buku"
                        name="gambar" required>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukkan judul buku" name="judul"
                        required>
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis Buku</label>
                    <input type="text" class="form-control" id="penulis" placeholder="Masukkan penulis buku"
                        name="penulis" required>
                </div>

                <div class="form-group">
                    <label for="penerbit">Penerbit Buku</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="Masukkan penerbit buku"
                        name="penerbit" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Rilis Buku</label>
                    <input type="tahun" class="form-control" id="tahun" placeholder="Masukkan tahun rilis buku"
                        name="tahun" required>
                </div>

                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <input type="sinopsis" class="form-control" id="sinopsis" placeholder="Masukkan sinopsis buku"
                        name="sinopsis" required>
                </div>

                <button type="submit" class="btn btn-success">Tambah Buku</button>
            </form>


        </div>
    </div>
</div>
<style>
body {

    background-image:  linear-gradient(160deg, #CD853F,#8B4513,black);
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
</style>

@endsection
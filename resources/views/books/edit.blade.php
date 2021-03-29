@extends('layouts/main')

@section('title' , 'Edit Buku')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Edit Buku</h1>

            <form method="post" action="/books/{{$book->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="gambar">Cover Buku</label>
                    <input type="gambar" class="form-control" id="gambar" placeholder="Masukkan Cover buku"
                        name="gambar" value="{{$book->gambar}}" disabled>
                </div>

                <div class="form-group">
                    <label for="judul">Judul Buku</label>
                    <input type="text" class="form-control" id="judul" placeholder="Masukkan judul buku" name="judul"
                        value="{{$book->judul}}" required>
                </div>


                <div class="form-group">
                    <label for="penulis">Penulis Buku</label>
                    <input type="text" class="form-control" id="penulis" placeholder="Masukkan penulis buku"
                        name="penulis" value="{{$book->penulis}}" required>
                </div>

                <div class="form-group">
                    <label for="penerbit">Penerbit Buku</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="Masukkan penerbit buku"
                        name="penerbit" value="{{$book->penerbit}}" required>
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun Rilis Buku</label>
                    <input type="tahun" class="form-control" id="tahun" placeholder="Masukkan tahun rilis buku"
                        name="tahun" value="{{$book->tahun}}" required>
                </div>

                <div class="form-group">
                    <label for="sinopsis">Sinopsis Buku</label>
                    <input type="sinopsis" class="form-control" id="sinopsis" placeholder="Masukkan sinopsis buku"
                        name="sinopsis" value="{{$book->sinopsis}}" required>
                </div>

                <button type="submit" class="btn btn-success">Edit Buku</button>
            </form>


        </div>
    </div>
</div>

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
</style>

@endsection
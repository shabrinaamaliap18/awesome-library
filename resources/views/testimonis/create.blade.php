@extends('layouts/main')
@section('title' , 'Testimoni')
@section('container')

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Testimoni</h1>

            <form method="post" action="/testimonis" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama kamu" name="nama"
                        required>
                </div>

                <div class="form-group">
                    <label for="testimoni">Testimoni</label>
                    <input type="text" class="form-control" id="testimoni" placeholder="Masukkan testimoni"
                        name="testimoni" required>
                </div>

                <button type="submit" class="btn btn-success">Kirim testimoni</button>

            </form>
            <br>


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
</style>

@endsection
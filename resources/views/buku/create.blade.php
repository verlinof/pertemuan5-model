@extends('main')
@section('root')
    <div class="container-fluid my-5">
        <div class="container">
            <h4>Tambah Buku Baru</h4>
            <form action="{{ route('buku.store') }}" method="post">
                @csrf
                <label class="my-3" for="judul">Judul buku</label>
                <input id="judul" name="judul" type="text" placeholder="Judul Buku">
                <br>
                <label class="my-3" for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" placeholder="Penulis">
                <br>
                <label class="my-3" for="harga">Harga Buku</label>
                <input type="number" name="harga" id="harga">
                <br>
                <label class="my-3" for="tanggal_terbit">Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" id="tanggal_terbit">
                <br>
                <input class="my-3 btn btn-info" type="submit" name="submit" value="submit">
            </form>
            <a href="/" class="btn btn-info">Kembali</a>
        </div>
    </div>
@endsection
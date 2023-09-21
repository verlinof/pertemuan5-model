@extends('main')
@section('root')
    <div class="container-fluid my-5">
        <div class="container">
            <h4>Edit Data Buku</h4>
            <form action="{{ route('buku.update', $buku->id) }}" method="post">
                @csrf
                <label class="my-3" for="judul">Judul buku</label>
                <input id="judul" name="judul" type="text" value="{{ $buku->judul }}">
                <br>
                <label class="my-3" for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" value="{{ $buku->penulis }}">
                <br>
                <label class="my-3" for="harga">Harga Buku</label>
                <input type="number" name="harga" id="harga" value="{{ $buku->harga }}">
                <br>
                <label class="my-3" for="tgl_terbit">Tanggal Terbit</label>
                <input type="date" name="tgl_terbit" id="tgl_terbit" value="{{ $buku->tgl_terbit }}">
                <br>
                <input class="my-3 btn btn-info" type="submit" name="submit" value="Update">
            </form>
            <a href="/" class="btn btn-info">Kembali</a>
        </div>
    </div>
@endsection
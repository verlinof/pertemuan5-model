@extends('main')
@section('root')
    <div class="w-full">
        <div class="p-5">
            <h4 class="font-medium mb-3">Edit Data Buku</h4>
            <form action="{{ route('buku.update', $buku->id) }}" method="post">
                @csrf
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Buku</label>
                <input id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="judul" type="text" value="{{ $buku->judul }}" required>

                <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                <input id="penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="penulis" type="text" value="{{ $buku->penulis }}" required>

                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="harga" type="number" value="{{ $buku->harga }}" required>

                <label for="tgl_terbit" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                <input id="tgl_terbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit p-2.5 my-2" name="tgl_terbit" type="date" value="{{ $buku->tgl_terbit }}" required>
            
                <input class="p-3 bg-blue-500 rounded-lg text-white my-5" type="submit" name="submit" value="Update">
            </form>
            <a href="/" class="p-3 bg-blue-500 rounded-lg text-white my-5">Kembali</a>
        </div>
    </div>
@endsection
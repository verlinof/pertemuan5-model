@extends('main')
@section('root')
    <div class="w-full my-5">
        @if (count($errors) > 0)
        <div class="m-5 bg-red-500">
            <ul class="p-5 text-white list-disc" role="alert">
                @foreach ($errors->all() as $error)
                <li class="mx-5">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="w-full">
            <div class="p-5">
                <h4 class="font-medium mb-3">Edit Data Buku</h4>
                <form action="{{ route('buku.store') }}" method="post">
                    @csrf
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Buku</label>
                    <input id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="judul" type="text">
    
                    <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900">Penulis</label>
                    <input id="penulis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="penulis" type="text">
    
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-900">Harga</label>
                    <input id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 my-2" name="harga" type="number">
    
                    <label for="tgl_terbit" class="block mb-2 text-sm font-medium text-gray-900">Tanggal terbit</label>
                    <input id="tgl_terbit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-fit p-2.5 my-2" name="tgl_terbit" type="date">
                
                    <input class="p-3 bg-blue-500 rounded-lg text-white my-5" type="submit" name="submit" value="Create">
                </form>
                <a href="/" class="p-3 bg-blue-500 rounded-lg text-white my-5">Kembali</a>
            </div>
        </div>
    </div>
@endsection
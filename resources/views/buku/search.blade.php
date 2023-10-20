@extends('main')

@section('root')

<div class="w-full">
    <div class="m-5">
        <form action="{{ route('buku.search') }}" method="GET">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input name="kata" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="w-full">
    <div class="m-3 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Penulis
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_buku as $buku)                
                <tr class="bg-gray-900 border-gray-700">
                    <th scope="row" class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $no }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $buku->judul }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $buku->penulis }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "Rp ". number_format($buku->harga, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('buku.edit', $buku->id) }}" class="font-medium mx-1 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="font-medium mx-1 text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $no++
                @endphp
                @endforeach
            </tbody>
        </table>    
    </div>
</div>
<div class="py-3">
    <a class="m-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{ route('buku.index') }}">
        Kembali
    </a>
</div>
@endsection
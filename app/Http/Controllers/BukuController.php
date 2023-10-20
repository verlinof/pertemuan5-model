<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batas = 5;
        $jumlah_buku = Buku::count();
        $data_buku = Buku::orderBy('id', 'desc')->simplePaginate($batas);
        $no = $batas * ($data_buku->currentPage() - 1) + 1;

        return view('buku.index',compact('batas','jumlah_buku','data_buku','no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku =  $request->validate([
                    'judul' => 'required|string',
                    'penulis' => 'required|string|max:30',
                    'harga' => 'required|numeric',
                    'tgl_terbit' => 'required|date'
                ]);
        $buku = Buku::create($request->all());
        return redirect('/')->with('pesan', "Buku baru berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('buku.edit', [
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $buku->update($request->all());
        return redirect('/')
            ->with('pesan', "Data buku berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect('/')->with('pesan', 'Data buku berhasil dihapus');
    }

    public function search(Request $request)
    {
        $batas = 5;
        $cari = $request->kata;
        $data_buku = Buku::where('judul', 'like', '%'.$cari.'%')->orWhere('penulis', 'like', '%'.$cari.'%')
            ->paginate($batas);
        $jumlah_buku = $data_buku->count();
        $no = $batas * ($data_buku->currentPage() - 1) + 1;
        return view('buku.search' , compact('jumlah_buku', 'data_buku', 'no', 'cari'));
    }
}
<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BukuController::class, 'index'])->name('buku.index');

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');

Route::get('/buku/search', [BukuController::class, 'search'])->name('buku.search');

Route::post('/buku/delete/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/edit/{buku:id}', [BukuController::class, 'edit'])->name('buku.edit');

Route::post('/buku/update/{buku:id}', [BukuController::class, 'update'])->name('buku.update');
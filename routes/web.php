<?php

use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai; // Pastikan memanggil model Pegawai
use App\Models\Departemen; // Pastikan memanggil model Departemen
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('master.app');
});
Route::get('/web', function () {
    $dataPegawai = Pegawai::all(); // Mengambil semua data pegawai
    $dataDepartemen = Departemen::all(); // Mengambil semua data departemen

    return view('web.index', compact('dataPegawai', 'dataDepartemen')); // Menampilkan view web dengan data pegawai dan departemen
});

Route::resource('departemen', DepartemenController::class);
Route::resource('pegawai', PegawaiController::class);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

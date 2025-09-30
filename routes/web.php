<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Basic Route
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

//Route Parameter
Route::get('/nama/{param1?}', function ($param1='') {
    return 'Nama saya: '.$param1;
});
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

//Named Route
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

use App\Http\Controllers\MahasiswaController;
//Route ke Controller
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

//Route ke View
Route::get('/about', function () {
    return view('halaman-about');
});

use App\Http\Controllers\MatakuliahController;
// Route resource (CRUD)
Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    // Menampilkan semua data matakuliah
    public function index()
    {
        return "Menampilkan data matakuliah";
    }

    // Form tambah data matakuliah
    public function create()
    {
        return "Form tambah matakuliah";
    }

    // Simpan data baru matakuliah
    public function store(Request $request)
    {
        return "Menyimpan data matakuliah baru";
    }

    // Tampilkan 1 data matakuliah berdasarkan parameter
    public function show($kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        } else {
            return "Masukkan kode matakuliah!";
        }
    }

    // Form edit matakuliah
    public function edit($id)
    {
        return "Form edit matakuliah dengan id " . $id;
    }

    // Update data matakuliah
    public function update(Request $request, $id)
    {
        return "Update data matakuliah dengan id " . $id;
    }

    // Hapus data matakuliah
    public function destroy($id)
    {
        return "Hapus data matakuliah dengan id " . $id;
    }
}

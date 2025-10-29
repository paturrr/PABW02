<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.form');
    }

    public function simpan(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|string|max:20|unique:mahasiswa,nim',
            'jurusan' => 'required|string|max:100',
        ]);

        // Simpan data ke database
        \App\Models\Mahasiswa::create($validatedData);

        return redirect()->back()->with('success', 'Data mahasiswa berhasil disimpan!');
    }

    public function tampil()
    {
        $mahasiswa = \App\Models\Mahasiswa::all();
        return view('mahasiswa.tampil', compact('mahasiswa'));
    }
}

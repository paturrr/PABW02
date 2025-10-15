<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasController extends Controller
{
    // tampilkan form perhitungan luas
    public function formLuas()
    {
        return view('luas');
    }

    // proses hitung luas
    public function hitung(Request $request)
    {
        $jenis = $request->input('jenis');
        $hasil = 0;

        if ($jenis == 'persegi') {
            $sisi = $request->input('sisi');
            $hasil = $sisi * $sisi;
        } elseif ($jenis == 'persegi_panjang') {
            $panjang = $request->input('panjang');
            $lebar = $request->input('lebar');
            $hasil = $panjang * $lebar;
        } elseif ($jenis == 'lingkaran') {
            $jari = $request->input('jari');
            $hasil = 3.14 * $jari * $jari;
        } elseif ($jenis == 'segitiga') {
            $alas = $request->input('alas');
            $tinggi = $request->input('tinggi');
            $hasil = 0.5 * $alas * $tinggi;
        }

        return view('hasilluas', [
            'jenis' => $jenis,
            'hasil' => $hasil
        ]);
    }
}
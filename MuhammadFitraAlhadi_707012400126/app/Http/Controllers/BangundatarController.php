<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangundatarController extends Controller
{
    public function bangundatar()
    {
        return view('bangundatar');
    }

    public function hitung(Request $request)
    {
        $jenis = $request->jenis;
        $hasil = 0;
        $keterangan = '';

        switch ($jenis) {
            case 'persegi':
                $sisi = $request->sisi;
                $hasil = $sisi * $sisi;
                $keterangan = "Luas Persegi dengan sisi $sisi = $hasil";
                break;

            case 'persegi_panjang':
                $p = $request->panjang;
                $l = $request->lebar;
                $hasil = $p * $l;
                $keterangan = "Luas Persegi Panjang dengan p=$p dan l=$l = $hasil";
                break;

            case 'segitiga':
                $a = $request->alas;
                $t = $request->tinggi;
                $hasil = 0.5 * $a * $t;
                $keterangan = "Luas Segitiga dengan alas=$a dan tinggi=$t = $hasil";
                break;

            case 'lingkaran':
                $r = $request->jari;
                $hasil = 3.14 * $r * $r;
                $keterangan = "Luas Lingkaran dengan jari-jari=$r = $hasil";
                break;
        }

        return view('bangundatar', compact('hasil', 'keterangan'));
    }
}

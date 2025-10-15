<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasController extends Controller
{
    public function index()
    {
        return view('indexxLuas');
    }

    public function hitung(Request $request)
    {
        $bangun = $request->bangun;
        $a = $request->angka1;
        $b = $request->angka2;
        $hasil = null;

        if ($bangun == 'persegi') {
            $hasil = $a * $a;
        } elseif ($bangun == 'persegi_panjang') {
            $hasil = $a * $b;
        } elseif ($bangun == 'segitiga') {
            $hasil = 0.5 * $a * $b;
        } elseif ($bangun == 'lingkaran') {
            $r = $a / 2;
            $hasil = 3.14 * $r * $r;
        } else {
            $hasil = 'bangun datar tidak dikenali';
        }

        return view('hasilluas', compact('bangun', 'hasil'));
    }
}

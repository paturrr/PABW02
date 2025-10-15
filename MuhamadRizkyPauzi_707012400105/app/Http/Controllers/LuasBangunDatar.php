<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasBangunDatar extends Controller
{
    public function indexLuas()
    {
        return view('indexLuas');
    }

    public function rumus(Request $request)
    {
        $nilai1 = $request->input('nilai1');
        $nilai2 = $request->input('nilai2');
        $jenis = $request->input('jenis');
        $hasil = $request->input('hasil');

        switch ($jenis) {
            case 'persegi';
                $hasil = $nilai1 * $nilai2;
                break;
            case 'persegiPanjang';
                $hasil = $nilai1 * $nilai2;
                break;
            case 'segitiga';
                $hasil = 0.5 * $nilai1 * $nilai2;
                break;
            default:
        }
        return view('indexLuas', compact('nilai1', 'nilai2', 'jenis', 'hasil'));
    }
}


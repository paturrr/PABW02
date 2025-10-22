<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function shape()
    {
        return view('shape');
    }

    public function hasil(Request $request)
    {
        $bangun = $request->bangun;
        $jenis = $request->jenis;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2 ?? 0;
        $hasil = 0;

        switch ($bangun) {
            case 'persegi':
                $hasil = ($jenis == 'luas') ? 
                $nilai1 * $nilai1 : 4 * $nilai1;
                break;

            case 'persegi_panjang':
                $hasil = ($jenis == 'luas') ? $nilai1 * $nilai2 : 2 * ($nilai1 + $nilai2);
                break;

            case 'lingkaran':
                $phi = 3.14;
                $hasil = ($jenis == 'luas') ? $phi * $nilai1 * $nilai1 : 2 * $phi * $nilai1;
                break;

            case 'segitiga':
                if ($jenis == 'luas') {
                    $hasil = 0.5 * $nilai1 * $nilai2;
                } else {
                    $hasil = $nilai1 + $nilai2 + sqrt(($nilai1 ** 2) + ($nilai2 ** 2));
                }
                break;
        }

        return view('hasilshape', compact('bangun', 'jenis', 'nilai1', 'nilai2', 'hasil'));
    }
}

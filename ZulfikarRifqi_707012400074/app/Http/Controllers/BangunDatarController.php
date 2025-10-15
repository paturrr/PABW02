<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
    public function rumus()
    {
        return view('rumus');
    }

    public function count(Request $request)
    {
        $bangun = $request->input('bangun');
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        switch ($bangun) {
            case 'Persegi':
                $hasil = $angka1 * $angka2;
                break;
            case 'Persegi Panjang':
                $hasil = $angka1 * $angka2;
                break;
            case 'Segitiga':
                $hasil = 0.5 * $angka1 * $angka2;
                break;
            case 'Lingkaran':
                $hasil = 3.14 * $angka1 * $angka1;
                break;
            default:
                break;
        }

        return view('count', compact('bangun', 'angka1', 'angka2', 'hasil'));
    }
}

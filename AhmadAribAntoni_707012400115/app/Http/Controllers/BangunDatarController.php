<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
    public function rumus() {
        return view('rumus');
    }

    public function count(Request $request) {

        $bangun = $request->bangun;
        $jenis = $request->jenis;
        $nilai1 = $request->nilai1;
        $nilai2 = $request->nilai2;
        $hasil = 0;

        switch ($bangun) {
            case 'Persegi':
                 if ($jenis == 'luas') {
                    $hasil = pow($nilai1, 2);
                } else {
                    $hasil = 4 * $nilai1;
                }
                break;

            case 'Persegi Panjang':
                if ($jenis == 'luas') {
                    $hasil = $nilai1 * $nilai2;
                } else {
                    $hasil = 2 * ($nilai1 + $nilai2);
                }
                break;

             case 'Segiiga':
                if ($jenis == 'luas') {
                    $hasil = 0.5 * $nilai1 * $nilai2;
                } else {
                    $hasil = $nilai1 + $nilai2 + sqrt(pow($nilai1,2) + pow($nilai2,2)); 
                }
                break;

             case 'Lingkaran':
                $pi = 3.14159;
                if ($jenis == 'luas') {
                    $hasil = $pi * pow($nilai1, 2);
                } else {
                    $hasil = 2 * $pi * $nilai1;
                }
                break;
            
            default:
               $hasil = 'Bangun datar tidak dikenali';
                break;
        }

        return view('count', compact('bangun', 'jenis', 'hasil'));
    }
}
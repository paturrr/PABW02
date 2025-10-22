<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BentukController extends Controller
{
    public function bentuk() {
        return view('bentuk');
    }

    public function hasil(Request $request)
    {
        $jenis = $request->input('jenis');
        $hasil = '';

        switch ($jenis) {
            case 'persegi':
                $sisi = $request->input('sisi');
                $hasil = [
                    'luas' => $sisi * $sisi,
                    'keliling' => 4 * $sisi
                ];
                break;

            case 'persegi_panjang':
                $panjang = $request->input('panjang');
                $lebar = $request->input('lebar');
                $hasil = [
                    'luas' => $panjang * $lebar,
                    'keliling' => 2 * ($panjang + $lebar)
                ];
                break;

            case 'segitiga':
                $alas = $request->input('alas');
                $tinggi = $request->input('tinggi');
                $sisi1 = $request->input('sisi1');
                $sisi2 = $request->input('sisi2');
                $sisi3 = $request->input('sisi3');
                $hasil = [
                    'luas' => 0.5 * $alas * $tinggi,
                    'keliling' => $sisi1 + $sisi2 + $sisi3
                ];
                break;

            case 'lingkaran':
                $jari = $request->input('jari');
                $hasil = [
                    'luas' => 3.14 * $jari * $jari,
                    'keliling' => 2 * 3.14 * $jari
                ];
                break;
        }

        return view('bd', compact('jenis', 'hasil'));
    }
}
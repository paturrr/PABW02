<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hitung(Request $request)
    {
        $bangun = $request->input('bangun');
        $hasil = [];
        $pesan = '';

        switch ($bangun) {
            case 'persegi':
                $sisi = $request->input('sisi');
                $hasil['luas'] = $sisi * $sisi;
                $hasil['keliling'] = 4 * $sisi;
                break;

            case 'persegi_panjang':
                $panjang = $request->input('panjang');
                $lebar = $request->input('lebar');
                $hasil['luas'] = $panjang * $lebar;
                $hasil['keliling'] = 2 * ($panjang + $lebar);
                break;

            case 'segitiga':
                $alas = $request->input('alas');
                $tinggi = $request->input('tinggi');
                $sisi1 = $request->input('sisi1');
                $sisi2 = $request->input('sisi2');
                $sisi3 = $request->input('sisi3');
                $hasil['luas'] = 0.5 * $alas * $tinggi;
                $hasil['keliling'] = $sisi1 + $sisi2 + $sisi3;
                break;

            case 'lingkaran':
                $r = $request->input('jari');
                $hasil['luas'] = 3.14 * $r * $r;
                $hasil['keliling'] = 2 * 3.14 * $r;
                break;

            default:
                $pesan = "Bangun datar tidak dikenali.";
        }

        return view('index2', compact('bangun', 'index2', 'pesan'));
    }
}

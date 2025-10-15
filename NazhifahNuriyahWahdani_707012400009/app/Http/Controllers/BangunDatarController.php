<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
    public function viewbd()
    {
        return view('viewbd');
    }

    public function tobd(Request $request)
    {
        $bangun = $request->bangun;
        $hasil = null;
        $keterangan = '';

        switch ($bangun) {
            case 'persegi':
                $sisi = $request->sisi;
                $hasil['luas'] = $sisi * $sisi;
                $hasil['keliling'] = 4 * $sisi;
                $keterangan = "Persegi dengan sisi $sisi";
                break;

            case 'persegi_panjang':
                $panjang = $request->panjang;
                $lebar = $request->lebar;
                $hasil['luas'] = $panjang * $lebar;
                $hasil['keliling'] = 2 * ($panjang + $lebar);
                $keterangan = "Persegi Panjang ($panjang × $lebar)";
                break;

            case 'segitiga':
                $alas = $request->alas;
                $tinggi = $request->tinggi;
                $hasil['luas'] = 0.5 * $alas * $tinggi;
                $hasil['keliling'] = $alas + $tinggi + sqrt(pow($alas,2) + pow($tinggi,2)); // segitiga siku²
                $keterangan = "Segitiga dengan alas $alas dan tinggi $tinggi";
                break;

            case 'lingkaran':
                $jari = $request->jari;
                $hasil['luas'] = 3.14 * pow($jari, 2);
                $hasil['keliling'] = 2 * 3.14 * $jari;
                $keterangan = "Lingkaran dengan jari-jari $jari";
                break;

            default:
                $keterangan = "Bangun tidak dikenali!";
                break;
        }

        return view('hasil', compact('bangun', 'hasil', 'keterangan'));
    }
}
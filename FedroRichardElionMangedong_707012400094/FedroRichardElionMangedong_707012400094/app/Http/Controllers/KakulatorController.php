<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
    public function index()
    {
        // Menampilkan form input
        return view('datar');
    }

    public function hitung(Request $request)
    {
        $bangun = $request->input('bangun');
        $hasil = 0;
        $keterangan = '';

        switch ($bangun) {
            case 'persegi':
                $sisi = $request->input('sisi');
                $hasil = $sisi * $sisi;
                $keterangan = "Luas Persegi dengan sisi $sisi cm adalah $hasil cm².";
                break;

            case 'persegi_panjang':
                $panjang = $request->input('panjang');
                $lebar = $request->input('lebar');
                $hasil = $panjang * $lebar;
                $keterangan = "Luas Persegi Panjang dengan panjang $panjang cm dan lebar $lebar cm adalah $hasil cm².";
                break;

            case 'segitiga':
                $alas = $request->input('alas');
                $tinggi = $request->input('tinggi');
                $hasil = 0.5 * $alas * $tinggi;
                $keterangan = "Luas Segitiga dengan alas $alas cm dan tinggi $tinggi cm adalah $hasil cm².";
                break;

            case 'lingkaran':
                $jari = $request->input('jari');
                $hasil = 3.14 * $jari * $jari;
                $keterangan = "Luas Lingkaran dengan jari-jari $jari cm adalah $hasil cm².";
                break;

            default:
                $keterangan = "Pilih jenis bangun datar terlebih dahulu.";
                break;
        }

        return view('hasildat', compact('bangun', 'hasil', 'keterangan'));
    }
}
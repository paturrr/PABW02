<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangunDatarController extends Controller
{
   public function index()
{
    return view('BangunDatar');
}

    public function persegi(Request $request)
    {
        $sisi = $request->input('sisi');
        $hasil_bangunDatar = $sisi * $sisi;

        return view('hasil_bangunDatar', [
            'judul' => 'Luas Persegi',
            'rumus' => "Sisi x Sisi",
            'hasil_bangunDatar' => $hasil_bangunDatar
        ]);
    }

    public function persegiPanjang(Request $request)
    {
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $hasil_bangunDatar = $panjang * $lebar;

        return view('hasil_bangunDatar', [
            'judul' => 'Luas Persegi Panjang',
            'rumus' => "Panjang x Lebar",
            'hasil_bangunDatar' => $hasil_bangunDatar
        ]);
    }

    public function segitiga(Request $request)
    {
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $hasil_bangunDatar = 0.5 * $alas * $tinggi;

        return view('hasil_bangunDatar', [
            'judul' => 'Luas Segitiga',
            'rumus' => "1/2 x Alas  Tinggi",
            'hasil_bangunDatar' => $hasil_bangunDatar
        ]);
    }

    public function lingkaran(Request $request)
    {
        $jari = $request->input('jari');
        $hasil_bangunDatar = 3.14 * $jari * $jari;

        return view('hasil_bangunDatar', [
            'judul' => 'Luas Lingkaran',
            'rumus' => "phi x r^2",
            'hasil_bangunDatar' => $hasil_bangunDatar
        ]);
    }
}

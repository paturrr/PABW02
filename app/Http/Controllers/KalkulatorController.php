<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hitung(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $operasi = $request->input('operasi');
        $hasil = null;
        $pesan = null;

        switch ($operasi) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '×':
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '÷':
            case '/':
                if ($angka2 == 0) {
                    $pesan = "Tidak bisa dibagi nol";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $pesan = "Operasi tidak valid";
        }

        return view('hasilkalkulator', compact('angka1', 'angka2', 'operasi', 'hasil', 'pesan'));
    }
}

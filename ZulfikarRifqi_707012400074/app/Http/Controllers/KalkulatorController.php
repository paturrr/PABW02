<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function hitung(Request $request)
    {
        $pertama = $request->input('pertama');
        $kedua = $request->input('kedua');
        $operator = $request->input('operator');
        switch ($operator) {
            case '-':
                $hasil = $pertama - $kedua;
                break;
            case '+':
                $hasil = $pertama + $kedua;
                break;
            case '*':
                $hasil = $pertama * $kedua;
                break;
            case '/':
                if ($kedua == 0) {
                    $hasil = ("Tidak bisa dibagi 0");
                } else {
                    $hasil = $pertama / $kedua;
                }
                break;
            default:
                print ('operator tidak terdaftar');
                break;
        }

        return view('hitung', compact('pertama', 'kedua', 'operator', 'hasil'));
    }
}

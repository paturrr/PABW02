<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
        return view('index');
    }

    public function hitung(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operator = $request->operator;
        $hasil = 0;

        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    $hasil = 'Tidak bisa dibagi nol';
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $hasil = 'Operator tidak valid';
        }

        return view('hitung', compact('angka1', 'angka2', 'operator', 'hasil'));
    }
}
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
        $operator = $request->input('operator');
        $hasil = $request->input('hasil');

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
                    $hasil = "ga bisa dibagi nol woy";
                } else {
                    $hasil = $angka1 / $angka2; 
                }
                break;
            default:
                $hasil = "tidak valid cuy";
                break;
        }

        return view('hasil', compact('angka1', 'angka2', 'operator', 'hasil'));
    }
} 
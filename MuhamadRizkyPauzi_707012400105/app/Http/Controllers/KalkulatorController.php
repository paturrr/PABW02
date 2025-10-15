<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function hasilPerhitungan(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $hasil = $request->input('hasil');
        $operator = $request->input('operator');

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
            case '/';
                if ($angka2 == 0) {
                    return view('hasil tidak bisa dibagi dengan 0');
                }
                $hasil = $angka1 / $angka2;
                break;
            default:
        }
        return view('hasilPerhitungan', compact('angka1', 'angka2','hasil', 'operator'));
    }
}

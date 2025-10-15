<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function indexKalkulator()
    {
        return view('indexKalkulator');
    }

    public function hitungKalkulator(Request $request)
    {
        $angka1 = $request->input('angka1');
        $angka2 = $request->input('angka2');
        $operasi = $request->input('operasi');

        switch ($operasi) {
            case '+':
                $hasilKalkulator = $angka1 + $angka2;
                break;
            case '-':
                $hasilKalkulator = $angka1 - $angka2;
                break;
            case '*':
                $hasilKalkulator = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 == 0) {
                    $hasilKalkulator = "Tidak bisa dibagi nol";
                } else {
                    $hasilKalkulator = $angka1 / $angka2;
                }
                break;
            default:
                $hasilKalkulator = "Operasi tidak valid";
        }

        return view('hasilKalkulator', compact('angka1', 'angka2', 'operasi', 'hasilKalkulator'));
    }
}

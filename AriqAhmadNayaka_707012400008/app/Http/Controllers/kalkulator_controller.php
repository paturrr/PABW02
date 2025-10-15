<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator_controller extends Controller
{
    public function index()
    {
        return view('kalkulator_index');
    }

    public function hitung(Request $request)
    {
        $nilai1 = $request->input('nilai1');
        $nilai2 = $request->input('nilai2');
        $operator = $request->input('operator');
        $hasil = null;

        switch ($operator) {
            case 'tambah':
                $hasil = $nilai1 + $nilai2;
                break;
            case 'kurang':
                $hasil = $nilai1 - $nilai2;
                break;
            case 'kali':
                $hasil = $nilai1 * $nilai2;
                break;
            case 'bagi':
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    return redirect()->back()->with('error', 'Pembagian dengan nol tidak diperbolehkan.');
                }
                break;
            default:
                return redirect()->back()->with('error', 'Operator tidak valid.');
        }

        return view('kalkulator_hasil', compact('hasil', 'nilai1', 'nilai2', 'operator'));
    }
}

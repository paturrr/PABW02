<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kalkulator_controller extends Controller
{
    public function index()
    {
        return view('kalkulator_index');
    }



    public function bangunDatarHitung(Request $request)
    {

        dd($request->all());
        if ($request->rumus == "persegi") {
            $hasil = $request->input("nilai1") * $request->input("nilai1");
        } else if ($request->rumus == "persegipanjang") {
            $hasil = $request->input("nilai1") * $request->input("nilai2");
        } else if ($request->rumus == "segitiga") {
            $hasil = $request->input("nilai1") * $request->input("nilai2") / 2;
        } else if ($request->rumus == "lingkaran") {
            $hasil = 3.14 * $request->input("nilai1") * $request->input("nilai1");
        }
        $rumus = $request->input("rumus");
        $nilai1 = $request->input("nilai1");
        $nilai2 = $request->input("nilai2");
        return view('bangundatar_hasil', compact('hasil', 'rumus', 'nilai1', 'nilai2'));
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

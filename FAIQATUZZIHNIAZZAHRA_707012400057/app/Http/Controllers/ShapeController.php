<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShapeController extends Controller
{
    public function shape()
    {
        return view('shape');
    }

    public function hasil(Request $request)
    {
        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $radius = $request->input('radius');
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
                    $hasil = "tidak bisa dibagi dengan nol.";
                } else {
                    $hasil = $angka1 / $angka2; 
                }
                break;
            default:
                $hasil = "tidak valid.";
                break;
        }

        return view('hasil', compact('angka1', 'angka2', 'operator', 'hasil'));
    }
}

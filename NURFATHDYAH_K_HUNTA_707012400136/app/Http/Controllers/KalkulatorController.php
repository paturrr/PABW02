<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
    return view('index');
    }
    public function hitung(Request $request){
    $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $operasi = $request->operasi;
        $hasil = 0;
        $pesan = null;

        switch ($operasi) {
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
                    $pesan = "Tidak bisa dibagi nol!";
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $pesan = "Operasi tidak valid!";
                break;
        }

        return view('hasil2', compact('angka1', 'angka2', 'operasi', 'hasil', 'pesan'));



    }
}

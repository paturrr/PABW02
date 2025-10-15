<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // menampilkan halaman input
    public function index()
    {
        // Mengembalikan view untuk halaman input
        return view('index');
    }

    //memproses perhitungan dan menampilkan hasilnya
    public function hitung(Request $request)
    {
      
        $angka1 = (float)$request->angka1;
        $angka2 = (float)$request->angka2; 
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
            case 'x':
                $hasil = $angka1 * $angka2;
                break;
            case '/':

                if ($angka2 == 0) {
                    $pesan = "Tidak bisa dibagi nol";
                    $hasil = null; // Set hasil ke null
                } else {
                    $hasil = $angka1 / $angka2;
                }
                break;
            default:
                $pesan = "Operasi tidak valid";
                break;
        }
        return view('hitung', compact('angka1', 'operasi', 'angka2', 'hasil', 'pesan'));
    }
}
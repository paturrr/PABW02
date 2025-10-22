<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function nilai()
    {
        return view('nilai');
    }

    public function hasilnilai(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string',
            'tugas' => 'required|numeric|min:0|max:100',
            'uts'   => 'required|numeric|min:0|max:100',
            'uas'   => 'required|numeric|min:0|max:100',
        ]);

        $nama  = $request->nama;
        $tugas = $request->tugas;
        $uts   = $request->uts;
        $uas   = $request->uas;

        $nilaiAkhir = (0.3 * $tugas) + (0.3 * $uts) + (0.4 * $uas);

        if ($nilaiAkhir >= 85) {
            $grade = 'A';
        } elseif ($nilaiAkhir >= 80) {
            $grade = 'B+';
        } elseif ($nilaiAkhir >= 70) {
            $grade = 'B';
        } elseif ($nilaiAkhir >= 60) {
            $grade = 'C';
        } elseif ($nilaiAkhir >= 50) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        switch ($grade) {
            case 'A':
            case 'B+':
            case 'B':
                $status = 'LULUS';
                break;
            default:
                $status = 'TIDAK LULUS';
                break;
        }

        return view('hasilnilai', compact('nama', 'nilaiAkhir', 'grade', 'status'));
    }
}

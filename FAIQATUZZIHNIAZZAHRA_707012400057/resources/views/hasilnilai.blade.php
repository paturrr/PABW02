<!DOCTYPE html>
<html>
<head>
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>
    <h2>Hasil Penilaian Mahasiswa</h2>

    <p>Nama: {{ $nama }}</p>
    <p>Nilai Akhir: {{ number_format($nilaiAkhir, 2) }}</p>
    {{--Membulatkan atau memformat angka hasil perhitungan agar hanya punya 2 angka di belakang koma--}}
    <p>Grade: {{ $grade }}</p>
    <p>Status: {{ $status }}</p>

    <a href="/nilai">Kembali ke Form</a>
</body>
</html>

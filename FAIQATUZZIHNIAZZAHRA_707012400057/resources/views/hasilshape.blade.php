<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan Bangun Datar</h2>

    <p><b>Bangun Datar:</b> {{ ucfirst(str_replace('_', ' ', $bangun)) }}</p>
    <p><b>Jenis Perhitungan:</b> {{ ucfirst($jenis) }}</p>
    <p><b>Nilai 1:</b> {{ $nilai1 }}</p>
    @if($nilai2)
    <p><b>Nilai 2:</b> {{ $nilai2 }}</p>
    @endif
    <p><b>Hasil:</b> {{ $hasil }}</p>

    <a href="/shape">Kembali ke Kalkulator</a>
</body>
</html>

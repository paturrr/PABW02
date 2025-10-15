<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    <p><strong>Angka Pertama:</strong> {{ $angka1 }}</p>
    <p><strong>Operasi:</strong> {{ $operasi }}</p>
    <p><strong>Angka Kedua:</strong> {{ $angka2 }}</p>
    <p><strong>Hasil:</strong> {{ $hasil }}</p>

    <a href="{{ route('kalkulator.index') }}">Kembali ke Halaman Utama</a>
</body>
</html>

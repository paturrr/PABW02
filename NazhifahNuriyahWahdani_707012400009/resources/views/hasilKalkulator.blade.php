<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    <a href="{{ url('/kalkulator') }}">Kembali</a>
</body>
</html>
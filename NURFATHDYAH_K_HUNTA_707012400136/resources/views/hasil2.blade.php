<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    @if ($pesan)
        <p>{{ $pesan }}</p>
    @else
        <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    @endif

    <a href="/">Kembali</a>
</body>
</html>
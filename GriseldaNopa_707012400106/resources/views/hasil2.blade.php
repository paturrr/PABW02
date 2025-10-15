<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>

    @if ($pesan)
        <p style="color:red;">{{ $pesan }}</p>
    @else
        <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    @endif

    <a href="/index">Kembali ke Kalkulator</a>
</body>
</html>

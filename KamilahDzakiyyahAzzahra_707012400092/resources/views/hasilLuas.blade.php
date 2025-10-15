<!DOCTYPE html>
<html>
<head>
    <title>hasil perhitungan luas</title>
</head>
<body>
    <h2>hasil perhitungan</h2>

    <p><strong>bangun datar:</strong> {{ $bangun }}</p>
    <p><strong>luas:</strong> {{ $hasil }}</p>

    <a href="{{ route('Luas.index') }}">kembali ke halaman utama</a>
</body>
</html>

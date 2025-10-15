<!DOCTYPE html>
<html>
<head>
    <title>Hasil Luas</title>
</head>
<body>
    <h2>Hasil Perhitungan Luas</h2>
    <p>Bangun datar: <strong>{{ ucfirst(str_replace('_', ' ', $jenis)) }}</strong></p>
    <p>Luas: <strong>{{ $hasil }}</strong></p>

    <a href="/luas">Kembali ke halaman utama</a>
</body>
</html>
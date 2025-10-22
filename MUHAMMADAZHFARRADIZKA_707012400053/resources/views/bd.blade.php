<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hasil Perhitungan {{ ucfirst($jenis) }}</h2>

    <p>Luas: {{ $hasil['luas'] }}</p>
    <p>Keliling: {{ $hasil['keliling'] }}</p>

    <a href="/bentuk">Kembali</a>
</body>
</html>
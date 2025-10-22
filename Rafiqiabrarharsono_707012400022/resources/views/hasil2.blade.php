<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body style="font-family: Arial; margin: 50px;">
    <h2>Hasil Perhitungan {{ ucfirst($bangun) }}</h2>

    @if($pesan)
        <p style="color:red;">{{ $pesan }}</p>
    @else
        <p><b>Luas:</b> {{ $hasil['luas'] }}</p>
        <p><b>Keliling:</b> {{ $hasil['keliling'] }}</p>
    @endif

    <a href="/">Kembali ke Halaman Utama</a>
</body>
</html>

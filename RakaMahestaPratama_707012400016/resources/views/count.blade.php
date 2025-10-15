<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan Bangun Datar</h1>
    <p>
        Bangun Datar: <strong>{{ ucfirst(str_replace('_', ' ', $bangun)) }}</strong><br>
        Jenis Perhitungan: <strong>{{ ucfirst($jenis) }}</strong><br>
        Hasil: <strong>{{ $hasil }}</strong>
    </p>
    <a href="/inputform">Kembali ke Halaman Utama</a>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan Bangun Datar</h1>

    <p>
        Bangun Datar: <strong>{{ ucfirst(str_replace('_', ' ', $bangun)) }}</strong><br>
        Jenis Perhitungan: <strong>{{ ucfirst($jenis) }}</strong><br><br>
        Hasil: <strong>{{ $hasil }}</strong>
    </p>

    <a href="/rumus">Kembali ke Halaman Utama</a>

</body>
</html>

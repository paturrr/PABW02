<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body style="font-family: Arial; margin: 80px;">
    <h2>Hasil Perhitungan</h2>

    @if($pesan)
        <p style="color:red;">{{ $pesan }}</p>
    @else
        <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = <strong>{{ $hasil }}</strong></p>
    @endif

    <a href="/">Kembali ke Halaman Utama</a>
</body>
</html>

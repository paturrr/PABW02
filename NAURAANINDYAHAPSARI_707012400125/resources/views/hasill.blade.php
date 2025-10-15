<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    @if($pesanError)
        <p style="color: red;">{{ $pesanError }}</p>
    @else
        <p>
            {{ $angka1 }} {{ $operasi }} {{ $angka2 }} = <strong>{{ $hasil }}</strong>
        </p>
    @endif

    <a href="/index">Kembali ke Halaman Utama</a>
</body>
</html>

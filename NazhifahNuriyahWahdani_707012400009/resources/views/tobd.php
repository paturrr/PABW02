<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    <p><strong>{{ $keterangan }}</strong></p>

    @if(isset($hasil))
        <p>Luas = {{ $hasil['luas'] }}</p>
        <p>Keliling = {{ $hasil['keliling'] }}</p>
    @endif

    <a href="{{ route('viewbd') }}">← Kembali</a>
</body>
</html>

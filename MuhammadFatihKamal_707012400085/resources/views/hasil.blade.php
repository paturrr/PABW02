<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kalkulasi</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    @if (isset($pesanError) && $pesanError)
        <p style="color:red;">{{ $pesanError }}</p>
    @else
        <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    @endif

    <a href="{{ route('index') }}">Kembali</a>
</body>
</html>
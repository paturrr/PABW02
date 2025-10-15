<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>

    @if ($pesan)
        <p>{{ $pesan }}</p>
    @else
        <p>{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    @endif

    <br>
    
    <a href="{{ route('kalkulator.index') }}">
        <button type="button">Kembali</button>
    </a>
</body>
</html>
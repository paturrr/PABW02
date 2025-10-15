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
    
</body>
</html>

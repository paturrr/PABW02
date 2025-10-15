<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>

    @if($pesanError)
        <p class="hasil" style="color:red;">{{ $pesanError }}</p>
    @else
        <p class="hasil">{{ $angka1 }} {{ $operasi }} {{ $angka2 }} = {{ $hasil }}</p>
    @endif

    <a href="/index">Kembali</a>
</body>
</html>
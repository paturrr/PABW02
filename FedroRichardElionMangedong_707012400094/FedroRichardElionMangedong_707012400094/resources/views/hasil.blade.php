<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
</head>
<body>
    {{--
<h2>data Biodata</h2>
<p><strong>Nama :</strong> {{ $nama }}</p>
<p><strong>Umur :</strong> {{ $umur }}</p>
<p><strong>alamat :</strong> {{ $alamat }}</p>
--}}

    <div class="hasil-box">
        <h1>Hasil Perhitungan</h1>  
        <p style="font-size: 1.5em;">
            {{ $angka1 }} {{ $operasi_simbol }} {{ $angka2 }} = <strong>{{ $hasil }}</strong>
        </p>
        <a href="{{ route('kakulator.index') }}">Kembali</a>
    </div>
</body>
</html>
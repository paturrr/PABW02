<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>

    <body>
        <h2>Input Rumus</h2>
        <form action="/hasilLuas" method="post">
            @csrf
            <select name="jenis" id="jenis">
                <option value="persegi">+</option>
                <option value="persegiPanjang">-</option>
                <option value="segitiga">x</option>
            </select>
            <input type="number" name="angka1" id="">
            <label for="angka1">Masukkan Nilai</label>
            <br>
            <label for="jenis">jenis:</label>
            <br>
            <input type="number" name="angka2" id="">
            <label for="angka2">Masukkan Nilai</label>
            <br>
            <button type="submit">Hitung</button>
            hitung
        </form>
    </body>
</body>

</html>
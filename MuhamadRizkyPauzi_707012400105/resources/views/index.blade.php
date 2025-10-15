<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<body>

    <body>
        <h2>Input Biodata</h2>
        <form action="/hasilPerhitungan" method="post">
            @csrf
            <input type="number" name="angka1" id="">
            <label for="angka1">Masukkan Nilai</label>
            <br>
            <label for="operator">Operator:</label>
            <select name="operator" id="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">:</option>
            </select>
            <br>
            <input type="number" name="angka2" id="">
            <label for="angka2">Masukkan Nilai</label>
            <br>
            <button type="submit">Hitung</button>
        </form>
    </body>
</body>

</html>
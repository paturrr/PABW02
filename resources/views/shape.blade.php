<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pilih  Bentuk</h2>
    <form action="/input" method='post'>
        <select name="Bentuk">
            <option value="Lingkaran">Lingkaran</option>
            <option value="Persegi" action="/inputPersegi" method='post'>Persegi</option>
            <option value="Persegi Panjang">Persegi Panjang</option>
            <option value="Segitiga">Segitiga</option>
        </select><br><br>

        <button type="sumbit">Kirim</button>
    </form>
</body>
</html>
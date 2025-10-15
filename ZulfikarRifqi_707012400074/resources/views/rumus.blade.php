<!DOCTYPE>
<html>

<head>
    <title>Rumus Bangun Datar</title>
</head>

<body>
    <h2>Kalkulator Bangun Datar</h2>
    <form action="/count" method="post">
        @csrf
        <select name="bangun">
            <option value="Persegi">Persegi</option>
            <option value="Persegi Panjang">Persegi Panjang</option>
            <option value="Segitiga">Segitiga</option>
            <option value="Lingkaran">Lingkaran</option>
        </select><br><br>
        
        <label for="angka1">Masukkan angka 1</label>
        <input type="number" name="angka1"><br><br>
        <label for="angka2">Masukkan angka 2</label>
        <input type="number" name="angka2"><br><br>

        <button value="submit">Lanjut</button>
    </form>
</body>

</html>
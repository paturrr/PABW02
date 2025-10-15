<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Bangun Datar</title>
</head>
<body>
    <h2>Hitung Luas Bangun Datar</h2>

    <form method="POST" action="/luas">
        @csrf
        <label>Pilih Bangun Datar:</label><br>
        <select name="jenis">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="lingkaran">Lingkaran</option>
            <option value="segitiga">Segitiga</option>
        </select><br><br>

        <label>Masukkan Nilai:</label><br>
        Sisi: <input type="number" name="sisi"><br>
        Panjang: <input type="number" name="panjang"><br>
        Lebar: <input type="number" name="lebar"><br>
        Jari-jari: <input type="number" name="jari"><br>
        Alas: <input type="number" name="alas"><br>
        Tinggi: <input type="number" name="tinggi"><br><br>

        <button type="submit">Hitung Luas</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Bangun Datar</h2>
    <form action="/hasil" method="POST">
        @csrf
        <label>Pilih Bangun Datar:</label>
        <select name="bangun" required>
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="lingkaran">Lingkaran</option>
            <option value="segitiga">Segitiga</option>
        </select>
        <br><br>

        <label>Pilih Jenis Perhitungan:</label>
        <select name="jenis" required>
            <option value="luas">Luas</option>
            <option value="keliling">Keliling</option>
        </select>
        <br><br>

        <label>Masukkan Nilai 1:</label>
        <input type="number" name="nilai1" step="any" required>
        <br><br>

        <label>Masukkan Nilai 2 (jika perlu):</label>
        <input type="number" name="nilai2" step="any">
        <br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Bangun Datar</title>
</head>

<body>
    <h1>Kalkulator Bangun Datar</h1>

    <form action="/count" method="POST">
        @csrf

        <label>Pilih Bangun Datar:</label>
        <select name="bangun" required>
            <option value="Persegi">Persegi</option>
            <option value="Persegi Panjang">Persegi Panjang</option>
            <option value="Segitiga">Segitiga</option>
            <option value="Lingkaran">Lingkaran</option>
        </select>
        <br><br>

        <label>Pilih Jenis Perhitungan:</label>
        <select name="jenis" required>
            <option value="luas">Luas</option>
            <option value="keliling">Keliling</option>
        </select>
        <br><br>

        <h3>Masukkan Nilai:</h3>

        <label>Nilai 1:</label>
        <input type="number" name="nilai1" step="any" required><br><br>

        <label>Nilai 2:</label>
        <input type="number" name="nilai2" step="any"><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>

</html>
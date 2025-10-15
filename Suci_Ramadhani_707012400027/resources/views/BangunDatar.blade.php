<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Bangun Datar</title>
</head>
<body>
    <h2>Hitung Luas Bangun Datar</h2>

    <h3>Persegi</h3>
    <form action="/persegi" method="POST">
        @csrf
        <label>Sisi:</label>
        <input type="number" name="sisi" required>
        <button type="submit">Hitung</button>
    </form>

    <h3>Persegi Panjang</h3>
    <form action="/persegi_panjang" method="POST">
        @csrf
        <label>Panjang:</label>
        <input type="number" name="panjang" required>
        <label>Lebar:</label>
        <input type="number" name="lebar" required>
        <button type="submit">Hitung</button>
    </form>

    <h3>Segitiga</h3>
    <form action="/segitiga" method="POST">
        @csrf
        <label>Alas:</label>
        <input type="number" name="alas" required>
        <label>Tinggi:</label>
        <input type="number" name="tinggi" required>
        <button type="submit">Hitung</button>
    </form>

    <h3>Lingkaran</h3>
    <form action="/lingkaran" method="POST">
        @csrf
        <label>Jari-jari:</label>
        <input type="number" name="jari" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>

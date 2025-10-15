<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Bangun Datar</h2>

    <form action="{{ route('bangun.hitung') }}" method="POST">
        @csrf
        <label>Pilih Bangun Datar:</label>
        <select name="bangun" required>
            <option value="">-- Pilih --</option>
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br><br>

        <div>
            <label>Masukkan sisi (untuk persegi):</label>
            <input type="number" name="sisi" step="any">
        </div>

        <div>
            <label>Masukkan panjang:</label>
            <input type="number" name="panjang" step="any">
        </div>

        <div>
            <label>Masukkan lebar:</label>
            <input type="number" name="lebar" step="any">
        </div>

        <div>
            <label>Masukkan alas:</label>
            <input type="number" name="alas" step="any">
        </div>

        <div>
            <label>Masukkan tinggi:</label>
            <input type="number" name="tinggi" step="any">
        </div>

        <div>
            <label>Masukkan jari-jari:</label>
            <input type="number" name="jari" step="any">
        </div>

        <br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>

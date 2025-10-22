<!DOCTYPE html>
<html>
<head>
    <title>Hitung Bangun Datar</title>
</head>
<body style="font-family: Arial; margin: 50px;">
    <h2>Hitung Luas & Keliling Bangun Datar</h2>

    <form action="/hitung" method="POST">
        @csrf

        <label>Pilih Bangun Datar:</label>
        <select name="bangun" id="bangun" onchange="tampilInput()" required>
            <option value="">-- Pilih --</option>
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <div id="inputBidang" style="margin-top: 20px;"></div>

        <button type="submit">Hitung</button>
    </form>

    <script>
        function tampilInput() {
            const bangun = document.getElementById('bangun').value;
            let html = '';

            if (bangun === 'persegi') {
                html = 'Sisi: <input type="number" name="sisi" required>';
            } else if (bangun === 'persegi_panjang') {
                html = 'Panjang: <input type="number" name="panjang" required><br>Lebar: <input type="number" name="lebar" required>';
            } else if (bangun === 'segitiga') {
                html = 'Alas: <input type="number" name="alas" required><br>' +
                       'Tinggi: <input type="number" name="tinggi" required><br>' +
                       'Sisi 1: <input type="number" name="sisi1" required><br>' +
                       'Sisi 2: <input type="number" name="sisi2" required><br>' +
                       'Sisi 3: <input type="number" name="sisi3" required>';
            } else if (bangun === 'lingkaran') {
                html = 'Jari-jari: <input type="number" name="jari" required>';
            }

            document.getElementById('inputBidang').innerHTML = html;
        }
    </script>
</body>
</html>

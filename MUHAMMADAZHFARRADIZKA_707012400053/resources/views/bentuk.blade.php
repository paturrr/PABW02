<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/hasil" method="POST">
        @csrf
        <label>Pilih Bentuk:</label>
        <select name="jenis" id="jenis" onchange="tampilkanInput()" required>
            <option value="">--Pilih--</option>
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <div id="inputan"></div>

        <button type="submit">Hitung</button>
    </form>

    <script>
        function tampilkanInput() {
            const jenis = document.getElementById("jenis").value;
            const form = document.getElementById("inputan");
            let html = "";

            if (jenis === "persegi") {
                html = 'Sisi: <input type="number" name="sisi" required><br>';
            } else if (jenis === "persegi_panjang") {
                html = 'Panjang: <input type="number" name="panjang" required><br>' +
                       'Lebar: <input type="number" name="lebar" required><br>';
            } else if (jenis === "segitiga") {
                html = 'Alas: <input type="number" name="alas" required><br>' +
                       'Tinggi: <input type="number" name="tinggi" required><br>' +
                       'Sisi 1: <input type="number" name="sisi1" required><br>' +
                       'Sisi 2: <input type="number" name="sisi2" required><br>' +
                       'Sisi 3: <input type="number" name="sisi3" required><br>';
            } else if (jenis === "lingkaran") {
                html = 'Jari-jari: <input type="number" name="jari" required><br>';
            }

            form.innerHTML = html;
        }
    </script>
</body>
</html>
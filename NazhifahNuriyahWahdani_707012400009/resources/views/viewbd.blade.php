<!DOCTYPE html>
<html>
<head>
    <title>Bangun Datar</title>
</head>
<body>
    <h2>Bangun Datar</h2>

    <form action="{{ route('tobd') }}" method="POST">
        @csrf
        <label>Pilih Bangun Datar:</label>
        <select name="bangun" id="bangun" onchange="showFields()">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>
        <br><br>

        <div id="input-fields"></div>

        <button type="submit">Hitung</button>
    </form>

    <script>
        function showFields() {
            const bangun = document.getElementById('bangun').value;
            const div = document.getElementById('input-fields');
            let html = '';

            if (bangun === 'persegi') {
                html = '<input type="number" name="sisi" placeholder="Masukkan sisi" required>';
            } else if (bangun === 'persegi_panjang') {
                html = '<input type="number" name="panjang" placeholder="Panjang" required> ' +
                       '<input type="number" name="lebar" placeholder="Lebar" required>';
            } else if (bangun === 'segitiga') {
                html = '<input type="number" name="alas" placeholder="Alas" required> ' +
                       '<input type="number" name="tinggi" placeholder="Tinggi" required>';
            } else if (bangun === 'lingkaran') {
                html = '<input type="number" name="jari" placeholder="Jari-jari" required>';
            }

            div.innerHTML = html;
        }

        showFields(); // tampilkan default saat halaman dibuka
    </script>
</body>
</html>


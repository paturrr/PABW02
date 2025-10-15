<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Bangun Datar</title>
</head>
<body>
    <h2 style="text-align: center;">Kalkulator Bangun Datar</h2>

    <form action="{{ route('hitung') }}" method="POST" style="max-width: 320px; margin: auto;">
        @csrf

        <label for="jenis">Pilih Bangun Datar:</label><br>
        <select name="jenis" id="jenis" onchange="tampilkanInput()" style="width: 100%; margin-top: 5px;">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <div id="inputan" style="margin-top: 15px;"></div>

        <button type="submit" style="margin-top: 15px; width: 100%;">Hitung</button>
    </form>

    @if(isset($hasil))
        <p style="text-align: center; margin-top: 20px;">{{ $keterangan }}</p>
    @endif

    <script>
        function tampilkanInput() {
            const jenis = document.getElementById('jenis').value;
            const div = document.getElementById('inputan');
            let html = '';

            if (jenis === 'persegi') {
                html = `
                    <label for="sisi">Sisi:</label><br>
                    <input type="number" name="sisi" id="sisi" style="width: 100%; margin-top: 5px;">
                `;
            } 
            else if (jenis === 'persegi_panjang') {
                html = `
                    <label for="panjang">Panjang:</label><br>
                    <input type="number" name="panjang" id="panjang" style="width: 100%; margin-top: 5px;"><br><br>
                    <label for="lebar">Lebar:</label><br>
                    <input type="number" name="lebar" id="lebar" style="width: 100%; margin-top: 5px;">
                `;
            } 
            else if (jenis === 'segitiga') {
                html = `
                    <label for="alas">Alas:</label><br>
                    <input type="number" name="alas" id="alas" style="width: 100%; margin-top: 5px;"><br><br>
                    <label for="tinggi">Tinggi:</label><br>
                    <input type="number" name="tinggi" id="tinggi" style="width: 100%; margin-top: 5px;">
                `;
            } 
            else if (jenis === 'lingkaran') {
                html = `
                    <label for="jari">Jari-jari:</label><br>
                    <input type="number" name="jari" id="jari" style="width: 100%; margin-top: 5px;">
                `;
            }

            div.innerHTML = html;
        }

        
        tampilkanInput();
    </script>
</body>
</html>
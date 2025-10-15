<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Bangun Datar</title>
</head>
<body>
    <h2>Kalkulator Bangun Datar</h2>

    <form action="{{ route('hitung') }}" method="POST">
        @csrf
        <label>Pilih Bangun Datar:</label>
        <select name="jenis" id="jenis" onchange="tampilkanInput()">
            <option value="persegi">Persegi</option>
            <option value="persegi_panjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="lingkaran">Lingkaran</option>
        </select>

        <div id="inputan"></div>

        <button type="submit">Hitung</button>
    </form>

    @if(isset($hasil))
        <p>{{ $keterangan }}</p>
    @endif

    <script>
        function tampilkanInput() {
            let jenis = document.getElementById('jenis').value;
            let div = document.getElementById('inputan');
            let html = '';

            if (jenis == 'persegi') {
                html = '<label>Sisi:</label><input type="number" name="sisi">';
            } else if (jenis == 'persegi_panjang') {
                html = '<label>Panjang:</label><input type="number" name="panjang"><br><label>Lebar:</label><input type="number" name="lebar">';
            } else if (jenis == 'segitiga') {
                html = '<label>Alas:</label><input type="number" name="alas"><br><label>Tinggi:</label><input type="number" name="tinggi">';
            } else if (jenis == 'lingkaran') {
                html = '<label>Jari-jari:</label><input type="number" name="jari">';
            }

            div.innerHTML = html;
        }

        tampilkanInput();
    </script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>kalkulator luas bangun datar</title>
</head>
<body>
    <h2>kalkulator luas bangun datar</h2>

    <form action="{{ route('Luas.hitung') }}" method="POST">
        @csrf
        <p>
            <label>pilih bangun datar:</label><br>
            <select name="bangun" required>
                <option value="">-- pilih --</option>
                <option value="persegi">persegi (masukkan sisi di angka 1)</option>
                <option value="persegi_panjang">persegi panjang (masukkan panjang dan lebar)</option>
                <option value="segitiga">segitiga (masukkan alas dan tinggi)</option>
                <option value="lingkaran">lingkaran (masukkan diameter di angka 1)</option>
            </select>
        </p>

        <p>
            <label>angka 1:</label><br>
            <input type="number" name="angka1" required>
        </p>

        <p>
            <label>angka 2:</label><br>
            <input type="number" name="angka2">
        </p>

        <p>
            <button type="submit">hitung</button>
        </p>
    </form>

    <p><strong>keterangan:</strong></p>
    <ul>
        <li>persegi → angka 1 = sisi</li>
        <li>persegi panjang → angka 1 = panjang, angka 2 = lebar</li>
        <li>segitiga → angka 1 = alas, angka 2 = tinggi</li>
        <li>lingkaran → angka 1 = diameter</li>
    </ul>
</body>
</html>

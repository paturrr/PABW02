<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body style="font-family: Arial; margin: 80px;">
    <h2>Kalkulator</h2>

    <form action="/hitung" method="POST">
        @csrf
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>

        <input type="number" name="angka2" placeholder="Angka kedua" required>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>

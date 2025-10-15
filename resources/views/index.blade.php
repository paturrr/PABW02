<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Laravel</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    <form method="POST" action="/hitung">
        @csrf
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operator">
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

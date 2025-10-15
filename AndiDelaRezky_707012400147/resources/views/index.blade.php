<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="/hitung" method="POST">
        @csrf
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="angka2" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
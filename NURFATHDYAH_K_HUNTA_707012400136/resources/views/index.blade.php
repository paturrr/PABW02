<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="/hasil2" method="POST">
        @csrf
        <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
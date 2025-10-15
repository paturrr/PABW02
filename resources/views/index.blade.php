<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <form method="POST" action="/hitung1">
        @csrf
        <label>Angka pertama:</label>
        <input type="number" name="angka1" required><br><br>

        <label>Operasi:</label>
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="÷">÷</option>
        </select><br><br>

        <label>Angka kedua:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>

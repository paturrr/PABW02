<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="/hitung" method="POST">
        @csrf
        <input type="number" name="angka1" required>
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="×">×</option>
            <option value="÷">÷</option>
        </select>
        <input type="number" name="angka2" required>
        <br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
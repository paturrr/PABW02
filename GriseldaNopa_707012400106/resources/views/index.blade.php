<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>

    <form action="/hitung" method="POST">
        @csrf
        <label>Angka Pertama:</label>
        <input type="number" name="angka1" required><br><br>

        <label>Pilih Operasi:</label>
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select><br><br>

        <label>Angka Kedua:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>

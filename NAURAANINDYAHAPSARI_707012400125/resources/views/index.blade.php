<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    <form method="POST" action="/hitung">
        @csrf
        <label>Angka 1:</label>
        <input type="number" name="angka1" required><br><br>

        <label>Operasi:</label>
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>

        <label>Angka 2:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Hitung</button>
    </form>
</body>
</html>
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
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <br>
        <br>
        <button type="submit">Hitung</button>
    </form>
</body>

</html>
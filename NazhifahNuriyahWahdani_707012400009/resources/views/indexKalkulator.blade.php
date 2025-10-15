<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form action="{{ route('hitung') }}" method="POST">
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

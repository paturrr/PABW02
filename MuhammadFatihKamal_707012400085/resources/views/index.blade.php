<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Laravel</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="{{ route('hasil') }}" method="POST">
        @csrf
        <input type="number" name="angka1" required placeholder="Angka pertama">
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">×</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="angka2" required placeholder="Angka kedua">
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
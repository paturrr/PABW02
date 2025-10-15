<!DOCTYPE html>
<html>
<head>
    <title>Input Kalkulator</title>
</head>
<body>
    <h2>Input Kalkulator</h2>

    <form action="{{ route('kalkulator.hitung') }}" method="POST">
        @csrf
        <p>
            <label>Angka Pertama:</label><br>
            <input type="number" name="angka1" required>
        </p>
        <p>
            <label>Operasi:</label><br>
            <select name="operasi" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="×">×</option>
                <option value="÷">÷</option>
            </select>
        </p>
        <p>
            <label>Angka Kedua:</label><br>
            <input type="number" name="angka2" required>
        </p>
        <p>
            <button type="submit">Hitung</button>
        </p>
    </form>
</body>
</html>

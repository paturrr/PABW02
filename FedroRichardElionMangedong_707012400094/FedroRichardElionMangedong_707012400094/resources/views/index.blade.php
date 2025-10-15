<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="kakulator">
        <h2>Kalkulator Sederhana</h2>
        <form action="{{ route('kakulator.hitung') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="angka1">Angka Pertama:</label>
                <input type="number" id="angka1" name="angka1" required>
            </div>
            <div class="form-group">
                <label for="operasi">Operasi:</label>
                <select id="operasi" name="operasi">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">×</option>
                    <option value="/">÷</option>
                </select>
            </div>
            <div class="form-group">
                <label for="angka2">Angka Kedua:</label>
                <input type="number" id="angka2" name="angka2" required>
            </div>
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
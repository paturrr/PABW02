<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR SEDERHANA</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
        <form action="/hitung" method="POST">
            @csrf 
            <label for="angka1">Angka Pertama:</label>
            <input type="number" name="angka1">

            <label for="operasi">Operasi:</label>
            <select id="operasi" name="operasi" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="x">x</option>
                <option value="/">/</option>
            </select>

            <label for="angka2">Angka Kedua:</label>
            <input type="number" name="angka2">

            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
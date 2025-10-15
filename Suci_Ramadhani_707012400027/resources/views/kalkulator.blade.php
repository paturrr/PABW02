<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
   <h1>Kalkulator Sederhana</h1>
   <form action="hitung" method = "POST">
    @csrf 
     <input type="number" name="angka1" placeholder="Angka pertama" required>
        <select name="operasi" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">x</option>
            <option value="/">÷</option>
        </select>
        <input type="number" name="angka2" placeholder="Angka kedua" required>
        <button type="submit">Hitung</button>
    </form>

</body>
</html>
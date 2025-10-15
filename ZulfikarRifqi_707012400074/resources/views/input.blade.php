<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <h2>Kalkulator Sederhana</h2>
    <form action="/hitung" method="post">
        @csrf
        <input type="number" name="pertama" placeholder="Masukkan angka pertama">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="kedua" placeholder="Masukkan angka kedua"> <br><br>
        

        <button type="submit">Hitung</button>
    </form>
</body>

</html>
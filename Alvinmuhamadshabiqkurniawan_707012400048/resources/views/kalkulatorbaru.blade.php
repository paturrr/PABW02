<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Baru</title>
</head>
<body>
    <form action="tampilkan" method="post">
        @csrf

        <label>Masukkan Angka 1</label>
        <input type="number" name="AngkaA">
        <label>Masukkan Angka 2</label>
        <input type="number" name="AngkaB">

        <button type="submit" name="tambah">+</button>
        <button type="submit" name="kurang">-</button>
        <button type="submit" name="kali">x</button>
        <button type="submit" name="bagi">/</button>

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tampilkanLoop" method="post">
        @csrf
        <label>Masukkan Angka</label>
        <input type="text" name="InputString">
        <label>Masukkan Jumlah Perulangan</label>
        <input type="number" name="InputAngka">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
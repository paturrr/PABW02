<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Input Biodata</h2>
    <form action="/proses" method="post">
        @csrf
        <label for="">Nama: </label>
        <input type="text" name="nama"><br><br>

        <label for="">Umur: </label>
        <input type="number" name="umur"><br><br>

        <label for="">Alamat: </label>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
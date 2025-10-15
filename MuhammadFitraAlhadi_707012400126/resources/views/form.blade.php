<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <h2>Input Biodata</h2>
    <form action="/proses" method="post">
        @csrf
        <label>Nama :</label>
        <input type="text" name="nama" required><br><br>

        <label>Umur :</label>
        <input type="number" name="umur" required><br><br>

        <label>Alamat :</label>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
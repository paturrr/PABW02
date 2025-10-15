<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form biodata</title>
</head>
<body>
    <h2>input biodata</h2>
    <form action="/proses" method="post">
        @csrf
        <label>nama:</label>
        <input type="text" name="nama"><br><br>

        <label for="umur">umur:</label>
        <input type="number" name="umur"><br><br>

        <label for="alamat">alamt:</label>
        <textarea name="alamat" ></textarea>

        <button type="submit">kirim</button>

</form>
</body>
</html>
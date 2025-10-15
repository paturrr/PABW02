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
        <label for="nama">Nama:</label>
        <input type="text" name="nama">
        <br>
        <label for="umur">umur</label>
        <input type="text" name="umur">
        <br>
        <label for="alamat">Alamat:</label>
        <input type="textarea" name="alamat">

        <button type="submit">
            kirim
        </button>
    </form>
</body>

</html>
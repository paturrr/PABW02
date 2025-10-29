<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input mahasiswa</title>
</head>

<body>
    <h2>Input data mahasiswa</h2>

    <form action="/simpan" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama"><br>

        <label for="nim">NIM:</label><br>
        <input type="text" name="nim"><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <button type="submit">Simpan</button>
    </form>

</body>

</html>
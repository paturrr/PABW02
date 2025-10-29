<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Form</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <a href="/mahasiswa/tampil">Lihat hasil</a>
    <form action="/mahasiswa" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td><label for="nim">NIM:</label></td>
                <td><input type="text" id="nim" name="nim" required></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan:</label></td>
                <td><input type="text" id="jurusan" name="jurusan" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
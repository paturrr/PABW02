<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Biodata</title>
</head>
<body>
    <form action="/process" method="POST">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td>
                <input type="num" name="umur">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="Alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td><button>Kirim</button></td>
        </tr>
    </table>
    </form>
</body>
</html>
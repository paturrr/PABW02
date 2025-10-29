<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h2>Daftar mahasiswa</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>JURUSAN</th>
        </tr>

        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{$mhs->id}}</td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->jurusan}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
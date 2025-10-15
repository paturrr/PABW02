<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
</head>
<body style="width: 100%; height: 100vh; justify-content: center; align-items: center; display: flex; flex-direction: column;">
    <h2>Kalkulator Hasil</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nilai1</td>
            <td>Operator</td>
            <td>Nilai2</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td>{{$nilai1}}</td>
            <td>
                <?php
                    if ($operator == 'tambah') {
                        echo '+';
                    } elseif ($operator == 'kurang') {
                        echo '-';
                    } elseif ($operator == 'kali') {
                        echo '*';
                    } elseif ($operator == 'bagi') {
                        echo '/';
                    }
                ?>
                
            </td>
            <td>{{$nilai2}}</td>
            <td>{{$hasil}}</td>
        {{-- <tr>
            <td>Nilai 1</td>
            <td>:</td>
            <td>
                {{$nilai1}}
            </td>
        </tr>
        <tr>
            <td>Nilai 2</td>
            <td>:</td>
            <td>
                {{$nilai2}}
            </td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>:</td>
            <td>
                {{$operator}}
            </td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td>
                {{$hasil}}
            </td>
        </tr> --}}
        </tr>
    </table>
    <a href="{{ route('kalkulator.index') }}">Kembali</a>
</body>
</html>
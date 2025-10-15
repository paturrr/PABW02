<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bangun Datar</title>
</head>
<body style="width: 100%; height: 100vh; justify-content: center; align-items: center; display: flex; flex-direction: column;">
    <h2>Bangun Datar</h2>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <td>
                Rumus : {{$rumus}}
            </td>
        </tr>
        <tr>
            <td>
                @if ($rumus == "persegi")
                {{$nilai1}} x {{$nilai1}} = {{$hasil}}
                @endif
                @if ($rumus == "persegipanjang")
                {{$nilai1}} x {{$nilai2}} = {{$hasil}}
                @endif
                @if ($rumus == "segitiga")
                {{$nilai1}} x {{$nilai2}} / 2 = {{$hasil}}
                @endif
                @if ($rumus == "lingkaran")
                3,14 * r * r = {{$hasil}}
                @endif
            </td>
        </tr>
    </table>
        <a href="{{ route('kalkulator.index') }}">Kembali</a>
    </body>
</html>
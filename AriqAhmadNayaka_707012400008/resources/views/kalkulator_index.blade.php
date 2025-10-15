<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
</head>
<body style="width: 100%; height: 100vh; justify-content: center; align-items: center; display: flex; flex-direction: column;">
    <?php 
        if (session('error')) {
            echo "<h3 style='color: red;'>" . session('error') . "</h3>";
            session()->forget('error');
        }
        ?>
    <h2>Kalkulator</h2>
    <form action="/kalkulator" method="POST">
    @csrf
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nilai 1</td>
            <td></td>
            <td>Nilai 2</td>
            <td></td>
        </tr>
        <tr>
            <td>
                <input type="number" name="nilai1">
            </td>
            <td>
                <select name="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </td>
            <td>
                <input type="number" name="nilai2">
            </td>
            <td>
                <button>Hitung</button>
            </td>

        {{-- <tr>
            <td>Nilai 1</td>
            <td>:</td>
            <td>
                <input type="number" name="nilai1">
            </td>
        </tr>
        <tr>
            <td>Nilai 2</td>
            <td>:</td>
            <td>
                <input type="number" name="nilai2">
            </td>
        </tr>
        <tr>
            <td>Operator</td>
            <td>:</td>
            <td>
                <select name="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><button>Hitung</button></td>
        </tr> --}}
    </table>
    </form>

</body>
</html>
<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator</title>
</head>

<body>
    <h2>Input Value</h2>
    <form action="hasilakhir" method="post">
        @csrf
        <label>Angkan 1:</label>
        <input type="number" name="angka"><br><br>

        <label>Angka 2:</label>
        <input type="number" name="angka2"><br><br>

        <label for="hitung">Pilih Operasi</label>

        <select name="Aritmatika" id="operasi">
            <option  Value="tambah">+</option>
            <option  Value="kurang">-</option>
            <option  Value="kali">x</option>
            <option  Value="bagi">/</option>
        </select>
        <br><br>

        <button>Hitung</button>
    </form>
    <?php
    var_dump($_POST);
    ?>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Laravel</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="POST" action="/hitung">
        @csrf

        <label> Angka 1 </label> 
        <input type="number" name="angka1" placeholder="Angka pertama" required> <br><br>

        <label> Operasi Hitung </label> 
        <select name="operator">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> × </option>
            <option value="/"> ÷ </option>
        </select> <br><br>

        <label> Angka 2 </label> 
        <input type="number" name="angka2" placeholder="Angka kedua" required> <br><br>

        <button type="submit"> Hitung </button>
    </form>
</body>
</html>
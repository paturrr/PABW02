<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasilsensor" method="post">
        @csrf
        <h2>Input Informasi</h2>
        <br>
        <select name="pilihdaerah" id="">
            <option value="1">Dayeuhkolot</option>
            <option value="2">Baleendah</option>
            <option value="3">Majalaya</option>
        </select>
        <input type="number" name="cm">
        <br>
        <input type="number" name="mm">
        <br>
        <input type="number" name="%">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
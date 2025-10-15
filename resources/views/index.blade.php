<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAlkulator</title>
</head>
<body>
    <h2>Input angka</h2>
    <form action="/hasil" method="post">
        @csrf
        <label for="">angka 1:</label>
        <input type="number" name="a"><br><br>

        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select><br><br>

        <label for="">angka 2:</label>
        <input type="number" name="b"><br><br>

        

        <button type="submit">Hitung</button>
</body>
</html>
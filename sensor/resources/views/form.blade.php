<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Sensor</title>
</head>
<body>
    <h2>Input Data Sensor</h2>
    <form action="/proses" method="post">
        @csrf
        <label>Lokasi Sensor:</label>
        <input type="text" name="Lokasi Sensor"><br><br>

        <label>Ketinggian Air:</label>
        <textarea name="Ketinggian Air"></textarea><br><br>

        <label>Curah Hujan:</label>
        <textarea name="Curah Hujan"></textarea><br><br>

        <label>Kelembapan Tanah:</label>
        <textarea name="Kelembapan Tanah"></textarea><br><br>

        <button type="submit">Kirim</button>
</html>
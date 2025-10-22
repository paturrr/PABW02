<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Sensor</title>
</head>
<body>    
   <h2>Data Sensor</h2>
   <form action="/proses" method="post">
    @csrf 
    <label> Lokasi sensor:</label>
    <input type="text" Lokasi sensor="Lokasi sensor"><br><br>

    <label> ketinggian air:</label>
    <input type="Ketinggian air" name="Ketinggian air"><br><br>

    <label>Curah hujan:</label>
    <textarea name="Curah hujan"></textarea><br><br>

    <label>Kelembapan:</label>
    <textarea name="Kelembapan"></textarea><br><br>


    <button type="submit">kirim</button>
</form>
</body>
</html>
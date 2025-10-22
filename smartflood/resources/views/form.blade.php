<!DOCTYPE html>
<html>
<head>
    <title>Simulasi Input Data Sensor IoT</title>
</head>
<body>
    <h2>Form Simulasi Input Data Sensor</h2>
    <form action="/hasilSensor" method="POST">
        @csrf

        <label>Lokasi Sensor:</label>
        <select name="lokasi" required>
            <option value="Dayeuhkolot">Dayeuhkolot</option>
            <option value="Baleendah">Baleendah</option>
            <option value="Majalaya">Majalaya</option>
        </select>
        <br><br>

        <label>Ketinggian Air (cm):</label>
        <input type="number" name="ketinggian" required>
        <br><br>

        <label>Curah Hujan (mm):</label>
        <input type="number" name="curah" required>
        <br><br>

        <label>Kelembapan Tanah (%):</label>
        <input type="number" name="kelembapan" required>
        <br><br>

        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>

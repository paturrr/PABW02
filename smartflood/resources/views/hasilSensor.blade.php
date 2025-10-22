<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data Sensor</title>
</head>
<body>
    <h2>Hasil Input Data Sensor</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Lokasi Sensor</th>
            <th>Ketinggian Air (cm)</th>
            <th>Curah Hujan (mm)</th>
            <th>Kelembapan Tanah (%)</th>
        </tr>
        <tr>
            <td>{{ $data['lokasi'] }}</td>
            <td>{{ $data['ketinggian'] }}</td>
            <td>{{ $data['curah'] }}</td>
            <td>{{ $data['kelembapan'] }}</td>
        </tr>
    </table>

    <br>
    <a href="/form">← Kembali ke Form</a>
</body>
</html>

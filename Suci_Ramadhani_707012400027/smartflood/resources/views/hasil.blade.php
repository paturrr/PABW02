
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Sensor</title>
</head>
<body>
    <h1>Hasil Sensor</h1>
    <table>
        <tr>
        <th>Nama: </th>
         <th>NIM: </th>
          <th>Lokasi Sensor: </th>
           <th>Ketinggian Air: </th>
           <th>Curah Hujan: </th>
           <th>Kelembapan Tanah: </th>
           </tr>

           <tr>
            <td>
                <th>Nama: {{ $lokasi }}</th>
                 <th>Ketinggian Air: {{ $ketinggian }}</th>
                 <th>Curah Hujan: {{$hujan}}</th>
                 <th>Kelembapan Tanah: {{$kelembapan}}</th>
            </td>
           </tr>
    </table>
</body>
</html>
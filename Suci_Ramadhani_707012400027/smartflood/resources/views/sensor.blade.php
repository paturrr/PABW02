<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sensor IoT</title>
</head>
<body>
    <h1>Selamat Datang di Data Sensor IoT</h1>
    <p>mengetahui data sensor banjir di Kabupaten Bandung berbasis Smart City menggunakan IoT</p>
    <form action="/hasil-sensor" method= "post">
        @csrf 
        <label>Nama: </label>
        <input type="text" name= "nama">
        <br>
        <br>
        <label> NIM: </label>
       <input type="text" name= "nim">
       <br>
       <br>
       <label>Lokasi Sensor: </label>
      <select name="" id="">Lokasi Sensor</select>
      <option value="lokasi">Dayeuhkolot</option>
      <option value="lokasi">Baleendah</option>
      <option value="lokasi">Majalaya</option>
        <br>
        <br>

       <label>Ketinggian Air: </label>
       <input type="number" name= "ketinggian">
        <br>
        <br>

         <label>Curah Hujan: </label>
       <input type="number" name= "ketinggian">
        <br>
        <br>

         <label>Kelembapan Tanah: </label>
       <input type="number" name= "ketinggian">
        <br>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>
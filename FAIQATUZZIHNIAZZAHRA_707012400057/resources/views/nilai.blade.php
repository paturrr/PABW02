<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <h2>Form Penilaian Mahasiswa</h2>

    <form action="/hasilnilai" method="POST">
        @csrf

        <label>Nama Mahasiswa:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Nilai Tugas:</label><br>
        <input type="number" name="tugas" min="0" max="100" required><br><br>

        <label>Nilai UTS:</label><br>
        <input type="number" name="uts" min="0" max="100" required><br><br>

        <label>Nilai UAS:</label><br>
        <input type="number" name="uas" min="0" max="100" required><br><br>

        <button type="submit">Hitung Nilai</button>
    </form>

    @if ($errors->any())
    {{--Mengecek apakah ada error hasil dari proses validasi di controller.
Kalau ada, maka blok @if ... @endif ini akan dijalankan.--}}
        <p style="color:red;">Terjadi kesalahan:</p>
        <ul>
            {{--Mengambil semua pesan error yang ada (bisa lebih dari satu).--}}
            @foreach ($errors->all() as $error)
            {{--Melakukan perulangan untuk menampilkan semua pesan error satu per satu dalam list (<li>).--}}
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>

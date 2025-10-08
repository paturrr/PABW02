<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

<h1>About Page</h1>
<p>Nama : {{ $name }}</p>
<p>NIM  : {{ $nim }}</p>
<p>Kelas: {{ $kelas }}</p>

<a href="{{ route('home.page') }}">Kembali ke home</a>
<br>
<a href="{{ route('profile') }}">Ke halaman profile</a>
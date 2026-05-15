<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku Tersedia di Perpustakaan</h1>

    <ul>
        {{-- Kita menggunakan sistem Laravel (Blade) untuk menampilkan daftar data dari Controller --}}
        @foreach($daftar_buku as $buku)
            <li>{{ $buku }}</li>
        @endforeach
    </ul>

</body>
</html>
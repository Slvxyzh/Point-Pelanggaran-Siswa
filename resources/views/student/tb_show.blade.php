<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail siswa</title>
</head>
<body>
    <h1>Nama :{{ $siswa->nama }}</h1>
    <h1>Nisn :{{ $siswa->nisn }}</h1>
    <h1>Jenis kelamin :{{ $siswa->jeniskelamin }}</h1>
    <h1>Alamat :{{ $siswa->alamat }}</h1>
    <h1>Nohp :{{ $siswa->nohp }}</h1>
    <h1>Point :{{ $siswa->point }}</h1>
    <h1>Email :{{ $siswa->email }}</h1>
</body>
</html>
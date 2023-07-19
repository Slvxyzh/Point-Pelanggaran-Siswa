<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="/store/siswa/" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control"  name="nama" id="nama">
    </div>
    <div class="mb-3">
        <label for="nisn" class="form-label">Nisn</label>
        <input type="number" class="form-control"  name="nisn" id="nisn">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control"  name="alamat" id="alamat">
    </div>
    <div class="mb-3">
        <label for="nohp" class="form-label">Nohp</label>
        <input type="number" class="form-control"  name="nohp" id="nohp">
    </div>
    <div class="mb-3">
        <label for="point" class="form-label">point</label>
        <input type="number" class="form-control"  name="point" id="point">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control"  name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis kelamin</label>
        <input type="text" class="form-control"  name="jeniskelamin" id="jeniskelamin">
    </div>
    <div class="mb-3">
        <label for="returned" class="form-label">Pilihan</label>
        <select name="kelas_id" class="form-select" aria-label="Default select example">
            <option selected>Silahkan pilih</option>
            @foreach ($siswa as $item)
            <option value="{{$item->kelas->id}}">{{$item->kelas->nama}}</option>
            @endforeach
        </select>  
    </div>
    <div class="mb-3">
        <label for="returned" class="form-label">Pilihan</label>
        <select name="jurusan_id" class="form-select" aria-label="Default select example">
            @foreach ($siswa as $item)

            <option value="{{$item->jurusan->id}}">{{$item->jurusan->nama}}</option>
            @endforeach
            <option selected>Silahkan pilih</option>
        </select>  
    </div>

    <button class="btn btn-primary" type="submit">Save</button>
</form>

</body>
</html>

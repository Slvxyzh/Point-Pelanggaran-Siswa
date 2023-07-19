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
    <form action="/laporan-update/{{ $laporan->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="guru" class="form-label">guru</label>
        <input type="text" class="form-control"  name="guru" id="guru">
    </div>
    <div class="mb-3">
        <label for="siswa" class="form-label">siswa</label>
        <input type="text" class="form-control"  name="siswa" id="siswa">
    </div>
    <div class="mb-3">
        <label for="pelanggaran" class="form-label">pelanggaran</label>
        <input type="text" class="form-control"  name="pelanggaran" id="pelanggaran">
    </div>
   

    <button class="btn btn-primary" type="submit">Save</button>
</form>

</body>
</html>

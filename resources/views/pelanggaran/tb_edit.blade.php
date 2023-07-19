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
    <form action="/pelanggar-update/{{ $pelanggaran->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <div class="mb-3">
        <label for="jenispelanggaran" class="form-label">Jenispelanggaran</label>
        <input type="text" class="form-control"  name="jenispelanggaran" id="jenispelanggaran">
    </div>
    <div class="mb-3">
        <label for="tindakan" class="form-label">Tindakan</label>
        <input type="text" class="form-control"  name="tindakan" id="tindakan">
    </div>
    <div class="mb-3">
        <label for="jmlh_point" class="form-label">jmlh_point</label>
        <input type="text" class="form-control"  name="jmlh_point" id="jmlh_point">
    </div>
    
    <button class="btn btn-primary" type="submit">Save</button>
</form>

</body>
</html>

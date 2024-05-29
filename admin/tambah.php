<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
    <div class="container" class= "col-8">
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name='nama'>
</div>

<div class="mb-3">
    <label for="nim" class="form-label">Nim</label>
    <input type="text" class="form-control" id="nim" name='nim'>
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name='email'>
</div>

<div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" name='jurusan'>
</div>
    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
    </div>
    </form>
<?php 
require '../functions/fungsi.php';


if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert ('data berhasil ditambah!');
                    document.location.href = 'index_admin.php';
                </script>";
    }
}
?>





<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
    <div class="container" class= "col-8">
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name='name'>
</div>

<div class="mb-3">
    <label for="places" class="form-label">Places</label>
    <input type="text" class="form-control" id="places" name='places'>
</div>

<div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="text" class="form-control" id="contact" name='contact'>
</div>

<div class="mb-3">
    <label for="room" class="form-label">room</label>
    <input type="text" class="form-control" id="room" name='room'>
</div>

<div class="mb-3">
            <label for="photos" class="form-label">foto  </label>
            <img src="../img/?= $cli['photos']; ?>"> 
            <input type="file" name="photos" class="form-control" id="photos" required>
        </div>
    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
    </div>
    </form>
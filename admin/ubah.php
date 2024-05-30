<?php 
require '../functions/fungsi.php';

if (!isset ($_GET['id'])) {
    header("Location: index_admin.php");
    exit;
}

$id = $_GET['id'];
$cli = query("SELECT * FROM clinic WHERE id= $id") [0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert ('data berhasil diubah!');
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
    <title>Ubah Data Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
<body>
    <div class="container" class= "col-8">
    <h1>Ubah Data Puskesmas</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $cli["id"]; ?>">
<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" id="name" name='name' value="<?= $cli["name"]; ?>" required >
</div>

<div class="mb-3">
    <label for="places" class="form-label">Place</label>
    <input type="text" class="form-control" id="places" name='places'  value="<?= $cli["places"]; ?>">
</div>


<div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="text" class="form-control" id="contact" name='contact'  value="<?= $cli["contact"]; ?>">
</div>

<div class="mb-3">
    <label for="room" class="form-label">Room</label>
    <input type="text" class="form-control" id="room" name='room'  value="<?= $cli["room"]; ?>">
</div>

<div class="mb-3">
            <label for="foto" class="form-label">foto : </label>
            <input type="file" name="foto" class="form-control" id="foto" required>
        </div>
    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
    </div>
    </form>
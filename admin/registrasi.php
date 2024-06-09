<?php 
require '../functions/fungsi.php';


if(isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
       echo "<script>
    alert('user baru berhasil ditambahkan, silahkan login akang/teteh!');
    document.location.href = 'login.php';
        </script>";
    } else {
        echo 'user gagal ditambahkan';
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>REGISTER</title>
</head>

<body>


    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1></h1>

            </form>
        </div>
        <div class="form-container sign-in">
            <form  action="" method="post">
                <h1>registrasi</h1>
                <input type="username" id="username" placeholder="username" name="username" autofocus autocomplete="off" required>
                <input type="password" id="password" placeholder="password" name="password1" required>
                <input type="password" id="password" placeholder="konfirmasi password" name="password2" required>
                <button type="submit" name="registrasi">Regist</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1></h1>
                    <p></p>
                    <button class="hidden" id="login"></button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1></h1>
                    <p>Punya akun?</p>
                    <a href="login.php"><button name="register">Masuk</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>


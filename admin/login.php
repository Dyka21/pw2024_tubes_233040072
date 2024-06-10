<?php
session_start();


if (isset($_SESSION['login'])) {
    if ($_SESSION['role'] == 'admin') {
        header('Location: index_admin.php');
    } else {
        header('Location: index_user.php');
    }
    exit;
}
require '../functions/fungsi.php';

// login
if(isset($_POST['login'])){
    $login =    login($_POST);
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>LOGIN</title>
</head>

<body>


    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1>Buat Akun</h1>
                <span></span>
            
            </form>
        </div>
        <div class="form-container sign-in">
            <form  action="" method="post">
            <?php if(isset($login['error'])) : ?>
                    <p><?= $login['pesan']; ?></p>
                <?php endif; ?>
                <h1>Masuk</h1>
                <input type="text" id="text" placeholder="username" required name="username" autocomplete="off" autofocus>
                <input type="password" id="password" placeholder="Password" name="password">
                <button name="login">Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1></h1>
                    <p></p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1></h1>
                    <p>Belum Resgist?</p>
                    <a href="registrasi.php"><button name="register">Register</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>
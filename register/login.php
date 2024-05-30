


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
            <form>
                <h1>Buat Akun</h1>
            
                <span>atau gunakan email</span>
                <input type="text" id="username" placeholder="Name" required>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password" required>
                <button>Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Masuk</h1>
                <span>or use your email password</span>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password">
                <button>Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Masukan detail pribadi anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo</h1>
                    <p>Daftar detail pribadi anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>


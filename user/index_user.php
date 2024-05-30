<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&family=Poppins:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- my css -->
    <link rel="stylesheet" href="../css/index.css">

    <title>Puskesbit</title>
  </head>
  <body>
  <!----------------- start navbar -------------------->
    <nav class="navbar navbar-expand-lg navbar-dark nav-color position-fixed w-100">
      <div class="container">
        <a class="navbar-brand" href="#">Puskesbit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">LAYANAN</a>
            </li> 
            <li class="nav-item mx-2">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#"></a>
            </li>
          </ul>

          <div>
            <button class="button-primary">Daftar</button>
            <button class="button-secondary">Masuk</button>
          </div>
        </div>
      </div>
    </nav>
  <!------------------- end navbar -------------------->

  <!------------------ bagian hero ----------------->
  <section id="hero">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1></h1>
          <p> <span class="fw-bold">Puskesbit</span>
          </p>

          <button class="button-lg-primary"></button>
          <a href="#">
            <img src="asset/arrow-point-to-right.png" alt="">
          </a>
        </div>
      </div>
      <img src="asset/heroo.png" alt="" class="position-absolute end-0 top-50 bottom-0 img-hero">
    </div>
  </section>
  <!--------------- end hero --------------------------->
  
  <!-------------------- bagian layanan ----------------->
  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Layanan Kami</h2>
          <span class="sub-title"></span>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="asset/Icon-prop.png" alt="" class=" position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4"></h3>
            <p class="mt-3">
            </p>
          </div>
        </div>

    

        <div class="col-md-4 text-center">
            <div class="card-layanan">
              <div class="circle-icon position-relative mx-auto">
                <img src="asset/Icon-prop.png" alt="" class=" position-absolute top-50 start-50 translate-middle">
              </div>
              <h3 class="mt-4"></h3>
              <p class="mt-3">
              </p>
            </div>
        </div>

        
      </div>
    </div>
  </section>
  <!--------------------- footer ----------------------------->
  <footer class="d-flex align-items-center position-relative justify-content-center">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex align-items-center">
            <a href="#" class="ms-3">JasPerNes</a>
          </div>
          <div class="col-md-5 d-flex justify-content-evenly justify-content-center">
            <a href="#hero">Beranda</a>
            <a href="#layanan">Layanan</a>
            <a href="#mesin"></a>
            <a href="#contact"></a>
          </div>
        </div>
        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="col-12 ">
            <p class="text-center">Copyright By JasPerNes All Right Reserved.</p>
          </div>
        </div>
          <div>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>
  <!--------------------- end footer ------------------------>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
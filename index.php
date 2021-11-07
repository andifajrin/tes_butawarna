<!-- cek session -->
<?php

//pengecekan session
session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Dahboard | Aplikasi Tes Buta Warna</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #70beea;">
      <div class="container">
        <a class="navbar-brand" style="font-family: Fredoka One" href="#">Aplikasi Tes Buta Warna</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto ms-5">
            <a class="nav-link text-light">Username</a>
            <a class="nav-link text-light" href="logout.php">Logout</a>
            <!-- <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled">Disabled</a> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir navbar -->
    
    <!-- navbar 2 -->
    <div class="navbar2">
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow" >
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav pt-5">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="mulaites.php">Mulai Tes</a>
              <a class="nav-link" href="hasil.php">Hasil</a>
              <a class="nav-link" href="about.php">About</a>
            </div>
          </div>
      </div>
    </nav>
    <!-- akhir navbar2 -->

    <!-- isi halaman -->
    <div class="container-lg shadow" style="background-color: #ffffff; margin-top: 3rem; border-radius: 10px; padding: 2rem">
      <p class="fs-2" style="margin-top: -1rem"><b>BUTA WARNA</b></p>
      <center><img src="img/mata.jpg" alt="Ilustrasi" width="350px" /><br /></center>
      <p style="text-align: justify"><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, voluptatem ipsum explicabo officiis provident nihil cum officia odit minima dolorum facere aspernatur atque quod dolor labore blanditiis! Nam, eligendi explicabo. Lorem
        ipsum dolor, sit amet consectetur adipisicing elit. Ut esse sequi similique repellat quas velit aperiam dolores non necessitatibus molestias obcaecati optio minima, maiores placeat voluptates architecto, doloremque nesciunt! Lorem
        ipsum dolor sit amet, consectetur adipisicing elit. Sint laboriosam, officiis eos cupiditate quisquam numquam debitis minus, nobis omnis libero enim, excepturi maxime asperiores quas dolores commodi facere ipsam Lorem ipsum dolor
        sit amet consectetur, adipisicing elit. Corporis nam amet cum vel incidunt dolorum? Recusandae dolorum ducimus et accusantium officia dolor aspernatur, odit, commodi culpa incidunt esse vero. Dolorem!Lorem Lorem ipsum dolor sit amet
        consectetur, adipisicing elit. Facere dolores sunt vero quaerat impedit hic cupiditate velit, est dicta nesciunt obcaecati quam sit id minus excepturi inventore, in fugiat? Quibusdam? Lorem ipsum dolor, sit amet consectetur
        adipisicing elit. Reprehenderit, molestias tenetur sint corporis fugit illum quibusdam, enim, accusamus culpa molestiae repellendus voluptatibus mollitia nihil? Optio ut eos suscipit sint asperiores?
      </p>
    </div>
    <!-- Akhir isi halaman -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

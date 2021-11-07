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
    <div class="navbar2 text-end">
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow" >
          <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav pt-5">
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="mulaites.php">Mulai Tes</a>
              <a class="nav-link" href="hasil.php">Hasil</a>
              <a class="nav-link active" aria-current="page" href="about.php">About</a>
            </div>
          </div>
      </div>
    </nav>
    <!-- akhir navbar2 -->

    <!-- isi halaman -->
    <div class="container-lg shadow" style="background-color: #ffffff; margin-top: 3rem; border-radius: 10px; padding: 2rem">
      <p class="fs-2" style="margin-top: -1rem"><b>MENGENAI APLIKASI INI</b></p>
        Assalamualaikum warahmatullahi wabarokatuh, Perkenalkan saya Andi Fajrin Haris, saya adalah pengembang aplikasi ini, aplikasi ini dibuat untuk memenuhi tugas mata kuliah Pembuatan Aplikasi Konsentrasi. Adapun fungsi utama dari aplikasi ini yaitu agar mempermudah pengguna untuk melakukan tes buta warna tanpa harus ke ahli mata untuk melakukan tes ishihara untuk mendeteksi adanya gejala gangguan buta warna. Aplikasi ini masih dalam tahap pengembangan, mohon maaf jika terdapat kesalahan atau bug pada aplikasi ini, saya selaku pengembang aplikasi akan terus berusaha membenahi aplikasi ini sehingga menjadi aplikasi yang mendekati sempurna sehingga penguna merasa nyaman menggunakan aplikasi ini. Terima kasih telah menggunakan aplikasi ini, akhir kata wassalamualaikum warahmatullahi wabarokatuh. 
      </p>
    </div>
    <!-- Akhir isi halaman -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

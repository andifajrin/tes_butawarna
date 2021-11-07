<?php

session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'function.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container-sm align-items-center justify-content-center">
      <div class="judul">
        <h1><b>Selamat Datang <br>di Aplikasi Tes Buta Warna</b></h1>
      </div>
      
        <div class="formlogin" style="border-radius: 10px; background: rgb(255, 255, 255); margin: 50px auto; box-shadow: 7px 7px 10px rgb(160, 160, 160); padding: 50px; width: 28rem;">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control"name="username" id="username" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" />
              </div>
                <?php if( isset($error) ) : ?>
                  <div class="alert alert-danger" role="alert">
                      Username atau password salah!
                  </div>
                <?php endif; ?>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
              </div>
              <center>
              <button type="submit" name="login" class="btn text-light" style="width:100%; background: #70beea">Submit</button>
              </center>
            </form>
        </div>
      </div>
      <div class="logindisini">
        <p>Belum punya akun? <a href=registrasi.php>Buat disini</a></p>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

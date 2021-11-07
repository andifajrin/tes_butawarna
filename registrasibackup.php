<?php

require 'function.php';

if(isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "
                <script>
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )
                </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="judul">
        <h1><b>Selamat Datang di Aplikasi Tes Buta Warna</b></h1>
    </div>
	<div class="kotak_login">
		<p class="tulisan_login"><b>SIGN UP</b></p>
		<form action="" method="post">
			<input type="text" name="username" id="username" class="form_login" placeholder="Input Username">
            <input type="text" name="password"  id="password" class="form_login" placeholder="Masukkan pasword">
			<input type="text" name="password2" id="password2" class="form_login" placeholder="Konfirmasi password">
			<input type="submit" class="tombol_login" id="btn" name="register" value="SUBMIT">
		</form>
	</div>
    <div class="logindisini">
        <p>Sudah punya akun? <a href=login.php>Login disini</a></p>
    </div>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>
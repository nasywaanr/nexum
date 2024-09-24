<?php
session_start();

// Jika sudah login, alihkan ke halaman utama
if (isset($_SESSION['log'])) {
    header('location:index.php');
    exit();
}

include 'dbconnect.php';
date_default_timezone_set("Asia/Bangkok");
$timenow = date("j-F-Y-h:i:s A");

// Proses login
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $queryuser = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
    $cariuser = mysqli_fetch_assoc($queryuser);

    // Verifikasi password
    if ($cariuser && password_verify($pass, $cariuser['password'])) {
        $_SESSION['id'] = $cariuser['iduser'];
        $_SESSION['role'] = $cariuser['role'];
        $_SESSION['notelp'] = $cariuser['notelp'];
        $_SESSION['name'] = $cariuser['namalengkap'];
        $_SESSION['log'] = "Logged";
        header('location:index.php');
        exit();
    } else {
        echo "<script>alert('Username atau password salah');</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nexum - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="login.css">

    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tokopekita, Richard's Lab" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body style="background: linear-gradient(to right,#382A3E, #E22F89);">
    <!-- login -->
    <div class="login">
        <div class="container">
            <h2 style="color: white;">Login</h2>

            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form method="post">
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="submit" name="login" value="Masuk">
                    <a href="index.php">
                        <center style="margin-top: 50px;">
                            Kembali
                        </center>
                    </a>
                </form>
            </div>
            <h4 style="color: white;">Belum terdaftar?</h4>
            <p><a href="registered.php">Daftar Sekarang</a></p>
        </div>
    </div>
    <!-- //login -->
</body>

</html>

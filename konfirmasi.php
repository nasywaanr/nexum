<?php
session_start();
if (!isset($_SESSION['log'])) {
    header('location:login.php');
    exit();
}

include 'dbconnect.php';

if (isset($_POST['payment'])) {
    $sumber = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $pindah = move_uploaded_file($sumber, 'bukti/' . $nama_file);

    // Ambil iduser dari sesi
    $iduser = $_SESSION['id'];

    $sql_simpan = "INSERT INTO konfirmasi (iduser, namacust, payment, nomortujuan, nominal, tglbayar, foto) VALUES (
        '$iduser',
        '" . $_POST['namacust'] . "',
        '" . $_POST['payment'] . "',
        '" . $_POST['nomortujuan'] . "',
        '" . $_POST['nominal'] . "',
        '" . $_POST['tglbayar'] . "',
        '" . $nama_file . "') ";
    $query_simpan = mysqli_query($conn, $sql_simpan);

    if ($query_simpan) {
        echo "<div class='alert alert-success'>
            Terima kasih Pesananmu Akan segera di proses.
          </div>
        <meta http-equiv='refresh' content='1; url= index.php'/>  ";
    } else {
        echo "<div class='alert alert-warning'>
            Gagal Submit, silakan coba lagi.
          </div>
         <meta http-equiv='refresh' content='1; url= konfirmasi.php'/> ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nexum - Konfirmasi Pembayaran</title>
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

<body>
    <!-- register -->
    <div class="register">
        <div class="container">
            <h2>Payment</h2>
            <div class="login-form-grids">
                <form method="post" enctype="multipart/form-data">
                    <h6>Nama</h6>
                    <input type="text" name="namacust" placeholder="" required>
                    <br>
                    <h6>Rekening Tujuan</h6>
                    <select name="payment" class="form-control">
                        <?php
                        $payment = mysqli_query($conn, "select * from pembayaran");
                        while ($a = mysqli_fetch_array($payment)) {
                        ?>
                            <option value="<?php echo $a['payment'] ?>"><?php echo $a['payment'] ?> | <?php echo $a['norek'] ?></option>
                        <?php
                        };
                        ?>
                    </select>
                    <h6>Nomor Tujuan</h6>
                    <input type="text" name="nomortujuan" placeholder="Masukan Nomor Tujuan" required>
                    <h6>Nominal</h6>
                    <input type="text" name="nominal" placeholder="Masukan nominal" required>
                    <br>
                    <h6>Tanggal Bayar</h6>
                    <input type="date" class="form-control" name="tglbayar">
                    <h6>Bukti Bayar</h6>
                    <input type="file" class="form-control" name="foto">
                    <input type="submit"  value="kirim">
                </form>
            </div>
            <div class="register-home">
                <a href="index.php">Batal</a>
            </div>
        </div>
    </div>
    <!-- //register -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 4000,
                easingType: 'linear'
            };

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <!-- //here ends scrolling icon -->

    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });
        });
    </script>
    <!-- //main slider-banner -->
</body>

</html>

<?php
session_start();
if (!isset($_SESSION['log'])) {
} else {
    header('location:index.php');
};
include 'dbconnect.php';

if (isset($_POST['adduser'])) {
    $iduser = $_POST['iduser'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $tambahuser = mysqli_query($conn, "insert into login (namalengkap, email, password, notelp, alamat) 
		values('$nama','$email','$pass','$telp','$alamat')");
    if ($tambahuser) {
        echo " <div class='alert alert-success'>
			Berhasil mendaftar.
		  </div>
		<meta http-equiv='refresh' content='1; url= index.php'/>  ";
    } else {
        echo "<div class='alert alert-warning'>
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= adduser.php'/> ";
    }
};

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST">

                            <div class="mb-3">
                                <h4>Informasi Pribadi</h4>
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Nomor Telepon</label>
                                <input type="text" name="telp" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label>Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <h4>Informasi Login</h4>
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required="@">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="adduser" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
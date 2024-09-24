<?php
include "dbconnect.php";
if (isset($_GET['kode'])) {
    $sql_cek = "SELECT * FROM login WHERE iduser='" . $_GET['kode'] . "'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek, MYSQLI_BOTH);
}
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
                        <h4>Edit User
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">


                        <form method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <h4>Informasi Pribadi</h4>
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $data_cek['namalengkap']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label>Nomor Telepon</label>
                                <input type="text" name="telp" class="form-control" value="<?php echo $data_cek['notelp']; ?>" />
                            </div>
                            <div class="mb-3">
                                <label>Alamat Lengkap</label>
                                <input type="text" name="alamat" class="form-control" value="<?php echo $data_cek['alamat']; ?>" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
<?php
include "dbconnect.php";

if (isset($_POST['Simpan'])) {
    mysqli_query($conn, "update login set  
namalengkap = '$_POST[nama]',
notelp = '$_POST[telp]',
alamat = '$_POST[alamat]'
where iduser = '$_GET[kode]'");

    echo "Data barang telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='customer.php'>";
}

?>


</html>
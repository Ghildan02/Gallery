<?php
session_start();
$userid = $_SESSION['userid'];
include '../config/koneksi.php';
if ($_SESSION['status'] != 'login') {
    echo "<script>
    alert('Anda belum login');
    location.href='../index.php';
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Foto</title>
    <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <a href="home.php" class="nav-link">Home</a>
                    <a href="album.php" class="nav-link">Album</a>
                    <a href="foto.php" class="nav-link">Foto</a>
                </div>
                <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
            </div>
        </div>
    </nav>
    
    <div class="container mt-3">
        <div class="row">
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM foto INNER JOIN user ON foto.userid=user.userid INNER JOIN album ON foto.albumid=album.albumid");
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <div class="col-md-3">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#zoom<?php echo $data['fotoid'] ?>">
                        <div style="border-radius: 18px;" class="card mt-3">
                            <img style="border-radius: 18px; height: 10rem;"
                                src="../asset/img/<?php echo $data['lokasifile'] ?>" class="card-img-top"
                                title="<?php echo $data['judulfoto'] ?>">
                            <div class="card-footer">
                                <h5>
                                    <?php echo $data['judulfoto'] ?>
                                </h5>
                            </div>
                        </div>
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="zoom<?php echo $data['fotoid'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img style="border-radius: 18px; height: 26rem;"
                                                src="../asset/img/<?php echo $data['lokasifile'] ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="m-2">
                                                <div class="overflow-auto">
                                                    <div class="sticky-top">
                                                        <h3>
                                                            <?php echo $data['judulfoto'] ?>
                                                        </h3>
                                                        <span class="badge bg-secondary">
                                                            <?php echo $data['username'] ?>
                                                        </span>
                                                        <span class="badge bg-secondary">
                                                            <?php echo $data['tanggalunggah'] ?>
                                                        </span>
                                                        <span class="badge bg-primary">
                                                            <?php echo $data['namaalbum'] ?>
                                                        </span>
                                                        <p class="mt-3">
                                                            <?php echo $data['deskripsifoto'] ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <footer class="d-flex justify-content-center border-to mt-3 bg-light fixed-bottom">
        <p>&copy; Gallery foto | Ghildan Ismail</p>
    </footer>


    <script type="text/javascript" src="../asset/js/bootstrap.min.js"></script>
</body>

</html>
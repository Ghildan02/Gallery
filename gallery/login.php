<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Foto</title>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a style="font-size: 180%; margin-left: 30px;" class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login</h5>
                    </div>
                    <form action="config/aksi-login.php" method="POST">
                        <input type="text" name="username" placeholder="Username" class="form-control mt-4" require>
                        <input type="password" name="password" placeholder="Password" class="form-control mt-4" require>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary mt-4" type="submit" name="kirim">Masuk</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex justify-content-center border-to mt-3 bg-light fixed-bottom">
    <p>&copy; Gallery foto | Ghildan Ismail</p>
</footer>


<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
</body>
</html>
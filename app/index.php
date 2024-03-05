<!-- session -->
<?php
session_start();
$user = $_SESSION['user'];
include "koneksi.php";

$tampil = $konek->query("SELECT * FROM login WHERE user='$user'");
$level = $tampil->fetch_array();




if ($user == "") {
?>
  <script>
    document.location = '../index.php';
  </script>
<?php
} else {
 
?>
<!-- session end -->

<!-- sidebar-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Surat Masuk Surat Keluar</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row flex-nowrap">
    <div class="bg-dark col-auto col-md-4 col-lg-3 min-vh-100 d-flex flex-column justify-content-between">
      <div class="bg-dark p-2">
        <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
          <span class="fs-4 d-none d-sm-inline"><b><i>Surat Masuk Surat Keluar</i></b></span>
        </a>
        <ul class="nav nav-pills flex-column mt-4">
          <li class="nav-item py-2 py-sm-0 ">
            <a href="dash.php" target="konten" class="nav-link text-white">
              <i class="fs-5 bi bi-speedometer"></i><span class="fs-4 ms-3 d-none d-sm-inline">Dashboard</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0">
            <a href="pengguna.php" target="konten" class="nav-link text-white">
              <i class="fs-5 bi bi-person-fill"></i><span class="fs-4 ms-3 d-none d-sm-inline">Pengguna</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0">
            <a href="suratmasuk.php" target="konten" class="nav-link text-white">
              <i class="fs-5 bi bi-envelope-arrow-down"></i><span class="fs-4 ms-3 d-none d-sm-inline">Surat Masuk</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0">
            <a href="suratkeluar.php"target="konten" class="nav-link text-white">
              <i class="fs-5 bi bi-envelope-arrow-up"></i><span class="fs-4 ms-3 d-none d-sm-inline">Surat Keluar</span>
            </a>
          </li>
          <li class="nav-item py-2 py-sm-0 mask">
            
              <button class="btn border-none dropdown-toggle text-white" type="button" id="triggerId" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fs-5 ms-1 bi bi-card-text"></i><span class="fs-4 d-none ms-3 d-sm-inline">Laporan </span>
              </button>
              <div class="dropdown-menu bg-primary" aria-labelledby="triggerId">
                <a href="laporanmasuk.php" target="konten">
              <button class="dropdown-item" href="laporanmasuk.php"><i class="bi bi-envelope-arrow-down"></i>Surat Masuk</button>
              </a>
              <a href="laporankeluar.php" target="konten">
              <button class="dropdown-item" hret="laporankeluar.php"><i class="bi bi-envelope-arrow-up"></i>Surat Keluar</button>
              </a>
              </div>
           
          </li>
          <li class="nav-item py-2 py-sm-0">
            <a href="logout.php" class="nav-link text-white"  onclick="javascript:return confirm('Apakah anda yakin ingin keluar dari akun ini ???')">
              <i class="fs-5 bi bi-box-arrow-left"></i><span class="fs-4 ms-3 d-none d-sm-inline">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- sidebar end -->

    <!-- content -->
    <div class="p-2">

        <div class="col-9">
            <iframe src="dash.php" name="konten" frameborder="0" width="100%" height="800"></iframe>
        </div>

    </div>
  </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
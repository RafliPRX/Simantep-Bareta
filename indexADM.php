<?php
session_start();
include 'konek.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="shortcut icon" type="image/png" href="image/bnn.png" />
  <link rel="stylesheet" href="src/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="image/logo sipecut 2.png" width="220" alt="">
                </a>
                <p class="text-center">Sistem Pengajuan Cuti</p>
                <form action="indexADM.php" method="post">
                  <div class="mb-3">
                    <input class="form-control" value="admin" type="hidden" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input placeholder="Password" type="password" name="pass" id="pass" class="form-control">
                  </div>
                  <button type="submit" name="loginADM" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
if (isset($_POST['loginADM'])) {
  $nama = $_POST['nama'];
  $pass = $_POST['pass'];

  $_SESSION['loginADM'] = $_POST['loginADM'];
  // $cek = mysqli_query($konek, "SELECT a.nama, a.pass, a.nrk, b.id_jabatan, a.id_jabatan_sup, b.no_kelompok FROM user_bnn a, kelompok b WHERE a.nama = b.nama AND a.nama='$nama'");
  $cek = mysqli_query($konek, "SELECT * FROM admin_bnn WHERE nama='$nama'");
  // $cek = mysqli_query($konek, "SELECT * FROM user_bnn WHERE nama = '$nama'");
  $hitung = mysqli_num_rows($cek);
  $pw = mysqli_fetch_assoc($cek);

  $passNow = $pw['pass'];

  if ($hitung > 0) {
      if (password_verify($pass, $passNow)) {
          $_SESSION['nama'] = $pw['nama'];
          header('Location:list_srtADM.php');
      } else {
          echo "<script language ='JavaScript'> (window.alert('Error: Invalid password'))</script>";
          header('Location: indexADM.php');
      }
  } else {
      echo "<script language ='JavaScript'> (window.alert('Error: User not found'))</script>";
      header('Location: indexADM.php');
  }
}
?>
</html>
<?php
session_start();
include 'konek.php';
// include 'search_acc.php';
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
                <a href="search_acc.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="image/logo simantep 2.png" width="250" alt="">
                </a>
                <p class="text-center">Sistem Pengajuan Cuti</p>
                <?php 
                  if (isset($_POST['find_acc'])) {
                    $username = $_POST['nama'];
                    // echo "<p class='text-center'>$username</p>";
                    ?>
                      <form action="function.php" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" placeholder="nama" class="form-control" name="nama" id="nama" value="<?php echo $username; ?>" >
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input placeholder="Password" type="password" name="pass" id="pass" class="form-control">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                        <div class="d-flex align-items-center justify-content-center">
                          <p class="fs-4 mb-0 fw-bold">Tidak Punya Akun ?</p>
                          <a class="text-primary fw-bold ms-2" href="signin.php">Create an account</a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center" >
                        <p class="fs-4 mb-0 fw-bold" > Note: Setelah Itu Login Seperti Biasa</p>
                        </div>
                      </form>
                    <?php
                  } else {
                    ?> 
                      <form action="function.php" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username</label>
                          <input type="text" placeholder="nama" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input placeholder="Password" type="password" name="pass" id="pass" class="form-control">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                        <div class="d-flex align-items-center justify-content-center">
                          <p class="fs-4 mb-0 fw-bold">Tidak Punya Akun ?</p>
                          <a class="text-primary fw-bold ms-2" href="signin.php">Create an account</a><br>
                        </div>
                        <div class="d-flex align-items-center justify-content-center" >
                        <p class="fs-4 mb-0 fw-bold" > Note: Untuk mencari nama bisa diklik pada logo</p>
                        </div>
                      </form>
                    <?php
                  }
                ?>
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

</html>
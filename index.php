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
                  <img src="image/logo simantep 2.png" width="250" alt="">
                </a>
                <p class="text-center">Sistem Pengajuan Cuti</p>
                <form action="function.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <select class="form-control" id="nama" name="nama">
                        <option value="">Nama</option>
                        <?php
                            $nama = $_POST['nama'];
                            $sql = "SELECT * FROM user_bnn";
                            $res = mysqli_query($konek, $sql);
                            while ($brs=mysqli_fetch_array($res)) {
                                if ($brs[0]==$nama) {
                                    echo "<option value= '$brs[1]'selected>$brs[1]</option>"; 
                                }else {
                                    echo "<option value= '$brs[1]'>$brs[1]</option>";
                                }
                            }
                        ?>
                    </select>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input placeholder="Password" type="password" name="pass" id="pass" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                  </div>
                  <button type="submit" name="login" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                  <!-- <button href="index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button> -->
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Tidak Punya Akun ?</p>
                    <a class="text-primary fw-bold ms-2" href="signin.php">Create an account</a>
                  </div>
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

</html>
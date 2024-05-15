<!DOCTYPE html>
<?php
include 'konek.php';
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna Baru</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="signin.php" method="post">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><select id="nama" name="nama" id="nama">
                <option value="">Nama</option>
                    <?php
                    // $nama = $_POST['nama'];
                    // $sql = "SELECT * FROM kelompok";
                    // $res = mysqli_query($konek, $sql);
                    // while ($brs1=mysqli_fetch_array($res)) {
                    //     if ($brs1[0]==$nama) {
                    //         echo "<option value= '$brs1[1]'selected>$brs1[1]</option>"; 
                    //     }else {
                    //         echo "<option value= '$brs1[1]'>$brs1[1]</option>";
                    //     }                         
                    // }
                    ?>                    
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input placeholder="password" type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td>NRK</td>
                <td>:</td>
                <td><input placeholder="nrk" type="text" name="nrk" id="nrk"></td>
            </tr>
        </table><br>
        <table>
            <tr>
                <td><input type="submit" value="Daftar" name="register"></td>
            </tr>
        </table>
    </form> <br> <br>
</body>
<?php
//     if (isset($_POST['register'])) {
//         $nama = $_POST['nama'];
//         $pass = $_POST['pass'];
//         $nrk = $_POST['nrk'];
    
//         $h_pass = password_hash($pass, PASSWORD_DEFAULT);
    
//         $daftar = mysqli_query($konek, "INSERT INTO user_bnn (id, nama, pass, nrk, id_jabatan_sup) VALUES (NULL, '$nama', '$h_pass', '$nrk', '1')");
    
//         if ($daftar) {
//                 echo "<script language ='JavaScript'> (window.alert('user baru telah terbuat'))
//                 location.href='index.php'
//                 </script>";
//         } else {
//                 echo "<script language='JavaScript'>
//                     (window.alert('error'))
//                     location.href='signin.php'
//                 </script>";
//         }
//     }
// ?>
</html> -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up Account</title>
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
                <form action="signin.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Name</label>
                    <select class="form-control" id="nama" name="nama" id="nama">
                    <option value="">Nama</option>
                    <?php
                    $nama = $_POST['nama'];
                    $sql = "SELECT * FROM kelompok";
                    $res = mysqli_query($konek, $sql);
                    while ($brs1=mysqli_fetch_array($res)) {
                        if ($brs1[0]==$nama) {
                            echo "<option value= '$brs1[1]'selected>$brs1[1]</option>"; 
                        }else {
                            echo "<option value= '$brs1[1]'>$brs1[1]</option>";
                        }                         
                    }
                    ?>
                    </select>        
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input class="form-control" placeholder="password" type="password" name="pass" id="pass">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">NRK</label>
                    <input class="form-control" placeholder="nrk" type="text" name="nrk" id="nrk">
                  </div>
                  <input class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" value="Sign Up" name="register">
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</a> -->
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="fs-4 mb-0 text-primary fw-bold ms-2" href="index.php">Login</a>
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
<?php
    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $pass = $_POST['pass'];
        $nrk = $_POST['nrk'];
    
        $h_pass = password_hash($pass, PASSWORD_DEFAULT);
    
        $daftar = mysqli_query($konek, "INSERT INTO user_bnn (id, nama, pass, nrk, id_jabatan_sup) VALUES (NULL, '$nama', '$h_pass', '$nrk', '1')");
    
        if ($daftar) {
                echo "<script language ='JavaScript'> (window.alert('user baru telah terbuat'))
                location.href='index.php'
                </script>";
        } else {
                echo "<script language='JavaScript'>
                    (window.alert('error'))
                    location.href='signin.php'
                </script>";
        }
    }
?>
</html>

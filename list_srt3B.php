<?php
include 'konek.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Presensi Kepegawaian</title>
  <link rel="shortcut icon" type="image/png" href="image/bnn.png" />
  <link rel="stylesheet" href="src/assets/css/styles.min.css" />
  <link rel="stylesheet" href="src/assets/css/table.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="list_srt3.php" class="text-nowrap logo-img">
            <img align="center" src="image/for rafli.png" width="165" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="list_srt3.php" class="text-nowrap logo-img">
            <img src="image/logo simantep 2.png" width="160" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="list_srt3A.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                <path d="M3 7l9 6l9 -6" />
              </svg>
                <span class="hide-menu">List Surat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="list_srt3B.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
              </svg>
              <span class="hide-menu">List Presensi</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                  <h6 class="mb-0"><?php echo $_SESSION['nama'] ?></h6>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <form action="logout.php" method="post">
                        <input type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block" name="logout" value="logout">
                    </form>
                    <!-- <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a> -->
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title fw-semibold mb-4">Rekapitulasi Absensi Harian</h5>
            <div class="card-body">
              <div class="card">
              <form action="list_srt3B.php" method="GET">
                <select class="form-control" name="nama" id="nama">
                  <option value="">Nama</option>
                  <?php
                    $sql = "SELECT * FROM user_bnn";
                    $res = mysqli_query($konek, $sql);
                    while ($brs = mysqli_fetch_array($res)) {
                      $selected = ($brs[1] == $_GET['nama']) ? 'selected' : '';
                      echo "<option value='" . $brs[1] . "' $selected>" . $brs[1] . "</option>";
                    }
                  ?>
                </select>
                <input type="submit" class="btn btn-outline-primary mt-2 d-block" name="kirim" value="Cari">
                <?php if (isset($_GET['nama'])) : ?>
                  <a href="excel_kepeg_xls.php?nama=<?php echo $_GET['nama'] ?>" class="btn btn-outline-primary mt-2">Cetak</a>
                <?php endif; ?>
              </form>
              <form method="post">
                <Button type="submit" class="btn btn-outline-primary mt-2 d-block" name="switch_malam" > Shift Malam  </Button>
              </form>
              <form method="post">
                <Button type="submit" class="btn btn-outline-primary mt-2 d-block" name="switch_pagi" > Shift Pagi  </Button>
              </form><br>
              <table class="fl-table" border="1" width="100%" >
                <tr>
                    <th width="5%" rowspan="2" >NO.</th>
                    <th width="10%" rowspan="2" >TANGGAL</th>
                    <th width="10%" rowspan="2" >NAMA</th>
                    <th width="20%" colspan="2" >JAM KEHADIRAN</th>
                    <th width="20%" rowspan="2" >KWK</th>
                    <th width="10%" rowspan="2" >JWK</th>
                    <th width="10%" rowspan="2" >JWK REAL</th>
                    <th width="10%" rowspan="2" >KETERANGAN</th>
                </tr>
                <Tr>
                    <th width="10%" >Masuk</th>
                    <th width="10%" >Keluar</th>
                </Tr>
                <?php
                include 'konek.php';
                if (isset($_POST['switch_pagi'])) {
                  $no=1;
                  $kata=$_GET['nama'];
                  $role=$_SESSION['id_jabatan_sup'];
                  $query = "SELECT today, nama, jam_in, jam_out, total FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                  $hasil = mysqli_query($konek, $query);
                  while($brs=mysqli_fetch_array($hasil)){
                      $jam_selesai = $brs[4];
                      $jam_masuk = $brs[2];
                      $jam_pulang = $brs[3];
                      $kwk_real = kwkReal($jam_selesai);
                      $jwk_real = sisa($jam_selesai);
                      $status1 = telat($jam_masuk);
                      $status2 = cepat($jam_pulang);
                        echo "<tr>";
                        echo "<th align ='center'>".$no++."</th>";
                        echo "<th align ='center'>".$brs[0]."</th>";
                        echo "<th align ='center'>".$brs[1]."</th>";
                        echo "<th>".$brs[2]."</th>";
                        echo "<th>".$brs[3]."</th>";
                        echo "<th>".$kwk_real."</th>";
                        echo "<th>".$jwk_real."</th>";
                        echo "<th>".$jam_selesai."</th>";
                        echo "<th>".$status1. "  " .$status2."</th>";
                        echo "</tr>";
                  }  
                } elseif (isset($_POST['switch_malam'])) {
                  $no=1;
                  $kata=$_GET['nama'];
                  $role=$_SESSION['id_jabatan_sup'];
                  $query = "SELECT today, nama, jam_in, jam_out, total FROM snap WHERE (nama like '%$kata%') AND bagian = 'malam'";
                  $hasil = mysqli_query($konek, $query);
                  while($brs=mysqli_fetch_array($hasil)){
                      $jam_selesai_malam = $brs[4];
                      $jam_masuk_malam = $brs[2];
                      $jam_pulang_malam = $brs[3];
                      $kwk_real_malam = kwkRealmalam($jam_selesai_malam);
                      $jwk_real_malam = sisaMalam($jam_selesai_malam);
                      $status1_malam = telatMalam($jam_masuk_malam);
                      $status2_malam  = cepatMalam($jam_pulang_malam);
                        echo "<tr>";
                        echo "<th align ='center'>".$no++."</th>";
                        echo "<th align ='center'>".$brs[0]."</th>";
                        echo "<th align ='center'>".$brs[1]."</th>";
                        echo "<th>".$brs[2]."</th>";
                        echo "<th>".$brs[3]."</th>";
                        echo "<th>".$kwk_real_malam."</th>";
                        echo "<th>".$jwk_real_malam."</th>";
                        echo "<th>".$jam_selesai_malam."</th>";
                        echo "<th>".$status1_malam. "  " .$status2_malam."</th>";
                        echo "</tr>";
                  }  
                } else {
                  $no=1;
                  $kata=$_GET['nama'];
                  $role=$_SESSION['id_jabatan_sup'];
                  $query = "SELECT today, nama, jam_in, jam_out, total FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                  $hasil = mysqli_query($konek, $query);
                  while($brs=mysqli_fetch_array($hasil)){
                      $jam_selesai = $brs[4];
                      $jam_masuk = $brs[2];
                      $jam_pulang = $brs[3];
                      $kwk_real = kwkReal($jam_selesai);
                      $jwk_real = sisa($jam_selesai);
                      $status1 = telat($jam_masuk);
                      $status2 = cepat($jam_pulang);
                        echo "<tr>";
                        echo "<th align ='center'>".$no++."</th>";
                        echo "<th align ='center'>".$brs[0]."</th>";
                        echo "<th align ='center'>".$brs[1]."</th>";
                        echo "<th>".$brs[2]."</th>";
                        echo "<th>".$brs[3]."</th>";
                        echo "<th>".$kwk_real."</th>";
                        echo "<th>".$jwk_real."</th>";
                        echo "<th>".$jam_selesai."</th>";
                        echo "<th>".$status1. "  " .$status2."</th>";
                        echo "</tr>";
                  }  

                }
                                  
              function kwkReal($jam_selesai) {
                $jwk_real_raw = strtotime("08:00:00");
                $jam_selesai_raw = strtotime($jam_selesai);
                $kwk_real_raw = strtotime("00:00:00"); 
                if ($jam_selesai_raw < $jwk_real_raw ) {
                  $kwk_raw = $jwk_real_raw - $jam_selesai_raw;
                } else {
                  $kwk_raw = $kwk_real_raw;
                }
                $kwk_real = date("H:i:s", $kwk_raw);
                return $kwk_real;
              }
              function kwkRealmalam($jam_selesai_malam) {
                $jwk_real_raw = strtotime("08:00:00");
                $jam_selesai_raw = strtotime($jam_selesai_malam);
                $kwk_real_raw = strtotime("00:00:00"); 
                if ($jam_selesai_raw < $jwk_real_raw ) {
                  $kwk_raw = $jwk_real_raw - $jam_selesai_raw;
                } else {
                  $kwk_raw = $kwk_real_raw;
                }
                $kwk_real = date("H:i:s", $kwk_raw);
                return $kwk_real;
              }

              function telat($jam_masuk){
                $telat = strtotime('07:31:00');
                $waktuMasuk = strtotime($jam_masuk);

                if ($waktuMasuk > $telat) {
                  $terlambat = "Telat";
                } else {
                  $terlambat = false;
                }
                return $terlambat;
              }
              function telatMalam($jam_masuk_malam){
                $telat = strtotime('17:00:00');
                $waktuMasuk = strtotime($jam_masuk_malam);

                if ($waktuMasuk > $telat) {
                  $terlambat = "Telat";
                } else {
                  $terlambat = false;
                }
                return $terlambat;
              }

              function cepat($jam_pulang){
                $jam_balik = strtotime('16:00:00');
                $waktuSelesai = strtotime($jam_pulang);
                if ($waktuSelesai <= $jam_balik) {
                  $cepat = "Pulang Cepat";
                } else {
                  $cepat = false;
                }
                return $cepat;
              }

              function cepatMalam($jam_pulang_malam){
                $jam_balik = strtotime('06:00:00');
                $waktuSelesai = strtotime($jam_pulang_malam);
                if ($waktuSelesai < $jam_balik) {
                  $cepat = "Pulang Cepat";
                } else {
                  $cepat = false;
                }
                return $cepat;
              }

               function sisa($jam_selesai) {
                $jam_fin_modif = strtotime($jam_selesai);
                $jwk = strtotime("08:00:00");
                
                if ($jam_fin_modif < $jwk) {
                  $jwk_raw = $jam_fin_modif;
                } else {
                  $jwk_raw = $jwk;
                }
                $jwk_real = date("H:i:s", $jwk_raw);

                return $jwk_real;
              }

              function sisaMalam($jam_selesai_malam) {
                $jam_fin_modif = strtotime($jam_selesai_malam);
                $jwk = strtotime("08:00:00");
                
                if ($jam_fin_modif < $jwk) {
                  $jwk_raw = $jam_fin_modif;
                } else {
                  $jwk_raw = $jwk;
                }
                $jwk_real = date("H:i:s", $jwk_raw);

                return $jwk_real;
              }


                  ?>
                  <script>
                    console.log(<?php echo $jwk_ori ?>);
                  </script>
            </table>
      
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="src/assets/js/sidebarmenu.js"></script>
  <script src="src/assets/js/app.min.js"></script>
  <script src="src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
<?php
include 'konek.php';
session_start();
date_default_timezone_set('Asia/Kuala_Lumpur');
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
              <span class="hide-menu">Sipecut /</span><br>
              <span class="hide-menu">Sistem Pengajuan Cuti</span>
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
                        <button type="submit" class="btn btn-outline-primary mx-3 mt-2 d-block" name="logout" ><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>Logout</button>
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
              <div class="card mb-0">
              <form action="list_srt3B.php" method="GET" class="" >
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
                </select><br>
                <input type="date" name="date" id="date" class="form-control" >
                <div class="d-flex justify" >
                <button type="submit" class="btn btn-outline-primary m-1" name="kirim" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                  <path d="M21 21l-6 -6" />
                </svg> Cari </button>  
                <?php if (isset($_GET['nama'])) : ?>
                  <a href="excel_kepeg_xls.php?nama=<?php echo $_GET['nama'] ?>" class="btn btn-outline-primary m-1"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg> Cetak </a>
                <?php endif; ?>
                </form>
                <form method="post" class="d-flex">
                  <Button type="submit" class="btn btn-outline-primary m-1" name="switch_malam" > <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-moon"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg> Shift Malam  </Button>
                  <Button type="submit" class="btn btn-outline-primary m-1" name="switch_pagi" > <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sun"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg> Shift Pagi  </Button>
                </form>
                <?php if (isset($_POST['switch_pagi'])) : ?>
                  <a href="excel_kepeg_xls.php?bagian=pagi" class="btn btn-outline-primary m-1"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg> Cetak Shift Pagi </a>
                <?php endif; ?>
                <?php if (isset($_POST['switch_malam'])) : ?>
                  <a href="excel_kepeg_xls.php?bagian=malam" class="btn btn-outline-primary m-1"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg> Cetak Shift Malam </a>
                <?php endif; ?>
                </div><br>
              <table class="fl-table" border="1" width="100%" >
                <tr>
                    <th width="5%" rowspan="2" >NO.</th>
                    <th width="10%" rowspan="2" >TANGGAL</th>
                    <th width="10%" rowspan="2" >NAMA</th>
                    <th width="20%" colspan="2" >JAM KEHADIRAN</th>
                    <th width="10%" rowspan="2" >KWK</th>
                    <th width="10%" rowspan="2" >JWK</th>
                    <th width="10%" rowspan="2" >JWK REAL</th>
                    <th width="20%" rowspan="2" >KETERANGAN</th>
                </tr>
                <Tr>
                    <th width="10%" >Masuk</th>
                    <th width="10%" >Keluar</th>
                </Tr>
                  <?php
                  if (isset($_POST['switch_pagi'])) {
                    $no = 1;
                    $kata = $_GET['nama'];
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $filter_date = $_GET['date'];
                    $today_date = date("Y-m-d");                
                    $qry = "SELECT today ,nama, snap_in, jam_in, telat, snap_out, jam_out, cepat, total, id_snap FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                    $qry_total = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(IF(telat > '00:00:00', TIME_TO_SEC(telat), 0))), '%H:%i:%s') AS total_telat, TIME_FORMAT(SEC_TO_TIME(SUM(IF(cepat > '00:00:00', TIME_TO_SEC(cepat), 0))), '%H:%i:%s') AS total_cepat FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                    $res_total = mysqli_query($konek, $qry_total);
                    $brs_total = mysqli_fetch_array($res_total);
                    $res = mysqli_query($konek, $qry);

                    while ($brs = mysqli_fetch_array($res)) {
                      $total = $brs[8];
                      $jam_masuk = $brs[3];
                      $telat = $brs[4];
                      $jam_pulang = $brs[6];
                      $cepat = $brs[7];
                      $kwk_real = kwkReal($total);
                      $jwk_real = sisa($total);
                      $status1 = telat($jam_masuk, $telat);
                      $status2 = cepat($jam_pulang, $cepat);
                      ?> 
                      <tr>
                        <th align ='center'><?php echo $no++ ?></th>
                        <th align ='center'><?php echo $brs[0] ?></th>
                        <th align ='center'><?php echo $brs[1] ?></th>
                        <th align ='center'><?php echo $jam_masuk ?></th>
                        <th align ='center'><?php echo $jam_pulang ?></th>
                        <th align ='center'><?php echo $kwk_real ?></th>
                        <th align ='center'><?php echo $jwk_real ?></th>
                        <th align ='center'><?php echo $total ?></th>
                        <th align ='center'><?php echo $status1 ?> <?php echo $status2 ?> <a href="gambar_detail.php?id=<?php echo $brs[9] ?>"> Detail Gambar </a> </th>
                      </tr>
                      <?php

                    }
                    ?> 
                      <tr>
                        <th align ='center' colspan="8">Total Telat</th>
                        <th align="center"> <?php echo $brs_total[0] ?> </th>
                      </tr>
                      <tr>
                        <th align ='center' colspan="8">Total Pulang Cepat</th>
                        <th align="center"> <?php echo $brs_total[1] ?> </th>
                      </tr>

                    <?php
                  } elseif (isset($_POST['switch_malam'])) {
                    $no = 1;
                    $kata = $_GET['nama'];
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $today_date = date("Y-m-d");                
                    $qry = "SELECT today ,nama, snap_in, jam_in, telat, snap_out, jam_out, cepat, total, id_snap FROM snap WHERE (nama like '%$kata%') AND bagian = 'malam'";
                    $qry_total = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(IF(telat > '00:00:00', TIME_TO_SEC(telat), 0))), '%H:%i:%s') AS total_telat, TIME_FORMAT(SEC_TO_TIME(SUM(IF(cepat > '00:00:00', TIME_TO_SEC(cepat), 0))), '%H:%i:%s') AS total_cepat FROM snap WHERE (nama like '%$kata%') AND bagian = 'malam'";
                    $res_total = mysqli_query($konek, $qry_total);
                    $brs_total = mysqli_fetch_array($res_total);
                    $res = mysqli_query($konek, $qry);

                    while ($brs = mysqli_fetch_array($res)) {
                      $total = $brs[8];
                      $jam_masuk = $brs[3];
                      $telat = $brs[4];
                      $jam_pulang = $brs[6];
                      $cepat = $brs[7];
                      $kwk_real = kwkReal($total);
                      $jwk_real = sisa($total);
                      $status1 = telat($jam_masuk, $telat);
                      $status2 = cepat($jam_pulang, $cepat);
                      ?> 
                      <tr>
                        <th align ='center'><?php echo $no++ ?></th>
                        <th align ='center'><?php echo $brs[0] ?></th>
                        <th align ='center'><?php echo $brs[1] ?></th>
                        <th align ='center'><?php echo $jam_masuk ?></th>
                        <th align ='center'><?php echo $jam_pulang ?></th>
                        <th align ='center'><?php echo $kwk_real ?></th>
                        <th align ='center'><?php echo $jwk_real ?></th>
                        <th align ='center'><?php echo $total ?></th>
                        <th align ='center'><?php echo $status1 ?> <?php echo $status2 ?> <a href="gambar_detail.php?id=<?php echo $brs[9] ?>"> Detail Gambar </a> </th>
                      </tr>
                      <?php

                    }
                    ?> 
                      <tr>
                        <th align ='center' colspan="8">Total Telat</th>
                        <th align="center"> <?php echo $brs_total[0] ?> </th>
                      </tr>
                      <tr>
                        <th align ='center' colspan="8">Total Pulang Cepat</th>
                        <th align="center"> <?php echo $brs_total[1] ?> </th>
                      </tr>

                    <?php
                  } elseif(isset($_GET['kirim'])) {
                    $no = 1;
                    $kata = $_GET['nama'];
                    $today = $_GET['date'];
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $today_date = date("Y-m-d");
                    $filter_date = $_GET['date'];
                    $res_date = date("Y/m/d", strtotime($filter_date));                
                    $qry = "SELECT today ,nama, snap_in, jam_in, telat, snap_out, jam_out, cepat, total, id_snap FROM snap WHERE (nama LIKE '%$kata%' AND today = '$res_date')";
                    $qry_total = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(IF(telat > '00:00:00', TIME_TO_SEC(telat), 0))), '%H:%i:%s') AS total_telat, TIME_FORMAT(SEC_TO_TIME(SUM(IF(cepat > '00:00:00', TIME_TO_SEC(cepat), 0))), '%H:%i:%s') AS total_cepat FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                    $res_total = mysqli_query($konek, $qry_total);
                    $brs_total = mysqli_fetch_array($res_total);
                    $res = mysqli_query($konek, $qry);
                    // var_dump($qry);
                    // die;

                    while ($brs = mysqli_fetch_array($res)) {
                      $total = $brs[8];
                      $jam_masuk = $brs[3];
                      $telat = $brs[4];
                      $jam_pulang = $brs[6];
                      $cepat = $brs[7];
                      $kwk_real = kwkReal($total);
                      $jwk_real = sisa($total);
                      $status1 = telat($jam_masuk, $telat);
                      $status2 = cepat($jam_pulang, $cepat);
                      ?> 
                      <tr>
                        <th align ='center'><?php echo $no++ ?></th>
                        <th align ='center'><?php echo $brs[0] ?></th>
                        <th align ='center'><?php echo $brs[1] ?></th>
                        <th align ='center'><?php echo $jam_masuk ?></th>
                        <th align ='center'><?php echo $jam_pulang ?></th>
                        <th align ='center'><?php echo $kwk_real ?></th>
                        <th align ='center'><?php echo $jwk_real ?></th>
                        <th align ='center'><?php echo $total ?></th>
                        <th align ='center'><?php echo $status1 ?> <?php echo $status2 ?> <a href="gambar_detail.php?id=<?php echo $brs[9] ?>"> Detail Gambar </a> </th>
                      </tr>
                      <?php

                    }
                    ?> 
                      <tr>
                        <th align ='center' colspan="8">Total Telat</th>
                        <th align="center"> <?php echo $brs_total[0] ?> </th>
                      </tr>
                      <tr>
                        <th align ='center' colspan="8">Total Pulang Cepat</th>
                        <th align="center"> <?php echo $brs_total[1] ?> </th>
                      </tr>

                    <?php
                  } else {
                    $no = 1;
                    $kata = $_GET['nama'];
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $today_date = date("Y/m/d");
                    $qry = "SELECT today ,nama, snap_in, jam_in, telat, snap_out, jam_out, cepat, total, id_snap FROM snap WHERE today = '$today_date' AND bagian = 'pagi'";
                    $qry_total = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(IF(telat > '00:00:00', TIME_TO_SEC(telat), 0))), '%H:%i:%s') AS total_telat, TIME_FORMAT(SEC_TO_TIME(SUM(IF(cepat > '00:00:00', TIME_TO_SEC(cepat), 0))), '%H:%i:%s') AS total_cepat FROM snap WHERE (nama like '%$kata%') AND bagian = 'pagi'";
                    $res_total = mysqli_query($konek, $qry_total);
                    $brs_total = mysqli_fetch_array($res_total);
                    $res = mysqli_query($konek, $qry);
                    // var_dump($qry);
                    // die;

                    while ($brs = mysqli_fetch_array($res)) {
                      $total = $brs[8];
                      $jam_masuk = $brs[3];
                      $telat = $brs[4];
                      $jam_pulang = $brs[6];
                      $cepat = $brs[7];
                      $kwk_real = kwkReal($total);
                      $jwk_real = sisa($total);
                      $status1 = telat($jam_masuk, $telat);
                      $status2 = cepat($jam_pulang, $cepat);
                      ?> 
                      <tr>
                        <th align ='center'><?php echo $no++ ?></th>
                        <th align ='center'><?php echo $brs[0] ?></th>
                        <th align ='center'><?php echo $brs[1] ?></th>
                        <th align ='center'><?php echo $jam_masuk ?></th>
                        <th align ='center'><?php echo $jam_pulang ?></th>
                        <th align ='center'><?php echo $kwk_real ?></th>
                        <th align ='center'><?php echo $jwk_real ?></th>
                        <th align ='center'><?php echo $total ?></th>
                        <th align ='center'><?php echo $status1 ?> <?php echo $status2 ?> <a href="gambar_detail.php?id=<?php echo $brs[9] ?>"> Detail Gambar </a> </th>
                      </tr>
                      <?php

                    }
                    ?> 
                      <tr>
                        <th align ='center' colspan="8">Total Telat</th>
                        <th align="center"> <?php echo $brs_total[0] ?> </th>
                      </tr>
                      <tr>
                        <th align ='center' colspan="8">Total Pulang Cepat</th>
                        <th align="center"> <?php echo $brs_total[1] ?> </th>
                      </tr>

                    <?php
                  }                    
                  function kwkReal($total) {
                    $jwk_real_raw = strtotime("08:00:00");
                    $jam_selesai_raw = strtotime($total);
                    $kwk_real_raw = strtotime("00:00:00"); 
                    if ($jam_selesai_raw < $jwk_real_raw ) {
                      $kwk_raw = $jwk_real_raw - $jam_selesai_raw;
                    } else {
                      $kwk_raw = $kwk_real_raw;
                    }
                    $kwk_real = gmdate("H:i:s", $kwk_raw);
                    return $kwk_real;
                  }
                  function sisa($total) {
                    $jam_fin_modif = strtotime($total);
                    $jwk = strtotime("08:00:00");
                    
                    if ($jam_fin_modif < $jwk) {
                      $jwk_raw = $jam_fin_modif;
                    } else {
                      $jwk_raw = $jwk;
                    }
                    $jwk_real = date("H:i:s", $jwk_raw);
    
                    return $jwk_real;
                  }
                  function telat($jam_masuk, $telat){
                    $telat_raw = strtotime('07:30:00');
                    $waktuMasuk = strtotime($jam_masuk);
                    // $telat_real = date("H:i:s", $telat);
                    if ($waktuMasuk > $telat_raw) {
                      $terlambat = "Telat: ".$telat."<br>";
                    } else {
                      $terlambat = false;
                    }
                    return $terlambat;
                  }
                  function cepat($jam_pulang, $cepat){
                    $jam_balik = strtotime('16:00:00');
                    $waktuSelesai = strtotime($jam_pulang);
                    if ($waktuSelesai <= $jam_balik) {
                      $cepat = "Pulang Cepat :". $cepat. "<br>";
                    } else {
                      $cepat = false;
                    }
                    return $cepat;
                  }
                  ?>
                  <script>
                    console.log(<?php echo $jwk_ori ?>);
                  </script>
            </table><br>
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
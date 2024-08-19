<?php
include 'konek.php';
session_start();
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Rencana Penarikan Dana</title>
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
          <a href="list_srt.php" class="text-nowrap logo-img">
            <img align="center" src="image/for rafli.png" width="165" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="list_srt.php" class="text-nowrap logo-img">
            <img src="image/logo simantep 2.png" width="160" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
          <?php 
              $role = $_SESSION['id_jabatan_sup'];
              if ($role < 9) {
            ?>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard_pj.php" aria-expanded="false">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Sipecut/ </span><br>
              <span class="hide-menu" >Sistem pengajuan Cuti</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="list_srt2dats.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checklist"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" /><path d="M14 19l2 2l4 -4" /><path d="M9 8h4" /><path d="M9 12h2" /></svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Daftar Pengajuan Surat</span>
              </a>
            </li>
            <?php } elseif($role == 10) { ?>
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
            <?php } ?>
            <?php 
              if ($role >= 10 && $role <= 12) { 
            ?>
            <li class="nav-small-cap">
            <a class="sidebar-link" href="dashboard_simak.php" aria-expanded="false">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Simak/</span><br>
              <span class="hide-menu">Sistem Manajemen Keuangan</span>
            </a>  
            </li>
            <li class="sidebar-item" style="display: none;">
              <a class="sidebar-link" href="Add_money_plans.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />
              <path d="M16 19h6" /><path d="M19 16v6" /><path d="M3 7l9 6l9 -6" />
              </svg>
                <span class="hide-menu">Rencana Penarikan Dana</span>
              </a>
            </li>
            <li class="sidebar-item" style="display: none;">
              <a class="sidebar-link" href="dana_LPJ.php" aria-expanded="false">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                  </svg>
                <span class="hide-menu">Pengajuan Proposal Dan</span>
                <span class="hide-menu">LPJ</span>
              </a>
            </li>
            <?php } else { ?>
              <li class="nav-small-cap">
            <a class="sidebar-link" href="dashboard_simak.php" aria-expanded="false">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Simak/</span><br>
              <span class="hide-menu">Sistem Manajemen Keuangan</span>
            </a>  
            </li>
            <li class="sidebar-item" style="display: block;">
              <a class="sidebar-link" href="Add_money_plans.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />
              <path d="M16 19h6" /><path d="M19 16v6" /><path d="M3 7l9 6l9 -6" />
              </svg>
                <span class="hide-menu">Rencana Penarikan Dana</span>
              </a>
            </li>
            <li class="sidebar-item" style="display: block;">
              <a class="sidebar-link" href="dana_LPJ.php" aria-expanded="false">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                  </svg>
                <span class="hide-menu">Pengajuan Proposal Dan</span>
                <span class="hide-menu">LPJ</span>
              </a>
            </li>
            <?php } ?>
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
              <?php
               if (empty($_SESSION['f_profile'])) {
              ?>
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="src/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                  <h6 class="mb-0"><?php echo $_SESSION['nama'] ?></h6>
                </a> 
                <?php } else { ?>
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="./profile/<?php echo $_SESSION['f_profile'] ?>" alt="" width="35" height="35" class="rounded-circle">
                  <h6 class="mb-0"><?php echo $_SESSION['nama'] ?></h6>
                </a>
                <?php } ?>    
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="user_profile.php" class="d-flex align-items-center gap-2 dropdown-item">
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
           <h1 align="center" >Rencana Penarikan Dana</h1><br>
            <form action="function.php" method="post" enctype="multipart/form-data">
            <h2 align="center" class="card-title fw-semibold mb-1">Data Diri</h2>
              <div class="card">
                <div class="card-body">
                  </div>
                  <?php 
                    $query = "SELECT nama, NRK, jabatan_pj FROM dana_bnn WHERE id_dana = '$id'";
                    $result = mysqli_query($konek, $query);
                    $row1 = mysqli_fetch_array($result);
                  ?>
                  <!--  Data Diri -->
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Nama</label>
                      <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $row1['nama'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NIP/NRK</label>
                      <input class="form-control" type="text" name="nrk" id="nrk" readonly value="<?php echo $row1['NRK'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" id="jabatan" readonly value="<?php echo $row1['jabatan_pj'] ?>">
                    </div>
                    <!-- <div class="mb-3"> -->
                      <!-- <label for="exampleInputPassword1" class="form-label">No-HandPhone</label> -->
                      <!-- <input class="form-control" placeholder="no_HP" type="number" name="no_hp" id="no_hp" required > -->
                    <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Unit</h2>
              <div class="card">
                <?php 
                $query = "SELECT units FROM dana_bnn WHERE id_dana = '$id'";
                $res = mysqli_query($konek, $query);
                $row = mysqli_fetch_array($res);
                $units = $row['units'];
                $sosial = "Sosial";
                $medis = "Medis";
                $manajemen = "Manajemen";
                function detail_sosial($units,$sosial){
                  if($units == $sosial){
                    return "display: block;";
                  }  else {
                    return "display: none;";
                  }
                }
                function detail_medis($units,$medis){
                  if($units == $medis){
                    return "display: block;";
                  }  else {
                    return "display: none;";
                  }
                }
                function detail_manajemen($units,$manajemen){
                  if($units == $manajemen){
                    return "display: block;";
                  }  else {
                    return "display: none;";
                  }
                }
                $sosial_detail = detail_sosial($units,$sosial);
                $medis_detail = detail_medis($units,$medis);
                $manajemen_detail = detail_manajemen($units,$manajemen);
                
                ?>                
                <div class="card-body">
                  <!--  Unit Sosial -->
                    <?php 
                      $sosial = "SELECT nama_kegiatan, rencana_pelaksana, acc_521211_sosial, acc_522141_kendaraan, acc_522141_tempat, acc_522151, acc_524113, acc_524114 FROM dana_bnn WHERE id_dana = '$id'";
                      $res = mysqli_query($konek, $sosial);
                      $row = mysqli_fetch_array($res);
                      $kendaraan = $row['acc_522141_kendaraan'];
                      $tempat = $row['acc_522141_tempat'];
                    ?>
                    <div class="mb-3">   
                        <div id="form-cuti-kontrak" style="<?php echo $sosial_detail ?>">
                          <h5 align="center" class="card-title fw-semibold">Unit Sosial</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Nama Rencana Kegiatan dan Program</label>
                            <input class="form-control" value="<?php echo $row['nama_kegiatan'] ?>" type="text" name="kegiatan" id="kegiatan"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Rencana Pelaksanaan </label>
                            <input class="form-control" value="<?php echo $row['rencana_Pelaksana'] ?>" type="date" name="event" id="event"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 521211 </label>
                            <input class="form-control" type="text" value="<?php echo $row['acc_521211_sosial'] ?>" name="acc521211" id="acc521211">
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 522141 </label><br>
                                <?php 
                                function acc522141_kendaraan($kendaraan) {
                                  if ($kendaraan >= 1) {
                                    return "display: block;";
                                  } else {
                                    return "display: none;";
                                  }
                                }
                                function acc522141_tempat($tempat) {
                                  if ($tempat >= 1) {
                                    return "display: block;";
                                  } else {
                                    return "display: none;";
                                  }
                                }
                                $tempat_detai = acc522141_tempat($tempat);
                                $kendaraan_detail = acc522141_kendaraan($kendaraan);
                                ?>
                                <div class="mb-3" style="<?php echo $tempat_detai ?>" >
                                    <label style="margin-right: 20px" ></label>
                                    <label class="form-check-label text-dark">Sewa Tempat</label>
                                    <div id="form-tempat"><br>
                                        <input class="form-control" value="<?php echo $row['acc_522141_tempat'] ?>" type="text" name="522141_tempat" id="522141_tempat">
                                    </div>
                                </div>
                                <div class="mb-3" style="<?php echo $kendaraan_detail ?>" >
                                    <label style="margin-right: 20px" ></label>
                                    <label class="form-check-label text-dark"></label>Sewa Kendaraan</label>
                                    <div id="form-kendaraan" ><br>
                                        <input class="form-control" value="<?php echo $row['acc_522141_kendaraan'] ?>" type="text" name="522141_kendaraan" id="522141_kendaraan">
                                    </div>
                                </div>
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 522151 </label>
                            <input class="form-control" type="text" value="<?php echo $row['acc_522151'] ?>" name="522151" id="522151">
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 524113 </label>
                            <input class="form-control" type="text" value="<?php echo $row['acc_524113'] ?>" name="524113" id="524113">
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 524114 </label>
                            <input class="form-control" type="text" value="<?php echo $row['acc_524114'] ?>" name="524114" id="524114">
                          </div>
                        </div>
                    </div>
                    <!--  Unit Medis -->
                    <div class="mb-3">
                        <?php 
                          $medis = "SELECT nama_kegiatan, rencana_pelaksana, acc_521211_medis, acc_522191, keterangan FROM dana_bnn WHERE id_dana = '$id'";
                          $res1 = mysqli_query($konek, $medis);
                          $row1 = mysqli_fetch_array($res1);
                        ?>
                        <div id="form-cuti-alasan-penting" style="<?php echo $medis_detail ?>">
                          <h5 align="center" class="card-title fw-semibold">Unit Medis</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Nama Kegiatan & Program(Lengkap)</label>
                            <input readonly class="form-control" value="<?php echo $row1['nama_kegiatan'] ?>" type="text" name="nama_kegiatan" id="nama_kegiatan"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Rencana Pelaksanaan</label>
                            <input readonly class="form-control" value="<?php echo $row1['rencana_pelaksana'] ?>" name="when_event" id="when_event"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 521211 </label>
                            <input readonly class="form-control" type="text" value="<?php echo $row1['acc_521211_medis'] ?>" name="521211" id="521211"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Kebutuhan Akun 522191 </label>
                            <input readonly class="form-control" type="text" value="<?php echo $row1['acc_522191'] ?>" name="522191" id="522191"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Keterangan </label>
                            <input readonly class="form-control" type="text" value="<?php echo $row1['keterangan'] ?>" name="ket_medis" id="ket_medis "> 
                          </div>

                        </div>
                    </div>
                    <!--  Unit Manajemen -->
                      <?php 
                        $manajemen = "SELECT nama_kegiatan, rencana_Pelaksana, total_dana_manajemen FROM dana_bnn WHERE id_dana = '$id'";
                        $res2 = mysqli_query($konek, $manajemen);
                        $row2 = mysqli_fetch_array($res2);
                      ?>
                    <div class="mb-3">   
                        <div id="form-izin" style="<?php echo $manajemen_detail ?>">
                          <h5 align="center" class="card-title fw-semibold">Unit Manajemen</h5>
                          <div class="mb-3">
                             <label readonly for="Nama" class="form-label">Nama Kegiatan & Program</label>
                             <input readonly class="form-control" value="<?php echo $row2['nama_kegiatan'] ?>" type="text" name="nama_kegiatan" id="nama_kegiatan"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">Rencana Pelaksana</label>
                             <input readonly class="form-control" value="<?php echo $row2['rencana_pelaksana'] ?>" name="when_event" id="when_event"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">Total Permintaan Dana</label>
                             <input readonly class="form-control" value="<?php echo $row2['total_manajemen'] ?>" type="text" name="total_manajemen" id="total_manajemen"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">Metode Pembayaran</label>
                             <input readonly class="form-control" readonly placeholder="kosongkan" type="text" name="method" id="method"> 
                           </div>
                        </div>
                    </div><br>
                    <?php 
                      $query = "SELECT keterangan_keuangan FROM dana_bnn WHERE id_dana = '$id'";
                      $result = mysqli_query($konek, $query);
                      $row = mysqli_fetch_array($result);
                    ?>
                    <div class="mb-3"><br>
                        <h3 align="center" >Keterangan Keuangan</h3><br>
                        <div class="mb-3" >
                          <textarea class="form-control" name="keterangan" id="keterangan"><?php echo $row['keterangan_keuangan'] ?></textarea>
                        </div>
                        <div style="display: flex; justify-content: center;" >
                        <input type="text" name="id" id="id" value="<?php echo $id ?>" >
                        <button type="submit" class="btn btn-primary" value="buat surat" id="simpan_keterangan_RPD" name="simpan_keterangan_RPD"> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg> Tambahkan</button>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card-body" style="display: flex; justify-content: center;" >
              <?php
                      $month = date('m');
                      $day = date('d');
                      $year = date('Y');
                      $today = $year . '-' . $month . '-' . $day;
                      ?>
                      <input class="form-control" value="<?php echo $today; ?>" type="hidden" name="date_now" id="date_now">
            </div>
           </form>           
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
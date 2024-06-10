<?php
include 'konek.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah Surat</title>
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
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Absensi Pegawai</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboard.php" aria-expanded="false">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="cam.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-checklist"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.615 20h-2.615a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" /><path d="M14 19l2 2l4 -4" /><path d="M9 8h4" /><path d="M9 12h2" /></svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Absensi</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Pengajuan Cuti</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="add_surat.php" aria-expanded="false">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 19h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v5.5" />
              <path d="M16 19h6" /><path d="M19 16v6" /><path d="M3 7l9 6l9 -6" /></svg>
                <span class="hide-menu">Tambah Surat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="list_srt.php" aria-expanded="false">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Progres Pengajuan Surat</span>
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
            <form action="function.php" method="post">
            <h2 align="center" class="card-title fw-semibold mb-1">Data Diri</h2>
              <div class="card">
                <div class="card-body">
                  <!--  Data Diri -->
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Nama</label>
                      <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $_SESSION['nama'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NRK</label>
                      <input class="form-control" type="text" name="nrk" id="nrk" readonly value="<?php echo $_SESSION['nrk'] ?>">
                    </div>
                    <div class="mb-3">
                      <!-- <label for="exampleInputPassword1" class="form-label">Jabatan</label> -->
                      <input type="hidden" class="form-control" name="jabatan" id="jabatan" readonly value="<?php echo $_SESSION['id_jabatan'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">No-HandPhone</label>
                      <input class="form-control" placeholder="no_HP" type="number" name="no_hp" id="no_hp">
                    </div>
                </div>
              </div>
            </div>
            <!--  Alasan Cuti/izin/sakit -->
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Alasan Cuti/Sakit/Izin</h2>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Alasan Cuti/Sakit/Izin</label>
                      <textarea class="form-control" name="ket" id="ket" cols="30" rows="5"></textarea> 
                    </div>
                </div>
              </div>
            </div>
            <!--  alamat Cuti/izin/sakit -->
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Alamat Selama Cuti/Sakit/Izin</h2>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Alamat Selama Cuti/Sakit/Izin</label>
                      <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"></textarea> 
                    </div>
                </div>
              </div>
            </div>
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Jenis Surat</h2>
              <div class="card">
                <div class="card-body">
                  <!--  Tanggal Cuti Kontrak -->
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" name="jenis_surat" id="jenis_surat" onclick="showForm_Kontrak(this)">
                        <label class="form-check-label text-dark">Cuti Kontrak</label>
                        <div id="form-cuti-kontrak" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Kontrak</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Kontrak</label>
                            <input class="form-control" placeholder="hari" type="number" name="hari_kontrak1" id="hari_kontrak1"> 

                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                            <input class="form-control" type="date" name="tgl_mulai1" id="tgl_mulai1"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d </label>
                            <input class="form-control" type="date" name="tgl_selesai1" id="tgl_selesai1"> 
                          </div>
                        </div>
                            <script>
                              function showForm_Kontrak(checkbox) {
                                if (checkbox.checked) {
                                  document.getElementById("form-cuti-kontrak").style.display = "block";
                                } else {
                                  document.getElementById("form-cuti-kontrak").style.display = "none";
                                }
                              }
                            </script>
                    </div>
                    <!--  Tanggal Cuti Kontrak -->
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" name="jenis_surat" id="jenis_surat" onclick="showForm_Inportant(this)">
                        <label class="form-check-label text-dark">Cuti Alasan Penting</label>
                        <div id="form-cuti-alasan-penting" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Alasan Penting</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Kontrak</label>
                            <input class="form-control" placeholder="hari" type="number" name="hari_kontrak2" id="hari_kontrak2"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                            <input class="form-control" type="date" name="tgl_mulai2" id="tgl_mulai2"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d </label>
                            <input class="form-control" type="date" name="tgl_selesai2" id="tgl_selesai2"> 
                          </div>
                        </div>
                            <script>
                              function showForm_Inportant(checkbox) {
                                if (checkbox.checked) {
                                  document.getElementById("form-cuti-alasan-penting").style.display = "block";
                                } else {
                                  document.getElementById("form-cuti-alasan-penting").style.display = "none";
                                }
                              }
                            </script>
                    </div>
                    <!--  Tanggal Izin -->
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" name="jenis_surat" id="jenis_surat" onclick="showForm_Izin(this)">
                        <label class="form-check-label text-dark">Izin</label>
                        <div id="form-izin" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Izin</h5>
                          <div class="mb-3">
                             <label for="Nama" class="form-label">Izin</label>
                             <input class="form-control" placeholder="hari" type="number" name="izin" id="izin"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                             <input class="form-control" type="date" name="izin_mulai" id="izin_mulai"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">s.d</label>
                             <input class="form-control" type="date" name="izin_selesai" id="izin_selesai"> 
                           </div>
                        </div>
                            <script>
                              function showForm_Izin(checkbox) {
                                if (checkbox.checked) {
                                  document.getElementById("form-izin").style.display = "block";
                                } else {
                                  document.getElementById("form-izin").style.display = "none";
                                }
                              }
                            </script>
                    </div>
                    <!--  Tanggal hamil -->
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" name="jenis_surat" id="jenis_surat" onclick="showForm_Hamil(this)">
                        <label class="form-check-label text-dark">Cuti Hamil</label>
                        <div id="form-cuti-hamil" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Hamil</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Hamil</label>
                            <input class="form-control" placeholder="hari" type="number" name="hamil" id="hamil"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                            <input class="form-control" type="date" name="hamil_mulai" id="hamil_mulai"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d</label>
                            <input class="form-control" type="date" name="hamil_selesai" id="hamil_selesai"> 
                          </div>
                        </div>
                            <script>
                              function showForm_Hamil(checkbox) {
                                if (checkbox.checked) {
                                  document.getElementById("form-cuti-hamil").style.display = "block";
                                } else {
                                  document.getElementById("form-cuti-hamil").style.display = "none";
                                }
                              }
                            </script>
                    </div>
                    <!--  Tanggal Sakit -->
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" name="jenis_surat" id="jenis_surat" onclick="showForm_Sakit(this)">
                        <label class="form-check-label text-dark">Cuti Sakit</label>
                        <div id="form-cuti-sakit" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Sakit</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Sakit</label>
                            <input class="form-control" placeholder="hari" type="number" name="sakit" id="sakit"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                            <input class="form-control" type="date" name="sakit_mulai" id="sakit_mulai"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d</label>
                            <input class="form-control" type="date" name="sakit_selesai" id="sakit_selesai"> 
                          </div>
                        </div>
                            <script>
                              function showForm_Sakit(checkbox) {
                                if (checkbox.checked) {
                                  document.getElementById("form-cuti-sakit").style.display = "block";
                                } else {
                                  document.getElementById("form-cuti-sakit").style.display = "none";
                                }
                              }
                            </script>
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Cuti Kontrak -->
            <!-- <div class="card-body">
              <div class="card">
                <div class="card-body">
                <h5 align="center" class="card-title fw-semibold">Cuti Kontrak</h5>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti Kontrak</label>
                      <input class="form-control" placeholder="hari" type="number" name="hari_kontrak1" id="hari_kontrak1"> 
                                         
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                      <input class="form-control" type="date" name="tgl_mulai1" id="tgl_mulai1"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d </label>
                      <input class="form-control" type="date" name="tgl_selesai1" id="tgl_selesai1"> 
                    </div>
                </div>
              </div>
            </div> -->
            <!--  Tanggal Cuti Kontrak -->
            <!-- <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Sisa Cuti Kontrak</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Sisa Cuti Kontrak</label>
                      <input class="form-control" placeholder="hari" type="number" name="sisa_n" id="sisa_n">
                    </div>
                </div>
              </div>
            </div> -->
            <!--  Tanggal Cuti Alasan Penting -->
            <!-- <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Cuti Alasan Penting</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti Kontrak</label>
                      <input class="form-control" placeholder="hari" type="number" name="hari_kontrak2" id="hari_kontrak2"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                      <input class="form-control" type="date" name="tgl_mulai2" id="tgl_mulai2"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d </label>
                      <input class="form-control" type="date" name="tgl_selesai2" id="tgl_selesai2"> 
                    </div>
                </div>
              </div>
            </div> -->
            <!--  Tanggal Izin -->
            <!-- <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Izin</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Izin</label>
                      <input class="form-control" placeholder="hari" type="number" name="izin" id="izin"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="izin_mulai" id="izin_mulai"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="izin_selesai" id="izin_selesai"> 
                    </div>
                </div>
              </div>
            </div> -->
            <!--  Tanggal hamil -->
            <!-- <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Cuti Hamil</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti</label>
                      <input class="form-control" placeholder="hari" type="number" name="hamil" id="hamil"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="hamil_mulai" id="hamil_mulai"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="hamil_selesai" id="hamil_selesai"> 
                    </div>
                </div>
              </div>
            </div> -->
            <!--  Tanggal Sakit -->
            <div class="card-body">
             <!-- <h5 class="card-title fw-semibold mb-4">Sakit</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Sakit</label>
                      <input class="form-control" placeholder="hari" type="number" name="sakit" id="sakit"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="sakit_mulai" id="sakit_mulai"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="sakit_selesai" id="sakit_selesai"> 
                    </div>
                    <div class="mb-3">
                    <?php
                      // $month = date('m');
                      // $day = date('d');
                      // $year = date('Y');
                      // $today = $year . '-' . $month . '-' . $day;
                      ?>
                      <input class="form-control" value="<?php echo $today; ?>" type="hidden" name="date_now" id="date_now">
                    </div>
                </div>
              </div> -->
              <?php
                      $month = date('m');
                      $day = date('d');
                      $year = date('Y');
                      $today = $year . '-' . $month . '-' . $day;
                      ?>
                      <input class="form-control" value="<?php echo $today; ?>" type="hidden" name="date_now" id="date_now">

              <button type="submit" class="btn btn-primary" value="buat surat" name="simpan">Tambahkan</button>
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
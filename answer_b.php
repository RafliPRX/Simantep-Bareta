<!doctype html>
<html lang="en">
    <?php
    include 'konek.php';
        session_start();
        $id = $_GET['id'];
        $nama = "SELECT * FROM surat WHERE id_surat = '$id'";
        $result = mysqli_query($konek,$nama);
        $row = mysqli_fetch_array($result);
    ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lihat Surat <?php echo $row['1'] ?></title>
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
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Dashboard</span>
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
      <?php
        include 'konek.php';
        session_start();
        $id=$_GET['id'];
        $qry = "SELECT id_surat, nama, nrk, Keterangan, alamat, no_hp, id_jabatan, cuti1, cuti_date, cuti_date_fin, sisa_k, cuti_imp, cuti_imp_date, cuti_imp_date_fin, izin, izin_date, izin_date_fin, sakit, sakit_date, sakit_date_fin, veri_1, veri_2, veri_3 FROM surat WHERE id_surat='$id'";
        $res = mysqli_query($konek, $qry);
        while ($brs = mysqli_fetch_array($res)) {
      ?>
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
                      <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $brs[1]; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NRK</label>
                      <input class="form-control" type="text" name="nrk" id="nrk" readonly value="<?php echo $brs[2]; ?>">
                    </div>
                    <!-- <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                      <input type="number" class="form-control" name="jabatan" id="jabatan" readonly value="<?php echo $brs[6]; ?>">
                    </div> -->
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">No-HandPhone</label>
                      <input class="form-control" placeholder="no_HP" type="number" readonly value="<?php echo $brs[5]; ?>" name="no_hp" id="no_hp">
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
                      <textarea class="form-control" name="ket" id="ket" cols="30" rows="5" readonly><?php echo $brs[3]; ?></textarea> 
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
                      <textarea class="form-control" name="ket" id="ket" cols="30" rows="5" readonly><?php echo $brs[4]; ?></textarea> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Cuti Kontrak -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Cuti Kontrak</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti Kontrak</label>
                      <input class="form-control" placeholder="hari" type="number" name="hari_kontrak1" id="hari_kontrak1" readonly value="<?php echo $brs[7]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                      <input class="form-control" type="date" name="tgl_mulai1" id="tgl_mulai1" readonly value="<?php echo $brs[8]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d </label>
                      <input class="form-control" type="date" name="tgl_selesai1" id="tgl_selesai1" readonly value="<?php echo $brs[9]; ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Cuti Kontrak -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Sisa Cuti Kontrak</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Sisa Cuti Kontrak</label>
                      <input class="form-control" placeholder="hari" type="number" name="sisa_n" id="sisa_n" readonly value="<?php echo $brs[10]; ?>">
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Cuti Alasan Penting -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Cuti Alasan Penting</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti Alasan Penting</label>
                      <input class="form-control" placeholder="hari" type="number" name="hari_kontrak2" id="hari_kontrak2" readonly value="<?php echo $brs[11]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                      <input class="form-control" type="date" name="tgl_mulai2" id="tgl_mulai2" readonly value="<?php echo $brs[12]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d </label>
                      <input class="form-control" type="date" name="tgl_selesai2" id="tgl_selesai2" readonly value="<?php echo $brs[13]; ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Izin -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Izin</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Izin</label>
                      <input class="form-control" placeholder="hari" type="number" name="izin" id="izin" readonly value="<?php echo $brs[14]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="izin_mulai" id="izin_mulai" readonly value="<?php echo $brs[15]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="izin_selesai" id="izin_selesai" readonly value="<?php echo $brs[16]; ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal Sakit -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Sakit</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Sakit</label>
                      <input class="form-control" placeholder="hari" type="number" name="sakit" id="sakit" readonly value="<?php echo $brs[17]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="sakit_mulai" id="sakit_mulai" readonly value="<?php echo $brs[18]; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="sakit_selesai" id="sakit_selesai" readonly value="<?php echo $brs[19]; ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Tanggal hamil -->
            <?php 
              $hari = "SELECT hamil, hamil_date, hamil_date_fin FROM surat WHERE id_surat='$id'";
              $hasil = mysqli_query($konek, $hari);
              $brs = mysqli_fetch_array($hasil);
            ?>
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Cuti Hamil</h5>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Cuti</label>
                      <input class="form-control" placeholder="hari" type="number" name="hamil" id="hamil" readonly value="<?php echo $brs['hamil']; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                      <input class="form-control" type="date" name="hamil_mulai" id="hamil_mulai" readonly value="<?php echo $brs['hamil_date']; ?>"> 
                    </div>
                    <div class="mb-3">
                      <label for="Nama" class="form-label">s.d</label>
                      <input class="form-control" type="date" name="hamil_selesai" id="hamil_selesai" readonly value="<?php echo $brs['hamil_date_fin']; ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!--  Jawaban -->
            <div class="card-body">
             <h5 class="card-title fw-semibold mb-4">Jawaban</h5>
              <div class="card">
                <div class="card-body">
                    <label for="Nama" class="form-label">Keterangan :</label><br>
                    <label for="Nama" class="form-label">2 = Setuju</label><br>
                    <label for="Nama" class="form-label">1 = Menunda</label>
                    <div class="mb-3">
                    <input class="form-control" type="number" id="jawab" name="jawab" value="<?php echo $brs[22]; ?>">
                    </div>
                </div>
                <div class="card-body">
                   <h5 class="card-title fw-semibold mb-4">Bukti Gambar</h5>
                    <div class="mb-3">
                        <input class="form-control" type="hidden" name="id" value="<?php echo "$id" ?>">
                        <?php 
                            include 'konek.php';
                            $qry = "SELECT gambar FROM surat WHERE id_surat='$id'";
                            $res = mysqli_query($konek, $qry);
                            while ($brs = mysqli_fetch_array($res)) {
                            ?>
                            
                            <img  src="Image/<?php echo $brs[0] ?>">
                            <!-- <label for="Nama" class="form-label"><?php echo $brs[1] ?></label> -->
                            <?php }?>
                            <input class="form-control" type = "hidden" id="id" name="id" value="<?php echo "$id" ?>">  
                    </div>
                </div>
              </div>
            </div>
            <!--  alasan ditolak -->
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-1">Alasan</h5>
                  <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                          <label for="Nama" class="form-label">Alasan :</label>
                          <textarea class="form-control" name="alasan" id="alasan" cols="30" rows="5"></textarea> 
                        </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" value="buat surat" name="post_b">Jawab</button>
               </div>
           </form>           
          </div>
        </div>
        <?php
        }
        ?>
    </div>
  </div>
  <script src="src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="src/assets/js/sidebarmenu.js"></script>
  <script src="src/assets/js/app.min.js"></script>
  <script src="src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
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
      <div class="container-fluid">
          <div class="card">
           <div class="card-body">
            <form action="function.php" method="post">
            <h2 align="center" class="card-title fw-semibold mb-1">Data Diri</h2>
              <div class="card">
                <div class="card-body">
                  <!--  Data Diri -->
                  <?php 
                  $id = $_GET['id'];                   
                  $sql = "SELECT nama, nrk, keterangan, alamat, no_hp FROM surat WHERE id_surat = '$id'";
                  $result = mysqli_query($konek, $sql);
                  $row = mysqli_fetch_array($result);
                  ?>  
                    <div class="mb-3">
                      <label for="Nama" class="form-label">Nama</label>
                      <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">NRK</label>
                      <input class="form-control" type="text" name="nrk" id="nrk" readonly value="<?php echo $row['nrk'] ?>">
                    </div>
                    <div class="mb-3">
                      <!-- <label for="exampleInputPassword1" class="form-label">Jabatan</label> -->
                      <input type="hidden" class="form-control" name="jabatan" id="jabatan" readonly value="<?php echo $row['id_jabatan'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">No-HandPhone</label>
                      <input class="form-control" placeholder="no_HP" type="number" value="<?php echo $row['no_hp'] ?>" name="no_hp" id="no_hp">
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
                      <textarea class="form-control"  name="ket" id="ket" cols="30" rows="5"> <?php echo $row['keterangan'] ?> </textarea> 
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
                      <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"><?php echo $row['alamat'] ?></textarea> 
                    </div>
                </div>
              </div>
            </div>
            <?php 
              $check = "SELECT cuti1, cuti_imp, izin, sakit, hamil FROM surat WHERE id_surat = '$id'";
              $hasil_check = mysqli_query($konek, $check);
              $row1 = mysqli_fetch_array($hasil_check);

              $cuti = $row1['cuti1'];
              $cuti_imp = $row1['cuti_imp'];
              $izin = $row1['izin'];
              $sakit = $row1['sakit'];
              $hamil = $row1['hamil'];
              function check_cuti($cuti) {
                if ($cuti > 0) {
                    return "checked";
                } else {
                    return "";
                }              
              }
              function check_cuti_imp($cuti_imp) {
                if ($cuti_imp > 0) {
                    return "checked";
                } else {
                    return "";
                }              
              }
              function check_izin($izin) {
                if ($izin > 0) {
                    return "checked";
                } else {
                    return "";
                }              
              }
              function check_hamil($hamil) {
                if ($hamil > 0) {
                    return "checked";
                } else {
                    return "";
                }              
              }
              function check_sakit($sakit) {
                if ($sakit > 0) {
                    return "checked";
                } else {
                    return "";
                }              
              }

              $check_cuti = check_cuti($cuti);
              $check_cuti_imp = check_cuti_imp($cuti_imp);
              $check_izin = check_izin($izin);
              $check_hamil = check_hamil($hamil);
              $check_sakit = check_sakit($sakit);
            ?>
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Jenis Surat</h2>
              <div class="card">
                <div class="card-body">
                  <!--  Tanggal Cuti Kontrak -->
                    <?php 
                      $cuti1 = "SELECT cuti1, cuti_date, cuti_date_fin FROM surat WHERE id_surat = '$id'";
                      $res1 = mysqli_query($konek,$cuti1);
                      $row_cuti = mysqli_fetch_array($res1);
                    ?>
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" <?php echo $check_cuti ?> name="jenis_surat" id="jenis_surat" onclick="showForm_Kontrak(this)">
                        <label class="form-check-label text-dark">Cuti Kontrak</label>
                        <div id="form-cuti-kontrak" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Kontrak</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Kontrak</label>
                            <input class="form-control" placeholder="hari" value="<?php echo $row_cuti['cuti1'] ?>" type="number" name="hari_kontrak1" id="hari_kontrak1"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                            <input class="form-control" type="date" value="<?php echo $row_cuti['cuti_date'] ?>" name="tgl_mulai1" id="tgl_mulai1"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d </label>
                            <input class="form-control" type="date" value="<?php echo $row_cuti['cuti_date_fin'] ?>" name="tgl_selesai1" id="tgl_selesai1"> 
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
                    <!--  Tanggal Cuti alasan penting -->
                    <?php 
                      $cuti_imp1 = "SELECT cuti_imp, cuti_imp_date, cuti_imp_date_fin FROM surat WHERE id_surat = '$id'";
                      $res2 = mysqli_query($konek,$cuti_imp1);
                      $row_cuti_imp = mysqli_fetch_array($res1);
                    ?>
                    <div class="mb-3">   
                        <input type="checkbox"  class="form-check-input primary" name="jenis_surat" <?php echo $check_cuti_imp ?> id="jenis_surat" onclick="showForm_Inportant(this)">
                        <label class="form-check-label text-dark">Cuti Alasan Penting</label>
                        <div id="form-cuti-alasan-penting" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Alasan Penting</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Kontrak</label>
                            <input class="form-control" value="<?php echo $row_cuti_imp['cuti_imp']  ?>" type="number" name="hari_kontrak2" id="hari_kontrak2"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal </label>
                            <input class="form-control" type="date" value="<?php echo $row_cuti_imp['cuti_imp_date']  ?>" name="tgl_mulai2" id="tgl_mulai2"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d </label>
                            <input class="form-control" type="date" value="<?php echo $row_cuti_imp['cuti_imp_date_fin']  ?>" name="tgl_selesai2" id="tgl_selesai2"> 
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
                    <?php 
                      $izin1 = "SELECT izin, izin_date, izin_date_fin FROM surat WHERE id_surat = '$id'";
                      $res3 = mysqli_query($konek,$izin1);
                      $row_izin = mysqli_fetch_array($res3);
                    ?>
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" <?php echo $check_izin ?> name="jenis_surat" id="jenis_surat" onclick="showForm_Izin(this)">
                        <label class="form-check-label text-dark">Izin</label>
                        <div id="form-izin" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Izin</h5>
                          <div class="mb-3">
                             <label for="Nama" class="form-label">Izin</label>
                             <input class="form-control" value="<?php echo $row_izin['izin'] ?>" placeholder="hari" type="number" name="izin" id="izin"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                             <input class="form-control" value="<?php echo $row_izin['izin_date'] ?>" type="date" name="izin_mulai" id="izin_mulai"> 
                           </div>
                           <div class="mb-3">
                             <label for="Nama" class="form-label">s.d</label>
                             <input class="form-control" value="<?php echo $row_izin['izin_date_fin'] ?>" type="date" name="izin_selesai" id="izin_selesai"> 
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
                    <?php 
                      $hamil1 = "SELECT hamil, hamil_date, hamil_date_fin FROM surat WHERE id_surat = '$id'";
                      $res4 = mysqli_query($konek,$hamil1);
                      $row_hamil = mysqli_fetch_array($res4);
                    ?>
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" <?php echo $check_hamil ?> name="jenis_surat" id="jenis_surat" onclick="showForm_Hamil(this)">
                        <label class="form-check-label text-dark">Cuti Hamil</label>
                        <div id="form-cuti-hamil" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Cuti Hamil</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Cuti Hamil</label>
                            <input class="form-control" value="<?php echo $row_hamil['hamil'] ?>" placeholder="hari" type="number" name="hamil" id="hamil"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                            <input class="form-control" value="<?php echo $row_hamil['hamil_date'] ?>" type="date" name="hamil_mulai" id="hamil_mulai"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d</label>
                            <input class="form-control" type="date" value="<?php echo $row_hamil['hamil_date_fin'] ?>" name="hamil_selesai" id="hamil_selesai"> 
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
                    <?php 
                      $sakit1 = "SELECT sakit, sakit_date, sakit_date_fin FROM surat WHERE id_surat = '$id'";
                      $res5 = mysqli_query($konek,$sakit1);
                      $row_sakit = mysqli_fetch_array($res5);
                    ?>
                    <div class="mb-3">   
                        <input type="checkbox" class="form-check-input primary" <?php echo $check_sakit ?> name="jenis_surat" id="jenis_surat" onclick="showForm_Sakit(this)">
                        <label class="form-check-label text-dark">Cuti Sakit</label>
                        <div id="form-cuti-sakit" style="display: none;">
                          <h5 align="center" class="card-title fw-semibold">Sakit</h5>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Sakit</label>
                            <input class="form-control" value="<?php echo $row_sakit['sakit'] ?>" placeholder="hari" type="number" name="sakit" id="sakit"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">Dimulai Dari Tanggal</label>
                            <input class="form-control" type="date" value="<?php echo $row_sakit['sakit_date'] ?>" name="sakit_mulai" id="sakit_mulai"> 
                          </div>
                          <div class="mb-3">
                            <label for="Nama" class="form-label">s.d</label>
                            <input class="form-control" type="date" value="<?php echo $row_sakit['sakit_date_fin'] ?>" name="sakit_selesai" id="sakit_selesai"> 
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
            <!-- Gambar -->
            <?php 
              $gambar_qry = "SELECT gambar FROM surat WHERE id_surat = '$id'";
              $res_pic = mysqli_query($konek, $gambar_qry);
              $gambar = mysqli_fetch_array($res_pic);
            ?>
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Bukti Gambar</h2>
              <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                    <img  src="Image/<?php echo $gambar['gambar'] ?>"> 
                    </div>
                </div>
              </div>
            </div>
            <!-- jawab -->
             <?php 
             $jawab_qry = "SELECT veri_3 FROM surat WHERE id_surat = '$id'";
             $res_kasubag = mysqli_query($konek, $jawab_qry);
             $jawab_kasubag = mysqli_fetch_array($res_kasubag);
             ?>
            <div class="card-body">
            <h2 align="center" class="card-title fw-semibold mb-1">Jawaban</h2>
              <div class="card">
                <div class="card-body">
                  <div class="mb-3">
                  <label for="Nama" class="form-label">Keterangan :</label><br>
                    <label for="Nama" class="form-label">2 = Setuju</label><br>
                    <label for="Nama" class="form-label">1 = Menunda</label>
                    <div class="mb-3">
                    <input class="form-control" type="number" id="jawab" name="jawab" value="<?php echo $jawab_kasubag['veri_3']; ?>">
                    </div>
                  </div>
              </div>
              <?php
                $nama = $row['nama']; 
                $sisa_qry = "SELECT a.sisa_cuti, a.nama, b.id_surat FROM user_bnn a, surat b WHERE a.nama=b.nama AND a.nama = '$nama' AND b.id_surat = '$id'";
                $res_sisa = mysqli_query($konek, $sisa_qry);
                $sisa_cuti = mysqli_fetch_array($res_sisa);
              ?>
                <div class="card-body">
                  <div class="mb-3">
                    <label for="Nama" class="form-label">Alasan Menunda :</label><br>
                    <textarea class="form-control" name="alasan" id="alasan" cols="30" rows="5"></textarea>
                  </div>
                  <input type="text" value="<?php echo $sisa_cuti['sisa_cuti'] ?>" name="sisa" id="sisa">
                  <div style="display: flex; justify-content: center;">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ?>" >
                    <button type="submit" class="btn btn-primary" value="buat surat" name="post_b"> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg> Jawab</button>
                  </div>
              </div>
            </div>
          </form>           
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
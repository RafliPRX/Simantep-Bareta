<?php
include 'konek.php';
session_start();

if (!isset($_SESSION['login'])) {
  header('Location:index.php');
  exit;
}
$nrk = $_SESSION['nrk'];
$nama = $_SESSION['nama']; 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Absensi</title>
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
      <?php 
        $nama = $_SESSION['nama'];
        $today= date("Y/m/d");
        $dashboard = "SELECT * FROM snap WHERE nama = '$nama' AND today = '$today'";
        $qry = mysqli_query($konek, $dashboard);
        $hasil = mysqli_fetch_array($qry);
        $jam_wajib_masuk = date("07:30:00");
        $jam_masuk = date($hasil[3]);
        $jam_wajib_keluar = date("16:00:00");
        $jam_keluar = date($hasil[6]);
      ?>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body"><br><br>
            <h3 align="center" class="fw-semibold mb-4">Selamat Datang <?php echo $nama; ?> <br><br> di Sistem Manajemen Terpadu</h3>
            <h3 align="center" class="fw-semibold mb-4" id="clock" ></h3>
            <script>
              function updateClock() {
                const now = new Date();
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const seconds = now.getSeconds();
                const month = now.toLocaleString('id-ID', { month: 'long' });
                const day = now.getDate();
                const year = now.getFullYear();
              
                const clockElement = document.getElementById('clock');
                clockElement.innerHTML = `${day} ${month} ${year} ${hours}:${minutes}:${seconds}`;
              }
              setInterval(updateClock, 1000); // Memperbarui elemen jam setiap detik            
            </script>
          </div>
        </div>
        <div class="card">
          <?php 
            $role = $_SESSION['id_jabatan_sup'];
            function show($role) {
              if ($role == 12) {
                return "display: none;";
              } else {
                return "display: block;";
              }
            }
            $show = show($role);
          ?>
          <div class="card-body" style="<?php echo $show ?>" >
            <h5 align="center" class="card-title fw-semibold mb-4">Cek Progres Pengajuan RPD</h5>
            <table class="fl-table" border="1" width="100%" >
            <tr>
                <th width="5%">NO.</th>
                <th width="10%">NAMA KEGIATAN</th>
                <th width="15%">TANGGAL PELAKSANAAN</th>
                <th width="20%"> FEEDBACK BAGIAN KEUANGAN</th>
                <th width="10%">DETAIL</th>
            </tr>
        <?php
        include 'konek.php';
        $no=1;
        function nama($role){
          if ($role < 9) {
            $nama = $_SESSION['nama'];
            return  "WHERE nama = '$nama'";
          } elseif ($role < 13) {
            return "";
          }
        }

        $nama = nama($role);
        $query="SELECT nama_kegiatan, rencana_pelaksana, keterangan_keuangan, id_dana from dana_bnn";
        $hasil=mysqli_query($konek,$query);
        while ($brs=mysqli_fetch_array($hasil))
        {
            echo "<tr>";
            echo "<th align ='center'>".$no++."</td>";
            echo "<th align ='center'>".$brs[0]."</td>";
            echo "<th align ='center'>".$brs[1]."</td>";
            echo "<th align ='center'>".$brs[2]."</td>";
            echo "<td align ='center'><a href='Read_money_plans.php?id=$brs[3]'>Buka</a></td>";

        }
        ?>
        </table>
      
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 align="center" class="card-title fw-semibold mb-4">Cek Progres Pengajuan Proposal dan LPJ</h5>
            <table class="fl-table" border="1" width="100%" >
            <tr>
                <th rowspan="2" width="5%">NO.</th>
                <th rowspan="2" width="5%">UNIT</th>
                <th rowspan="2" width="10%">NAMA KEGIATAN</th>
                <th rowspan="2" width="15%">TANGGAL PELAKSANAAN</th>
                <th rowspan="2" width="15%">TANGGAL & JAM PENGAJUAN PROPOSAL</th>
                <th colspan="2" width="20%">KASUBAG TATA USAHA</th>
                <th colspan="2" width="20%">KEPALA BALAI</th>
                <th colspan="2" width="20%">BAGIAN KEUANGAN</th>
                <th rowspan="2" width="10%">DETAIL</th>
            </tr>
            <tr>
                <th width="7%" > Status </th>
                <th width="10%" > Tanggal & Jam Selesai Periksa </th>
                <th width="7%" > Status </th>
                <th width="10%" > Tanggal & Jam Selesai Periksa </th>
                <th>Keterangan</th>
                <th>Tanggal & Jam Diterima</th>
            </tr>
        <?php
        include 'konek.php';
        $no=1;
        $nama = nama($role);
        $query="SELECT nama_kegiatan, rencana_pelaksana, today, today_jam, veri_1, veri_1_date, veri_1_jam, veri_2, veri_2_date, veri_2_jam, keterangan, keterangan_jam, keterangan_date, units, id_lpj FROM lpj_bnn $nama";
        $hasil=mysqli_query($konek,$query);
        while ($brs=mysqli_fetch_array($hasil))
        {
            echo "<tr>";
            echo "<th align ='center'>".$no++."</td>";
            echo "<th align ='center'>".$brs[13]."</td>";
            echo "<th align ='center'>".$brs[0]."</td>";
            echo "<th align ='center'>".$brs[1]."</td>";
            echo "<th align ='center'>".$brs[2]."<br>".$brs[3]."</td>";
            if ($brs[4] == 2) {
                echo "<td align ='center'>";
                echo "<img src ='green.png' width ='25' height ='25'";
                echo "</td>";
            }else if ($brs[4] == 1){
                echo "<td align ='center'>";
                echo "<img src ='red.png' width ='25' height ='25'";
                echo "</td>";
            }elseif ($brs[4] == 0) {
                echo "<th align ='center'>";
                echo "BELUM DIJAWAB";
                echo "</th>";
            } else {
                echo "<td align ='center'>";
                echo "undefined";
                echo "</td>";
            }
            echo "<th align ='center'>".$brs[5]."<br>".$brs[6]."</td>";
            if ($brs[7] == 2) {
                echo "<th align ='center'>";
                echo "<img src ='green.png' width ='25' height ='25'";
                echo "</th>";
            }else if ($brs[7] == 1){
                echo "<th align ='center'>";
                echo "<img src ='red.png' width ='25' height ='25'";
                echo "</th>";
            }elseif ($brs[7] == 0) {
                echo "<th align ='center'>";
                echo "BELUM DIJAWAB";
                echo "</th>";
            } else {
                echo "<th align ='center'>";
                echo "undefined";
                echo "</th>";
            }
            echo "<th align ='center'>".$brs[8]."<br>".$brs[9]."</td>";
            echo "<th align ='center'>".$brs[10]."</td>";
            echo "<th align ='center'>".$brs[11]."<br>".$brs[12]."</td>";
            echo "<td align ='center'><a href='Read_dana_LPJ.php?id=$brs[14]'>Buka</a></td>";
        }
        ?>
        </table>
          </div>
        </div>
        <p>Note</p>
        <p>Hijau = Diterima</p>
        <p>Merah = Ditolak</p>
      </div>
    </div>
  </div>
  <script src="./src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./src/assets/js/sidebarmenu.js"></script>
  <script src="./src/assets/js/app.min.js"></script>
  <script src="./src/assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
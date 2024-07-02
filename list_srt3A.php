<?php
include 'konek.php';
session_start();
if (!isset($_SESSION['login'])) {
    header('Location:index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Surat <?php echo $_SESSION['nama'] ?></title>
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
            <?php
              $role = $_SESSION['id_jabatan_sup']; 
              if ($role == 9) {
                ?> 
                  <li class="sidebar-item" style="display: block">
                    <a class="sidebar-link" href="list_srt3B.php" aria-expanded="false">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                    <span class="hide-menu">List Presensi</span>
                    </a>
                  </li>
                <?php
              } else {
                ?>  
                  <li class="sidebar-item" style="display: none" >
                    <a class="sidebar-link" href="list_srt3B.php" aria-expanded="false">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                    <span class="hide-menu">List Presensi</span>
                    </a>
                  </li>
                <?php
              }
            ?>
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
            <h5 align="center" class="card-title fw-semibold mb-4">Daftar Surat</h5>
            <div class="card-body">
              <div class="card">
              <form action="list_srt3A.php" method="GET">
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
                <button type="submit" class="btn btn-outline-primary m-1" name="kirim" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                  <path d="M21 21l-6 -6" />
                </svg> Cari </button>  
                <?php if (isset($_GET['nama'])) : ?>
                  <a href="excel_kepeg_xls.php?nama=<?php echo $_GET['nama'] ?>" class="btn btn-outline-primary mt-2"> <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg> Cetak</a>
                <?php endif; ?>
              </form>
              <table class="fl-table" border="1" width="100%" >
                <tr>
                    <th width="5%">NO.</th>
                    <th width="10%">ID SURAT</th>
                    <th width="20%">NAMA</th>
                    <th width="20%">KETERANGAN</th>
                    <th width="10%">JABATAN</th>
                    <th width="10%">PJ / PM / KOORDINATOR</th>
                    <th width="10%">KEPEGAWAIAN</th>
                    <th width="10%">KASUBAG TATA USAHA</th>
                    <th width="30%">SURAT</th>
                </tr>
            <?php
            include 'konek.php';
            
            $no=1;
            $kata=$_GET['nama'];
            $role=$_SESSION['id_jabatan_sup'];
            $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, a.veri_2, a.veri_3 from surat a,jabatan b where a.id_jabatan=b.id_jabatan and (a.nama like '%$kata%' or a.keterangan='%$kata%') AND a.veri_1 = 2";
              $hasil=mysqli_query($konek,$query);
              while ($brs=mysqli_fetch_array($hasil))
              {
                  echo "<tr>";
                  echo "<th align ='center'>".$no++."</th>";
                  echo "<th align ='center'>".$brs[0]."</th>";
                  echo "<th align ='center'>".$brs[1]."</th>";
                  echo "<th>".$brs[2]."</th>";
                  echo "<th>".$brs[3]."</th>";
                  if ($brs[4] == 2) {
                      echo "<td align ='center'>";
                      echo "<img src ='green.png' width ='25' height ='25'";
                      echo "</td>";
                  }else if ($brs[4] == 1){
                      echo "<td align ='center'>";
                      echo "<img src ='red.png' width ='25' height ='25'";
                      echo "</td>";
                  } else if ($brs[4] == 0){
                      echo "<td align ='center'>";
                      echo "belum dijawab";
                      echo "</td>";
                  } else {
                      echo "<td align ='center'>";
                      echo "undefined";
                      echo "</td>";
                  }
                  if ($brs[5] == 2) {
                      echo "<td align ='center'>";
                      echo "<img src ='green.png' width ='25' height ='25'";
                      echo "</td>";
                  }else if ($brs[5] == 1){
                      echo "<td align ='center'>";
                      echo "<img src ='red.png' width ='25' height ='25'";
                      echo "</td>";
                  }else if ($brs[5] == 0){
                      echo "<td align ='center'>";
                      echo "belum dijawab";
                      echo "</td>";
                  } else {
                      echo "<td align ='center'>";
                      echo "undefined";
                      echo "</td>";
                  } if ($brs[6] == 2) {
                      echo "<td align ='center'>";
                      echo "<img src ='green.png' width ='25' height ='25'";
                      echo "</td>";
                  }else if ($brs[6] == 1){
                      echo "<td align ='center'>";
                      echo "<img src ='red.png' width ='25' height ='25'";
                      echo "</td>";
                  }else if ($brs[6] == 0){
                      echo "<td align ='center'>";
                      echo "belum dijawab";
                      echo "</td>";
                  } else {
                      echo "<td align ='center'>";
                      echo "undefined";
                      echo "</td>";
                  }
                  if ($role == 9) {
                      echo "<td align ='center'><a href='answer_a.php?id=$brs[0]'>Jawab</a></td>";
                  } elseif ($role == 10) {
                      echo "<td align ='center'><a href='answer_b.php?id=$brs[0]'>Jawab</a></td>";
                  }
                  echo "</tr>";
                }
                
              ?>
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
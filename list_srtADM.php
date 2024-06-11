<?php
session_start();
if (!isset($_SESSION['loginADM'])) {
  header('Location:indexADM.php');
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
          <a href="list_srtADM.php" class="text-nowrap logo-img">
            <img align="center" src="image/for rafli.png" width="165" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="list_srtADM.php" class="text-nowrap logo-img">
            <img src="image/logo sipecut 2.png" width="160" alt="" />
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
              <a class="sidebar-link" href="list_srtADM.php" aria-expanded="false">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-inbox">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                  <path d="M4 13h3l3 3h4l3 -3h3" />
                </svg>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="list_account.php" aria-expanded="false">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M17 10h2a2 2 0 0 1 2 2v1" />
                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
                </svg>                
               <span class="hide-menu">Daftar akun</span>
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
        $kata=$_POST['kata'];
        $role=$_SESSION['id_jabatan_sup'];
        $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, a.veri_2, a.veri_3 from surat a,jabatan b where a.id_jabatan=b.id_jabatan and (a.nama like '%$kata%' or a.keterangan='%$kata%') AND a.veri_1 = 2 AND a.veri_2 = 2 AND a.veri_3 = 2";
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
              echo "<td align ='center'><a href='liat_suratADM.php?id=$brs[0]'>Lihat Surat</a></td>";
            
            echo "</tr>";
        }
        ?>
        </table> <br>
        <a class="btn btn-secondary" href="excel_xls.php">Download Excel</a>
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
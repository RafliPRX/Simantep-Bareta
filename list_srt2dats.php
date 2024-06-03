<?php
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
          <a href="list_srt2.php" class="text-nowrap logo-img">
            <img align="center" src="image/for rafli.png" width="165" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="list_srt2.php" class="text-nowrap logo-img">
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
              <a class="sidebar-link" href="list_srt2dats.php" aria-expanded="false">
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
            <h5 align="center" class="card-title fw-semibold mb-4">Daftar Surat</h5>
            
            <table class="fl-table" border="1" width="60%" >
            <tr>
                <th align="center" width="5%">no.</th>
                <th align="center" width="5%">Nama</th>
                <th align="center" width="20%">Jabatan</th>
                <th align="center" width="20%">surat</th>
            </tr>
            <?php
                include 'konek.php';
                $no=1;
                if ($_SESSION['no_kelompok'] == 1) {
                $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 2";
                // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                $hasil=mysqli_query($konek,$query);
                while ($brs=mysqli_fetch_array($hasil))
                {
                    echo "<tr>";
                    echo "<td align ='center'>".$no++."</td>";
                    echo "<td align ='center'>".$brs[0]."</td>";
                    echo "<td align ='center'>".$brs[1]."</td>";
                    echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                    echo "</tr>";
                }
                } elseif ($_SESSION['no_kelompok'] == 3) {
                    $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 4";
                    // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                    $hasil=mysqli_query($konek,$query);
                    while ($brs=mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td align ='center'>".$no++."</td>";
                        echo "<td align ='center'>".$brs[0]."</td>";
                        echo "<td align ='center'>".$brs[1]."</td>";
                        echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                        echo "</tr>";
                    }
                } elseif ($_SESSION['no_kelompok'] == 5) {
                    $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 6";
                    // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                    $hasil=mysqli_query($konek,$query);
                    while ($brs=mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td align ='center'>".$no++."</td>";
                        echo "<td align ='center'>".$brs[0]."</td>";
                        echo "<td align ='center'>".$brs[1]."</td>";
                        echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                        echo "</tr>";
                    }
                } elseif ($_SESSION['no_kelompok'] == 7) {
                    $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 8";
                    // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                    $hasil=mysqli_query($konek,$query);
                    while ($brs=mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td align ='center'>".$no++."</td>";
                        echo "<td align ='center'>".$brs[0]."</td>";
                        echo "<td align ='center'>".$brs[1]."</td>";
                        echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                        echo "</tr>";
                    }
                } elseif ($_SESSION['no_kelompok'] == 9) {
                    $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 10";
                    // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                    $hasil=mysqli_query($konek,$query);
                    while ($brs=mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td align ='center'>".$no++."</td>";
                        echo "<td align ='center'>".$brs[0]."</td>";
                        echo "<td align ='center'>".$brs[1]."</td>";
                        echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                        echo "</tr>";
                    }
                } elseif ($_SESSION['no_kelompok'] == 11) {
                    $query = "SELECT a.nama, b.nama_jabatan, a.no_kelompok FROM kelompok a, jabatan b WHERE a.id_jabatan = b.id_jabatan AND a.no_kelompok = 12";
                    // $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                    $hasil=mysqli_query($konek,$query);
                    while ($brs=mysqli_fetch_array($hasil))
                    {
                        echo "<tr>";
                        echo "<td align ='center'>".$no++."</td>";
                        echo "<td align ='center'>".$brs[0]."</td>";
                        echo "<td align ='center'>".$brs[1]."</td>";
                        echo "<td align ='center'><a href='list_srt2.php?id=$brs[0]'>Liat Surat</a></td>";
                        echo "</tr>";
                    }
                } 
                
                $query="SELECT a.id_surat, a.nama, a.keterangan, b.nama_jabatan, a.veri_1, c.no_kelompok FROM surat a, jabatan b, kelompok c WHERE a.id_jabatan=b.id_jabatan and a.nama=c.nama and a.id_jabatan = 3";
                $hasil=mysqli_query($konek,$query);
                while ($brs=mysqli_fetch_array($hasil))
                {
                    echo "<tr>";
                    echo "<td align ='center'>".$no++."</td>";
                    echo "<td align ='center'>".$brs[0]."</td>";
                    echo "<td align ='center'>".$brs[1]."</td>";
                    echo "<td>".$brs[2]."</td>";
                    echo "<td>".$brs[3]."</td>";
                    if ($brs[4] == 2) {
                        echo "<td align ='center'>";
                        echo "<img src ='green.png' width ='25' height ='25'";
                        echo "</td>";
                    }else if ($brs[4] == 1){
                        echo "<td align ='center'>";
                        echo "<img src ='red.png' width ='25' height ='25'";
                        echo "</td>";
                    } elseif ($brs[4] == 0) {
                        echo "<td align ='center'>";
                        echo "belum dijawab";
                        echo "</td>";
                    } else {
                        echo "<td align ='center'>";
                        echo "undefined";
                        echo "</td>";
                    }
                    echo "<td align ='center'><a href='answer_pjDats.php?id=$brs[0]'>jawab</a></td>";
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
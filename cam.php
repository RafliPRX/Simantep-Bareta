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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>  
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
            <?php 
              $jam_now = new DateTime("now");
              $timezone = new DateTimeZone("Asia/Kuala_Lumpur");
              $jam_now->setTimezone($timezone);
            ?> 
            <h5 align="center" class="card-title fw-semibold mb-4">SnapShot Absen</h5>
            <h5 align="center" class="card-title fw-semibold mb-4"> Jam Sekarang <?php echo $jam_now -> format('H:i:s'); ?> </h5>
            <div class="card">
               <div class="card-body">
               <video autoplay></video>
               <canvas id="canvas" style="display: none;"></canvas>
               <canvas id="canvas1" style="display: none;"></canvas>
               <div id="map"></div><br>
               <div class="form-control">
               
               <?php  
                    include 'konek.php';
                    $nama = $_SESSION['nama'];
                    $today= date("Y/m/d");
                    $sql = "SELECT jam_in, jam_out, today FROM snap WHERE nama='$nama' AND today = '$today'";
                    $result = mysqli_query($konek, $sql);
                    $brs = mysqli_fetch_array($result);
                    if ($brs['today'] == $today) 
                    {
                      ?> <button align="right" class="btn btn-danger" onclick="snapshot_out()">Absen Keluar</button> <?php
                    } else {
                      ?> <button align="left" class="btn btn-primary" onclick="snapshot_in()">Absen Masuk</button> <?php
                    }
                ?>
                
                <!-- <div class="row">
                <div class="col-md-4">
                    <div class="card">
                      <button align="left" class="btn btn-primary" id="snapshot-button">absen masuk</button>
                    </div>

                </div>
                <div class="col-md-4">
                  <div class="card"></div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                      <button align="right" class="btn btn-danger" id="snapshot-button1">absen keluar</button>
                  </div> -->
                </div>
                </div>
                </div>
               <style>
                #map { 
                  height: 500px; 
                  width: auto;
                }    
                video {
                  width: 100%;
                  height: auto;
                }
              </style>

              <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="crossorigin=""></script>  
               <script>
                // Minta izin untuk mengakses kamera
                function startVideo() {
                navigator.mediaDevices.getUserMedia({ video: true })
                  .then(function(stream) {
                    const video = document.querySelector('video');
                    video.srcObject = stream;
                    video.play();
                  })
                  .catch(function(error) {
                    console.error('Error accessing camera:', error);
                  });
                 }
                 
                function snapshot_in() {
                // Tampilkan video stream di elemen <video>
                startVideo(); 
                const video = document.querySelector('video');
                video.play();

                // Tangkap foto saat tombol di klik
                const canvas = document.querySelector('#canvas');
                const context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = canvas.toDataURL('image/jpeg');
                // uploadImage_in(imageData);
                const url = 'Absen_in.php';
                const data = {
                  image: imageData
                };
                var currentLocation = map.getCenter();

                if (circle.getBounds().contains(currentLocation)) {
                  fetch(url, {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                  })
                  .then(function(response) {
                    if (response.ok) {
                      return response.json();
                    } else {
                      throw new Error('Error uploading image');
                    }
                  })
                  .then(function(data) {
                    console.log(data.message);
                  })
                  .catch(function(error) {
                    console.error(error);
                  });
                  alert("Absensi Berhasil");
                  location.reload();
                } else {
                  alert("Location is not within radius");
                }

               }
               function snapshot_out() {
                // Tampilkan video stream di elemen <video>
                startVideo(); 
                const video = document.querySelector('video');
                video.play();

                // Tangkap foto saat tombol di klik
                const canvas = document.querySelector('#canvas1');
                const context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                const imageData = canvas.toDataURL('image/jpeg');
                // uploadImage_out(imageData);
                const url = 'Absen_out.php';
                    const data = {
                      image: imageData
                    };
                    var currentLocation = map.getCenter();

                    if (circle.getBounds().contains(currentLocation)) {
                      fetch(url, {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                      })
                      .then(function(response) {
                        if (response.ok) {
                          return response.json();
                        } else {
                          throw new Error('Error uploading image');
                        }
                      })
                      .then(function(data) {
                        console.log(data.message);
                      })
                      .catch(function(error) {
                        console.error(error);
                      });                      
                      alert("Berhasil Absen Keluar");
                      location.reload();
                    } else {
                      alert("Location is not within radius");
                    }

               }


                    //  const snapshotButton = document.querySelector('#snapshot-button');
                    //  snapshotButton.addEventListener('click', function() {
                    //   const canvas = document.querySelector('#canvas');
                    //   const context = canvas.getContext('2d');
                    //   canvas.width = video.videoWidth;
                    //   canvas.height = video.videoHeight;
                    //   context.drawImage(video, 0, 0, canvas.width, canvas.height);
                    //   const imageData = canvas.toDataURL('image/jpeg');
                    //   uploadImage(imageData);
                    //  });
                    //  const snapshotButton1 = document.querySelector('#snapshot-button1');
                    //   snapshotButton1.addEventListener('click', function() {
                    //     const canvas1 = document.querySelector('#canvas1');
                    //     const context1 = canvas1.getContext('2d');
                    //     canvas1.width = video.videoWidth;
                    //     canvas1.height = video.videoHeight;
                    //     context1.drawImage(video, 0, 0, canvas1.width, canvas1.height);
                    //     const imageData1 = canvas1.toDataURL('image/jpeg');
                    //     uploadImage1(imageData1);
                    //   });
                      
                    function uploadImage_in(imageData) {
                    const url = 'Absen_in.php';
                    const data = {
                      image: imageData
                    };
                    var currentLocation = map.getCenter();

                    if (circle.getBounds().contains(currentLocation)) {
                      fetch(url, {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                      })
                      .then(function(response) {
                        if (response.ok) {
                          return response.json();
                        } else {
                          throw new Error('Error uploading image');
                        }
                      })
                      .then(function(data) {
                        console.log(data.message);
                      })
                      .catch(function(error) {
                        console.error(error);
                      });
                    } else {
                      alert("Location is not within radius");
                    }
                  }                
                  function uploadImage_out(imageData) {
                    const url = 'Absen_out.php';
                    const data = {
                      image: imageData
                    };
                    var currentLocation = map.getCenter();

                    if (circle.getBounds().contains(currentLocation)) {
                      fetch(url, {
                        method: 'POST',
                        headers: {
                          'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(data)
                      })
                      .then(function(response) {
                        if (response.ok) {
                          return response.json();
                        } else {
                          throw new Error('Error uploading image');
                        }
                      })
                      .then(function(data) {
                        console.log(data.message);
                      })
                      .catch(function(error) {
                        console.error(error);
                      });
                    } else {
                      alert("Location is not within radius");
                    }
                  }                
                
                

                // Memanggil fungsi getUserMedia() saat halaman dimuat
                window.addEventListener('load', function() {
                  startVideo();
                });
                 var map = L.map('map').setView([-0.4412475506659761, 117.21952014085822], 17);
                 //  var marker = L.marker([-0.4412475506659761, 117.21952014085822]).addTo(map);
                 L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                 }).addTo(map);
                 var circle = L.circle([-0.4420500435445922, 117.21931056434704], {
                    color: 'orange',
                    fillColor: 'orange',
                    fillOpacity: 0.2,
                    radius: 50
                 }).addTo(map);
                 map.locate({setView: true, maxZoom: 16});
                 function onLocationFound(e) {

                    L.marker(e.latlng).addTo(map)
                        
                    L.circle(e.latlng, radius).addTo(map);
                 }

                 map.on('locationfound', onLocationFound);
                 function onLocationError(e) {
                    alert(e.message);
                 }

                 map.on('locationerror', onLocationError);
                 function take_snapshot() {
                 // play sound effect
                 shutter.play();
                
                 // take snapshot and get image data
                 // get current location
                 var currentLocation = map.getCenter();

                 // check if current location is within radius
                 if (circle.getBounds().contains(currentLocation)) {
                    // take snapshot and get image data
                    Webcam.snap(function(data_uri) {

                        Webcam.upload(data_uri, 'Absen_in.php?', function(code, text, Name) {
                            document.getElementById('results').innerHTML =
                                '' +
                                '<img src="' + data_uri + '"/>';
                        });

                    });
                 } else {
                    alert("Location is not within radius");
                  }
                 }
               </script>
               </div>
            </div>
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
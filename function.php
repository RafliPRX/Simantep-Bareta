<?php
    session_start();
    include 'konek.php';
//Login Admin
if (isset($_POST['loginADM'])) {
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];
  
    $_SESSION['loginADM'] = $_POST['loginADM'];
    // $cek = mysqli_query($konek, "SELECT a.nama, a.pass, a.nrk, b.id_jabatan, a.id_jabatan_sup, b.no_kelompok FROM user_bnn a, kelompok b WHERE a.nama = b.nama AND a.nama='$nama'");
    $cek = mysqli_query($konek, "SELECT * FROM admin_bnn WHERE nama='$nama'");
    // $cek = mysqli_query($konek, "SELECT * FROM user_bnn WHERE nama = '$nama'");
    $hitung = mysqli_num_rows($cek);
    $pw = mysqli_fetch_assoc($cek);
  
    $passNow = $pw['pass'];
  
    if ($hitung > 0) {
        if (password_verify($pass, $passNow)) {
            $_SESSION['nama'] = $pw['nama'];
            header('Location:list_srtADM.php');
        } else {
            echo "<script language ='JavaScript'> (window.alert('Error: Invalid password'))</script>";
            header('Location: indexADM.php');
        }
    } else {
        echo "<script language ='JavaScript'> (window.alert('Error: User not found'))</script>";
        header('Location: indexADM.php');
    }
  }
  
//login Pengguna

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];

    $_SESSION['login'] = $_POST['login'];
    $cek = mysqli_query($konek, "SELECT a.id, a.nama, a.pass, a.nrk, b.id_jabatan, a.id_jabatan_sup, b.no_kelompok, a.Locked, a.f_profile, a.sisa_cuti FROM user_bnn a, kelompok b WHERE a.nama = b.nama AND a.nama='$nama'");
    // $cek = mysqli_query($konek, "SELECT * FROM user_bnn WHERE nama = '$nama'");
    $hitung = mysqli_num_rows($cek);
    $pw = mysqli_fetch_assoc($cek);

    $passNow = $pw['pass'];
    $role = $pw['id_jabatan_sup'];
    $lock = $pw['Locked'];
    if ($hitung > 0) {   
            if (password_verify($pass, $passNow)) {
                if ($lock > 1) {
                    $_SESSION['nama'] = $pw['nama'];
                    $_SESSION['nrk'] = $pw['nrk'];
                    $_SESSION['id_jabatan']= $pw['id_jabatan'];
                    $_SESSION['id_jabatan_sup'] = $pw['id_jabatan_sup'];
                    $_SESSION['no_kelompok'] = $pw['no_kelompok'];
                    $_SESSION['f_profile'] = $pw['f_profile'];
                    $_SESSION['id'] = $pw['id'];
                    $_SESSION['sisa_cuti'] = $pw['sisa_cuti'];
                    if ($role == 1) {
                        header('Location:dashboard.php');
                    } elseif ($role >= 2 && $role <= 8) {
                        header('Location:list_srt2dats.php');
                    } elseif ($role == 9 || $role == 10) {
                        header('Location:list_srt3A.php');
                    } elseif ($role == 11) {
                        header('Location:list_srt2dats.php');
                    } else {
                        echo "<script language ='JavaScript'> (window.alert('Error: Invalid role'))
                        location.href='index.php'
                        </script>";
                    }
                } else {
                  echo "<script language ='JavaScript'> (window.alert('Error: Akun Dikunci Silahkan Kontak Kepegawaian'))
                  location.href='index.php'
                  </script>";
                }       
            } else {
                echo "<script language ='JavaScript'> (window.alert('Error: Invalid password'))
                location.href='index.php'
                </script>";
            }       
    } else {
        echo "<script language ='JavaScript'> (window.alert('Error: User not found'))
        location.href='index.php'
        </script>";
    }
}


// Membuat surat
if (isset($_POST['simpan'])) {
    //Upload data surat
    $nama = $_POST['nama'];
    $nrk = $_POST['nrk'];
    $no_hp= $_POST['no_hp'];
    $jabatan = $_POST['jabatan'];
    $ket = $_POST['ket'];
    $alamat = $_POST['alamat'];
    $c_kontrak = $_POST['hari_kontrak1'];
    $c_kontrak_s_date = $_POST['tgl_mulai1'];
    $c_kontrak_e_date = $_POST['tgl_selesai1'];
    $sc_kontrak = $_POST['sisa_n'];
    $cap_kontrak = $_POST['hari_kontrak2'];
    $cap_kontrak_s_date = $_POST['tgl_mulai2'];
    $cap_kontrak_e_date = $_POST['tgl_selesai2'];
    $izin = $_POST['izin'];
    $izin_s = $_POST['izin_mulai'];
    $izin_e = $_POST['izin_selesai'];
    $sakit = $_POST['sakit'];
    $sakit_s = $_POST['sakit_mulai'];
    $sakit_e = $_POST['sakit_selesai'];
    $hamil = $_POST['hamil'];
    $hamil_s = $_POST['hamil_mulai'];
    $hamil_e = $_POST['hamil_selesai'];
    $date_now = $_POST['date_now'];
    
    //upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tempname = $_FILES['gambar']['tmp_name'];
    $validExtention = ['jpg', 'jpeg', 'png'];
    $gambarExtend = explode('.', $gambar);
    $gambarExtend = strtolower(end($gambarExtend));

    // var_dump($_POST);
    // var_dump($_FILES); 
    // die;

    $query="INSERT INTO surat (id_surat, nama, nrk, Keterangan, alamat, no_hp, id_jabatan, cuti1, cuti_date, cuti_date_fin, sisa_k, cuti_imp, cuti_imp_date, cuti_imp_date_fin, izin, izin_date, izin_date_fin, sakit, sakit_date, sakit_date_fin, hamil, hamil_date, hamil_date_fin, veri_1, veri_2, veri_3, date_now, gambar) VALUES (NULL, '$nama', '$nrk', '$ket', '$alamat', '$no_hp', '$jabatan', '$c_kontrak', '$c_kontrak_s_date', '$c_kontrak_s_date', '$sc_kontrak', '$cap_kontrak', '$cap_kontrak_s_date', '$cap_kontrak_e_date', '$izin', '$izin_s', '$izin_e', '$sakit', '$sakit_s', '$sakit_e', '$hamil', '$hamil_s', '$hamil_e', '0', '0', '0', '$date_now', '$gambar')";
    $hasil=mysqli_query($konek, $query);
    if ($hasil) {
        if (in_array($gambarExtend, $validExtention)) {
            if (move_uploaded_file($tempname, 'Image/'. $gambar)) {
                echo "<script language='JavaScript'> (window.alert('Surat terkirim')) 
                location.href='list_srt.php'
                </script>";
            } else {
                echo "<script language='JavaScript'> (window.alert('Surat tidak terkirim')) 
                location.href='list_srt.php'
                </script>";
            }
        } else {
            echo "<script language='JavaScript'> (window.alert('ekstensi Gambar tidak valid')) 
                location.href='list_srt.php'
                </script>";
        }
    }
}

// menjawab surat
if (isset($_POST['createPJdats'])) {
    $jawab = $_POST['jawab'];
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];
    $query="UPDATE surat SET veri_1 = '$jawab', alasan = '$alasan' WHERE id_surat = '$id' ";
    $hasil=mysqli_query($konek, $query);
    // var_dump($query);
    // die;
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt2dats.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          ini_set('display_error', 1)
          location.href='list_srt2dats.php' 
          </script>";
}
if (isset($_POST['createPJpark'])) {
    $jawab = $_POST['jawab'];
    $id = $_POST['id'];

    $query="UPDATE surat set veri_1 = '$jawab' WHERE id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt2park.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt2park.php' 
          </script>";
}
if (isset($_POST['createPJsecr'])) {
    $nama = $_POST['nama'];
    $ket = $_POST['ket'];
    $jabatan = $_POST['jabatan'];
    $jawab = $_POST['jawab'];
    $id = $_POST['id'];

    $query="UPDATE surat set nama = '$nama', Keterangan = '$ket', kode_jabatan = '$jabatan', veri_1 = '$jawab' WHERE id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt2secr.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt2secr.php' 
          </script>";
}

if (isset($_POST['post_a'])) {
    $nama = $_POST['nama'];
    $ket = $_POST['ket'];
    $jabatan = $_POST['jabatan'];
    $jawab = $_POST['jawab'];
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];

    $query="UPDATE surat set veri_2 = '$jawab',alasan = '$alasan'  WHERE id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);
    // var_dump($query);
    // die;
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt3A.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt3A.php' 
          </script>";
}

if (isset($_POST['post_b'])) {
    $jawab = $_POST['jawab'];
    $alasan = $_POST['alasan'];
    // $sisa_cuti = $_POST['sisa'];
    $cuti = $_POST['hari_kontrak1'];
    $cuti_imp = $_POST['hari_kontrak2'];
    $sakit = $_POST['sakit'];
    $izin = $_POST['izin'];
    $hamil = $_POST['hamil'];
    $id = $_POST['id'];

    function kurang_kontrak($cuti, $jawab){
        if($jawab == 1){
            return false;
        } else {
            return $cuti;
        }
    }

    if($cuti > 0){
    $kontrak_hitung = kurang_kontrak($cuti, $jawab);
    $query="UPDATE surat 
            INNER JOIN user_bnn ON surat.nama = user_bnn.nama 
            SET surat.veri_3 = '$jawab', surat.alasan = '$alasan', user_bnn.sisa_cuti = user_bnn.sisa_cuti - '$kontrak_hitung' 
            WHERE surat.id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);

    // var_dump($query);
    // die;
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt3A.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt3A.php' 
          </script>";
    } else {
        $query="UPDATE surat SET veri_3 = '$jawab', alasan = '$alasan' WHERE id_surat = '$id'";
        $hasil=mysqli_query($konek, $query);
        // var_dump($query);
        // die;
        if($hasil) 
        echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
              location.href='list_srt3A.php'
              </script>";
        else 
        echo "<script language='JavaScript'>
              (window.alert('surat gagal terjawab'))
              location.href='list_srt3A.php' 
              </script>";
    
    }
}

// upload gambar profile
if (isset($_POST['simpan_profile'])) {

    // var_dump($_POST);
    // var_dump($_FILES); 
    // die;

    $gambar = $_FILES['gambar']['name'];
    $tempname = $_FILES['gambar']['tmp_name'];
    $validExtention = ['jpg', 'jpeg', 'png'];
    $gambarExtend = explode('.', $gambar);
    $gambarExtend = strtolower(end($gambarExtend));
    $id = $_POST['id'];
    
    

    $query = "UPDATE user_bnn SET f_profile ='$gambar' WHERE id ='$id'";
    
    $res = mysqli_query($konek, $query);
    if ($res) {
        if (in_array($gambarExtend, $validExtention)) {
            if (move_uploaded_file($tempname, 'profile/'. $gambar)) {
                echo "<script language='JavaScript'> (window.alert('gambar terkirim')) 
                location.href='list_srt.php'
                </script>";
            } else {
                echo "<script language='JavaScript'> (window.alert('gambar tidak terkirim')) 
                location.href='list_srt.php'
                </script>";
            }
        } else {
            echo "<script language='JavaScript'> (window.alert('ekstensi tidak valid')) 
                location.href='list_srt.php'
                </script>";
        }
    }
}

// upload pdf
if (isset($_POST['upload_pdf'])) {

    // var_dump($_POST);
    // var_dump($_FILES); 
    // die;
    $filename = $_FILES['pdf']['name'];
    $tempname = $_FILES['pdf']['tmp_name'];
    $id = $_POST['id'];

    $query = "UPDATE surat SET pdf ='$filename' WHERE id_surat ='$id'";
    $res = mysqli_query($konek, $query);

 if ($res) {
    if (move_uploaded_file($tempname, 'PDF/'. $filename)) {
        echo "<script language='JavaScript'> (window.alert('surat ter-Upload')) 
        location.href='list_srtADM.php'
        </script>";
    } else {
        echo "<script language='JavaScript'> (window.alert('surat gagal ter-Upload')) 
        location.href='list_srtADM.php'
        </script>";
    }
  }
}

//membuka dan mengunci akun
if (isset($_POST['unlocked'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE user_bnn SET Locked ='$status' WHERE id ='$id'";

    $res = mysqli_query($konek, $query);

    if ($res) {
        echo "<script language='JavaScript'> (window.alert('akun status terubah'))
        location.href='list_account.php'
        </script>";
        
    } else {
        echo "<script language='JavaScript'> (window.alert('akun status gagal terubah'))
        location.href='list_account.php'
        </script>";
    }
}
?>
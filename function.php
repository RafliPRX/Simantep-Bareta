<?php
    session_start();
    include 'konek.php';

//login Pengguna

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];

    $_SESSION['login'] = $_POST['login'];
    $cek = mysqli_query($konek, "SELECT a.nama, a.pass, a.nrk, b.id_jabatan, a.id_jabatan_sup, b.no_kelompok FROM user_bnn a, kelompok b WHERE a.nama = b.nama AND a.nama='$nama'");
    // $cek = mysqli_query($konek, "SELECT * FROM user_bnn WHERE nama = '$nama'");
    $hitung = mysqli_num_rows($cek);
    $pw = mysqli_fetch_assoc($cek);

    $passNow = $pw['pass'];
    $role = $pw['id_jabatan_sup'];

    if ($hitung > 0) {
        if (password_verify($pass, $passNow)) {
            $_SESSION['nama'] = $pw['nama'];
            $_SESSION['nrk'] = $pw['nrk'];
            $_SESSION['id_jabatan']= $pw['id_jabatan'];
            $_SESSION['id_jabatan_sup'] = $pw['id_jabatan_sup'];
            $_SESSION['no_kelompok'] = $pw['no_kelompok'];
            if ($role == 1) {
                header('Location:dashboard.php');
            } elseif ($role >= 2 && $role <= 8) {
                header('Location:list_srt2dats.php');
            } elseif ($role == 9 || $role == 10) {
                header('Location:list_srt3A.php');
            } elseif ($role == 11) {
                header('Location:list_srt2dats.php');
            } else {
                echo "<script language ='JavaScript'> (window.alert('Error: Invalid role'))</script>";
                header('Location: index.php');
            }
        } else {
            echo "<script language ='JavaScript'> (window.alert('Error: Invalid password'))</script>";
            header('Location: index.php');
        }
    } else {
        echo "<script language ='JavaScript'> (window.alert('Error: User not found'))</script>";
        header('Location: index.php');
    }
}


// Membuat surat
if (isset($_POST['simpan'])) {
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
    
    $query="INSERT INTO surat (id_surat, nama, nrk, Keterangan, alamat, no_hp, id_jabatan, cuti1, cuti_date, cuti_date_fin, sisa_k, cuti_imp, cuti_imp_date, cuti_imp_date_fin, izin, izin_date, izin_date_fin, sakit, sakit_date, sakit_date_fin, hamil, hamil_date, hamil_date_fin, veri_1, veri_2, veri_3, date_now) VALUES (NULL, '$nama', '$nrk', '$ket', '$alamat', '$no_hp', '$jabatan', '$c_kontrak', '$c_kontrak_s_date', '$c_kontrak_s_date', '$sc_kontrak', '$cap_kontrak', '$cap_kontrak_s_date', '$cap_kontrak_e_date', '$izin', '$izin_s', '$izin_e', '$sakit', '$sakit_s', '$sakit_e', '$hamil', '$hamil_s', '$hamil_e', '0', '0', '0', '$date_now')";
    $hasil=mysqli_query($konek, $query);
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat telah dibuat')) 
		  location.href='list_srt.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terbuat'))
          location.href='add_surat.php' 
          </script>";
}

// menjawab surat
if (isset($_POST['createPJdats'])) {
    $jawab = $_POST['jawab'];
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];

    $query="UPDATE surat set veri_1 = '$jawab', alasan = '$alasan' WHERE id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);
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
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt3.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt3.php' 
          </script>";
}

if (isset($_POST['post_b'])) {
    $jawab = $_POST['jawab'];
    $alasan = $_POST['alasan'];
    $id = $_POST['id'];

    $query="UPDATE surat set veri_3 = '$jawab', alasan = '$alasan' WHERE id_surat = '$id'";
    $hasil=mysqli_query($konek, $query);
    if($hasil) 
	echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
		  location.href='list_srt3.php'
		  </script>";
    else 
	echo "<script language='JavaScript'>
          (window.alert('surat gagal terjawab'))
          location.href='list_srt3.php' 
          </script>";
}

// upload gambar
if (isset($_POST['upload'])) {

    // var_dump($_POST);
    // var_dump($_FILES); 
    // die;

    $gambar = $_FILES['gambar']['name'];
    $tempname = $_FILES['gambar']['tmp_name'];
    $validExtention = ['jpg', 'jpeg', 'png'];
    $gambarExtend = explode('.', $gambar);
    $gambarExtend = strtolower(end($gambarExtend));
    $id = $_POST['id'];
    
    

    $query = "UPDATE surat SET gambar ='$gambar' WHERE id_surat ='$id'";
    
    $res = mysqli_query($konek, $query);
    if ($res) {
        if (in_array($gambarExtend, $validExtention)) {
            if (move_uploaded_file($tempname, 'Image/'. $gambar)) {
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
    $file_name = $_FILES['pdf']['name'];
    $tempname = $_FILES['pdf']['tmp_name'];
    $id = $_POST['id'];

    $query = "UPDATE surat SET pdf ='$file_name' WHERE id_surat ='$id'";
    $res = mysqli_query($konek, $query);

 if ($res) {
    if (move_uploaded_file($tempname, 'PDF/'. $file_name)) {
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
?>
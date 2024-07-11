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
                        header('Location:dashboard_pj.php');
                    } elseif ($role >= 9 && $role <= 11 ) {
                        header('Location:list_srt3A.php');
                    } elseif ($role == 12) {
                        header('Location:dashboard_simak.php');
                    } elseif ($role >= 13) {
                        header('Location:dashboard_simak.php');
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
                echo "<script language='JavaScript'> (window.alert('Surat telah diajukan')) 
                location.href='list_srt.php'
                </script>";
            } else {
                echo "<script language='JavaScript'> (window.alert('Surat tidak terkirim')) 
                location.href='list_srt.php'
                </script>";
            }
        } else {
            echo "<script language='JavaScript'> (window.alert('Surat telah diajukan')) 
                location.href='list_srt.php'
                </script>";
        }
    } else {
        echo "<script language='JavaScript'> (window.alert('Surat Belum Terbuat'))
            location.href='list_srt.php'
            </script>";
    }
}
// Tambah Pengajuan Dana
if (isset($_POST['simpan_pengajuan'])) {
    $unit = $_POST['unit'];
    $nama = $_POST['nama'];
    $nrk = $_POST['nrk'];
    $jabatan = $_POST['jabatan'];
    $nama_kegiatan= $_POST['kegiatan'];
    $kapan = $_POST['event'];
    $acc_521211_sosial = $_POST['521211_sosial'];
    $acc_521211_medis = $_POST['521211_medis'];
    $acc_522141_kendaraan = $_POST['522141_kendaraan'];
    $acc_522141_tempat = $_POST['522141_tempat'];
    $acc_522151 = $_POST['522151'];
    $acc_524113 = $_POST['524113'];
    $acc_524114 = $_POST['524114'];
    $acc_522191 = $_POST['522191'];
    $keterangan = $_POST['ket_medis'];
    $total_dana = $_POST['total_manajemen'];

    $sql = "INSERT INTO dana_bnn(id_dana, nama, NRK, jabatan_pj, nama_kegiatan, rencana_pelaksana, acc_521211_sosial, acc_521211_medis, acc_522141_kendaraan, acc_522141_tempat,   
    acc_522151, acc_524113, acc_524114, acc_522191, keterangan, total_dana_manajemen, units) VALUES (NULL, '$nama', '$nrk', '$jabatan',
    '$nama_kegiatan', '$kapan', '$acc_521211_sosial', '$acc_521211_medis', '$acc_522141_kendaraan', '$acc_522141_tempat', '$acc_522151',
    '$acc_524113', '$acc_524114', '$acc_522191', '$keterangan', '$total_dana', '$unit')";
    // var_dump($kapan);
    // var_dump($nama_kegiatan);
    // var_dump($acc_521211);
    // var_dump($sql);
    // die;
    $query = mysqli_query($konek, $sql);


    if ($query) {
        echo "<script language='JavaScript'> (window.alert('Formulir Pengajuan Dana telah Diajukan')) 
        location.href='dashboard_simak.php'
        </script>";
    } else {
        echo "<script language='JavaScript'> (window.alert('Formulir Pengajuan Dana Gagal')) 
        location.href='add_money_plans.php'
        </script>";
    }
}
// Tambah Pengajuan Proposal dan LPJ
if (isset($_POST['simpan_proposal'])) {
    $unit = $_POST['unit'];
    $nama = $_POST['nama'];
    $nrk = $_POST['nrk'];
    $jabatan = $_POST['jabatan'];
    $nama_kegiatan= $_POST['kegiatan'];
    $kapan = $_POST['event'];
    $today = date("Y-m-d");
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $today_jam = date("H:i:s");
    $sql = "INSERT INTO lpj_bnn(id_lpj, nama, nrk, jabatan, nama_kegiatan, rencana_pelaksana, units, veri_1,
     veri_2, today, today_jam) VALUES (NULL, '$nama', '$nrk', '$jabatan', '$nama_kegiatan', '$kapan', '$unit', '0', '0', '$today', '$today_jam')";
    // var_dump($kapan);
    // var_dump($nama_kegiatan);
    // var_dump($acc_521211);
    // var_dump($sql);
    // die;
    $query = mysqli_query($konek, $sql);


    if ($query) {
        echo "<script language='JavaScript'> (window.alert('Formulir Pengajuan Proposal dan LPJ telah Diajukan')) 
        location.href='dashboard_simak.php'
        </script>";
    } else {
        echo "<script language='JavaScript'> (window.alert('Formulir Pengajuan Proposal dan LPJ Gagal')) 
        location.href='dana_LPJ.php'
        </script>";
    }
}

// menjawab surat
if (isset($_POST['pj_agr'])) {
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    
    $query = "UPDATE surat SET veri_1 = '2' WHERE id_surat = '$id'";
    $hasil = mysqli_query($konek, $query);
    if($hasil)
    echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
         location.href='list_srt2.php?id=$nama'
         </script>";
    else 
    echo "<script language='JavaScript'>
         (window.alert('surat gagal terjawab'))
         location.href='list_srt2.php?id=$nama' 
         </script>";

} elseif (isset($_POST['pj_dcl'])) {
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];

    $query = "UPDATE surat SET veri_1 = '1', alasan = '$alasan' WHERE id_surat = '$id'";
    $hasil = mysqli_query($konek, $query);
    if (empty($alasan)) {
        echo "<script language='JavaScript'> (window.alert('Alasan Tidak Boleh Kosong')) 
             location.href='answer_pjDats.php?id=$id'
             </script>";
    } else {
        if($hasil)
        echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
             location.href='list_srt2.php?id=$nama'
             </script>";
        else 
        echo "<script language='JavaScript'>
             (window.alert('surat gagal terjawab'))
             location.href='list_srt2.php?id=$nama' 
             </script>";    
    }
}


if (isset($_POST['kepeg_agr'])) {
    $id = $_POST['id'];
    
    $query = "UPDATE surat SET veri_2 = '2' WHERE id_surat = '$id'";
    $hasil = mysqli_query($konek, $query);
    if($hasil)
    echo "<script language='JavaScript'> (window.alert('surat sudah terjawab')) 
         location.href='list_srt3A.php'
         </script>";
    else 
    echo "<script language='JavaScript'>
         (window.alert('surat gagal terjawab'))
         location.href='list_srt3A.php' 
         </script>";

} elseif (isset($_POST['kepeg_dcl'])) {
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];

    $query = "UPDATE surat SET veri_2 = '1', alasan = '$alasan' WHERE id_surat = '$id'";
    $hasil = mysqli_query($konek, $query);
    if (empty($alasan)) {
        echo "<script language='JavaScript'> (window.alert('Alasan Tidak Boleh Kosong')) 
             location.href='answer_a.php?id=$id'
             </script>";
    } else {
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

if (isset($_POST['kasubag_agr'])) {
    $cuti = $_POST['hari_kontrak1'];
    $jawab = 2;
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
            SET surat.veri_3 = '$jawab', user_bnn.sisa_cuti = user_bnn.sisa_cuti - '$kontrak_hitung' 
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
        var_dump($query);
        die;
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
} elseif (isset($_POST['kasubag_dcl'])) {
    $id = $_POST['id'];
    $alasan = $_POST['alasan'];

    $query = "UPDATE surat SET veri_3 = '1', alasan = '$alasan' WHERE id_surat = '$id'";
    $hasil = mysqli_query($konek, $query);
    if (empty($alasan)) {
        echo "<script language='JavaScript'> (window.alert('Alasan Tidak Boleh Kosong')) 
             location.href='answer_b.php?id=$id'
             </script>";
    } else {
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

//jawaban lpj pada kasubag dan kepala balai
if (isset($_POST['acc_lpj'])) {
    $role = $_SESSION['id_jabatan_sup'];
    $id = $_POST['id'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $today_date = date("Y-m-d");
    $today_jam = date("H:i:s");
    if ($role == 10) {
        $query = "UPDATE lpj_bnn SET veri_1 = '2', veri_1_date = '$today_date', veri_1_jam = '$today_jam' WHERE id_lpj='$id'";
        $res = mysqli_query($konek, $query);
        if ($res) {
            echo "<script language='JavaScript'> (window.alert('berhasil(kasubag)'))
            location.href='dashboard_simak.php'
            </script>";
            
        } else {
            echo "<script language='JavaScript'> (window.alert('Gagal(kasubag)'))
            location.href='dashboard_simak.php'
            </script>";
        }    
        // var_dump($query);
        // die;
    } elseif ($role == 12) {
        $query = "UPDATE lpj_bnn SET veri_2 = '2', veri_2_date = '$today_date', veri_2_jam = '$today_jam' WHERE id_lpj='$id'";
        $res = mysqli_query($konek, $query);
        if ($res) {
            echo "<script language='JavaScript'> (window.alert('berhasil(kepalai balai)'))
            location.href='dashboard_simak.php'
            </script>";
            
        } else {
            echo "<script language='JavaScript'> (window.alert('Gagal(kepalai balai)'))
            location.href='dashboard_simak.php'
            </script>";
        }    
        // var_dump($query);
        // die;

    }
}
if (isset($_POST['dcl_lpj'])) {
    $role = $_SESSION['id_jabatan_sup'];
    $id = $_POST['id'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $today_date = date("Y-m-d");
    $today_jam = date("H:i:s");
    if ($role == 10) {
        $query = "UPDATE lpj_bnn SET veri_1 = '1', veri_1_date = '$today_date', veri_1_jam = '$today_jam' WHERE id_lpj='$id'";
        $res = mysqli_query($konek, $query);
        if ($res) {
            echo "<script language='JavaScript'> (window.alert('berhasil(kasubag)'))
            location.href='dashboard_simak.php'
            </script>";
            
        } else {
            echo "<script language='JavaScript'> (window.alert('Gagal(kasubag)'))
            location.href='dashboard_simak.php'
            </script>";
        }    
        // var_dump($query);
        // die;
    } elseif ($role == 12) {
        $query = "UPDATE lpj_bnn SET veri_2 = '1', veri_2_date = '$today_date', veri_2_jam = '$today_jam' WHERE id_lpj='$id'";
        $res = mysqli_query($konek, $query);
        if ($res) {
            echo "<script language='JavaScript'> (window.alert('berhasil(kepalai balai)'))
            location.href='dashboard_simak.php'
            </script>";
            
        } else {
            echo "<script language='JavaScript'> (window.alert('Gagal(kepalai balai)'))
            location.href='dashboard_simak.php'
            </script>";
        }    
        // var_dump($query);
        // die;

    }
}

// edit keterangan keuangan
if (isset($_POST['simpan_keterangan_LPJ'])) {
    $id = $_POST['id'];
    $keterangan = $_POST['keterangan'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $today_date = date("Y-m-d");
    $today_jam = date("H:i:s");

    $query = "UPDATE lpj_bnn SET keterangan = '$keterangan', keterangan_jam = '$today_jam', keterangan_date = '$today_date' WHERE id_lpj = '$id'";
    // var_dump($query);
    // die;
    $res = mysqli_query($konek, $query);
    if ($res) {
        echo "<script language='JavaScript'> (window.alert('berhasil Keterangan'))
        location.href='dashboard_simak.php'
        </script>";
        
    } else {
        echo "<script language='JavaScript'> (window.alert('berhasil Keterangan'))
        location.href='dashboard_simak.php'
        </script>";
    }    
}

if (isset($_POST['simpan_keterangan_RPD'])) {
    $id = $_POST['id'];
    $keterangan = $_POST['keterangan'];
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $today_date = date("Y-m-d");
    $today_jam = date("H:i:s");

    $query = "UPDATE dana_bnn SET keterangan_keuangan = '$keterangan' WHERE id_dana = '$id'";
    // var_dump($query);
    // die;
    $res = mysqli_query($konek, $query);
    if ($res) {
        echo "<script language='JavaScript'> (window.alert('berhasil Keterangan'))
        location.href='dashboard_simak.php'
        </script>";
        
    } else {
        echo "<script language='JavaScript'> (window.alert('berhasil Keterangan'))
        location.href='dashboard_simak.php'
        </script>";
    }    
}
?>
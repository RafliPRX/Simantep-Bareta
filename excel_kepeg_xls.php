<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar surat cuti(Kepegawaian).xls");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar surat cuti</title>
</head>
<?php
include 'konek.php';
?>
<body>
	<h2 align="center">Daftar Surat Cuti</h2>
    <table class="fl-table" border="1" width="100%" >
      <tr>
          <th width="5%" rowspan="2" >NO.</th>
          <th width="10%" rowspan="2" >TANGGAL</th>
          <th width="10%" rowspan="2" >NAMA</th>
          <th width="20%" colspan="2" >JAM KEHADIRAN</th>
          <th width="20%" rowspan="2" >KWK</th>
          <th width="10%" rowspan="2" >JWK</th>
          <th width="10%" rowspan="2" >JWK REAL</th>
          <th width="10%" rowspan="2" >KETERANGAN</th>
      </tr>
      <Tr>
          <th width="10%" >Masuk</th>
          <th width="10%" >Keluar</th>
      </Tr>
<?php
$no=1;
$nama = $_GET['nama'];
$query="SELECT today, nama, jam_in, jam_out, total FROM snap WHERE nama = '$nama'";
$hasil = mysqli_query($konek, $query);
while($brs=mysqli_fetch_array($hasil)){
    $jam_selesai = $brs[4];
    $selisih = kwkReal($jam_selesai);
    $Sisa = sisa($jam_selesai);
    $status1 = telat($jam_masuk);
    $status2 = cepat($jam_selesai);
      echo "<tr>";
      echo "<th align ='center'>".$no++."</th>";
      echo "<th align ='center'>".$brs[0]."</th>";
      echo "<th align ='center'>".$brs[1]."</th>";
      echo "<th>".$brs[2]."</th>";
      echo "<th>".$brs[3]."</th>";
      echo "<th>".$selisih."</th>";
      echo "<th>".$Sisa."</th>";
      echo "<th>".$jam_selesai."</th>";
      echo "<th>".$status1. "  " .$status2."</th>";
      echo "</tr>";
}
function kwkReal($jam_selesai) {
  $jwk_real_raw = strtotime("08:00:00");
  $jam_selesai_raw = strtotime($jam_selesai);
  $kwk_real_raw = strtotime("00:00:00"); 
  if ($jam_selesai_raw < $jwk_real_raw ) {
    $kwk_raw = $jwk_real_raw - $jam_selesai_raw;
  } else {
    $kwk_raw = $kwk_real_raw;
  }
  $kwk_real = date("H:i:s", $kwk_raw);
  return $kwk_real;
}
function telat($jam_masuk){
  $telat = strtotime('07:31:00');
  $waktuMasuk = strtotime($jam_masuk);

  if ($waktuMasuk > $telat) {
    $terlambat = "telat";
  } else {
    $terlambat = false;
  }
  return $terlambat;
}
function cepat($jam_pulang){
  $jam_balik = strtotime('16:00:00');
  $waktuSelesai = strtotime($jam_pulang);
  if ($waktuSelesai <= $jam_balik) {
    $cepat = "pulang cepat";
  } else {
    $cepat = false;
  }
  return $cepat;
}

 function sisa($jam_selesai) {
  $jam_fin_modif = strtotime($jam_selesai);
  $jwk = strtotime("08:00:00");
  
  if ($jam_fin_modif < $jwk) {
    $jwk_raw = $jam_fin_modif;
  } else {
    $jwk_raw = $jwk;
  }
  $jwk_real = date("H:i:s", $jwk_raw);

  return $jwk_real;
}


?>
</table>	
</body>
</html>
<?php
// header("Content-type: application/vnd-ms-excel");
// header("Content-Disposition: attachment; filename=Daftar surat cuti(Kepegawaian).xls");
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
$bagian = $_GET['bagian'];
$query="SELECT today, nama, jam_in, jam_out, total, telat, cepat FROM snap WHERE (nama LIKE'%$nama%' AND bagian = '$bagian')";
// var_dump($query);
// die;
$hasil = mysqli_query($konek, $query);
while($brs=mysqli_fetch_array($hasil)){
    $jam_selesai = $brs[4];
    $selisih = kwkReal($jam_selesai);
    $jam_masuk = $brs[2];
    $jam_pulang = $brs[3];
    $telat = $brs[5];
    $cepat = $brs[6];
    $total = $brs[4];
    $Sisa = sisa($jam_selesai);
    $kwk_real = kwkReal($total);
    $jwk_real = sisa($total);
    $status1 = telat($jam_masuk, $telat);
    $status2 = cepat($jam_selesai, $cepat);
    ?> 
     <tr>
       <th align ='center'><?php echo $no++ ?></th>
       <th align ='center'><?php echo $brs[0] ?></th>
       <th align ='center'><?php echo $brs[1] ?></th>
       <th align ='center'><?php echo $jam_masuk ?></th>
       <th align ='center'><?php echo $jam_pulang ?></th>
       <th align ='center'><?php echo $kwk_real ?></th>
       <th align ='center'><?php echo $jwk_real ?></th>
       <th align ='center'><?php echo $total ?></th>
       <th align ='center'><?php echo $status1 ?><br><?php echo $status2 ?> </th>
     </tr>
    <?php
}
function kwkReal($total) {
  $jwk_real_raw = strtotime("08:00:00");
  $jam_selesai_raw = strtotime($total);
  $kwk_real_raw = strtotime("00:00:00"); 
  if ($jam_selesai_raw < $jwk_real_raw ) {
    $kwk_raw = $jwk_real_raw - $jam_selesai_raw;
  } else {
    $kwk_raw = $kwk_real_raw;
  }
  $kwk_real = gmdate("H:i:s", $kwk_raw);
  return $kwk_real;
}
function sisa($total) {
  $jam_fin_modif = strtotime($total);
  $jwk = strtotime("08:00:00");
  
  if ($jam_fin_modif < $jwk) {
    $jwk_raw = $jam_fin_modif;
  } else {
    $jwk_raw = $jwk;
  }
  $jwk_real = date("H:i:s", $jwk_raw);

  return $jwk_real;
}
function telat($jam_masuk, $telat){
  $telat_raw = strtotime('07:30:00');
  $waktuMasuk = strtotime($jam_masuk);
  // $telat_real = date("H:i:s", $telat);
  if ($waktuMasuk > $telat_raw) {
    $terlambat = "Telat: ".$telat."<br>";
  } else {
    $terlambat = "";
  }
  return $terlambat;
}
function cepat($jam_pulang, $cepat){
  $jam_balik = strtotime('16:00:00');
  $waktuSelesai = strtotime($jam_pulang);
  if ($waktuSelesai < $jam_balik) {
    $cepat = "Pulang Cepat :". $cepat;
  } else {
    $cepat = "";
  }
  return $cepat;
}


?>
</table>	
</body>
</html>
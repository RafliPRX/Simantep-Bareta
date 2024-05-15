<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar surat cuti.xls");
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
<table border="1" width="80%" align="center">
<tr>
	<th align="center" width="5%">No</th>
	<th align="center" width="10%">Tanggal Pengajuan Cuti</th>
	<th align="center" width="20%">Nama</th>
	<th align="center" width="20%">Keterangan(Cuti/Sakit/Izin/dll)</th>
	<th align="center" width="8%">Jumlah Hari</th> 
	<th align="center" width="10%">Tanggal Cuti Awal</th>
    <th align="center" width="10%">Tanggal Cuti Akhir</th>
</tr>
<?php
$no=1;
$query="SELECT date_now, nama, Keterangan, cuti1, cuti_imp, sakit, izin, hamil, cuti_date, cuti_imp_date, sakit_date, izin_date, hamil_date, cuti_date_fin, cuti_imp_date_fin, sakit_date_fin, izin_date_fin, hamil_date_fin FROM surat WHERE veri_1 = 2 AND veri_2 = 2 AND veri_3 = 2";
$hasil=mysqli_query($konek,$query);
while ($brs=mysqli_fetch_array($hasil))
{
	echo "<tr>";
	echo "<td align ='center'>".$no++."</td>";
	echo "<td align ='center'>".$brs[0]."</td>";
	echo "<td align ='center'>".$brs[1]."</td>";
	echo "<td align ='center'>".$brs[2]."</td>";
    if ($brs[3] > 0) {
        echo "<td>".$brs[3]."</td>";
        echo "<td>".$brs[8]."</td>";
        echo "<td>".$brs[13]."</td>";
    } elseif ($brs[4] > 0) {
        echo "<td>".$brs[4]."</td>";
        echo "<td>".$brs[9]."</td>";
        echo "<td>".$brs[14]."</td>";
    } elseif ($brs[5] > 0) {
        echo "<td>".$brs[5]."</td>";
        echo "<td>".$brs[10]."</td>";
        echo "<td>".$brs[15]."</td>";
    } elseif ($brs[6] > 0) {
        echo "<td>".$brs[6]."</td>";
        echo "<td>".$brs[11]."</td>";
        echo "<td>".$brs[16]."</td>";
    } elseif ($brs[7] > 0) {
        echo "<td>".$brs[7]."</td>";
        echo "<td>".$brs[12]."</td>";
        echo "<td>".$brs[17]."</td>";
    } 
	echo "</tr>";
} 
?>
</table>	
</body>
</html>
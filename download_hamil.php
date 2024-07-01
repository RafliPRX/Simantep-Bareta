<?php
    require('fpdf/fpdf.php');
    require('konek.php');
    $id= $_GET['id']; 
    $pdf = new FPDF('P','mm', 'A4');
    $pdf->AddPage();
    // $pdf->Image('bnn.png', 9, 5, -2000);
    // $pdf->Image('ISO_MS_Cert.png', 177, 13, -2700);
    // $pdf->Image('border.png', 10, 45, 190);
    $pdf->Image('header.png', 0, 0, 210);
    $pdf->Image('tanda_tangan.png', 115, 178, 80);
    $pdf->Cell(25,7,'',0,1);
    $pdf->Cell(25,7,'',0,0);
    $pdf->Cell(25,7,'',0,1);
    $pdf->Cell(25,7,'',0,0);
    // $pdf->SetFont('Arial','B',13.5);
    // $pdf->Cell(25,5,'',0,0,'C');
    // $pdf->Cell(150,5,'BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA',0,1,'C');
    // $pdf->Cell(25,5,'',0,0,'C');
    // $pdf->Cell(150,5,'BALAI REHABILITASI TANAH MERAH',0,1,'C');
    // $pdf->Cell(25,7,'',0,0,'C');
    // $pdf->SetFont('Times','',9);
    // $pdf->Cell(150,5,'Jl. Ruas Samarinda Bontang KM 6 Kel. Tanah Merah Kec. Samarinda Utara 75119',0,1,'C');
    // $pdf->Cell(25,7,'',0,0,'C');
    // $pdf->Cell(150,5,'Kota Samarinda Provinsi Kalimantan Timur',0,1,'C');
    // $pdf->Cell(25,7,'',0,0,'C');
    // $pdf->Cell(150,5,'Telp/Fax  : (0541) 4100646/5     Call Center : 082250261030',0,1,'C');
    // $pdf->Cell(25,5,'',0,0,'C');
    // $pdf->Cell(150,5,'email: balairehab_tanahmerah@bnn.go.idWebsite : https://balairehabtanahmerah.bnn.go.id/',0,0,'C');
    // $pdf->Cell(15,5,'',0,1,'C');
    $print = "SELECT a.id_surat, a.nama, a.nrk, b.nama_jabatan, alamat, a.hamil, a.hamil_date, a.hamil_date_fin, a.date_now FROM surat a, jabatan b WHERE a.id_jabatan=b.id_jabatan AND a.id_surat='$id'";
    $res = mysqli_query($konek, $print);
    $row = mysqli_fetch_array($res);
    $tanggal_awal = $row['hamil_date'];
    $tanggal_akhir = $row['hamil_date_fin'];
    $tanggal_sekarang = $row['date_now'];
    $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $awal = date('d', strtotime($tanggal_awal));
    $bulan_akhir = $bulan[date('n', strtotime($tanggal_akhir))];
    $akhir = date('d', strtotime($tanggal_akhir)) . ' '. $bulan_akhir;
    $bulan_sekarang = $bulan[date('n', strtotime($tanggal_sekarang))];
    $sekarang = date('d', strtotime($tanggal_sekarang)) . ' ' . $bulan_sekarang . ' ' . date('Y', strtotime($tanggal_sekarang));
    // var_dump($akhir);
    // die; 
    $pdf->Cell(25,7,'',0,1);
    $pdf->Cell(25,7,'',0,0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(150,7,'SURAT KETERANGAN CUTI PPNPN',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(25,7,'',0,0);
    $pdf->Cell(150,7,'Nomor : ${nomor}',0,1,'C');
    $pdf->Cell(25,7,'',0,1);
    $pdf->Cell(10,7,'1.',0,0);
    $pdf->Cell(169,7,'Diberikan cuti untuk tahun 2024 kepada Pegawai Pemerintah Non Pegawai Negeri (PPNPN) :',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(40,7,'Nama',0,0);
    $pdf->Cell(4,7,':',0,0);
    $pdf->Cell(40,7,$row['nama'],0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(40,7,'NRK',0,0);
    $pdf->Cell(4,7,':',0,0);
    $pdf->Cell(40,7,$row['nrk'],0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(40,7,'Jabatan',0,0);
    $pdf->Cell(4,7,':',0,0);
    $pdf->Cell(40,7,$row['nama_jabatan'],0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(40,7,'Satuan Organisasi',0,0);
    $pdf->Cell(4,7,':',0,0);
    $pdf->Cell(40,7,'Balai Rehabilitasi BNN Tanah Merah',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(40,7,'Alamat Selama Cuti',0,0);
    $pdf->Cell(4,7,':',0,0);
    $pdf->Cell(40,7,$row['alamat'],0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(180,7,'Selama '.$row['hamil'].' hari kerja, terhitung mulai tanggal '.$awal.' sampai '. $akhir .' dengan ketentuan sebagai berikut :',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(10,7,'',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(6,7,'a.',0,0);
    $pdf->Cell(180,7,'Sebelum menjalankan cuti melahirkan wajib menyerahkan pekerjaanya kepada',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(6,7,'',0,0);
    $pdf->Cell(180,7,'atasan langsungnya;',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(6,7,'b.',0,0);
    $pdf->Cell(180,7,'Setelah selesai menjalankan cuti melahirkan wajib melaporkan diri kepada atasan',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(6,7,'',0,0);
    $pdf->Cell(180,7,'langsungnya dan bekerja kembali sebagaimana biasa;',0,1);
    $pdf->Cell(10,7,'',0,0);
    $pdf->Cell(6,7,'c.',0,0);
    $pdf->Cell(180,7,'Selama menjalankan cuti melahirkan wajib menjaga protokol kesehatan.',0,1);
    $pdf->Cell(10,7,'',0,1);
    $pdf->Cell(10,7,'2.',0,0);
    $pdf->Cell(169,7,'Demikian surat keterangan cuti ini dibuat untuk dapat dipergunakan sebagaimana mestinya. ',0,1);
    $pdf->Cell(100,7,'',0,1);
    $pdf->Cell(100,7,'',0,1);
    $pdf->Cell(50,7,'',0,0);
    $pdf->Cell(50,7,'',0,0);
    $pdf->Cell(90,7,'Tanggal, '. $sekarang . '',0,0,'C');
    $pdf->Cell(90,7,'',0,1,'C');
    $pdf->Cell(90,7,'',0,1,'C');
    $pdf->Cell(190,18,'${qrcode}',0,1,'C');

    $pdf->Output();
?>
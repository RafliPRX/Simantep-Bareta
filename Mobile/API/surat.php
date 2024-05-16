<?php
header('Content-type: application/json; charset=utf8');

include 'konek.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM surat";
    $query_get = mysqli_query($konek, $sql);
    $array_data_get = array();
    while ($data_get = mysqli_fetch_assoc($query_get)) {
        $array_data_get[] = $data_get;
    }
    echo json_encode($array_data_get);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nrk = $_POST['nrk'];
    $keterangan = $_POST['Keterangan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $id_jabatan = $_POST['id_jabatan'];
    $cuti1 = $_POST['cuti1'];
    $cuti_date = $_POST['cuti_date'];
    $cuti_date_fin = $_POST['cuti_date_fin'];
    $sisa = $_POST['sisa_k'];
    $cuti_imp = $_POST['cuti_imp'];
    $cuti_imp_date = $_POST['cuti_imp_date'];
    $cuti_imp_date_fin = $_POST['cuti_imp_date_fin'];
    $izin = $_POST['izin'];
    $izin_date = $_POST['izin_date'];
    $izin_date_fin = $_POST['izin_date_fin'];
    $sakit = $_POST['sakit'];
    $sakit_date = $_POST['sakit_date'];
    $sakit_date_fin = $_POST['sakit_date_fin'];
    $hamil = $_POST['hamil'];
    $hamil_date = $_POST['hamil_date'];
    $hamil_date_fin = $_POST['hamil_date_fin'];
    $alasan = $_POST['alasan'];
    $pdf = $_POST['pdf'];
    $gambar = $_POST['gambar'];
    $date_now = $_POST['date_now'];
    $query_post = "INSERT INTO surat (id_surat, nama, nrk, Keterangan, alamat, no_hp, id_jabatan, cuti1, cuti_date, cuti_date_fin, sisa_k, cuti_imp, cuti_imp_date, cuti_imp_date_fin, izin, izin_date, izin_date_fin, sakit, sakit_date, sakit_date_fin, hamil, hamil_date, hamil_date_fin, veri_1, veri_2, veri_3, alasan, pdf, gambar, date_now) VALUES (NULL, '$nama', '$nrk', '$Keterangan', '$alamat', '$no_hp', '$id_jabatan', '$cuti1', '$cuti_date', '$cuti_date_fin', '$sisa', '$cuti_imp', '$cuti_imp_date', '$cuti_imp_date_fin', '$izin', '$izin_date', '$izin_date_fin', '$sakit', '$sakit_date', '$sakit_date_fin', '$hamil', '$hamil_date', '$hamil_date_fin', '0', '0', '0', '$alasan', '$pdf', '$gambar', '$date_now')";
    $cek_post = mysqli_query($konek, $query_post);

    if ($cek_post) {
        $data_post = [
            'status' => "berhasil"
        ];
        echo json_encode([$data_post]);
    } else {
        $data_post = [
            'status' => "gagal"
        ];
        echo json_encode([$data_post]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];
    $query_del = "DELETE FROM surat WHERE surat.id_surat = '$id'";
    $cek_del = mysqli_query($konek, $query_del);

    if ($cek_del) {
        $data_del = [
            'status' => "berhasil"
        ];
        echo json_encode([$data_del]);
    } else {
        $data_del = [
            'status' => "gagal"
        ];
        echo json_encode([$data_del]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $nrk = $_GET['nrk'];
    $keterangan = $_GET['Keterangan'];
    $alamat = $_GET['alamat'];
    $no_hp = $_GET['no_hp'];
    $id_jabatan = $_GET['id_jabatan'];
    $cuti1 = $_GET['cuti1'];
    $cuti_date = $_GET['cuti_date'];
    $cuti_date_fin = $_GET['cuti_date_fin'];
    $sisa = $_GET['sisa_k'];
    $cuti_imp = $_GET['cuti_imp'];
    $cuti_imp_date = $_GET['cuti_imp_date'];
    $cuti_imp_date_fin = $_GET['cuti_imp_date_fin'];
    $izin = $_GET['izin'];
    $izin_date = $_GET['izin_date'];
    $izin_date_fin = $_GET['izin_date_fin'];
    $sakit = $_GET['sakit'];
    $sakit_date = $_GET['sakit_date'];
    $sakit_date_fin = $_GET['sakit_date_fin'];
    $hamil = $_GET['hamil'];
    $hamil_date = $_GET['hamil_date'];
    $hamil_date_fin = $_GET['hamil_date_fin'];
    $veri_1 = $_GET['veri_1'];
    $veri_2 = $_GET['veri_2'];
    $veri_3 = $_GET['veri_3'];
    $alasan = $_GET['alasan'];
    $pdf = $_GET['pdf'];
    $gambar = $_GET['gambar'];
    $date_now = $_GET['date_now'];

    $query_put = "UPDATE surat SET nama='$nama', nrk='$nrk', Keterangan='$keterangan', alamat='$alamat', no_hp='$no_hp', id_jabatan='$id_jabatan', cuti1='$cuti1', cuti_date='$cuti_date', cuti_date_fin='$cuti_date_fin', sisa_k='$sisa', cuti_imp='$cuti_imp', cuti_imp_date='$cuti_imp_date', cuti_imp_date_fin='$cuti_imp_date_fin', izin='$izin', izin_date='$izin_date', izin_date_fin='$izin_date_fin', sakit='$sakit', sakit_date='$sakit_date', sakit_date_fin='$sakit_date_fin', hamil='$hamil', hamil_date='$hamil_date', hamil_date_fin='$hamil_date_fin', veri_1='$veri_1', veri_2='$veri_2', veri_3='$veri_3', alasan='$alasan', pdf='$pdf', gambar='$gambar', date_now='$date_now' WHERE id_surat = '$id'";
    $cek_put = mysqli_query($konek, $query_put);

    if ($cek_put) {
        $data_put = [
            'status' => "berhasil"
        ];
        echo json_encode([$data_put]);
    } else {
        $data_put = [
            'status' => "gagal"
        ];
        echo json_encode([$data_put]);
    }
}
?>
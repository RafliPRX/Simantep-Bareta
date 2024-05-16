<?php
header('Content-type: application/json; charset=utf8');
include 'konek.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM kelompok ORDER BY no_kelompok ASC";
    $query_get = mysqli_query($konek, $sql);
    $array_data_get = array();
    while ($data_get = mysqli_fetch_assoc($query_get)) {
        $array_data_get[] = $data_get;
    }
    echo json_encode($array_data_get);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $jabatan = $_POST['id_jabatan'];
    $kelompok = $_POST['no_kelompok'];
    $query_post = "INSERT INTO kelompok (id_kelompok, nama,  id_jabatan, no_kelompok) VALUES (NULL, '$nama', '$jabatan', '$kelompok')";
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
    $query_del = "DELETE FROM kelompok WHERE kelompok.id_kelompok = '$id'";
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
    $jabatan = $_GET['id_jabatan'];
    $kelompok = $_GET['no_kelompok'];

    $query_put = "UPDATE kelompok SET nama = '$nama', id_jabatan = '$jabatan', no_kelompok = '$kelompok' WHERE kelompok.id_kelompok = '$id'";
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
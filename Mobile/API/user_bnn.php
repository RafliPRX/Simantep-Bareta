<?php
header('Content-type: application/json; charset=utf8');

include 'konek.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM user_bnn ORDER BY user_bnn.id ASC";
    $query_get = mysqli_query($konek, $sql);
    $array_data_get = array();
    while ($data_get = mysqli_fetch_assoc($query_get)) {
        $array_data_get[] = $data_get;
    }
    echo json_encode($array_data_get);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $pass = $_POST['pass'];
    $nrk = $_POST['nrk'];
    $query_post = "INSERT INTO user_bnn(id, nama, pass, nrk, id_jabatan_sup) VALUES (NULL,'$nama','$pass','$nrk','1')";
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
    $query_del = "DELETE FROM user_bnn WHERE user_bnn.id = '$id'";
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
    $pass = $_GET['pass'];
    $nrk = $_GET['nrk'];

    $query_put = "UPDATE user_bnn SET nama='$nama', pass='$pass', nrk='$nrk', id_jabatan_sup='1' WHERE id = '$id'";
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
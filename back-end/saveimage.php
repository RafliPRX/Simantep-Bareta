<?php
require('db.php');
// Pastikan request adalah metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Dekode data JSON yang diterima
    $data = json_decode(file_get_contents('php://input'));

    // Ambil data gambar dari request
    $imageData = $data->image;

    // Mengonversi data gambar dari base64 ke format file
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageBinary = base64_decode($imageData);

    // Tentukan nama file berdasarkan tanggal
    $filename = 'uploads/image_' . date('Y-m-d_H-i-s') . '.jpg';

    // Simpan gambar ke folder server dengan nama file berdasarkan tanggal
    file_put_contents($filename, $imageBinary);

    // Kirim respons ke klien
    $response = ['message' => 'Gambar berhasil di-upload'];
	$sql = "INSERT INTO snap (id_snap, snap_in) VALUES (NULL, '$filename')";
    $res = mysqli_query($konek, $sql);
	if ($res) {
      echo "Foto berhasil disimpan";
    } else {
      echo "Gagal menyimpan foto ke database";
    }
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Jika bukan metode POST, kirim respons error
    http_response_code(405); // Method Not Allowed
    echo 'Method Not Allowed';
}

?>
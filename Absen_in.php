<?php
//set random name for the image, used time() for uniqueness
require_once('konek.php');
session_start(); 
    // var_dump($_POST);
    // var_dump($_FILES); 
    // die;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_SESSION['nama'];
    $filename = time() . '-masuk' . '.jpg';
    $filepath = 'uploads/';
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $time = date("H:i:s");
    // $time = date("07:00:00");
    // $time = date("19:30:00");
    $today = date("Y/m/d");

    // Decode JSON data received from the request
    $data = json_decode(file_get_contents('php://input'));

    // Check if the JSON data is valid
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data']);
        return;
    }

    // Buat Cookie dengan nama 'startTime' dan simpan waktu saat ini
    setcookie('startTime', time(), time() + (86400 * 30), '/'); // 86400 adalah detik dalam sehari, 30 adalah masa aktif Cookie dalam hari

    // Get the image data from the request
    $imageData = $data->image;

    //bagian pagi dan malam
    function bagian($time){
     $currentTime = date('H:i:s', strtotime($time)); // Mengubah format waktu menjadi format 24 jam
     $currentHour = date('H', strtotime($currentTime)); // Mendapatkan jam saat ini

     if ($currentHour >= 6 && $currentHour < 15) {
         return 'pagi';
     } else {
         return 'malam';
     }    
    }

    function jam_telat($time){
      $currentTime = date('H:i:s', strtotime($time)); // Mengubah format waktu menjadi format 24 jam
      $currentHour = date('H', strtotime($currentTime)); // Mendapatkan jam saat ini
   
      if ($currentHour >= 6 && $currentHour < 15) {
          return '07:30:00';
      } else {
          return '18:00:00';
      }
      
    }   

    $waktu_telat = jam_telat($time);
    $bagian_waktu = bagian($time);
    // Convert the base64 image data to a file
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageBinary = base64_decode($imageData);

    // Set the filename based on the current date and time
    $filename = 'uploads/image_' . date('Y-m-d_H-i-s') . '.jpg';

    // Save the image file to the server with the generated filename
    file_put_contents($filename, $imageBinary);

    // Send a response to the client
    echo json_encode(['message' => 'Image uploaded successfully']);
    $sql = "INSERT into snap(id_snap, nama, snap_in, jam_in, telat, today, bagian) values( NULL, '$nama', '$filename', '$time', TIMEDIFF('$time', '$waktu_telat'), '$today', '$bagian_waktu')";
    $res = mysqli_query($konek, $sql);
	if ($res) {
      echo "Foto berhasil disimpan";
    } else {
      echo "Gagal menyimpan foto ke database";
    }
    header('Content-Type: application/json');
} else {
    // Jika bukan metode POST, kirim respons error
    http_response_code(405); // Method Not Allowed
    echo 'Method Not Allowed';
}

?>
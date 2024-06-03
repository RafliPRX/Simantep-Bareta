<?php
 session_start();
//set random name for the image, used time() for uniqueness
require('konek.php'); 
// Pastikan request adalah metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = time() . '-masuk' . '.jpg';
    $filepath = 'uploads/';
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $time = date("H:i:s");
    $today = date("Y/m/d");

    // Decode JSON data received from the request
    $data = json_decode(file_get_contents('php://input'));

    // Check if the JSON data is valid
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data']);
        return;
    }

    // Get the image data from the request
    $imageData = $data->image;

    // Convert the base64 image data to a file
    $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
    $imageData = str_replace(' ', '+', $imageData);
    $imageBinary = base64_decode($imageData);

    // Set the filename based on the current date and time
    $filename = 'uploads/image_' . date('Y-m-d_H-i-s') . '.jpg';

    // Save the image file to the server with the generated filename
    file_put_contents($filename, $imageBinary);
    
    // Ambil nilai dari Cookie 'startTime'
    $startTime = isset($_COOKIE['startTime']) ? $_COOKIE['startTime'] : null;

    // Jika nilai Cookie ada, hitung selisih waktu
    if ($startTime) {
        $endTime = time();
        $elapsedTime = ($endTime - $startTime) / 60;

        $jam = floor($elapsedTime / 60);
        $menit = $elapsedTime % 60;
        $detik = round(($elapsedTime - ($jam * 60 + $menit)) * 60);

        $formattedTime = sprintf("%02d:%02d:%02d", $jam, $menit, $detik);
        
    }
    
    // Send a response to the client
    echo json_encode(['message' => 'Image uploaded successfully']);
    $sql = "UPDATE snap SET snap_out='$filename', jam_out='$time', total='$formattedTime' WHERE today = '$today'";
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


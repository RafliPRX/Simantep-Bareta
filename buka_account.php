<?php
  session_start();
  include 'konek.php';
  $id = $_GET['id'];
  $sql = "UPDATE user_bnn SET Locked = '2' WHERE id = '$id'";
  $qry = mysqli_query($konek, $sql);
  if ($qry) {
    echo "<script language='JavaScript'> (window.alert('User telah Dibuka')) 
    location.href='list_account.php'
    </script>";
  }
?>
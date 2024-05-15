<?php
include 'konek.php';
session_start();

session_unset();
session_destroy();
header('Location: index.php');
exit;

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}
?>
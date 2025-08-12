<?php
date_default_timezone_set('Asia/Manila');

$host = "b5jaiukhcikfck5vjkdl-mysql.services.clever-cloud.com";
$user = "uacaq0sqq35fvnyh";
$pass = "KYFsyO4WYDJPHSnZhOWK";
$db   = "b5jaiukhcikfck5vjkdl";
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

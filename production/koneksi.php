<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "supplier";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  echo "Belum terkoneksi";
} else {
  //echo "Sudah Konek";
}
 ?>

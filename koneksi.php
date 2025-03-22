<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "input_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("KONEKSI GAGAL" . $conn->connect_error);
}
echo "KONEKSI BERHASIL";
?>
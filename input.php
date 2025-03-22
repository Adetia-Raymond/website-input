<?php
include "koneksi.php";

$NamaDepan = $_POST['NamaDepan'];
$NamaBelakang = $_POST['NamaBelakang'];
$Alamat = $_POST['Alamat'];


$query ="INSERT INTO tabel_input(NamaDepan,NamaBelakang,Alamat)
                    VALUES ('$NamaDepan','$NamaBelakang','$Alamat')";


mysqli_query($conn,$query)or die(mysqli_error($conn));

header('Location: index.html');
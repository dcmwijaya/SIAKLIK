<?php
$username = "id15880960_siaklikmedis";
$password = "S1akL1K_pkl$";
$namadb = "id15880960_siaklik";
$koneksi = mysqli_connect("localhost",$username,$password,$namadb);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
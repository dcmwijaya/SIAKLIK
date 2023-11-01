<?php
$username = "root";
$password = "";
$namadb = "siaklik_db";
$koneksi = mysqli_connect("localhost",$username,$password,$namadb);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
<?php 
// untuk mengghubungkan koneksi dengan database
include("../config/koneksi.php");

$kodeumum = $_POST['kode2'];
$nama_pasien = $_POST['nama2'];
$date = date("d-m-Y");
$status = 'sedang antri';
// input data dari form input kedalam database
mysqli_query($koneksi,"INSERT INTO antrian_umum(nama_pasien,kode_antrian, tanggal, status) VALUES ('$nama_pasien','$kodeumum','$date','$status')")or die(mysqli_error($koneksi));
// redirect kehalaman index.php kembali setelah klik tombol submit
header("location:../poli/antrian.php");

?>
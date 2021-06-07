<?php 
// untuk mengghubungkan koneksi dengan database
include("../config/koneksi.php");

$kodebpjs = $_POST['kode'];
$nama_pasien = $_POST['nama'];
$date = date("d-m-Y");
$status = 'sedang antri';
// input data dari form input kedalam database
mysqli_query($koneksi,"INSERT INTO antrian_bpjs(nama_pasien, kode_antrian, tanggal, status) VALUES ('$nama_pasien','$kodebpjs','$date','$status')")or die(mysqli_error($koneksi));
// redirect kehalaman antrian.php kembali setelah klik tombol submit
header("location:../poli/antrian.php");

?>
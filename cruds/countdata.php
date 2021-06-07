<?php include '../config/koneksi.php';

$jumlah = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tabel_pasien"));

?>
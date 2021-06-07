<?php 
include '../config/koneksi.php';

if(isset($_POST['delUMUM'])){
		$id_umum = $_POST['delete_umum'];

		$query = mysqli_query($koneksi,"DELETE FROM antrian_umum WHERE id_antrian='$id_umum' ");

		if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Dihapus');location='../poli/data_antrian.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}

?>
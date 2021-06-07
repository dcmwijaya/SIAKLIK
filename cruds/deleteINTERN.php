<?php 
include '../config/koneksi.php';

if(isset($_POST['delINTERN'])){
		$id_intern = $_POST['delete_intern'];

		$query = mysqli_query($koneksi,"DELETE FROM antrian_internal WHERE id_antrian='$id_intern' ");

		if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Dihapus');location='../poli/data_antrian.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}

?>
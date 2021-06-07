<?php 
include '../config/koneksi.php';

if(isset($_POST['delBPJS'])){
		$id_bpjs = $_POST['delete_bpjs'];

		$query = mysqli_query($koneksi,"DELETE FROM antrian_bpjs WHERE id_antrian='$id_bpjs' ");

		if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Dihapus');location='../poli/data_antrian.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}

?>
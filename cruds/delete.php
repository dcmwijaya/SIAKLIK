<?php 
include '../config/koneksi.php';

if(isset($_POST['deletedata'])){
		$id = $_POST['delete_id'];

		$query = mysqli_query($koneksi,"DELETE FROM tabel_pasien WHERE id_pasien='$id' ");

		if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Dihapus');location='../poli/data_pasien.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}

?>
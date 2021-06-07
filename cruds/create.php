<?php 
include '../config/koneksi.php';

    
if(isset($_POST['insertdata'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $status = $_POST['status'];
        $jk = $_POST['jk'];
		$nip = $_POST['nip'];
		$bpjs = $_POST['bpjs'];
        $ket = $_POST['keterangan'];

		$query = mysqli_query($koneksi,"INSERT INTO tabel_pasien(nama_pasien, umur_pasien, alamat_pasien, pekerjaan_pasien, status_pasien, jenis_kelamin, nip_pasien, no_bpjs, keterangan) VALUES ('$nama','$umur','$alamat','$pekerjaan','$status','$jk','$nip','$bpjs','$ket')");

	    if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Ditambahkan');location='../poli/data_pasien.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}

?>
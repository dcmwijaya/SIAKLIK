<?php 
include '../config/koneksi.php';

    
if(isset($_POST['updatedata'])){
		$id_select = $_POST['update_id'];
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

		$query = mysqli_query($koneksi,"UPDATE tabel_pasien SET id_pasien='$id', nama_pasien='$nama', umur_pasien='$umur', alamat_pasien='$alamat', pekerjaan_pasien='$pekerjaan', status_pasien='$status', jenis_kelamin='$jk', nip_pasien='$nip', no_bpjs='$bpjs', keterangan='$ket' WHERE id_pasien='$id_select'");

        if($query && $koneksi != null){
			echo "<script>alert('Data Berhasil Diubah');location='../poli/data_pasien.php';</script>";
		}
		else{
		    echo "<script>alert('Error');window.history.go(-1);</script>";
		}
}		

?>
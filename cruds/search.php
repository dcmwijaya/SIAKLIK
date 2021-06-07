<?php include '../config/koneksi.php'; ?>

<?php
$inputsrdata = @$_POST['inputsrdata'];
if(isset($_POST['searchdata'])){
	if($inputsrdata != ""){
		$query_search = mysqli_query($koneksi,"SELECT * FROM tabel_pasien WHERE id_pasien like '%".$inputsrdata."%' OR nama_pasien like '%".$inputsrdata."%' OR umur_pasien like '%".$inputsrdata."%' OR alamat_pasien like '%".$inputsrdata."%' OR pekerjaan_pasien like '%".$inputsrdata."%' OR status_pasien like '%".$inputsrdata."%' OR jenis_kelamin like '%".$inputsrdata."%' OR nip_pasien like '%".$inputsrdata."%' OR no_bpjs like '%".$inputsrdata."%' OR keterangan like '%".$inputsrdata."%'") OR die(mysql_error());

			 while ($row = mysqli_fetch_object($query_search)) {
?>
        <tr>
            <td><?= $row->id_pasien; ?></td>
            <td><?= $row->nama_pasien; ?></td>
            <td><?= $row->umur_pasien; ?></td>
            <td><?= $row->alamat_pasien; ?></td>
            <td><?= $row->pekerjaan_pasien; ?></td>
            <td><?= $row->status_pasien; ?></td>
            <td><?= $row->jenis_kelamin; ?></td>
            <td><?= $row->nip_pasien; ?></td>
            <td><?= $row->no_bpjs; ?></td>
            <td><?= $row->keterangan; ?></td>
            <td scope="row" style="padding:5px;">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="#" class="btn btn-success btn-sm editbtn" data-toggle="modal" data-target="#editmhs"><i class="fa fa-edit"></i></a>&nbsp;
                    <a href="#" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#deletemhs"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
<?php }

	}else{
		$query_search = mysqli_query($koneksi,"SELECT * FROM tabel_pasien") OR die(mysql_error());
	}
}else{
	$query_search = mysqli_query($koneksi,"SELECT * FROM tabel_pasien") OR die(mysql_error());
}
?>
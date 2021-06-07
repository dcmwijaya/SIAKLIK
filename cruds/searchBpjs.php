<?php include '../config/koneksi.php'; ?>

<?php
$inputsrdata = @$_POST['inputsrdata'];
if(isset($_POST['searchdata'])){
	if($inputsrdata != ""){
		$query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs WHERE id_antrian like '%".$inputsrdata."%' OR kode_antrian like '%".$inputsrdata."%' OR nama_pasien like '%".$inputsrdata."%' OR tanggal like '%".$inputsrdata."%' OR status like '%".$inputsrdata."%'") OR die(mysql_error());
		 while ($row = mysqli_fetch_object($query_search)) {
?>
        <tr>
            <td><?= $row->id_antrian; ?></td>
            <td><?= $row->kode_antrian; ?></td>
            <td><?= $row->nama_pasien; ?></td>
            <td><?= $row->tanggal; ?></td>
            <td><?= $row->status; ?></td>
            <td scope="row" style="padding:5px;">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="#" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#deleteBPJS"><i class="fa fa-trash"></i></a>
            	</div>
            </td>
        </tr>
<?php }

	}else{
		$query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs") OR die(mysql_error());
	}
}else{
	$query_search = mysqli_query($koneksi,"SELECT * FROM antrian_bpjs") OR die(mysql_error());
}
?>
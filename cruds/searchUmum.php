<?php include '../config/koneksi.php'; ?>

<?php
$inputsrdata1 = @$_POST['inputsrdata1'];
if(isset($_POST['searchdata1'])){
	if($inputsrdata1 != ""){
		$query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_umum WHERE id_antrian like '%".$inputsrdata1."%' OR kode_antrian like '%".$inputsrdata1."%' OR nama_pasien like '%".$inputsrdata1."%' OR tanggal like '%".$inputsrdata1."%' OR status like '%".$inputsrdata1."%'") OR die(mysql_error());
		 while ($row = mysqli_fetch_object($query_search1)) {
?>
        <tr>
            <td><?= $row->id_antrian; ?></td>
            <td><?= $row->kode_antrian; ?></td>
            <td><?= $row->nama_pasien; ?></td>
            <td><?= $row->tanggal; ?></td>
            <td><?= $row->status; ?></td>
            <td scope="row" style="padding:5px;">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="#" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#deleteUMUM"><i class="fa fa-trash"></i></a>
            	</div>
            </td>
        </tr>
<?php }

	}else{
		$query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_umum") OR die(mysql_error());
	}
}else{
	$query_search1 = mysqli_query($koneksi,"SELECT * FROM antrian_umum") OR die(mysql_error());
}
?>
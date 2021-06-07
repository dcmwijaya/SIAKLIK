<?php include '../config/koneksi.php'; ?>

<?php
$inputsrdata2 = @$_POST['inputsrdata2'];
if(isset($_POST['searchdata2'])){
	if($inputsrdata2 != ""){
		$query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal WHERE id_antrian like '%".$inputsrdata2."%' OR kode_antrian like '%".$inputsrdata2."%' OR nama_pasien like '%".$inputsrdata2."%' OR tanggal like '%".$inputsrdata2."%' OR status like '%".$inputsrdata2."%'") OR die(mysql_error());
		 while ($row = mysqli_fetch_object($query_search2)) {
?>
        <tr>
            <td><?= $row->id_antrian; ?></td>
            <td><?= $row->kode_antrian; ?></td>
            <td><?= $row->nama_pasien; ?></td>
            <td><?= $row->tanggal; ?></td>
            <td><?= $row->status; ?></td>
            <td scope="row" style="padding:5px;">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a href="#" class="btn btn-danger btn-sm delbtn" data-toggle="modal" data-target="#deleteINTERN"><i class="fa fa-trash"></i></a>
            	</div>
            </td>
        </tr>
<?php }

	}else{
		$query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
	}
}else{
	$query_search2 = mysqli_query($koneksi,"SELECT * FROM antrian_internal") OR die(mysql_error());
}
?>
$(document).ready(function() {
	$('.editbtn').on('click', function() {
		
		$('#editmhs').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#update_id').val(data[0]);
		$('#id').val(data[1]);
		$('#nama').val(data[2]);
		$('#umur').val(data[3]);
		$('#alamat').val(data[4]);
		$('#pekerjaan').val(data[5]);
		$('#status').val(data[6]);
		$('#jk').val(data[7]);
		$('#nip').val(data[8]);
		$('#bpjs').val(data[9]);
		$('#keterangan').val(data[10]);

	});	
});
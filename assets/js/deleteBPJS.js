$(document).ready(function() {
	$('.delBPJS').on('click', function() {
		
		$('#deleteBPJS').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#delete_bpjs').val(data[0]);
	});	
});
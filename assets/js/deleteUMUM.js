$(document).ready(function() {
	$('.delUMUM').on('click', function() {
		
		$('#deleteUMUM').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#delete_umum').val(data[0]);
	});	
});
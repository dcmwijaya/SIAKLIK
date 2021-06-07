$(document).ready(function() {
	$('.delINTERN').on('click', function() {
		
		$('#deleteINTERN').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();

		console.log(data);

		$('#delete_intern').val(data[0]);
	});	
});
$(document).ready(function() {
	$("#chonchungtoi .visaochon").hover(function() {
		var id = $(this).data('key');
		$("#chonchungtoi .vs_details").removeClass('active');
		$("#chonchungtoi .this-"+id).addClass('active');
	});
});
$('#btnSearch').click(function() {
	var keywords = $('#inputSearch').val();
	if (!keywords) {
		alert('Bạn chưa nhập từ khóa tìm kiếm !');
		$('#inputSearch').focus();
	} else {
		window.location.href = "tim-kiem/&keywords=" + keywords;
	}
	return false;
});
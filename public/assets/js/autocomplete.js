// AJAX call for autocomplete 
$(document).ready(function() {
	$("#search-box").keyup(function() {
		$.ajax({
			type: "POST",
			url: "{{ route('readpenebas') }}",
			data: 'keyword=' + $(this).val(),
			beforeSend: function() {
				$("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data) {
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#search-box").css("background", "#FFF");
			}
		});
	});
});
//To select a country name
function selectCountry(val) {
	$("#search-box").val(val);
	$("#suggesstion-box").hide();
}
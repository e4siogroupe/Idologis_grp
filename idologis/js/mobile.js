$(function(){
	$('#menu').on('click', function(){
		if($('#sidebar').is('.active')) {
			$(this).removeClass('active');
			$('#sidebar').removeClass('active');
		}
		else {
			$(this).addClass('active');
			$('#sidebar').addClass('active');
		}
	});
});
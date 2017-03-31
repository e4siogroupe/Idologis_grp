$(function(){
	$('form#contact').on('submit', function(){
		var action = $(this).attr('action');

		$.ajax({
			url: action,
			method: "POST",
			data: {
				"nom": $('#contact input').eq(0).val(),
				"prenom": $('#contact input').eq(1).val(),
				"mail": $('#contact input').eq(2).val(),
				"objet": $('#contact input').eq(3).val(),
				"message": $('#contact textarea').eq(0).val()
			},
			complete: function(data) {
				var json = JSON.parse(data.responseText);
				if(json.code === "ok") {
					$('.content .success').html("Votre message a bien été envoyé.").show();
					$('.content .error').html(json.text).hide();
					$('.content form').hide();
				}
				else {
					$('.content .error').html(json.text).show();
				}
			}
		})

		return false;
	});
});
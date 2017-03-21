$(function(){
	$('#addAccount').on('submit', function(){

		var username = $('#addAccount input').eq(0).val();
		var password = $('#addAccount input').eq(1).val();
		var passwordV = $('#addAccount input').eq(2).val();
		var token = $('#addAccount input').eq(3).val();

		if(username == "" || password == "" || passwordV == ""){
			$('#error').html('<p class="alert alert-danger">Veuillez compléter tous les champs du formulaire.</p>');
		}

		else {
			if(password !== passwordV) {
				$('#error').html('<p class="alert alert-danger">Les mots de passe ne correspondent pas.</p>');
			}
			else {
				$.ajax({
					url : host + "control/addAccount.php",
					type : "POST",
					data : { 
						username: username,
						password: password,
						token: token
					},
					dataType : "text",
					success : function(data){
						$('#error').html('<p class="alert alert-success">L\'utilisateur a été ajouté avec succès.</p>');
					},
					error: function() {
              			alert('La requête n\'a pas abouti.'); 
              		}
				});	
			}	
		}

		return false;
	});
});






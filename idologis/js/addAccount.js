$(function(){
	$('#addAccount').on('submit', function(){

		var username = $('#addAccount input').eq(0).val();
		var password = $('#addAccount input').eq(1).val();
		var passwordV = $('#addAccount input').eq(2).val();
		var token = $('#addAccount input').eq(3).val();

		if(username == "" || password == "" || passwordV == ""){
			$('#error').html('<div class="error"><p>Veuillez compléter tous les champs du formulaire.</p></div>');
		}

		else {
			if(password !== passwordV) {
				$('#error').html('<div class="error"><p>Les mots de passe ne correspondent pas.</p></div>');
			}
			else {
				$.ajax({
					url : host + "ajax/addAccount.php",
					type : "POST",
					data : { 
						username: username,
						password: password,
						token: token
					},
					dataType : "text",
					success : function(data){
						$('#error').html('<div class="success"><p>L\'utilisateur a été ajouté avec succès.</p></div>');
					},
					error: function() {
              			alert('La requête n\'a pas abouti.'); 
              		}
				});	
			}	
		}

		$('#error').show();
		return false;
	});
});






$(function(){

    $(document).on('submit', "form", function(){
        var action = $(this).attr('action');


        $.ajax({
            method: "POST",
            url: action,
            data: {
                username : ($("#username").val()),
                password : ($("#password").val())
            },
            complete: function(data) {
                var code = JSON.parse(data.responseText).code;

                if(code === "ok") {
                    window.location = window.location.href.replace("connexion.php", "administration.php");
                }
                else {
                    $('#resultat').html('<p>Identifiant ou mot de passe incorrect.</p>');
                }
            }
        });
        return false;
    });
});

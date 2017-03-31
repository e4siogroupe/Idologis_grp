<?php
require_once("inc/config.php");
$js = '<script type="text/javascript" src="'.host.'js/mail.js"></script>';
$pageId = 5;
require_once("inc/header.php");
?>

<div class="content white">
	<h1>A propos</h1>

	<h2>Contactez-nous</h2>

	<div class="background" style="height:190px"></div>

	<div class="error" style="display:none"></div>
	<div class="success" style="display:none"></div>

	<form action="<?=host?>ajax/mail.php" method="POST" id="contact">
		<label for="nom">Nom:</label>
		<input name="nom" type="text" placeholder="Nom" /><br />
		<label for="prenom">Prénom:</label>
		<input name="prenom" type="text" placeholder="Prénom" /><br />
		<label for="mail">Adresse email:</label>
		<input name="mail" type="email" placeholder="adresse@fournisseur.fr" /><br />
		<label for="objet">Objet:</label>
		<input name="objet" type="text" placeholder="Votre Objet" /><br /><br />
		<label for="message">Votre message:</label><br />
		<textarea name="message" rows="4" cols="50"></textarea><br />
		<input type="submit" value="Envoyer" />
	</form>
</div>

<?php
require_once("inc/footer.php");
?>
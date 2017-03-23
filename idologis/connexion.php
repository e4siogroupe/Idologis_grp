<?php
session_start();
if($_SESSION['logged'] === true) {
	header('Location: administration.php');
	die();
}
require_once("config.php");
$js = '<script type="text/javascript" src="'.host.'js/connexion.js"></script>';
$pageId = 4;
require_once("header.php");
?>

<div class="content white">
	<h1>Administration</h1>
	<h2>Utilisez un compte administrateur</h2>

	<div class="background" style="height:270px"></div>

	<div id="resultat"></div>
	<form action="control/verificationConnexion.php" name="login" method="post">
		<input name="username" placeholder="Idenfiant" class="form-control" type="text" id="username"/><br />
		<input name="password" placeholder="Mot de passe" class="form-control" type="password" id="password"/><br />
		<input class="btn btn-success" type="submit" value="Connexion"/>
	</form>
</div>

<?php require_once("footer.php"); ?>
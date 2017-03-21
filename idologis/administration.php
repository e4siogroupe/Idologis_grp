<?php
session_start();

if($_SESSION['logged'] !== true) {
	header("HTTP/1.0 404 Not Found");
	include('404.php');
	die();
}

require_once("config.php");

$js = '<script type="text/javascript" src="'.host.'js/addAccount.js"></script>';

require_once("header.php");
?>


<div class="content">
	<p>Modifier la couleur du site</p>
	<div id="color" style="display:inline-block;">
		<form action="control/changerCouleur.php" method="get">
			<input type="hidden" name="token" value="<?=$token->make('color')?>" />
			<input type="color" name="color" />
			<input type="submit" name="submit" value="Modifier" />
		</form>
	</div>

	<p>Ajouter un administrateur</p>
	<div>
		<form action="" id="addAccount" method="post">
			<input type="text" name="username" placeholder="Nom d'utilisateur"/>
			<input type="password" name="password" placeholder="Mot de passe" />
			<input type="password" name="passwordV" placeholder="Retaper le mot de passe"/>
			<input type="hidden" name="token" value="<?=$token->make('addAccount')?>" />
			<input type="submit" name="submit" value="Ajouter" />
		</form>
	</div>
	<div id="error" style="height: 250px; width: 500px;margin-top: 20px;"></div>
</div>

<?php
require_once("footer.php");
?>
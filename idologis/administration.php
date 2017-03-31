<?php
session_start();

if($_SESSION['logged'] !== true) {
	header("HTTP/1.0 404 Not Found");
	include('404.php');
	die();
}

require_once("inc/config.php");

$js = '<script type="text/javascript" src="'.host.'js/addAccount.js"></script>';
$pageId = 4;

require_once("inc/header.php");
?>


<div class="content">
	<p>Modifier la couleur du site</p>
	<div id="color" style="display:inline-block;">
		<form action="<?=host?>ajax/changerCouleur.php" method="get">
			<input type="hidden" name="token" value="<?=$token->make('color')?>" />
			<input type="color" name="color" />
			<input type="submit" name="submit" value="Modifier" />
		</form>
	</div>

	<p>Ajouter un administrateur</p>
	<form id="addAccount" method="post">
		<input type="text" name="username" placeholder="Nom d'utilisateur"/>
		<input type="password" name="password" placeholder="Mot de passe" />
		<input type="password" name="passwordV" placeholder="Retaper le mot de passe"/>
		<input type="hidden" name="token" value="<?=$token->make('addAccount')?>" />
		<input type="submit" name="submit" value="Ajouter" />
	</form>
	<div id="error" style="display:none"></div>
</div>

<?php
require_once("inc/footer.php");
?>
<?php
session_start();
require_once('token.php');
require_once('db.php');

$token = new token();

if(!isset($pageId)) {
	$pageId = 0;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Idologis</title>
		<meta charset="utf8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="<?=host?>img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="<?=host?>css/fonts.css" />
		<link rel="stylesheet" type="text/css" href="<?=host?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?=host?>css/mobile.css" />
		<script type="text/javascript" src="<?=host?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=host?>js/mobile.js"></script>
		<script type="text/javascript">var host = "<?=host?>";</script>
		<?php if(isset($js)) { echo $js; } ?>
	</head>
	<body style="background:<?=htmlspecialchars(file_get_contents('control/color.txt'))?>">
		<div id="opacity">
			<div class="opacity-content">
				<div class="opacity-content-popup"></div>
			</div>
		</div>
		<div id="menu"></div>
		<div id="sidebar">
			<a href="<?=host?>index.php"<?php if($pageId === 0) echo ' class="active"'; ?>>Accueil</a>
			<a href="<?=host?>ventes.php"<?php if($pageId === 1) echo ' class="active"'; ?>>Ventes</a>
			<a href="<?=host?>locations.php"<?php if($pageId === 2) echo ' class="active"'; ?>>Locations</a>
			<a href="<?=host?>apropos.php"<?php if($pageId === 5) echo ' class="active"'; ?>>A propos</a>
			<?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>
			<a class="right" onclick="conf=confirm('Etes-vous certain de vouloir vous déconnecter ?');return(conf)" href="<?=host?>deconnexion.php?k=<?=$token->make('logout')?>">Déconnexion</a>
			<?php } ?>
			<a href="<?=host?>connexion.php">Administration</a>
		</div>
		<header>
			<div class="content">
				<a href="<?=host?>"><img src="img/logo.png" class="header-logo" /></a>
				<nav>
					<a href="<?=host?>index.php"<?php if($pageId === 0) echo ' class="active"'; ?>>Accueil</a>
					<a href="<?=host?>ventes.php"<?php if($pageId === 1) echo ' class="active"'; ?>>Ventes</a>
					<a href="<?=host?>locations.php"<?php if($pageId === 2) echo ' class="active"'; ?>>Locations</a>
					<a href="<?=host?>apropos.php"<?php if($pageId === 5) echo ' class="active"'; ?>>A propos</a>
					<?php if(isset($_SESSION['logged']) && $_SESSION['logged'] === true) { ?>
					<a class="right" onclick="conf=confirm('Etes-vous certain de vouloir vous déconnecter ?');return(conf)" href="<?=host?>deconnexion.php?k=<?=$token->make('logout')?>">Déconnexion</a>
					<?php } ?>
				</nav>
			</div>
		</header>
		<div id="site">
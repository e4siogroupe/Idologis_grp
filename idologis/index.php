<?php
require_once('inc/config.php');
$pageId = 0;
require_once("inc/header.php");
?>

<div id="cover">
	<div class="cover-content">
		<h2>Idologis</h2>
		<h3>Ventes et locations immobilières dans les Hauts-de-France</h3>
	</div>
</div>

<div class="content">
	<?php
	$request = "SELECT img, reference ".
	"FROM vente ".
	"INNER JOIN type ON type.id = vente.id_type ".
	"INNER JOIN secteur ON secteur.id = vente.id_secteur ".
	"ORDER BY reference DESC ".
	"LIMIT 6";
	$res = $pdo->prepare($request);
	$res->execute();
	$rows = $res->fetchAll();

	echo '<div class="logements"><h2>Les dernières ventes</h2>';
	foreach($rows as $row) {
		echo '<a href="'.host.'ventes.php#'.htmlspecialchars($row['reference']).'"><div class="logement">'.
			'<img src="'.host.'img/'.htmlspecialchars($row['img']).'.png" />'.
		'</div></a>';
	}
	echo '</div>';

	$request = "SELECT img, reference ".
	"FROM location ".
	"INNER JOIN type ON type.id = location.id_type ".
	"INNER JOIN secteur ON secteur.id = location.id_secteur ".
	"ORDER BY reference DESC ".
	"LIMIT 6";
	$res = $pdo->prepare($request);
	$res->execute();
	$rows = $res->fetchAll();

	echo '<div class="logements"><h2>Les dernières locations</h2>';
	foreach($rows as $row) {
		echo '<a href="'.host.'locations.php#'.htmlspecialchars($row['reference']).'"><div class="logement">'.
			'<img src="'.host.'img/'.htmlspecialchars($row['img']).'.png" />'.
		'</div></a>';
	}
	echo '</div>';
	?>
</div>
		
<?php
require_once("inc/footer.php");
?>
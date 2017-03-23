<?php
$pageId = 0;
require_once("header.php");
?>

<div id="cover">
	<div class="cover-content">
		<h2>Idologis</h2>
		<h3>On aime les logements</h3>
	</div>
</div>

<div class="content">
	<?php
	$request = "SELECT img ".
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
		echo '<div class="logement">'.
			'<img src="'.host.'img/'.htmlspecialchars($row['img']).'.png" />'.
		'</div>';
	}
	echo '</div>';

	$request = "SELECT img ".
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
		echo '<div class="logement">'.
			'<img src="'.host.'img/'.htmlspecialchars($row['img']).'.png" />'.
		'</div>';
	}
	echo '</div>';
	?>
</div>
		
<?php
require_once("footer.php");
?>
<?php
header('Content-type: application/json');

require_once('../inc/config.php');
require_once("../inc/db.php");

if(isset($_POST['tri']) && $_POST['tri'] == "ASC") {
	$request = "SELECT reference, type.libelle AS type, secteur.libelle AS secteur, surface, prix, chambres, surface_terrain, classe_energetique, les_plus, img ".
	"FROM vente ".
	"INNER JOIN type ON type.id = vente.id_type ".
	"INNER JOIN secteur ON secteur.id = vente.id_secteur ".
	"ORDER BY prix ASC";
}
else if(isset($_POST['tri']) && $_POST['tri'] == "DESC") {
	$request = "SELECT reference, type.libelle AS type, secteur.libelle AS secteur, surface, prix, surface_terrain, classe_energetique, les_plus, img ".
	"FROM vente ".
	"INNER JOIN type ON type.id = vente.id_type ".
	"INNER JOIN secteur ON secteur.id = vente.id_secteur ".
	"ORDER BY prix DESC";
}
else {
	$request = "SELECT reference, type.libelle AS type, secteur.libelle AS secteur, surface, prix, surface_terrain, classe_energetique, les_plus, img ".
	"FROM vente ".
	"INNER JOIN type ON type.id = vente.id_type ".
	"INNER JOIN secteur ON secteur.id = vente.id_secteur";
}

$res = $pdo->prepare($request);
$res->execute();
$row = $res->fetchAll();

$array = array();
foreach($row AS $data) {
	$array[] = array('ref' => intval($data['reference']),
					 'type' => htmlspecialchars($data['type']),
					 'secteur' => htmlspecialchars($data['secteur']),
					 'surface' => intval($data['surface']),
					 'terrain' => intval($data['surface_terrain']),
					 'classe' => htmlspecialchars($data['classe_energetique']),
					 'plus' => htmlspecialchars($data['les_plus']),
					 'prix' => floatval($data['prix']),
					 'img'=> htmlspecialchars($data['img']));
}

echo json_encode($array);
?>
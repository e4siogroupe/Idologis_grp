<?php
require_once("inc/config.php");
$js = '<script type="text/javascript" src="'.host.'js/locations.js"></script>';
$pageId = 2;
require_once("inc/header.php");
?>

<div class="content white">
	<h1>Locations
		<select class="selectpicker" >
			<option style="color: grey" disabled selected>Trier par</option>
			<option id="prixCroissant" value="1">Prix croissant</option>
			<option id="prixDecroissant" value="2">Prix décroissant</option>
		</select>
	</h1>

	<h2>Découvrez nos locations ci-dessous</h2>

	<div class="background"></div>

	<div class="col-md-12 col-lg-12" id="accueil">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Ref</th>
					<th>Type</th>
					<th>Secteur</th>
					<th>Surface</th>
					<th>Loyer</th>
					<th>Détails</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
	
</div>

<?php 
require_once("inc/footer.php"); 
?>

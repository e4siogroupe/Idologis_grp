<?php
require_once("inc/config.php");
$js = '<script type="text/javascript" src="'.host.'js/ventes.js"></script>';
$pageId = 1;
require_once("inc/header.php");
?>

<div class="content white">
	<h1>Ventes
		<select class="selectpicker" >
			<option style="color: grey" disabled selected>Trier par</option>
			<option id="prixCroissant" value="1">Prix croissant</option>
			<option id="prixDecroissant" value="2">Prix décroissant</option>
		</select>
	</h1>

	<h2>Découvrez nos ventes ci-dessous</h2>

	<div class="background"></div>

	<div class="col-md-12 col-lg-12" id="accueil">
	  	<table class="table table-bordered">
		    <thead>
		      	<tr>
			        <th>Ref</th>
			        <th>Type</th>
			        <th>Secteur</th>
			        <th>Surface</th>
			        <th>Prix</th>
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

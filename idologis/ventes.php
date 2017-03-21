<?php
require_once('config.php');
$js = '<script type="text/javascript" src="'.host.'js/ventes.js"></script>';
require_once("header.php");
?>

<div class="content">
	<h1>Ventes</h1>

	<div class="col-md-12 col-lg-12" id="accueil">
    <form action="#" name="filtre" role="form" class="form-horizontal" method="get" charset="utf-8">
    	<select class="selectpicker" >
		  <option style="color: grey" disabled selected>Trier par</option>
		  <option id="prixCroissant" value="1">Prix croissant</option>
		  <option id="prixDecroissant" value="2">Prix décroissant</option>
		</select>
    </form>
	  	<table class="table table-bordered">
		    <thead>
		      	<tr>
			        <th>Référence</th>
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
require_once("footer.php"); 
?>

<?php
session_start();
if($_SESSION['logged'] === true) {
	header('Location: administration.php');
	die();
}
require_once("config.php");
$js = '<script type="text/javascript" src="'.host.'js/connexion.js"></script>';
require_once("header.php");
?>

<div class="content">

    <div class="row">
	    <div class="col-xs-12">
	        <div class="main">
	            <div class="row">
		            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
		                       
		                <h1>Administration</h1>
		                <h2>Utilisez un compte administrateur</h2>
		                
		                <div id="resultat"></div>
		                <div style="height:10px;"></div>       
		                <form action="control/verificationConnexion.php" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
		                    <div class="form-group">
		                    <div class="col-md-8"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="username"/></div>
		                    </div> 
		                    
		                    <div class="form-group">
		                    <div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="password"/></div>
		                    </div> 
		                    
		                    <div class="form-group">
		                    <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success" type="submit" value="Connexion"/></div>
		                    </div>	                    	                
		                </form>

		            </div>
	            </div>	            
	        </div>
	    </div>
    </div>
    
</div>

<div style="height: 50px"></div>

<?php require_once("footer.php"); ?>
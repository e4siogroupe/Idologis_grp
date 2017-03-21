<?php
session_start();

include('token.php');
$token = new token();

if(isset($_GET['k']) && $token->verify('logout', $_GET['k'])) {
	session_destroy();
}
header('Location: ../index.php');

/*

<input type="hidden" name="token" value="<?=$token->make('nomDuTruc')?>" />

if(isset($_POST['token']) && $token->verify('nomDuTruc', $_POST['token']) === true) {
	
}

*/
?>
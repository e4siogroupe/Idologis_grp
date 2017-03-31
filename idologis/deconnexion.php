<?php
session_start();

require_once('inc/config.php');

require_once('inc/token.php');
$token = new token();

if(isset($_GET['k']) && $token->verify('logout', $_GET['k'])) {
	session_destroy();
}

header('Location: '.host);
?>
<?php
session_start();

require_once("../inc/token.php");
$token = new token();

require_once('../inc/config.php');
require_once("../inc/db.php"); 

if($_SESSION['logged'] !== true) {
	header("HTTP/1.0 404 Not Found");
	include('404.php');
	die();
}
else {
	if(isset($_POST['id']) && isset($_POST['token']) && $token->verify('removeAccount', $_POST['token']) === true) {
		$sql = "DELETE FROM admin WHERE id = ?";

		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($_POST['id']));
	}
}

?>
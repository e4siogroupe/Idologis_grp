<?php
session_start();

require_once("../inc/token.php");
$token = new token();

require_once("../inc/db.php"); 

if($_SESSION['logged'] !== true) {
	header("HTTP/1.0 404 Not Found");
	include('404.php');
	die();
} 
else {
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['token']) && $token->verify('addAccount', $_POST['token']) === true) {
		$username = $_POST['username'];
		$pass = $_POST['password'];

		$sql = "INSERT INTO admin VALUES (NULL, ?, ?)";

		$stmt = $pdo->prepare($sql);
		$stmt->execute(array($username, md5($pass)));
	}
}

?>
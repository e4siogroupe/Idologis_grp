<?php
session_start();

require_once('../inc/token.php');
$token = new token();

if($_SESSION['logged'] === true) {
	if(isset($_GET['token']) && $token->verify('color', $_GET['token']) === true) {
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/idologis/ajax/color.txt', $_GET['color']);

		echo file_get_contents(root.'ajax/color.txt', $_GET['color']);
		
		header('Location: ../administration.php');
	}
	else {
		header('Location: ../404.php');
	}
}
?>
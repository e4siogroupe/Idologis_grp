<?php
session_start();
header('Content-type: application/json');

require_once('../inc/config.php');
require_once("../inc/db.php");

$error = "";
if(isset($_POST['message']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['objet'])) {
	$nom = htmlspecialchars($_POST['nom']).' '.htmlspecialchars($_POST['prenom']);
	$message = htmlspecialchars($_POST['message']);
	$objet = htmlspecialchars($_POST['objet']);
	$mail = htmlspecialchars($_POST['mail']);
	
	$destinataire = email;
	$expediteur = $nom.' <'.$mail.'>';
	
	$mail = mail($destinataire, $objet, $message, $expediteur);
	if(!$mail) {
		$error = "Erreur lors de l'envoi du mail.";
	}
}
else {
	$error = "Erreur lors de l'envoi du mail.";
}

$array = array();
if($error != "") {
	$array['code'] = "error";
	$array['text'] = $error;
}
else {
	$array['code'] = "ok";
}

echo json_encode($array);
?>
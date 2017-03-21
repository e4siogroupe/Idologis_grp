<?php
session_start();
header('Content-type: application/json');

require_once("connexionDb.php"); 

$array = array('code' => 'fail');

$user = @$_POST['username'];
$pass = @$_POST['password'];

if(isset($user) && isset($pass)) {
	$request = "SELECT COUNT(*) as nb FROM admin WHERE username = ? AND password = ?";
	$res = $pdo->prepare($request);
	$res->execute(array($user, md5($pass)));

	$result = $res->fetchAll();
    if($result[0]['nb'] == 1){ 
        $array['code'] = "ok"; 
        $_SESSION['logged'] = true;
    }
}
else{
	$array['code'] = "fail";
}

echo json_encode ($array);
?>
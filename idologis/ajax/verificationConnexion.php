<?php
session_start();
header('Content-type: application/json');

require_once('../inc/config.php');
require_once("../inc/db.php"); 

$array = array('code' => 'fail');

$user = @$_POST['username'];
$pass = @$_POST['password'];

if(isset($user) && isset($pass)) {
	$request = "SELECT COUNT(*) as nb, password FROM admin WHERE username = ?";
	$res = $pdo->prepare($request);
	$res->execute(array($user));

	$result = $res->fetchAll();
    if($result[0]['nb'] == 1 && $result[0]['password'] === md5($pass)) { 
        $array['code'] = "ok";
        
        $_SESSION['logged'] = true;
    }
}
else{
	$array['code'] = "fail";
}

echo json_encode ($array);
?>
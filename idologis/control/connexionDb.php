<?php

try {
	$user = "root";
	$pass="root";
    $pdo = new PDO('mysql:host=192.168.172.15;dbname=idologis', $user, $pass);
} 
catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

?>
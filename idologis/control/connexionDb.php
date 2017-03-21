<?php

try {
	$user = "root";
	$pass="root";
    $pdo = new PDO('mysql:host=localhost;dbname=idologis', $user, $pass);
} 
catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

?>
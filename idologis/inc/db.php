<?php
try {
    $pdo = new PDO('mysql:host='.db_host.';dbname='.db_name, db_user, db_password);
} 
catch (PDOException $e) {
    echo $e->getMessage();
    die();
}

?>
<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'store';
try{
    $connection = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
}
catch (PDOException $e){
 die ("Error connecting to database!");
}

?>
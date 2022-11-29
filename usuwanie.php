<?php
require('connection.php');
$id = $_GET['id'];
    $zapytanie = $conn->prepare("DELETE FROM users WHERE 'user_id' = '".$id."'");
    $zapytanie->execute();
    header("Location: zarzadzanie.php");
?>
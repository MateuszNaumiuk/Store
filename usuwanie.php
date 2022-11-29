<?php
require('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $zapytanie = $conn->prepare("DELETE FROM users WHERE `user_id` = '" . $id . "'");
} else if (isset($_GET['pic'])) {
    $id = $_GET['pic'];
    $zapytanie = $conn->prepare("DELETE FROM pictures WHERE `picture_id` = '" . $id . "'");
}

$zapytanie->execute();
header("Location: zarzadzanie.php");

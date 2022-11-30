<?php
require('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $zapytanie = $conn->prepare("DELETE FROM users WHERE `user_id` = '" . $id . "'");
} else if (isset($_GET['pic'])) {
    $id = $_GET['pic'];
    $zapytanie = $conn->prepare("DELETE FROM pictures WHERE `picture_id` = '" . $id . "'");
}else if (isset($_GET['order'])) {
    $id = $_GET['order'];
    $zapytanie = $conn->prepare("DELETE FROM order_info WHERE `order_id` = '" . $id . "'");
}

$zapytanie->execute();
header("Location: zamowienia.php");

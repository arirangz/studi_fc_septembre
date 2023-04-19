<?php

try {
    $db_name = "studi_cuisinea_septembre";
    $db_server = "localhost";
    $db_user = "root";
    $db_password = "";
    $pdo = new PDO("mysql:dbname=$db_name;host=$db_server;charset=utf8mb4", $db_user, $db_password);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
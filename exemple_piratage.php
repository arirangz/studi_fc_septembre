<?php

// EXEMPLE A NE PAS REPRODUIRE

$pdo = new PDO('mysql:dbname=studi_cuisinea_septembre;host=localhost;charset=utf8mb4', 'root', '');
$id = (int)$_GET['id'];
$query = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

var_dump($result);
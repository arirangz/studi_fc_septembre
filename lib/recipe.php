<?php

$recipes = [
    ["title" => "Mousse au chocolat", "description" => "Test desc mousse", "image" => "1-chocolate-au-mousse.jpg"],
    ["title" => "Gratin dauphinois", "description" => "Test desc gratin", "image" => "2-gratin-dauphinois.jpg"],
    ["title" => "Salde de chèvre", "description" => "Test desc salade", "image" => "3-salade.jpg"]
];


function getRecipeById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

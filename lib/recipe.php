<?php

function getRecipeById(PDO $pdo, int $id) {
    $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getRecipes(PDO $pdo, int $limit = null) {
    $sql = "SELECT * FROM recipes ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT :limit";
    }
    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(':limit', $limit, PDO::PARAM_INT);
    }

    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function saveRecipe(PDO $pdo, string $title, string $description, string $ingredients, string $instructions, int $category_id, string|null $fileName) {
    $query = $pdo->prepare("INSERT INTO `recipes` (`category_id`, `title`, `description`, `ingredients`, `instructions`, `image`) VALUES (:category_id, :title, :description, :ingredients, :instructions, :image);");
    $query->bindValue(':category_id', $category_id, PDO::PARAM_INT);
    $query->bindValue(':title', $title, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':ingredients', $ingredients, PDO::PARAM_STR);
    $query->bindValue(':instructions', $instructions, PDO::PARAM_STR);
    $query->bindValue(':image', $fileName, PDO::PARAM_STR);

    return $query->execute();
}

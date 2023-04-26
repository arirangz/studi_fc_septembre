<?php
require_once "lib/config.php";
require_once "lib/pdo.php";
require_once "lib/recipe.php";
require_once "templates/header.php";

$recipes = getRecipes($pdo);

?>

<h1>Liste des recettes</h1>

<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php foreach ($recipes as $key => $recipe) { 
        require "templates/recipe_part.php";
    } ?>
</div>

<?php require_once "templates/footer.php"; ?>
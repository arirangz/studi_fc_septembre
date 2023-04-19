<?php

require_once "lib/pdo.php";
require_once "lib/recipe.php";
require_once "templates/header.php";

$id = (int)$_GET['id'];

$recipe = getRecipeById($pdo, $id);
$ingredients = explode("\n", $recipe["ingredients"]);
$instructions = explode("\n", $recipe["instructions"]);
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="uploads/recipes/<?= $recipe["image"]; ?>" class="d-block mx-lg-auto img-fluid" alt="<?= $recipe["title"]; ?>" width="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $recipe["title"]; ?></h1>
        <p class="lead"><?= $recipe["description"]; ?></p>
    </div>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h2>Ingrédients</h2>
    <ul class="list-group">
        <?php foreach ($ingredients as $ingredient) { ?>
            <li class="list-group-item"><?=$ingredient; ?></li>
        <?php } ?>
    </ul>

</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <h2>Instructions</h2>
    <ol class="list-group list-group-numbered">
        <?php foreach ($instructions as $instruction) { ?>
            <li class="list-group-item"><?=$instruction; ?></li>
        <?php } ?>
    </ol>

</div>

<?php require_once "templates/footer.php"; ?>
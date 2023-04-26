<?php
if ($recipe['image'] === null) {
    $imagePath = ASSETS_IMAGE_FOLDER.'recipe_default.jpg';
} else {
    $imagePath = RECIPE_IMAGE_FOLDER.$recipe["image"];
}
?>

<div class="col-md-4">
    <div class="card">
        <img src="<?=$imagePath; ?>" class="card-img-top" alt="<?= $recipe["title"]; ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $recipe["title"]; ?></h5>
            <p class="card-text"><?= $recipe["description"]; ?></p>
            <a href="recette.php?id=<?=$recipe["id"];?>" class="btn btn-primary">Voir la recette</a>
        </div>
    </div>
</div>
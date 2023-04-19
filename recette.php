<?php 

require_once "lib/recipe.php";
require_once "templates/header.php"; 

$id = $_GET["id"];
$recipe = $recipes[$id];

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="uploads/recipes/<?=$recipe["image"]; ?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipe["title"]; ?>" width="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?=$recipe["title"]; ?></h1>
        <p class="lead"><?=$recipe["description"]; ?></p>
    </div>
</div>

<?php require_once "templates/footer.php"; ?>
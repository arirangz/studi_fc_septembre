<?php

require_once "lib/recipe.php";
require_once "templates/header.php";

?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img width="350" src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisnea" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Cuisnea | Recettes faciles</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="nos-recettes.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les recettes</a>
        </div>
    </div>
</div>

<h2 class="pb-2 border-bottom">Les dernières recettes</h2>
<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <?php foreach ($recipes as $key => $recipe) {
        require "templates/recipe_part.php";
    } ?>
</div>

<?php require_once "templates/footer.php"; ?>
<?php require_once "templates/header.php"; ?>

            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img width="350" src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Cuisnea" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisnea | Recettes faciles</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les recettes</button>
                    </div>
                </div>
            </div>

            <h2 class="pb-2 border-bottom">Les dernières recettes</h2>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="uploads/recipes/1-chocolate-au-mousse.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mousse au chocolat</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="uploads/recipes/2-gratin-dauphinois.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gratin</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="uploads/recipes/3-salade.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Salade</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

<?php  require_once "templates/footer.php"; ?>
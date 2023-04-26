<?php

require_once "lib/config.php";
require_once "lib/pdo.php";
require_once "lib/tools.php";
require_once "lib/recipe.php";
require_once "templates/header.php";

$errors = [];
$messages = [];



if (isset($_POST["saveRecipe"])) {
    
    $fileName = null;
    if (isset($_FILES["file"]["tmp_name"]) && $_FILES["file"]["tmp_name"] != '') {
        $checkImage = getimagesize($_FILES["file"]["tmp_name"]);
        if ($checkImage !== false) {
            $fileName = uniqid() . '-' . slugify($_FILES["file"]["name"]);
            if (move_uploaded_file($_FILES["file"]["tmp_name"], RECIPE_IMAGE_FOLDER . $fileName)) {
            } else {
                $errors[] = "Le fichier n'a pas été uploadé";
            }
        } else {
            $errors[] = "Le fichier doit être une image";
        }
    }
    
    if (!$errors) {
        $res =  saveRecipe($pdo, $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], (int)$_POST['category_id'], $fileName);
        if ($res) {
            $messages[] = 'La recette a bien été ajoutée';
        } else {
            $errors[] = 'La recette n\'a pas été enregistrée';
        }
    }
    
}

?>

<h1>Ajout recette</h1>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message; ?>
    </div>
<?php } ?>

<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php } ?>

<form method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" rows="3" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="ingredients" class="form-label">Ingrédients</label>
        <textarea name="ingredients" id="ingredients" rows="3" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="instructions" class="form-label">Instructions</label>
        <textarea name="instructions" id="instructions" rows="3" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Catégorie</label>
        <select name="category_id" id="category_id" class="form-select">
            <option value="1">Entrée</option>
            <option value="2">Plat</option>
            <option value="3">Dessert</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="file" id="file">
    </div>

    <input type="submit" value="Enregistrer" name="saveRecipe">
</form>

<?php require_once "templates/footer.php"; ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Page 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<div class="container bg-primary-subtle p-3">
        <div class="col-12 p-3">
            <div class="row">
                Nom : <?= $_SESSION["lastname"]; ?> <br>
                Prénom : <?= $_SESSION["firstname"]; ?> <br>
                Age : <?= $_SESSION["age"]; ?> <br>
            </div>
        </div>
            <div class="row bg-warning text-danger justify-content-center">
                Votre login est : <?= $_COOKIE["login"]?> <br>
                Votre mot de passe est : <?= $_COOKIE["pass"]; ?> <br>
                <a href="page3.php" class="btn btn-danger">Modifier</a>
            </div>
        </div>
        <div class="col-12 text-center">
            <a href="index.php">retour index</a>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
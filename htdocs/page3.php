<?php session_start(); ?>
<?php if(isset($_POST["login"])){setcookie("login", $_POST["login"]);}; ?>
<?php if(isset($_POST["password"])){setcookie("pass", $_POST["password"]);} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Page 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
</head>
<body>
    <div class="container bg-primary-subtle p-3">
        <div class="col-12 p-3">
            <div class="row text-center">
                <form action="page3.php" method="post">
                        <label for="login">Entrez votre login</label>
                        <input type="text" name="login"></input>
                    <br><br>
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password"></input>
                    <br><br>
                    <button type="submit" class="btn btn-secondary">Valider</button>
                </form>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6 p-3">
                <a href="index.php">Accueil</a>
            </div>
            <div class="col-6 p-3">
                <a href="page2.php">Page 2</a>
            </div>
        </div>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
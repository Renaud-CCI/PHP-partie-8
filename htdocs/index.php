<?php session_start(); ?>
<?php if(isset($_POST["login"])){setcookie("login", $_POST["login"]);}; ?>
<?php if(isset($_POST["password"])){setcookie("pass", $_POST["password"]);} ?>
<!-- PHP - Variables superglobales, sessions et cookies
Dans tous les exercices, il faudra faire une page HTML 5 valide et soigner son CSS.

Exercice 1
Faire une page HTML permettant de donner à l'utilisateur :

son User Agent
son adresse ip
le nom du serveur
Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page.

Exercice 3
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.

Exercice 4
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.

Exercice 5
Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
</head>

<?php
$_SESSION["firstname"] = "Renaud";
$_SESSION["lastname"] = "BRESSON";
$_SESSION["age"] = "40";
?>
<body>
    <div class="container bg-primary-subtle p-3">
        <div class="col-12 p-3">
            <div class="row">
                <p><u>Votre User Agent :</u> <?= $_SERVER["HTTP_USER_AGENT"] ?> </p>
                <p><u>Votre Adresse IP :</u> <?= $_SERVER["REMOTE_ADDR"] ?> </p>
                <p><u>Votre Serveur :</u> <?= $_SERVER["SERVER_NAME"] ?></p>
            </div>
        </div>
        <div class="col-12 p-3">
            <div class="row text-center">
                <form action="index.php" method="post">
                        <label for="login">Entrez votre login</label>
                        <input type="text" name="login"></input>
                    <br><br>
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password"></input>
                    <br><br>
                    <button type="submit" class="btn btn-secondary">Se connecter</button>
                </form>
            </div>
        </div>
        <div class="col-12 p-3">
            <div class="row text-center">
                <a href="page2.php">Page 2</a>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
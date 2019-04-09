<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SESSION PHP</title>
</head>
<body>

<div class="container text-center">
   <h1 class="display-4 text-center">SESSION PHP</h1><hr>

<!--Les sessions ont pour rôle de garder la session active afin de permettre la navigation-->

<?php

//Les sessions ont pour rôle de garder la session active et accessible afin de permettre la navigation

//Par exemple, sans une session active, nous ne pouvons naviguer sur un site tout en restant connecté
//Les sessions sont conservées côté serveur puisqu'elles contiennent des données sensibles telque votre email, nom et prenom etc... 


session_start(); //permet de créer un fichier sessionse trouvant dans le dossier c:/xampp/



//On stock des données dans la session en créant des indices au tableau ARRAY

$_SESSION['pseudo'] = 'gregFormation';
$_SESSION['nom'] = 'LACROIX';
$_SESSION['prenom'] = 'Gregory';

echo '<pre>'; print_r($_SESSION);  echo '</pre>';

//Vider une partie de la session
unset($_SESSION ['prenom']);
echo '<pre>'; print_r($_SESSION);  echo '</pre>';

//supprimer la session

// session_destroy();







?>





 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>
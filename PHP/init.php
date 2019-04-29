<?php 
// ----------------- CONNEXION BDD

$bdd = new PDO('mysql:host=localhost;dbname=site', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));

// ------------------ SESSION
session_start();

// ------------------ CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/back/PHP/10-site-ecommerce/');
// echo RACINE_SITE;
// $_SERVER['DOCUMENT_ROOT'] --> C:/xampp/htdocs
// Lors de l'enregistrement  d'image / photos, nous aurons besoin du chemin physique complet pour enregistrer la photo dans le bon dossier 

define("URL", "http://localhost/Back/PHP/10-site-ecommerce/");
// echo URL;
// cette constante servira entre autre à enregistrer l'URL d'une photo / image dans la BDD, on ne conserve jamais la photo elle même, ce serait trop lourd pour la BDD 

// ------------------ VARIABLES
$error = ''; // message d'erreurs
$validate = ''; // message de validation
$content = ''; // permettra de placer du contenu ou l'on souhaite

// ------------------- FAILLES XSS
foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags(trim($value));
}

// -------------------- GET

foreach($_GET as $key => $value)
{
    $_GET[$key] = strip_tags(trim($value));
}
// strip_tags() --> supprime les balises HTML 
// trim() --> supprime les esspaces en début et fin de chaine

// --------------------- INCLUSION
require_once("fonction.php"); // on inclue dirrectement le fichier fonction.php dans init, cela évitera de l'appeler sur chaque page

?>
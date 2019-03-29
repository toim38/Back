<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Entrainement PHP</title>
</head>
<body>
<div>
<h2 class="display-4 text-center">Ecriture et affichage</h2><hr>
<!-- Nous pouvons écrire du HTML dans un fichier ayant l'extension PHP, L'inverse n'est pas possible-->

<?php // ouverture de la balise php
// il est possible d'ouvrir la balise php autant de fois que l'on souhaite sur une page php
echo 'bonjour'; //echo est une instruction d'affichage que l'on peut traduire par 'affiche moi'
echo '<br>';
print 'bonjour'; //print est un autre instruction d'affichage, pas de difference avec echo

echo '<hr><h2 class="display-4 text-center">Commentaires</h2><hr>';
?><!-- fermeture de la balise php -->
<?= "Allo";?><!--  // le = remplace le 'echo' -->
<strong>Bonjour</strong> <!--nous voyons qu'il est également possible de fermer et reouvrir  PHP pour melenger du code HTML et PHP-->

<?php
echo 'Texte'; // ceci est un commentaire sur une seule ligne
echo 'Texte'; /* ceci est un commentaire sur plusieurs lignes */
echo 'Texte'; # ceci est un commentaire sur une seule ligne

echo '<hr><h2 class="display-4 text-center">Declaration / Affectation</h2><hr>';
//Une variable est un espace nommé permettant de conserver une valeur

//un chiffre ne peux pas suivre le dollar, ex $2a --> erreur!! mais $a2 fonctionne. caracteres autorisés: A a Z / a à z / 0 à 9 , pas d'accents, pas d'espaces
$a = 127; // affecttation de la valeur 127 dans la variable nommée "a"
// gettype est une fonction predefinie qui retourne le type d'un variable.
echo gettype($a);// la il s'agit d'un entier donc le type retourné est integer
echo '<br>';

$b = 1.5;
echo gettype($b);// un nombre a  virgule, c'est un "double"
echo '<br>';

$c = "une chaine";
echo gettype($c);// la valeur retournée est string, donc une chaine e caractere
echo '<br>';

$d = '127';
echo gettype($d); //entre '' une valeur numerique devient un type string
echo '<br>';

$e = true;
echo gettype($e); // BOOLEEN
echo '<br>';

echo '<hr><h2 class="display-4 text-center">Concatenation</h2><hr>';

$x = 'bonjour ';
$y = 'tout le monde !!';
echo $x . $y . '<br>'; // '.' point de concatenation que l'on peut traduire par 'suivi de' 
echo "$x $y <br>"; // entre guillements, mes variables sont évaluées, 
echo '$x $y <br>'; //entre simples cotes '' ça ne fontionnera pas, cela va etre pris comme une chaine de caractere

echo 'aujourd\'hui <br>';// lorsque j'ai une apostrophe dans ma chaine de caratere, il faut preciser que c'est une apostrophe en lui attribuant juste avant le caractere d'echappement antislash \
echo "aujourd'hui <br>";
echo "hey !". $x . $y . '<br>'; // concatenation texte et variable
echo "<br>" , "coucou", "<br>"; // la concatenation avec une virgule est possible et est similaire avec la point

echo '<hr><h2 class="display-4 text-center">Concatenation lors de l\'affectation</h2><hr>';

$prenom1 = "Bruno";
$prenom1= "Claire";
echo $prenom1 . '<br>'; // cela remplace bruno par claire

$prenom2 = "nicolas";
$prenom2 .= " Marie";
echo $prenom2 . '<br>';
/* l'operateur .= ajoute sans remplacer la valeur precedante */

echo '<hr><h2 class="display-4 text-center">Constante et constante magique</h2><hr>';
/* Une constante comme une variable permet de conserver une valeur, mais comme son nom l'indique sa valeur est... constante. On ne pourra pas changer sa valeur durant l'execution du script*/
define("CAPITALE", "Paris"); /* Par convention un constante se déclare toujours en majuscule avec define --> define ("NOM DE LA CONSTANTE", "Valeur de la constante") */
echo CAPITALE . '<br>';
define("CAPITALE", "Rome"); // CAPITALE etant une constante, le script m'indique une erreur, car il n'est pas possible de redefinir Paris (c'est une constante)

//Constante magique
echo __FILE__ . '<br>';// chemin complet vers le fichier
echo __LINE__ . '<br>';// affiche le numero de la ligne ou on developpe
// __FUNCTION__ / __CLASS__ / __METHOD__ en sont d'autres

//exo: afficher vert jaune rouge (avec des tirets) en mettant chaque couleur dans une variable, faites en sorte que chaque mot soit de la bonne couleur
$vert = '<span class="text-success">vert</span>'; 
$jaune = '<span class="text-warning">jaune</span>';
$rouge = '<span class="text-danger">rouge</span>';
// $rouge = '<span style="color:red">rouge</span>';

echo "$vert - $jaune - $rouge <br>";
// echo $vert . '-' . $jaune . '-' . $rouge .'<br>';

echo '<hr><h2 class="display-4 text-center">Opérateurs arithmetiques</h2><hr>';

$a= 10; $b = 2;
echo $a + $b . '<br>'; //affiche 12
echo $a - $b . '<br>'; //affiche 8
echo $a * $b . '<br>'; //affiche 20
echo $a / $b . '<br>'; //affiche brightness_5

// operateurs /affection 
$a += $b; //equivaut a $a = $a + $b;
echo $a . '<br>';//affiche 12
$a -= $b; //equivaut a $a = $a - $b;
echo $a . '<br>';//affiche 10
$a *= $b; //equivaut a $a = $a * $b;
echo $a . '<br>';//affiche 20
$a /= $b; //equivaut a $a = $a / $b;
echo $a . '<br>';//affiche 10
// contexte: pratique pour calcul d'un panier

echo '<hr><h2 class="display-4 text-center">Structures conditionnelles (if / else) - opérateurs de comparaison</h2><hr>';

// isset & empty 
// $var1 = 0;
$var1 = 127;
$var2 = '';
if(empty($var1)){
    echo "0, vide ou non defini <br>";
}// ici quand je teste $var1 à 0 ou $var2 qui est vide '', je rentre dans ma condition et le message s'affiche "empty" permet de tester si la valeur est a 0 ou est vide, si ma condition retourne true, le code entre les accolades sera executé.
if(isset($var2)){
    echo "var2 existe et est defini par rien <br>";
}/* isset test l'existance d'une variable*/

/* Opérateurs de comparaison
=       égal à
==      comparaison de la valeur
===     comparaison de la valeur et du type
<       strictement inférieur à
>       strictement supérieur à
<=      inférieur ou égal à
>=      supérieur ou égal à
!       n'est pas
!=      différent de
|| OR   ou
&& AND  et
XOR     condition exclusive 
*/

$a = 10; $b = 5; $c = 2;
//if / else
if($a > $b)// cas par defaut
{
    echo "A est bien supérieur a B <br>";
}
else  //dans tous les autres cas, si la condition if n 'est pas verifiée c'est le code dans le else  qui s'execute 
{
    echo "non c'est B qui est supérieur a A <br>";
}

// if / elseif / else
if($a > $b && $b >$c)
{
    echo "ok pour les deux conditions <br>";
}
elseif ($a == 9 || $b > $c)
{
    echo "ok pour au moins une des 2 conditions";
}
else
{
    echo "tout le monde a faux !! <br>";
}
/* elseif, permet d'ajouter des cas supplementaires a la condition. Il peut y'avoir plusieurs elseif dans la meme condition. Si une des conditions supérieure est verifiée (ici le premier if), elseif bloque le script et toutes les conditions suivantes ne seront pas evaluées */

// Condition excusive
if($a == 10 XOR $b == 6) //  avec XOR si l'une des deux conditions est bonne, on entre dans les accolades , si les deux conditions sont bonnes ou sont fausses je ne rentre pas dans mes accolades
{
    echo "ok condition exclusive <br>";
}

// forme contractée : 2 eme  possibilité d'ectriture
echo ($a == 10) ? "A est égal a 10 <br>" : "A n'est pas égal a 10<br>"; // ici dans cette forme contractée qui est une condition ternaire, le '?' remplace le 'if' et les ':' remplacent le 'else'

//Comparaison
$varA = 1;
$varB = '1';
if ($varA === $varB)//avec un double égal == je rentre dans mes accolades, avec un triple égal === ça ne fonctionne pas, car les deux types sont différents (integer et string)
{
    echo "il s'agit de la meme chose <br>";
}

echo '<hr><h2 class="display-4 text-center">Condition SWITCH</h2><hr>';

$perso = "Mario";
switch($perso)
{
    case 'Luigi' :
    echo "vous avez choisi  $perso <br>";
    break;
    case 'Toad' :
    echo "vous avez choisi  $perso <br>";
    break;
    case 'Bowser' :
    echo "vous avez choisi  $perso <br>";
    break;
    default :
    echo "Vous etes fou!! c'est Mario le Meilleur <br>";
    break;
}
/* Si on a une grande comparaison de cas, la condition SWITCH est a privilegier, 'case' represente le casdans lequel nous pouvons potentielleùment tember, 'break' permet de stopperle script si nous tombons dans un des cas */ 

// Exo pouvez vous faire la meme chose que le switch avec des conditions i / elseif / else? si oui faites le
$perso = "Mario";
if ($perso == "Mario")
{
    echo " vous avez choisi $perso";
}
elseif ($perso == "Luigi")
{
    echo " vous avez choisi $perso";
}
elseif ($perso == "Toad")
{
    echo " vous avez choisi $perso";
}
elseif ($perso == "Bowser")
{
    echo " vous avez choisi $perso";
}
else
{
    echo "Vous etes fou!! c'est Mario le Meilleur <br>";
}

echo '<hr><h2 class="display-4 text-center">Fonctions prédefinies</h2><hr>';
// https://www.php.net/
// une fonction predefinie permet de réaliser un traitement specifique

echo 'Date' .date('d/m/Y') . '<br>';/* Lorsque l'on utilise une fonction predefinie, il faut toujours se poser la question de savoir ce qu'on doit lui envoyer comme argument et surtout savoir ce qu'elle retourne. Les arguments de la fonction date() ne sortent pas de nulle part, on les retrouve sur la documentation */

echo '<hr><h2 class="display-4 text-center">Traitement des chaines (iconv_strlen, strpos, substr) </h2><hr>';

//strpos()
$email1 = "sylvain.baillet@lepoles.com";
echo strpos($email1, "@"); /* strpos (string position) fonction predefinie qui permet de trouver la position d'un caractere dans une chaine, 2 arguments: la chaine dans laquelle nous souhaitons chercher, puis le caractere qu'on souhaite trouver, le resultat sort un integer; contexte: utile pour verifier le format d'un email par exemple */

$email2 = "bonjour";
echo strpos($email2, "@");// cette ligne n'affiche rien, pourtant il y'a bien quelque chose a l'interieur: false, pour le voir j'utilise une instruction d'affichage améliorée var_dump() que l'on utilise régulierement en phase de developpement.
var_dump(strpos($email2, "@"));
// il en existe une autre: print_r();

//iconv_strlen(
    $phrase = "mettez une phrase ici a cet endroit";
    echo iconv_strlen($phrase) .'<br>';
/* iconv strlen() est une fonction predefinie qui permet de calculer la taille d'une chaine de caractere. contexte: nous pourrions l'utiliser pour savoir si le pseudo et le mdp lors d'un inscription ont des tailles conformes */

 substr()
$texte = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.";

echo substr($texte, 0, 20) . "<a href = ''>Lire la suite</a>";
/* substr() est une fonction predefinie permettant de retourner une partie de la chaine. les arguments: 1-la chaine a couper, 2-la position du debut, 3-la position de fin. contexte: souvent utilisé pour afficher des actualités ou un article avec une accroche. */

echo '<hr><h2 class="display-4 text-center">Fonctions utilisateur</h2><hr>';
// les fonctions utilisateur permettent d'eviter de copier coller un code recurent. On l'encapsule dans une fonction

function separation()// on declare toujours une fonction avec le mot clé function suivi du nom que l'on desire donner a la fonction que nous definissons. Il y'a toujours des () car une fonctionpeut potentiellement recevoir des arguments
{
    echo "<hr><hr><hr>";
}
separation();//execution de la fonction

//fonction avec arguments

function bonjour($qui)
{
    return "bonjour $qui <br>";//retourne le resultat de la fonction, a ce moment la on quitte la fonction
}
echo bonjour('gregory');// executon de la fonction

$prenom = 'jacques';
echo bonjour($prenom); // l'argument peut etre une variable

//Exo TVA
function appliqueTva($nombre)
{
    return $nombre*1.2;
}
echo "500 euros avec tva 20% font: " . appliqueTva(500) . '€ <br>'; 

//exo: pourrez vous ameliorer cette fonction afin que l'on puisse calculer un nombre avec les taux de notre choix (19.6%, 5.5%, 7% etc...)
function TVA1($nombre, $taux)
{
    return $nombre*(1+$taux/100); 
}
echo "500 euros avec la tva 19.6% font: " . TVA1(500, 19.6) . '€ <br>';
echo "500 euros avec la tva 5.5% font: " . TVA1(500, 5.5) . ' € <br>';
echo "500 euros avec la tva 7% font: " . TVA1(500, 7) . ' € <br>';
// ----------------------------------------------------------------

//il est possible d'executer une fonction avant qu'elle soit declarée dans le code
echo meteo("été", 28);

function meteo ($saison, $temperature)
{
    return "Nous sommes en $saison et il fait $temperature degré(s) <br>";
}

//exo : gerer le s de degrés en fonction de la température, et gerer les articles, "en" été, "au" printemps
function exoMeteo ($saison, $temperature)
{
if ($temperature > 1 || $temperature < -1 )

    $degre = "degrés";
else 
    $degre = "degré";

if($saison == 'printemps')
    $art = 'au';
else
    $art = 'en';  
return "nous sommes $art $saison et il fait $temperature $degre <br>";    
}

echo exoMeteo('été', 2);
echo exoMeteo('automne', -2);
echo exoMeteo('hiver', 0);
echo exoMeteo('printemps', 1);
echo exoMeteo('printemps', 12);

echo '<hr><h2 class="display-4 text-center">Espace global et local (iconv_strlen, strpos, substr) </h2><hr>';
//Espace global et local 
function jourSemaine()
{// espace local
    $jour = "jeudi";
    return $jour;
    echo "Allo!!";
}
echo $jour;//  /!\ ne fonctionne pas car cette variable n'est connue qu'a l'interieur de la fonction
// il n'est pas possible d'appeller une variable declarée dans l'espace local (donc dans une fonction) vers l'espace global (espace par defaut de PHP)
$pays = 'France';//variable globale
function affichagePays()
{
    global $pays;// global permet d'importer une variable declarée dans l'espace global vers l'espace local (dans une fonction)
    return $pays;
}
echo affichagePays();


?>
</div> 
</body>
</html>

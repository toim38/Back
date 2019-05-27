<?php
/*
    UML 

----------------------
| Vehicule           |    1. Création d'un véhicule 1
----------------------    2. Attribuer un nombre de litres d'essence au véhicule 1 : 5l
| $litresEssence     |    3. Afficher le nombre de litres d'essence du véhicule 1
----------------------    4. Création d'une pompe
| setLitresEssence() |    5. Attribuer un nombre de litres d'essence à la pome : 800
| getLitresEssence() |    6. Afficher le nombre de litres d'essence de la pompe
----------------------    7. la pompe donné de l'essence en faisant le plein (50L)
                             à la voiture 1
----------------------    8. Afficher le nombre de litres d'essence de la voiture aprés
| Pompe              |       ravitaillement
----------------------    9. Afficher le nombre de litres restant à la pompe
| $litresEssence     |      
----------------------    public function donnerEssence(Vehicule $v){}  
| setLitresEssence() |
| getLitresEssence() |
| donnerEssence()    |
----------------------
*/

class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
}
//-----------------------------------------------------
class Pompe
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {
        $this->litresEssence = $litres;
    }
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }
                                    // $vehicule1
    public function donnerEssence(Vehicule $v) // on exige un argument de type 'Vehicule', c'est à dire un objet issu de la classe 'Vehicule'
    {
        echo '<pre>'; var_dump($v); echo '</pre>';

        // définir le nombre de litres d'essence dans la pompe : 
        // $pompe1->setLitresEssence($pompe1->getLitresEssence() -  (50 - $vehicule1->getLitresEssence()))
        $this->setLitresEssence($this->getLitresEssence() -  (50 - $v->getLitresEssence()));                        // 800                   -   50 - 5

        // définir le nombre de litres d'essence du vehiclue 1 : 
        $v->setLitresEssence($v->getLitresEssence() + (50 - $v->getLitresEssence()));
                            //      5               +  50 - 5
    }
}
//-----------------------------------------------------
$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo "Le véhicule 1 possède : <strong>" . $vehicule1->getLitresEssence() . "</strong> litres d'essence<hr>";

$pompe1 = new Pompe;
$pompe1->setLitresEssence(800);
echo "La pompe 1 possède : <strong>" . $pompe1->getLitresEssence() . "</strong> litres d'essence<hr>";

$pompe1->donnerEssence($vehicule1);

echo "Nombre de litres d'essence à la pompe : " . $pompe1->getLitresEssence() . ' litres<hr>';
echo "Nombre de litres d'essence pour le véhicule 1 : " . $vehicule1->getLitresEssence() . ' litres<hr>';
<?php
function interauteEstConnecte()
{
    if(!isset($_session['membre']))
    {
        return false;
    }
    else{
        return true;
    }
    }
function internauteEstConnecteEtEstAdmin()
{
    if(internauteEstConnecte()&& $_SESSION['membre']['statut']==1)
    {
        return true;
    }
    else{
        return false;
    }
}
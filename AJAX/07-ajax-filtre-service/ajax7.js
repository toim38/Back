        $(document).ready(function () { // on séléctionne le DOM auquel on associe la méthode 'ready' qui executera la fonction une fois que le DOM sera chargé complétement
        $('select').change(function(){
            event.preventDefault();
            ajax();

        });
    function ajax()
    {
        var prenom = $('#prenom').val();
        console.log(prenom);

        var nom = $('#nom').val();
        console.log(nom);

        var sexe = $('#sexe').val();
        console.log(sexe);

        var service = $('#service').val();
        console.log(service);

        var date_embauche = $('#date_embauche').val();
        console.log(date_embauche);

        var salaire = $('#salaire').val();
        console.log(salaire);

        var parameters = "prenom="+prenom+"&nom="+nom+"&sexe="+sexe+"&service="+service+"&date_embauche="+date_embauche+"&salaire="+salaire;
        console.log(parameters);
    

        // la réponse de la requête 'retour' AJAX se trouve dans 'data'
        $.post("ajax7.php", parameters, function(data){ // data sert à stocker le resultat de la requete ajax
            $('#resultat').html(data.resultat); // on selectionne la div id 'resultat' pour coller le tableau ($tab['resultat']) définit dans la page ajax6.php
            }, 'json');

      }

    });

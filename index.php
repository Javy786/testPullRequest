<?php 
require 'controller/controlleurPersonne.php';

// on extrait le get pour ne pas avoir besoin de le réécrire
extract($_GET);

// page d'accueil
if (isset($action)){
    if ($action == "accueil"){
        require 'view/accueil.php';
    }

    //page de contact
    else if($action == "contact"){
        require 'view/contact.php';
    }

    // page d'inscription
    else if($action == "inscription"){
        require 'view/inscription.php';
    }

    // page avec la liste de nos membres
    else if ($action == "pageMembre"){
        require 'view/recupMembre.php';
    }

    // page qui permet de modifier les données de nos membres
    else if ($action == "modifMembre"){
        require 'view/modifMembre.php';
    }
    
    // après avoir appuyé sur le bouton (modifier) de la page de modification
    else if ($action == "updateMembre"){
        updateMembre($id, $_POST);
    }
    
    //après avoir appuyé sur le bouton (supprimer) de la page de modification
    elseif($action == "delete"){
        deleteMembre($id);
    }
   
}

// si aucune redirection trouvé, renvoie sur l'accueil
else{
require 'view/accueil.php';
}

?>


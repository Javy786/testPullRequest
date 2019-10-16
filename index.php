<?php 
require 'controller/controlleurPersonne.php';


extract($_GET);
if (isset($action)){
    if ($action == "accueil"){
        require 'view/accueil.php';
    }
    else if($action == "contact"){
        require 'view/contact.php';
    }
    else if($action == "inscription"){
        require 'view/inscription.php';
    }
    else if ($action == "pageMembre"){
        require 'view/recupMembre.php';
    }
    else if ($action == "modifMembre"){
        require 'view/modifMembre.php';
    }
    
    else if ($action == "updateMembre"){
        updateMembre($id, $_POST);
    }

    
}
else{
require 'view/accueil.php';
}

?>


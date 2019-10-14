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
}
else{
require 'view/accueil.php';
}

?>


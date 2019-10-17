<?php 
require 'controller/controlleurPersonne.php';
//Testing Pull Request - cle

if(!empty($_GET)){
    extract($_GET);
    if (isset($action)){
        switch ($action){
            case 'accueil':
                require 'view/accueil.php';
                break;
        
            case "contact":
                require 'view/contact.php';
                break;
        
            case "inscription":
                require 'view/inscription.php';
                break;

            case "pageMembre":
                afficherMembres();
                break;

            case "modifMembre":
                recupMoiCeMembre($id);
                break;
        
            case "updateMembre":
                updateMembre($id, $_POST);
                break;
        
            case "delete":
                deleteMembre($id);
                break; 

            default:
                require'view/error404.php';
                break;   
        }
    }else{
        require'view/error404.php';
    }
}else{
    require 'view/accueil.php';
}

?>


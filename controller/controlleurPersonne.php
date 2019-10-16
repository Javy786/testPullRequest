<?php
require 'model/classGestionPersonne.php';

$gestion = new gestionMembre();

// Lorsque l'on appuie sur le bouton d'inscription
if(isset($_POST["envoie"])) {
$membre = new membre($_POST);
$gestion->insertMembre($membre);
header("location: index.php?action=pageMembre");
}

// retourne la fonction qui permet d'afficher la liste des membres
function afficherMembre(){
global $gestion;
return $gestion->recupMembre();
}

// retourne la fonction qui permet d'afficher les données du membre séléctionné
function recupMoiCeMembre($id){
global $gestion;
return $gestion->recupLeMembre($id); 
}

// joue la fonction qui permet de modifier les données du membre sélectionnés
function updateMembre($id, array $data){
global $gestion;
$gestion->updateCeMembre($id, $data);
header("location: index.php?action=pageMembre");
}

// joue la fonction qui permet de supprimer les données du membre sélectionnés
function deleteMembre($id){
    global $gestion;
$gestion->deleteCeMembre($id);

header("location: index.php?action=pageMembre");
}

?>
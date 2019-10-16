<?php
require 'model/classGestionPersonne.php';

$gestion = new gestionMembre();

if(isset($_POST["envoie"])) {
$membre = new membre($_POST);
$gestion->insertMembre($membre);
header("location: index.php?action=pageMembre");
}

function afficherMembre(){
global $gestion;
return $gestion->recupMembre();
}

function recupMoiCeMembre($id){
global $gestion;
return $gestion->recupLeMembre($id); 
}

function updateMembre($id, array $data){
global $gestion;
$gestion->updateCeMembre($id, $data);

header("location: index.php?action=modifMembre&id=$id");
}

function deleteMembre($id){
    global $gestion;
$gestion->deleteCeMembre($id);

header("location: index.php?action=pageMembre");
}

?>
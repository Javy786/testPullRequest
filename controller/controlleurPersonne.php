<?php
require 'model/classGestionPersonne.php';

$gestion = new gestionMembre();

if(isset($_POST["envoie"])) {
$membre = new membre($_POST);
$gestion->insertMembre($membre);
header("location: index.php?action=accueil");
}

function afficherMembre(){
global $gestion;
return $gestion->recupMembre();
}

function recupMoiCeMembre($id){
global $gestion;
return $gestion->recupLeMembre($id); 
}
?>
<?php
require 'model/classGestionPersonne.php';

$gestion = new gestionMembre();

if(isset($_POST["envoie"])) {
// var_dump($_POST);
$membre = new membre($_POST);
$gestion->insertMembre($membre);
 header("location: index.php?action=contact");
}
?>
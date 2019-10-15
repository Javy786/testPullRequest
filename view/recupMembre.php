<?php $titre = "page membre"; ?>
<?php ob_start(); ?>

<h1>Page de membre</h1>

<?php 
$afficher = afficherMembre();
echo '<p>Email: </p>'; 
foreach ($afficher as $valeur){
echo '<a href="index.php?action=modifMembre&id='.$valeur->getId().'">' . $valeur->getEmail() . '</a><br>';
}
?>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
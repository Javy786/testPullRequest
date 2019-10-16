<?php $titre = "page membre"; ?>
<?php ob_start(); ?>

<h1>Page de membre</h1>

<?php 

// fonction qui nous permet de récupérer nos membres depuis le controller
$afficher = afficherMembre();
echo '<p>Email: </p>'; 

// boucle qui nous permet d'afficher ligne par ligne nos membres
foreach ($afficher as $valeur){
echo '<a href="index.php?action=modifMembre&id='.$valeur->getId().'">' . $valeur->getEmail() . '</a><br>';
}
?>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
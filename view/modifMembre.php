<?php $titre = "page modification de membre "; ?>
<?php ob_start(); ?>

<h1>Page de modif membre</h1>

<!-- fonction qui nous affiche le membre sélectionné via son id -->
<?php  $show = recupMoiCeMembre($id); 

// boucle qui récupère les informations du membre choisis
foreach ($show as $value) {
    echo "<form action='index.php?action=updateMembre&id=". $value->getId()."' method='post'>";
 echo "Pseudo: <input name='pseudo' type='text' value='".$value->getPseudo()."'><br>";
 echo "Email: <input name='email' type='text' value='".$value->getEmail()."'><br>";
 echo "Mot de passe: <input name='mdp'type='text' value='".$value->getMdp()."'>";
}
echo '<br>';
echo '<input type="submit" value="modifier">';
echo "</form>";
echo '<a href="index.php?action=delete&id=' .$id.'"><button>supprimer</button></a>';

?>


<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
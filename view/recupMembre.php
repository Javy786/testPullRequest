<?php $titre = "Page des membres"; 

ob_start(); ?>

<h1>Page de membre</h1>

<p>Email:</p>
<?php foreach ($membres as $membre){
echo '<a href="index.php?action=modifMembre&id='.$membre->getId().'">' . $membre->getEmail() . '</a><br>';
}
?>

<?php $templates = ob_get_clean(); 

require 'templates.php' ?>
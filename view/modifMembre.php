<?php $titre = "page modification de membre "; ?>
<?php ob_start(); ?>

<h1>Page de modif membre</h1>

<?php  $show = recupMoiCeMembre($id); 

foreach ($show as $value) {
 echo $value->getEmail();
}?>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
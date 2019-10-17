<?php $titre='Erreur 404' ;
ob_start();?>

<h1>Erreur 404</h1>
<h3>La page que vous avez demandé n'existe pas</h3>
<?php $templates = ob_get_clean();

require'view/templates.php';
?>
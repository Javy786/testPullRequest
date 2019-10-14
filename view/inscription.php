<?php $titre = "inscription"; ?>
<?php ob_start(); ?>

<h1>Page d'inscription</h1>

<form method="post">

<input name="pseudo" type="text" placeholder="pseudo">
<br><br>
<input name="email" type="text" placeholder="email">
<br><br>
<input name="mdp" type="text" placeholder="password">
<br><br>
<input type="submit" type="value" name="envoie">

</form>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
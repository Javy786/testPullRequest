<?php $titre = "accueil"; ?>

<!-- page d'accueil vide -->

<?php ob_start(); ?>

<h1>Page d'accueil</h1>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
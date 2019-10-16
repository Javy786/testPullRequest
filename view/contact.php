<?php $titre = "contact"; ?>

<!-- page de contact vide -->

<?php ob_start(); ?>

<h1>Page de contact</h1>

<?php $templates = ob_get_clean(); ?>

<?php require 'templates.php' ?>
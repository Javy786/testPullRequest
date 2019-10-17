<?php $titre = "Modification du membre " . $membre->getPseudo(); 

ob_start(); ?>

<h1>Page de modification du membre <?= $membre->getPseudo();?></h1>

	<form action="index.php?action=updateMembre&id=<?= $membre->getId();?>" method="POST">
		<div class="form-group row">
			<label for="pseudo" class="col-sm-2 form-control-label">Pseudo</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pseudo" placeholder="Nom" value="<?= $membre->getPseudo();?>" name="pseudo" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="email" class="col-sm-2 form-control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Email" value="<?= $membre->getEmail();?>" name="email" required>
			</div>
		</div>
		<div class="form-group row">
			<label for="mdp" class="col-sm-2 form-control-label">Mot de passe</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="mdp" placeholder="Mot de passe" value="<?= $membre->getMdp();?>" name="mdp" required>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" value="Modifier">
			</div>
		</div>
	</form>

	<a href="index.php?action=delete&id=<?= $membre->getId();?>"><button>Supprimer</button></a>

<?php $templates = ob_get_clean(); 

require 'templates.php' ?>
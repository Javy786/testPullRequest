<?php

require 'classConnect.php';
require 'class/classPersonne.php';

class gestionMembre extends connect{

    public function insertMembre(Membre $membre){
        $query = "INSERT INTO membre (pseudo, email, mdp)
                    VALUES(:pseudo, :email, :mdp)";
        $insert = $this->Database()->prepare($query);
        $insert->execute(["pseudo" => $membre->getPseudo(),
        "email" => $membre->getEmail(),
        "mdp" => $membre->getMdp()]);
    }

}

?>
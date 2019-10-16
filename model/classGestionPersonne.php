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

    public function recupMembre(){

$query = "SELECT * FROM membre";
$recup = $this->Database()->query($query);
$tab = [];
while($donnees = $recup->fetch()){
   $member = new Membre($donnees);
   $tab[] = $member;
}
return $tab;
}


public function recupLeMembre($id){
    $query="SELECT * from membre WHERE id=$id";
    $show=$this->Database()->prepare($query);
    $show->execute();
    $tab = [];
while($show1 = $show->fetch()){
   $member = new Membre($show1);
   $tab[] = $member;
}
    return $tab;
}

public function updateCeMembre($id, array $donnees){
    $member = new Membre($donnees);
    $query = "UPDATE membre SET pseudo = :pseudo, email = :email, mdp = :mdp WHERE id = $id";
    $show=$this->Database()->prepare($query);
    $show->execute(array(
        "pseudo" => $member->getPseudo(),
        "email" => $member->getEmail(),
        "mdp" => $member->getMdp()));
}

public function deleteCeMembre($id){
    $query = "DELETE FROM membre WHERE id=$id";
    $delete = $this->Database()->prepare($query);
    $delete->execute();
}

}

?>
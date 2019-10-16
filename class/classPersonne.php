<?php

// la class qui gère les données de nos membres dans la bdd
class membre {

    // les colonnes de la table membre
private $id;
private $pseudo;
private $email;
private $mdp;

// le constructeur qui peux prendre en paramètre les données de formulaires ($_POST)
public function __construct(array $data = null){
if ($data){
    $this->init($data);
    }
}

// notre fonction pour hydrater nos données
public function init(array $donnees){
foreach($donnees as $index => $value){
    $method = "set" . ucfirst($index);
        if (method_exists($this, $method)){
        $this->$method($value);
        }
    }
}

// liste des getters
public function getId(){
return $this->id;
}

public function getPseudo(){
    return $this->pseudo;
    }

public function getEmail(){
    return $this->email;
    }

public function getMdp(){
    return $this->mdp;
    }

    // liste des setters
public function setId($id){
    $this->id = $id;
    }

public function setPseudo($pseudo){
    $this->pseudo = $pseudo;
    }

public function setEmail($email){
    $this->email = $email;
    }

public function setMdp($mdp){
    $this->mdp = $mdp;
    }

}

?>
<?php

class membre {

private $id;
private $pseudo;
private $email;
private $mdp;

public function __construct(array $data = null){
if ($data){
    $this->init($data);
    }
}

public function init(array $donnees){
foreach($donnees as $index => $value){
    $method = "set" . ucfirst($index);
        if (method_exists($this, $method)){
        $this->$method($value);
        }
    }
}

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
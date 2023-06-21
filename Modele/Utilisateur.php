<?php

require_once 'Modele/Modele.php';


class Utilisateur extends Modele {


public function getInfosUser($login, $mdp){
    // TODO Reprendre requête
    $req = "select user.id as id, user.nom as nom, user.prenom as prenom from useer 
    where user.login='$login' and user.password='$mdp'";
    $infos = $this->executerRequete($req);
    return $infos;
}

}
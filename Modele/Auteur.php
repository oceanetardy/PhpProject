<?php

require_once 'Modele/Modele.php';


class Auteur extends Modele {


    public function getAuteurs() {
        $sql = 'SELECT id, nom, prenom
        FROM auteur';

        $auteurs = $this->executerRequete($sql);
        return $auteurs;
    }


    public function getAuteur($idAuteur) {
        $sql = 'SELECT id, nom, prenom
        FROM livre 
        WHERE `id` = '. $idAuteur;

        $auteurs = $this->executerRequete($sql);
        return $auteurs;
        $auteur = $this->executerRequete($sql, array($idAuteur));
        if ($auteur->rowCount() > 0)
            return $auteur->fetch(); 
        else
            throw new Exception("Aucun auteur ne correspond à l'id '$idAuteur'");
    }

}
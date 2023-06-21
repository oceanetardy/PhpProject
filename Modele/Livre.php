<?php

require_once 'Modele/Modele.php';


class Livre extends Modele {


    public function getLivres() {
        $sql = 'SELECT l.id, l.titre, l.isbn, a.nom, a.prenom
        FROM livre l
        LEFT JOIN `auteur`a ON a.`id` = l.`ref_auteur`';

        $livres = $this->executerRequete($sql);
        return $livres;
    }


    public function getLivre($idLivre) {
        $sql = 'SELECT l.id, l.titre, l.isbn, a.nom, a.prenom
        FROM livre l
        LEFT JOIN `auteur`a ON a.`id` = l.`ref_auteur`
        WHERE l.`id` = '. $idLivre;

        $livres = $this->executerRequete($sql);
        return $livres;
        $livre = $this->executerRequete($sql, array($idLivre));
        if ($livre->rowCount() > 0)
            return $livre->fetch(); 
        else
            throw new Exception("Aucun livre ne correspond à l'identifiant '$idLivre'");
    }

}
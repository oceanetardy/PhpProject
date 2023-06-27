<?php

require_once 'Modele/Modele.php';

class Commentaire extends Modele {

    public function getCommentaires($idLivre) {
        $sql = 'select id,description from commentaire'
                . ' where ref_livre=?';
        $commentaires = $this->executerRequete($sql, array($idLivre));
        return $commentaires;
    }

    public function newCommentaire($description, $auteur, $idLivre) {
        $sql = 'insert into commentaire(description, ref_livre, ref_user)'
            . ' values(?, ?, ?)';
        $this->executerRequete($sql, array($description, $auteur, $idLivre));
    }
}
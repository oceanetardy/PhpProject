<?php

abstract class Modele {

    private $bdd;


    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    public function getBdd() {
        if ($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=host.docker.internal:3306;dbname=bibliotheque;charset=utf8',
                    'root', '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }






private function estConnecte(){
  return isset($_SESSION['id']);
}

private function connecter($id,$nom,$prenom){
	$_SESSION['id']= $id; 
	$_SESSION['nom']= $nom;
	$_SESSION['prenom']= $prenom;
}


private function deconnecter(){
	session_destroy();
}



private function ajouterErreur($msg){
   if (! isset($_REQUEST['erreurs'])){
      $_REQUEST['erreurs']=array();
	} 
   $_REQUEST['erreurs'][]=$msg;
}


}
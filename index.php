<?php
//test
include("vue/v_entete.php") ;
include("modele/modele.php") ;
session_start();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleur/connexion.php");break;
	}
	// case 'gererFrais' :{
	// 	include("controleurs/c_gererFrais.php");break;
	// }
	// case 'etatFrais' :{
	// 	include("controleurs/c_etatFrais.php");break; 
	// }
}
include("vue/v_pied.php") ;
?>


<?php
//todo : les require en controleur principal
require_once "$racine/modele/bd.inc.php";
require_once "$racine/modele/DAO/DAOAgences.php";
require_once "$racine/modele/metier/bd.agences.inc.php";

echo "tada";

// Affichage des pilots
echo DAOAgences::getAgences();
DAOAgences::read('1');
// Affichage d'un vol particulier
$daoAgences = new Agence("Redon", "redon@greta.com");
$agence = DAOAgences::read('1');

echo $agence;
/*DAOAgences::read('4');
$ville = $daoAgences->read('4');
DAOAgences::create($daoAgences);
$ville = $daoAgences->read('4');
echo "trouvé : $ville";
echo "<br/><br/>";*/

//$daoPilote = new \DAO\Pilote\PiloteDAO();

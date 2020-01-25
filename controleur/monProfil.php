<?php
//todo : les require en controleur principal
require_once "$racine/modele/bd.inc.php";
require_once "$racine/modele/DAO/DAOAgences.php";
require_once "$racine/modele/metier/bd.agences.inc.php";

include "$racine/vue/entete.html.php";

echo "tada";

// Affichage des  agences
$result = DAOAgences::getAgences();
//echo DAOAgences::getAgences();
prer_r($result);

//fonction pour afficher dans un tableau les données
function prer_r($array){
    echo'<pre>';
    print_r($array);
    echo '</pre>';
}


if(isset($_POST['save'])){
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];
    $agence = new modele\metier\Agence($ville, $mail);
    $agencenew = new DAOAgences();
    $agencenew->create($agence);
    
    
}
    
//test READ >> aucune erreur donc good? 
//$agence = new DAOAgences();
    //FormateurDAO :: ecriture( ); //appel à une fonction statique
//$agence -> read(4); //appel à une fonction non statique


// test UPDATE >> non ok
// ici j'essaye de modifier l'agence de Vannes par ces nouvelles infos mais je sais pas quoi faire de la variable $lille
/*$vannes = new DAOAgences();
$vannes -> read(1);
$lille = new DAOAgences();
$lille = new modele\metier\Agence("Lille", "lille@greta.com");
$lille->update($vannes);*/



//test DELETE >> non ok >> 
/*$agence = new DAOAgences();
 $agence -> read(4);
 $agencenew = new DAOAgences();
 $agencenew -> delete($agence);*/

 /// TEST CREATE >> ok
 // création de l'objet redon de la classe Agence, avec ses caractéristiques
 /*   $redon = new modele\metier\Agence("Redon", "redon@greta.com");
    //création de l'objet redonnew de la classe DAOAgences()
    $redonnew = new DAOAgences();
    //envoi de redon comme objet redonnew dans la BD
    $redonnew->create($redon);*/
    
// echo $agence;
/*DAOAgences::read('4');
$ville = $daoAgences->read('4');
DAOAgences::create($daoAgences);
$ville = $daoAgences->read('4');
echo "trouvé : $ville";
echo "<br/><br/>";*/



$titre = "Accueil";

    include "$racine/vue/vueMonProfil.php";
    include "$racine/vue/pied.html.php";


<?php
//todo : les require en controleur principal


$titrePage = "TestUtilisateur";
include "$racine/vue/entete.html.php";


//initialise les variable
$nom = "";
$prenom = "";
$mail = "";
$login = "";
$mdp = "";
$idAgence = "";
$statut = "";
$idU = 0;

include_once './modele/mysql.php';

// creation d'un utilisateur     
if (isset($_POST['save'])){
    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $idAgence = $_POST['idAgence'];
    $statut = $_POST['statut'];
       
    $data = array(
        "nom" => $nom,
        "prenom" => $prenom,
        "mail" => $mail,
        "login" => $login,
        "mdp" => $mdp,
        "idAgence" => $idAgence,
        "statut" =>$statut,
    );
    
    insert("utilisateurs", $data);    
}

include "$racine/vue/vueAccueilFormateur.php";
include "$racine/vue/pied.html.php";
?>

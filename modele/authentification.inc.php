<?php
session_start();
require_once "bd.utilisateur.inc.php";
require_once 'mysql.php';


function login($mail, $mdp){
    
    $rep = true;
    $util = getUtilisateurByMail($mail);
    $mdpBD = $util['mdp'];
    $grainDeSel = $util['graindesel'];
    $idU = $util['idU'];
    
    // lors création utilisateurt, utiliser cette fomule pour créer son grain de sel et l'insérer dans table utilisateurs
    //Grain de sel = ID unique al$grainDeSel = rand(time(),strlen(time()));éatoire, ici du  basé sur le temps (11 octets) :
    // $grainDeSel = rand(time(),strlen(time()));
    
   
    //Hachage simple avec le grain de sel :
    $hash_v1 = md5($mdp.$grainDeSel);
    
    //voir si le mdp est le même que celui de l'utilisateur dans la base de donnée
    if(trim($mdpBD)== trim($hash_v1)){
        // trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
        
        // récupération des éléments importants pour la session
        $_SESSION['mail'] = $mail;
        $_SESSION['idU'] = $idU;
        $_SESSION['idAgence']=$util['idAgence'];
        $_SESSION['statut']= $util['statut'];
        $_SESSION['nom'] = $util['nom'];
        $_SESSION['prenom'] = $util['prenom'];
        $_SESSION['mdp'] = $mdp;
    }
    else{
        $rep=false;        
    }
    return $rep;
}


function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION['mail']);
    unset($_SESSION['mdp']);
    unset($_SESSION['statut']);
}


/* Fonction inutile
function getStatutLoggedOn() {
    global $db;
    //$mail=$_POST['mail'];        
    if (isLoggedOn()){
        $_SESSION['statut']= readWhere("utilisateurs, 'statut', 'mail', $mail");
        $ret = $_SESSION['statut'];
    }
    else {
        $ret = "";
    }
    return $ret;
}*/


function getMailLoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION['mail'];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION['mail'])) {
        $util = getUtilisateurByMail($_SESSION['mail']);
        if ($util['mail'] == $_SESSION['mail'] && $util['mdp'] == $_SESSION['mdp']) {
            $ret = true;            
        }
    }
    return $ret;
}

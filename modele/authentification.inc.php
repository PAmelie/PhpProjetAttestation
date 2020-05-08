<?php
session_start();
require_once "bd.utilisateur.inc.php";
require_once 'mysql.php';


function login($mail, $mdp){
    /*if(!isset($_SESSION)) {
        session_start();
    }*/
    
    $util = getUtilisateurByMail($mail);
    $mdpBD = $util['mdp'];
    $grainDeSel = $util['graindesel'];
    
    // lors création utilisateurt, utiliser cette fomule pour créer son grain de sel et l'insérer dans table utilisateurs
    //Grain de sel = ID unique al$grainDeSel = rand(time(),strlen(time()));éatoire, ici du  basé sur le temps (11 octets) :
    // $grainDeSel = rand(time(),strlen(time()));
    
   
    //Hachage simple avec le grain de sel :
    $hash_v1 = md5($mdp.$grainDeSel);
    
    //voir si le mdp est le même que celui de l'utilisateur dans la base de donnée
    if(trim($mdpBD)== trim($hash_v1)){
        // trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
        
        $_SESSION['mail'] = $mail;
        $_SESSION['mdp'] = $mdpBD;
       
}


function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION['mail']);
    unset($_SESSION['mdp']);
    unset($_SESSION['statut']);
}

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
}

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
            echo "bonjour";
            //echo $_POST[$mail];
            if($mail != ""){
                echo "bonjour2";
                $_SESSION['statut'] = getStatutLoggedOn();
            }
            else{
                echo "blabla";
            }              
        }
    }
    return $ret;
}
}
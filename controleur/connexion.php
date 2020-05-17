<?php


 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine=".";
}
include_once "$racine/modele/authentification.inc.php";



// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["mdp"])){
    $mail=$_POST["mail"];
    $mdp=$_POST["mdp"];
}
else
{
    $mail="";
    $mdp="";
}

// traitement si necessaire des donnees recuperees
login($mail,$mdp);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil

    include "$racine/controleur/evaluer.php";
    
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 

    $titre = "connexion";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/pied.html.php";
}

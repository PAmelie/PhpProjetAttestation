<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["motdepasse"] = "motDePasseOubli.php";
    $lesActions["evaluer"] = "evaluer.php";
    $lesActions["modifier"] = "modifier.php";
    $lesActions["Agences"] = "Agences.php";
    $lesActions["Formation"] = "Formation.php";
    $lesActions["Utilisateurs"] = "Utilisateurs.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}
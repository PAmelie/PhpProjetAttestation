<?php

include_once "bd.inc.php";

function getUtilisateurs() {
    $resultat = array();

    try {
        $cnx = Connexion::getInstance();
        $req = $cnx->prepare("select * from utilisateurs");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUtilisateurByMail($login) {
   
   try {
        $cnx = Connexion::getInstance();
        $req = $cnx->prepare("select * from utilisateurs where mail=:mail");
        $req->bindValue(':mail', $login, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



// teste des fonctions en dur (defauts si modification dans la BD)
//option d'amélioration = voir test unitaire.
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByMail('pauladmin1@greta.com') : \n";
    print_r(getUtilisateurByMail("pauladmin1@greta.com"));

}
?>
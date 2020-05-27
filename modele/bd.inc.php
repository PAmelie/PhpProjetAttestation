<?php

class Connexion {
    

static function getInstance() {
    /*$login = "promo20";
    $mdp = "user@sio20";
    $bd = "promo20_franck";
    $serveur = "localhost";*/
    
    $login = "root";
    $mdp = "";
    $bd = "competence";
    $serveur = "localhost";
    

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}
}
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "getInstance() : \n";
    print_r(getInstance());
}
?>

<?php

//TODO 

$titre = "Tableau de compétences";
include "./vue/entete.html.php";
include_once "./modele/mysql.php";

if(isset($_POST["eleve"])){
    $idEleve = $_POST["eleve"];
    $idSST = $_POST["idSST"];
    $niveau = $_POST["acquisition"];
    global $db;
    $db->query("UPDATE acquisition SET niveau = $niveau WHERE idEleve=$idEleve AND idSST=$idSST");
}


//récupération de l'idée utilisateur de l'éléve
if($_SESSION["statut"]==2){
    $idEleve = $_SESSION['idU'];
}
else{
    if(isset($_POST["idEleve"])){
        $idEleve1 = $_POST["idEleve"];
    }
}



include "./vue/tableau.php";


?>
<?php

$titrePage = "TestUtilisateur";
include "./vue/entete.html.php";
include_once "./modele/mysql.php";

if(isset($_POST["eleve"])){
    $idEleve = $_POST["eleve"];
    $idSST = $_POST["idSST"];
    $niveau = $_POST["acquisition"];
    global $db;
    $db->query("UPDATE acquisition SET niveau = $niveau WHERE idEleve=$idEleve AND idSST=$idSST");
}

include "./vue/tableau.php";


?>
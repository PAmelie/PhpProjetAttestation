<?php

$titre = "Gestion des élèves";
include "./vue/entete.html.php";
include_once './modele/mysql.php';


if (isset($_POST['lecture'])){
    $lecture = $_POST['lecture'];
    $idEleve = $_POST['eleve'];
    global $db;
    $db->query("UPDATE lecture SET lecture = $lecture WHERE idEleve=$idEleve");
}

include "./vue/vueEleves.php";
include "./vue/pied.html.php";

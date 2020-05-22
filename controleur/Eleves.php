<?php

$titre = "Gestion des élèves";
include "./vue/entete.html.php";
include_once './modele/mysql.php';

if (isset($_POST[''])){
    
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];
       
    $data = array(
        "ville" => $ville,
        "mail" => $mail,
    );
            
    insert("Agences", $data);   
}

include "./vue/vueEleves.php";
include "./vue/pied.html.php";

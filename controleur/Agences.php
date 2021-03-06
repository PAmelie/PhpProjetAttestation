<?php
//todo : les require en controleur principal
$titre = "Gestion des agences";
include "./vue/entete.html.php";
include_once './modele/mysql.php';
//session_start();

$id = 0;
$update = false;

//initie les valeur pour que les boxes du formulaire reste vides s'il n'y a pas d'update
$ville = '';
$mail = '';

// creation d'une Agence     
if (isset($_POST['save'])){
    
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];
       
    $data = array(
        "ville" => $ville,
        "mail" => $mail,
    );
            
    insert("Agences", $data);   
}

// suppression d'une agence
if (isset($_POST['delete'])){
    $idBD = "idA";
    delete("agences", $idBD, $_POST['delete']);
}

// selectionner une agence pour pouvoir la modifier
if (isset($_GET['edit'])){
    global $db;
    $id = $_GET['edit'];
    $update = true;
    $result = $db->query("SELECT * FROM agences WHERE idA=$id LIMIT 1");
     if ($result){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $ville = $row['ville'];
        $mail = $row['mail'];
    }
    else{
        echo "fail";
    }
}

//enregistrer les modification apporté a l'agence
if(isset($_POST['update'])){
    $id= $_POST['id'];
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];

    $data = array(
        "ville" => $ville,
        "mail" => $mail,
    );
    
    update("agences", $data, "idA", $id);
}

include "./vue/vueAgences.php";
include "./vue/pied.html.php";
?>
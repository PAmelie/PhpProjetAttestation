<?php
//todo : les require en controleur principal
$titre = "Gestion des formation";
include "./vue/entete.html.php";
include_once './modele/mysql.php';

$id = 0;
$update = false;

//initie les valeur pour que les boxes du formulaire reste vides s'il n'y a pas d'update
$nom = '';

// creation d'une Agence     
if (isset($_POST['save'])){
    
    $nom = $_POST['nom'];
       
    $data = array(
        "nom" => $nom,
    );
            
    insert("formations", $data);  
}



if (isset($_POST['delete'])){
    $idBD = "idF";
    delete("formations", $idBD, $_POST['delete']);
}

if (isset($_GET['edit'])){
    global $db;
    $id = $_GET['edit'];
    $update = true;
    $result = $db->query("SELECT * FROM formations WHERE idF=$id LIMIT 1");
     if ($result){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $ville = $row['nom'];
    }
    else{
        echo "fail";
    }
}

if(isset($_POST['update'])){
    $id= $_POST['id'];
    $nom = $_POST['nom'];

    $data = array(
        "nom" => $nom,
    );
    
    update("formations", $data, "idF", $id);
}

include "./vue/vueFormation.php";
include "./vue/pied.html.php";
?>
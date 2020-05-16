<?php
//todo : les require en controleur principal
include "./vue/entete.html.php";
include_once './modele/mysql.php';
//session_start();

//initialise les variableoleur
/*$nom = "";
$prenom = "";
$mail = "";
$login = "";
$mdp = "";
$idAgence = "";
$statut = "";
$idU = 0;*/



// creation d'une Agence     
if (isset($_POST['save'])){
    
    $nom = $_POST['ville'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $idAgence = $_POST['idAgence'];
    $statut = $_POST['statut'];
       
    $data = array(
        "nom" => $nom,
        "prenom" => $prenom,
        "mail" => $mail,
        "login" => $login,
        "mdp" => $mdp,
        "idAgence" => $idAgence,
        "statut" =>$statut,
    );
            
    insert("utilisateurs", $data); 
        
    //$_SESSION['message'] = "Nouvelles données enregistrées";
    //$_SESSION['msg_type'] = "success";
    
    //header("location: ./vue/vueAccueilFormateur.php");
    
}

//delete
//$id = $_GET['id'];

if (isset($_GET['delete'])){
    $idBD = "idU";
    $id = $_GET['delete'];
    
    delete("utilisateurs", $idBD, $id);
        
    //$_SESSION['message'] = "Données supprimées";
    //$_SESSION['msg_type'] = "danger";
    
    //header("location: ./vue/vueAccueilFormateur.php");
}

if (isset($_GET['edit'])){
    $idBD = "idU";
    $id = $_GET['edit'];

}
include "./vue/vueAccueilFormateur.php";
include "./vue/pied.html.php";
?>
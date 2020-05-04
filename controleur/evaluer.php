<?php
//todo : les require en controleur principal


$titrePage = "TestUtilisateur";
include "./vue/entete.html.php";
//session_start();

//initialise les variable
/*$nom = "";
$prenom = "";
$mail = "";
$login = "";
$mdp = "";
$idAgence = "";
$statut = "";
$idU = 0;*/
session_start();
include_once './modele/mysql.php';

$id = 0;
$update = false;


//initie les valeur pour que les boxes du formulaire reste vides s'il n'y a pas d'update
$nom = '';
$prenom = '';
$mail = '';
$login = '';
$mdp = '';
$idAgence = '';
$statut = '';

// creation d'un utilisateur     
if (isset($_POST['save'])){
    
    $nom = $_POST['nom'];
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
        
   /* $_SESSION['message'] = "Nouvelles données enregistrées";
    $_SESSION['msg_type'] = "success";
    
    header("location: .php");*/
    
}

//delete
//$id = $_GET['id'];

if (isset($_POST['delete'])){
    $idBD = "idU";
    delete("utilisateurs", $idBD, $_POST['delete']);
}

//if (isset($_GET['edit'])){
//    $idBD = "idU";
//    $id = $_GET['edit'];
//}


if(isset($_GET['edit'])){
    global $db;
    $id = $_GET['edit'];
    $update = true;
    $result = $db->query("SELECT * FROM utilisateurs WHERE idU=$id LIMIT 1");
    if ($result){
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $mail = $row['mail'];
        $login = $row['login'];
        $mdp = $row['mdp'];
        $idAgence = $row['idAgence'];
        $statut = $row['statut'];
    }
    else{
        echo "fail";
    }
}

if(isset($_POST['update'])){
    $id= $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $idAgence = $_POST['idAgence'];
    $statut = $_POST['statut'];
    
    //$result = $db->query("UPDATE utilisateurs SET nom='$nom', prenom='$prenom', mail='$mail', login='$login', mdp='$mdp', idAgence='$idAgence', statut='$statut' WHERE idU=$id");
    
    $data = array(
        "nom" => $nom,
        "prenom" => $prenom,
        "mail" => $mail,
        "login" => $login,
        "mdp" => $mdp,
        "idAgence" => $idAgence,
        "statut" =>$statut,
    );
    
    update("utilisateurs", $data, "idU", $id);
}
include "./vue/vueAccueilFormateur.php";
include "./vue/pied.html.php";
?>
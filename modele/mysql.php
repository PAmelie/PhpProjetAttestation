<?php

//mysql.php = connection a la BD et creation des fonctions pour le CRUD




//connection a la BD
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'competence';

$db = new mysqli($servername, $username, $password, $dbname);


//fonction pour récupérer toutes les données d'une table
function readAll($table){
    global $db;
    $result = $db->query("SELECT * From $table") or die($db->error);
    return $result;
}

//fonction pour insérer dans une table
//$data = array avec ses champs et ses valeurs (ex: "nom" => $nom, ...)
function insert($table, $data){
    global $db;
    $keys = implode(", ", array_keys($data)); 
    $values =  array_values($data);
    foreach ($values as $index => $v) {
        if(gettype($v)== "string"){
            $values[$index] = "'$v'";
        }
    }
    $values = implode(", ", $values);
    $query = "INSERT INTO $table ($keys) VALUES ($values);";
    echo $query;
    mysqli_query($db, $query);
}


function delete($table, $idBD, $id){
    global $db;
    $query = "DELETE FROM $table WHERE $idBD = $id";
    echo $query;
    mysqli_query($db, $query);
}

function update($table, $idDB, $id){
    global $db;
    $query = "SELECT * FROM $table WHERE $idDB = $id";
}
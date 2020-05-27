<?php

//mysql.php = connection a la BD et creation des fonctions pour le CRUD

//connection a la BD serveur
/*$servername = 'localhost';
$username = 'promo20';
$password = 'user@sio20';
$dbname = 'promo20_franck';*/

//connection a la BD perso
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

function read($table, $id){
    global $db;
    $result = $db->query("SELECT $id FROM $table") or die($db->error);
    return $result->fetch_row()[0];
}

function readWhere($table, $obj, $id, $id1){
   global $db;
   $result = $db->query("SELECT $obj FROM $table WHERE $id=$id1");
   $var = $result ->fetch_array(MYSQLI_NUM);
   return $var[0];
}

function readId($table, $id){
    global $db;
    $result = "SELECT * FROM $table WHERE id=$id";
    echo $result;
    mysqli_query($db, $result);
}

// fonction pas utilisée
function edit($table, $id){
    global $db;
    $result = "SELECT * FROM $table WHERE id=$id";
    echo $result;
    mysqli_query($db, $result);
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

//fonction pour modifier les données dans la BD
function update($table, $data, $idT, $id){
    global $db;
    $temp = array();
    foreach ($data as $key => $value){
        if(gettype($value)== "string"){
           array_push($temp, "$key = '$value'");
        } else {
            array_push($temp, "$key = $value");
        }
    }
    $temp = implode(", ", $temp);
    $query = "UPDATE $table SET $temp WHERE $idT=$id";
    echo $query;
    mysqli_query($db, $query);
}


//fonction pour supprimer une donnée dans la BD
function delete($table, $idBD, $id){
    global $db;
    $query = "DELETE FROM $table WHERE $idBD = $id";
    echo $query;
    mysqli_query($db, $query);
}


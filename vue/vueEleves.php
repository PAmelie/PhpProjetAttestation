<?php 

//TODO non fonctionnel

require_once "./controleur/Eleves.php"; 
?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
global $db;
$result = $db->query("SELECT * FROM utilisateurs WHERE statut=2");

//fonction pour insére  les IdEleve et lecture qui n'existent pas encore dans la table "lecture"
function initLecture($idEleve){
    global $db;
    $result = $db->query("SELECT idU FROM utilisateurs WHERE idU NOT IN (SELECT idEleve FROM lecture WHERE idEleve =idU) AND statut=2");
    while($rowlect = $result->fetch_array(MYSQLI_NUM)):
        $idEleve = $rowlect[0];
        $db->query("INSERT INTO lecture (idEleve, lecture) VALUES ($idEleve, 0)");
    endwhile;
}

/*function recupLecture($idEleve){
    global $db;
    $result2 = $db->query("SELECT lecture FROM lecture WHERE idEleve=$idEleve");
    $row = $result2->fetch_array(MYSQLI_NUM);
    $lecture = $row[0];
    return $lecture;
}*/

?>
     
<!-- création du tableau avec une boucle while sur $result:  -->
<div class="row justify-content-center">
    <table class ="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th colspan="2"> Action</th>
                <!--<th colspan="2">Interdire modification </th>-->

            </tr>
        </thead>
        
 <?php
 //while($row = $result->fetch_array(MYSQLI_ASSOC)):
 while($row = $result->fetch_assoc()):
     
 ?>
        
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td>
                 <form action="index.php?delete&action=modifier" method="post">
                    <div>
                        <input type="hidden" name="idEleve" value="<?php echo $row['idU']; ?>" />
                        <input type="submit" class="btn btn-info"  value="Tableau" />
                    </div>
                </form>
            </td>
            <td> 
                <form action='index.php?delete&action=Eleves' method="post">
                    <?php 
                    $idEleve= $row['idU'];?>
                    <input type="hidden" name="eleve" value=<?php echo "$idEleve"?>>
                    <?php
                    initLecture($idEleve);
                    //recupLecture($idEleve);
                    $possibleLecture = $db -> query("SELECT lecture FROM lecture WHERE idEleve=$idEleve");
                    while($rowLec = $possibleLecture->fetch_array(MYSQLI_NUM)):
                    $posLecture=$rowLec[0];
                    endwhile;
                    if($posLecture==0){
                    ?>
                    <input type="radio" name='lecture' value='0' checked onchange="this.form.submit()">Modification autorisée
                    <input type="radio" name='lecture' value='1' onchange="this.form.submit()"> Modification impossible
                    <?php
                    }
                    else{?>
                    <input type="radio" name='lecture' value='0'  onchange="this.form.submit()">Modification autorisée
                    <input type="radio" name='lecture' value='1' checked onchange="this.form.submit()"> Modification impossible
                    <?php
                    }?>
                </form>
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>
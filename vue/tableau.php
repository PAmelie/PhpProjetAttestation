
<?php 
require_once "./modele/authentification.inc.php";
include_once "./modele/mysql.php";
$result=readAll ("themes");


if($_SESSION["statut"]==2){
    $idEleve = $_SESSION['idU'];
}
else{
    $idEleve = $_SESSION["idEleve"];
}
echo $idEleve;

$acquisitionlevelresult = $db -> query("SELECT idSST, niveau FROM acquisition WHERE idEleve=$idEleve");
$acquisitionlevel = array();

while($rowAcq = $acquisitionlevelresult->fetch_array(MYSQLI_NUM)):
    $acquisitionlevel[$rowAcq[0]] = $rowAcq[1];
endwhile;


function echoOption($idSST, $value, $texte){
    global $acquisitionlevel;
    if($value == intval($acquisitionlevel[$idSST])){
        echo "<option selected value=$value>$texte </option>";
    } else {
        echo "<option value=$value>$texte </option>";
    }
}
?>                                               
<section class="container-fluid tableau">
    <div class="container_fluid">
        <table class="table table-bordered">
            <tbody>
       
                <thead>
                    
                    <?php 
                    while($rowTheme = $result->fetch_assoc()):
                         
                        ?>
                        <tr>
                            <th><?php echo $rowTheme['nom'];?></th>;
                            <th>Niveau d'acquisition</th>
                        </tr>
                        <?php
                        $idT=$rowTheme['idT'];
                        $soustheme =  $db->query("SELECT * FROM sousthemes WHERE idT=$idT");
                        while($rowSTheme = $soustheme->fetch_assoc()):
                            ?>
                            <tr>
                                <td><?php echo $rowSTheme['nom'];?></td>
                            </tr>
                            <?php 
                            $idST = $rowSTheme['idST'];
                            $sousoustheme = $db->query("SELECT * FROM themesoustheme WHERE idST=$idST");
                            while($rowSSTheme = $sousoustheme->fetch_assoc()):
                                ?>
                                <tr>
                                    <td><?php echo $rowSSTheme['intitule'];?></td>
                                    <form action="index.php?delete&action=modifier" method="post">
                                    <td>
                                        <?php $idSST = $rowSSTheme["idSST"];
                                        ?>
                                        <input type="hidden" name="eleve" value=<?php echo "$idEleve"?>/>;
                                        <input type="hidden" name="idSST" value=<?php echo"$idSST"?>/>;
                                        <select name="acquisition" size="1">
                                            <?php
                                            echoOption($idSST, "1", "Non acquis"); 
                                            echoOption($idSST, "2", "Partiellement acquis");
                                            echoOption($idSST, "3", "Acquis");
                                            echoOption($idSST, "4", "Dépassé");
                                            ?>
                                        </select>
                                    </td>
                                    </form>
                                </tr>
                        <?php
                            endwhile;
                        endwhile;
                    endwhile;
                    ?> 
                </thead>
            </tbody>    
        </table>
    </div>
</section>
       
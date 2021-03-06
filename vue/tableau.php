
<?php 

require_once "./modele/authentification.inc.php";
include_once "./modele/mysql.php";
//récuperation des données de la table themes
$result=readAll ("themes");





//fonction pour insére  les idEleve qui n'existent pas encore dans la table lecture pour l'idEleve
function initAcqEleve($idEleve){
    global $db;
    $result = $db->query("SELECT idSST FROM themesoustheme WHERE idSST NOT IN"
            . "(SELECT idSST FROM acquisition WHERE idEleve = $idEleve)");
    while($rowacq = $result->fetch_array(MYSQLI_NUM)):
        $idSST = $rowacq[0];
        $db->query("INSERT INTO acquisition (idSST, idEleve, niveau) VALUES ($idSST, $idEleve, 1)");
    endwhile;
}
initAcqEleve($idEleve);

//récupère les sousousthème et le niveau en fonction de idEleve
$acquisitionlevelresult = $db -> query("SELECT idSST, niveau FROM acquisition WHERE idEleve=$idEleve");
$acquisitionlevel = array();
while($rowAcq = $acquisitionlevelresult->fetch_array(MYSQLI_NUM)):
    $acquisitionlevel[intval($rowAcq[0])] = $rowAcq[1];
endwhile;

//fonction pour afficher dans la liste déroulante le niveau de l'élève
function echoOption($idSST, $value, $texte){
    global $acquisitionlevel;
    if($value == intval($acquisitionlevel[$idSST])){
        echo "<option selected value=$value>$texte </option>";
    } else {
        echo "<option value=$value>$texte </option>";
    }
}

function echoNiveau($idEleve){
    global $db;
    $acqNiveau = $db->query("SELECT niveau FROM acquisition WHERE idEleve=$idEleve");
    while($rowacq = $acqNiveau->fetch_array(MYSQLI_NUM)):
        $niveau = $rowacq[0];
    endwhile;
    if($niveau==1){
        echo "Non acquis";
    }
    elseif ($niveau==2) {
        echo "Partiellement acquis";
    }
    elseif ($niveau==3) {
        echo "Acquis";
    }
    elseif ($niveau==4) {
        echo "Dépassé";
    }
    
}

?>     
 
    <section class="container-fluid tableau">
       
        <div class="container_fluid">
            <table class="table table-bordered">
                <tbody>

                    <thead>

                        <?php 
                        // boucle pour afficher les ligne theme
                        while($rowTheme = $result->fetch_assoc()):

                            ?>
                            <tr bgcolor = "#6AFB92">
                                <th><?php echo $rowTheme['nom'];?></th>
                                <th>Niveau d'acquisition</th>
                            </tr>
                            <?php
                            $idT=$rowTheme['idT'];
                            $soustheme =  $db->query("SELECT * FROM sousthemes WHERE idT=$idT");
                            //boucle pour afficher les sous-thèmes
                            while($rowSTheme = $soustheme->fetch_assoc()):
                                ?>
                                <tr bgcolor = "#FFE87C">
                                    <td><?php echo $rowSTheme['nom'];?></td>
                                </tr>
                                <?php 
                                $idST = $rowSTheme['idST'];
                                $sousoustheme = $db->query("SELECT * FROM themesoustheme WHERE idST=$idST");
                                $possibleLecture = $db -> query("SELECT lecture FROM lecture WHERE idEleve=$idEleve");
                                while($rowLec = $possibleLecture->fetch_array(MYSQLI_NUM)):
                                $posLecture=$rowLec[0];
                                endwhile;
                                //boucle pour afficher les sous-sous-thèmes
                                while($rowSSTheme = $sousoustheme->fetch_assoc()):
                                ?>
                                    <tr bgcolor="#EBF4FA">
                                        <td><?php echo $rowSSTheme['intitule'];?></td>
                                        <?php if($posLecture==0){ ?>
                                        <!-- liste déroulante pour selectionner le niveau de l'élève -->
                                        <form action="index.php?delete&action=modifier" method="post">
                                        <td>
                                            <?php $idSST = $rowSSTheme["idSST"];
                                            ?>
                                            <input type="hidden" name="eleve" value=<?php echo "$idEleve"?>>
                                            <input type="hidden" name="idSST" value=<?php echo"$idSST"?>>
                                            <select name="acquisition" size="1" onchange="this.form.submit()">
                                                <?php
                                                echoOption($idSST, 1, "Non acquis"); 
                                                echoOption($idSST, 2, "Partiellement acquis");
                                                echoOption($idSST, 3, "Acquis");
                                                echoOption($idSST, 4, "Dépassé");
                                                ?>
                                            </select>
                                        </td>
                                        </form>
                                    </tr>
                                    <?php
                                    }
                                    else{ ?>
                                    <td><?php echoNiveau($idEleve);?></td>
                                    
                                    <?php }
                                endwhile;
                            endwhile;
                        endwhile;
                        ?> 
                    </thead>
                </tbody>    
            </table>
        </div>
    </section>
<a onclick="location.href='?action=makepdf'">PDF</a>
<?php 

<?php 

//TODO non fonctionnel

require_once "./controleur/Eleves.php"; 


?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
global $db;
$result = $db->query("SELECT * FROM utilisateurs WHERE statut=2");


?>
     
<!-- création du tableau avec une boucle while sur $result:  -->
<div class="row justify-content-center">
    <table class ="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th colspan="2"> Action</th>
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
                        <input type="submit" class="btn btn-info" value="Tableau" />
                        
                    </div>
                    
                </form>
              
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>
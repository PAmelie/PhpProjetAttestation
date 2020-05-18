<?php 

//TODO non fonctionnel

require_once "./controleur/Eleves.php"; 


?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
global $db;
$result = $db->query("SELECT nom, prenom FROM utilisateurs WHERE status=2");
$rowEleve = $result->fetch_assoc()

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
 while($row = $result->fetch_array(MYSQLI_ASSOC)):
 ?>
        
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td>
                <!-- TODO : boutton "delete" et "update"  -->
               <a href="index.php?edit=<?php echo $row['idA']; ?>&action=Agences"
                  class="btn btn-info">Edit</a>
               <!--<a href="index.php?delete=<?//php echo $row['idU']; ?>&action=evaluer"
                  class="btn btn-danger">Delete</a>-->
                
               
                <form action="index.php?delete&action=Agences" method="post">
                    <div>
                        <input type="hidden" name="delete" value="<?php echo $row['idA']; ?>" />
                        <input type="submit" class="btn btn-danger" value="Supprimer" />
                        
                    </div>
                    
                </form>
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>
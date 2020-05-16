<?php 


require_once "./controleur/Formation.php"; 


?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
$result = readAll("formations");
?>
     
<!-- création du tableau avec une boucle while sur $result:  -->
<div class="row justify-content-center">
    <table class ="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th colspan="2"> Action</th>
            </tr>
        </thead>
        
 <?php
 while($row = $result->fetch_assoc()):
 ?>
        
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td>
                <!-- TODO : boutton "delete" et "update"  -->
               <a href="index.php?edit=<?php echo $row['idF']; ?>&action=Formation"
                  class="btn btn-info">Edit</a>
               <!--<a href="index.php?delete=<?//php echo $row['idU']; ?>&action=evaluer"
                  class="btn btn-danger">Delete</a>-->
                
               
                <form action="index.php?delete&action=Formation" method="post">
                    <div>
                        <input type="hidden" name="delete" value="<?php echo $row['idF']; ?>" />
                        <input type="submit" class="btn btn-danger" value="Supprimer" />
                        
                    </div>
                    
                </form>
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>

<?php

?>

<!-- Formulaire nouvel utilisateur -->
<div class="row justify-content-center">
    <form action="index.php?action=Formation" method="POST">
    <!-- cacher la valuer de l'id venant de la methode POST. Valeur mis a $id=0 dans le controleur -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
    <div class="form-group">
    <label>Nom</label>
    <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>" placeholder="Entrer le nom">
    </div>
    <div class="form-group">
    <?php
    if($update == true):
    ?> 
        <button type="submit" class="btn btn-info" name="update">Modifier</button>
    <?php
    else:
    ?>
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    <?php endif; ?>
    </div>
</form>
    </div>
</div>


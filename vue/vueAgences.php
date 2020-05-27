<?php 

require_once "./controleur/Agences.php"; 

?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
$result = readAll("agences");
?>
     
<!-- création du tableau avec une boucle while sur $result:  -->
<div class="row justify-content-center">
    <table class ="table">
        <thead>
            <tr>
                <th>Ville</th>
                <th>Mail</th>
                <th colspan="2"> Action</th>
            </tr>
        </thead>
        
 <?php
 //boucle pour afficher les données agences dans le tableau
 while($row = $result->fetch_assoc()):
 ?>
        
        <tr>
            <td><?php echo $row['ville']; ?></td>
            <td><?php echo $row['mail']; ?></td>
            <td>
               <!-- Bouton "edit" pour récupérer les données de la ligne et les envoyer dans le formulaire  -->
               <a href="index.php?edit=<?php echo $row['idA']; ?>&action=Agences"
                  class="btn btn-info" style="width:100px">Edit</a>
                <!-- Bouton "delete" pour supprimer les données de la ligne --> 
                <form action="index.php?delete&action=Agences" method="post">
                    <div>
                        <input type="hidden" name="delete" value="<?php echo $row['idA']; ?>" />
                        <input type="submit" class="btn btn-danger" style="width:100px" value="Supprimer" />
                        
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
    <form action="index.php?action=Agences" method="POST">
    <!-- cacher la valuer de l'id venant de la methode POST. Valeur mis a $id=0 dans le controleur -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
    <div class="form-group">
    <label>Nom</label>
    <input type="text" name="ville" class="form-control" value="<?php echo $ville; ?>" placeholder="Entrer la ville">
    </div>
    <div class="form-group">
    <label>Mail</label>
    <input type="text" name="mail" class="form-control" value="<?php echo $mail; ?>" placeholder="Entrer le mail">
    </div>
    <div class="form-group">
    <?php
    if($update == true):
    ?> 
        <!-- Bouton "update" pour enregistrer les données modifiées dans la BD, ne s'affiche que pour la modification de données -->
        <button type="submit" class="btn btn-info" name="update">Modifier</button>
    <?php
    else:
    ?>
        <!-- Bouton "save" pour enregistrer les nouvelles données dans la BD, s'affiche pour la création d'un utilisateur -->
        <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    <?php endif; ?>
    </div>
</form>
    </div>
</div>


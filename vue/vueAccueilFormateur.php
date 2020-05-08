<?php 


require_once "../controleur/evaluer.php"; 


?>


<div class="container"
     
<?php
include_once "./modele/mysql.php";
$result = readAll("utilisateurs");
?>
     
<!-- création du tableau avec une boucle while sur $result:  -->
<div class="row justify-content-center">
    <table class ="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mail</th>
                <th>Login</th>
                <th>Mot de passe</th>
                <th>Id Agence</th>
                <th>Statut</th>
                <th colspan="2"> Action</th>
            </tr>
        </thead>
        
 <?php
 while($row = $result->fetch_assoc()):
 ?>
        
        <tr>
            <td><?php echo $row['nom']; ?></td>
            <td><?php echo $row['prenom']; ?></td>
            <td><?php echo $row['mail']; ?></td>
            <td><?php echo $row['login']; ?></td>
            <td><?php echo $row['mdp']; ?></td>
            <td><?php echo $row['idAgence']; ?></td>
            <td><?php echo $row['statut']; ?></td>
            <td>
                <!-- TODO : boutton "delete" et "update"  -->
               <a href="index.php?edit=<?php echo $row['idU']; ?>&action=evaluer"
                  class="btn btn-info">Edit</a>
               <!--<a href="index.php?delete=<?//php echo $row['idU']; ?>&action=evaluer"
                  class="btn btn-danger">Delete</a>-->
                
               
                <form action="index.php?delete&action=evaluer" method="post">
                    <div>
                        <input type="hidden" name="delete" value="<?php echo $row['idU']; ?>" />
                        <input type="submit" class="btn btn-danger" value="Supprimer" />
                        
                    </div>
                    
                </form>
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>

<?php

/*function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}*/
?>

<!-- Formulaire nouvel utilisateur -->
<div class="row justify-content-center">
    <form action="index.php?action=evaluer" method="POST">
    <!-- cacher la valuer de l'id venant de la methode POST. Valeur mis a $id=0 dans le controleur -->
    <input type="hidden" name="id" value="<?php echo $id; ?>">  
    <div class="form-group">
    <label>Nom</label>
    <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>" placeholder="Entrer le nom">
    </div>
    <div class="form-group">
    <label>Prénom</label>
    <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>" placeholder="Entrer le prénom">
    </div>
     <div class="form-group">
    <label>Mail</label>
    <input type="text" name="mail" class="form-control" value="<?php echo $mail; ?>" placeholder="Entrer le mail">
    </div>
     <div class="form-group">
    <label>Login</label>
    <input type="text" name="login" class="form-control" value="<?php echo $login; ?>" placeholder="Entrer le login">
    </div>
     <div class="form-group">
    <label>Mot de passe</label>
    <input type="text" name="mdp" class="form-control" value="<?php echo $mdp; ?>" placeholder="Entrer le mot de passe">
    </div>
     <div class="form-group">
    <label>Id Agende</label>
    <input type="text" name="idAgence" class="form-control" value="<?php echo $idAgence; ?>" placeholder="Entrer l'id agence">
    </div>
     <div class="form-group">
    <label>Statut</label>
    <input type="text" name="statut" class="form-control" value="<?php echo $statut; ?>" placeholder="Entrer le statut">
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



<?php 
require_once "./controleur/Utilisateurs.php"; 
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
 //boucle pour afficher les données utilisateurs dans le tableau
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
                <!-- Bouton "edit" pour récupérer les données de la ligne et les envoyer dans le formulaire  -->
               <a href="index.php?edit=<?php echo $row['idU']; ?>&action=evaluer"
                  class="btn btn-info" style="width:100px">Edit</a>
                <!-- Bouton "delete" pour supprimer les données de la ligne -->
                <form action="index.php?delete&action=evaluer" method="post">
                    <div>
                        <input type="hidden" name="delete" value="<?php echo $row['idU']; ?>" />
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



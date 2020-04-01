<?php 


require_once "./controleur/evaluer.php"; 

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    
    $rec = mysqli_query($db, "SELECT * FROM into WHERE id=$id");
    $record = mysqli_fetch_array($rec);
    $nom = $record ['nom'];
    $prenom = $record['prenom'];
    $mail = $record['mail'];
    $login = $record['login'];
    $mdp = $record['mdp'];
    $idAgence = $record['idAgence'];
    $statut = $record['statut'];    
}
        
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
               <!-- <a href="index.php?action=evaluer&edit=<?php echo $row['id']; ?>">Edit</a>
            </td>
            <td>
                <a href="#">Delete</a>
            </td>
               <!--<a href="vueAccueilFormateur.php?edit=<?php echo row['id']; ?>"
                   class="btn btn-info">Edit</a>
                <a href="evaluer.php?delete=<?php echo ['id']; ?>"
                   class="btn btn-danger">Delete</a> -->
            </td>
        </tr>
        
        <?php endwhile; ?>
        
    </table>
</div>

<?php
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo'</pre>';
}
?>

<!-- Formulaire nouvel utilisateur -->
<div class="row justify-content-center">
    <form action="index.php?action=evaluer" method="POST">
    <div class="form-group">
    <label>Nom</label>
    <input type="text" name="nom" class="form-control" placeholder="Entrer le nom">
    </div>
    <div class="form-group">
    <label>Prénom</label>
    <input type="text" name="prenom" class="form-control" placeholder="Entrer le prénom">
    </div>
     <div class="form-group">
    <label>Mail</label>
    <input type="text" name="mail" class="form-control" placeholder="Entrer le mail">
    </div>
     <div class="form-group">
    <label>Login</label>
    <input type="text" name="login" class="form-control" placeholder="Entrer le login">
    </div>
     <div class="form-group">
    <label>Mot de passe</label>
    <input type="text" name="mdp" class="form-control" placeholder="Entrer le mot de passe">
    </div>
     <div class="form-group">
    <label>Id Agende</label>
    <input type="text" name="idAgence" class="form-control" placeholder="Entrer l'id agence">
    </div>
     <div class="form-group">
    <label>Statut</label>
    <input type="text" name="statut" class="form-control" placeholder="Entrer le statut">
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-primary" name="save">Enregistrer</button>
    </div>
</form>
    </div>
</div>



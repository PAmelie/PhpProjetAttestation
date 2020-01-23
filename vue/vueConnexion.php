<h1>Connexion</h1>
<form action="./?action=connexion" method="POST">

    <input type="text" name="mail" placeholder="Email de connexion" /><br />
    <input type="password" name="mdp" placeholder="Mot de passe"  /><br />
    <input type="submit" />

</form>

<?php 
if(isLoggedOn()){
    ?>
<p> Youpiii vous etes connecté </p>
<?php 
}
else {?>

<p> pas youpi.. <\p>
    
    <?php 
}?>

<br />
<a href="./?action=motdepasse">Mot de passe oublié</a>




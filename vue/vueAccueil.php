<!-- TODO a utiliser   -->


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $titre ?></title>

    <!-- Custom fonts : Bootstrap / Nunito FontFamily / FontAwesome-->
    <link href="vue/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!--    <link rel="stylesheet" href="vue/css/font-awesome.min.css">-->
    <!-- Custom styles -->
    <link href="vue/css/sb-admin-2.min.css" rel="stylesheet">
    
   

</head>
<body id="page-top" leftmargin=20px>
<!--&lt;!&ndash; Page Heading &ndash;&gt;-->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800" id="NomDossierSide">Connexion</h1>

    </div>

 <!--      &lt;!&ndash; Content Row &ndash;&gt;-->
    <div class="row">
        <form action="./?action=connexion" method="POST" margin=20px>

            <input type="text" name="mail" placeholder="Email de connexion" autocomplete="off" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required/><br />
            <input type="password" name="mdp" placeholder="Mot de passe"  autocomplete="off" required/><br />
            <input type="submit" />
        </form>
        <br/>    
    </div>
    <a href="./?action=motdepasse"> Mot de passe oublié</a>

            <!-- /.container-fluid -->

        <!-- End of Main Content -->
</body>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $titre ?></title>

    <!-- Custom fonts : Bootstrap / Nunito FontFamily / FontAwesome-->
<!--    <link href="vue/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="vue/css/font-awesome.min.css">-->
    <!-- Custom styles -->
<!--    <link href="vue/css/sb-admin-2.min.css" rel="stylesheet">-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   

</head>



<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form action="./?action=connexion" method="POST"id="login-form" class="form" >
                            <h3 class="text-center text-info">Connexion</h3>
                            <div class="form-group">
                                <label for="mail" class="text-info">Email Utilisateur:</label><br>
                                <input class="form-control" type="text" name="mail" placeholder="Email de connexion" autocomplete="off" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required/><br />
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="mdp" placeholder="Mot de passe" id="password" class="form-control">
                            </div>
                            <div class="form-group">                                
                                <input type="submit" class="btn btn-info btn-md" value="Valider">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!--<body id="page-top">
 Page Heading 
    

    Content Row 
    <div class="row px-4">
        <form action="./?action=connexion" method="POST">

            <input type="text" name="mail" placeholder="Email de connexion" autocomplete="off" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$" required/><br />
            <input type="password" name="mdp" placeholder="Mot de passe"  autocomplete="off" required/><br />
            <input type="submit" />
        </form>
        <br/>    
    </div>
    <a class="px-2" href="./?action=motdepasse"> Mot de passe oublié</a>

             /.container-fluid 

         End of Main Content 
</body>-->



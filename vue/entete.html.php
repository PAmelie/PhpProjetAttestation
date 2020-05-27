<?php
require_once "./modele/authentification.inc.php";
require_once './modele/mysql.php';
?>

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
  
  
  <body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Homepage.html">

                <img class="sidebar-brand-icon d-none d-sm-none d-md-block" src="vue/img/6273.png" style="width: 100%;">

            <div class="sidebar-brand-text mx-3 d-block d-sm-none">GRETA</sup></div>

        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ma GED à Distance
        </div>

        <!-- Nav Item - Ventes Collapse Menu -->
        
        <?php 
        if ($_SESSION['statut']==0 || $_SESSION['statut']==1){
        ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentes" aria-expanded="true" aria-controls="collapseVentes">
                <i class="fas fa-fw fa-folder"></i>
                <span>Gestion</span>
            </a>
            <div id="collapseVentes" class="collapse" aria-labelledby="headingVentes" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Mon Dossier Gestion:</h6>
                    <a class="collapse-item" href="index.php?action=Utilisateurs">Utilisateur</a>
                    <a class="collapse-item" href="index.php?action=Agences">Agence</a>
                    <a class="collapse-item" href="index.php?action=Formation">Formation</a>
                    <a class="collapse-item" href="index.php?action=Eleves">Eleves</a>
            </div>
        </li>
        <?php
        }
        else{
        ?>

        <!-- Nav Item - Factures Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFactures" aria-expanded="true" aria-controls="collapseFactures">
                <i class="fas fa-fw fa-folder"></i>
                <span>Tableau</span>
            </a>
            <div id="collapseFactures" class="collapse" aria-labelledby="headingFactures" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Modification tableau:</h6>
                    <a class="collapse-item" href="index.php?action=modifier">Mon tableau</a>
                </div>
            </div>
        </li>

        
        <?php
        }
        ?>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
            


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <?php
                    include_once "./modele/mysql.php";
                    $idA =$_SESSION['idAgence'];
                    global $db;
                    $result = $db->query("SELECT * FROM agences WHERE idA= $idA");
                    while($row = $result->fetch_assoc()):
                    ?>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600"><?php echo $row['ville'] ?></span>
                            <i class="d-flex fa fa-2x fa-building px-2"></i>
                        </a>
                        <?php endwhile; ?>
                        <!-- Dropdown - User Information -->
                       
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nom'] ?>  <?php echo $_SESSION['prenom']?></span>
                            <i class="d-flex fa fa-2x fa-user-circle px-2"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Déconnexion
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                
                

      
      
      
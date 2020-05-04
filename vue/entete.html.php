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
<?php 
//if (getStatutLoggedOn()==1||getStatutLoggedOn()==2){
?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Homepage.html">

                <img class="sidebar-brand-icon d-none d-sm-none d-md-block" src="vue/img/greta.gif" style="width: 100%;">

            <div class="sidebar-brand-text mx-3 d-block d-sm-none">GRETA</sup></div>

        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Tableau de Bord -->
        <li class="nav-item active">
            <a class="nav-link" href="Homepage.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tableau de bord</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Ma GED à Distance
        </div>

        <!-- Nav Item - Ventes Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVentes" aria-expanded="true" aria-controls="collapseVentes">
                <i class="fas fa-fw fa-folder"></i>
                <span>Ventes</span>
            </a>
            <div id="collapseVentes" class="collapse" aria-labelledby="headingVentes" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Mon Dossier Ventes:</h6>
                    <a class="collapse-item" href="buttons.html">Sous Dossier A</a>
                    <a class="collapse-item" href="cards.html">Sous Dossier B</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Factures Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFactures" aria-expanded="true" aria-controls="collapseFactures">
                <i class="fas fa-fw fa-folder"></i>
                <span>Factures</span>
            </a>
            <div id="collapseFactures" class="collapse" aria-labelledby="headingFactures" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Mon Dossier Factures:</h6>
                    <a class="collapse-item" href="utilities-color.html">Sous Dossier A</a>
                    <a class="collapse-item" href="utilities-border.html">Sous Dossier B</a>
                    <a class="collapse-item" href="utilities-animation.html">Sous Dossier C</a>
                    <a class="collapse-item" href="utilities-other.html">Sous Dossier D</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Devis Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDevis" aria-expanded="true" aria-controls="collapseDevis">
                <i class="fas fa-fw fa-folder"></i>
                <span>Devis</span>
            </a>
            <div id="collapseDevis" class="collapse" aria-labelledby="headingDevis" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Premier Bloc:</h6>
                    <a class="collapse-item" href="login.html">Premier Bloc Dossier A</a>
                    <a class="collapse-item" href="register.html">Premier Bloc Dossier B</a>
                    <a class="collapse-item" href="forgot-password.html">Premier Bloc Dossier C</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Second Bloc:</h6>
                    <a class="collapse-item" href="404.html">Second Bloc Dossier A</a>
                    <a class="collapse-item" href="blank.html">Second Bloc Dossier B</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Commandes Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCommandes" aria-expanded="true" aria-controls="collapseCommandes">
                <i class="fas fa-fw fa-folder"></i>
                <span>Commandes</span>
            </a>
            <div id="collapseCommandes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Mon Dossier Commandes:</h6>
                    <a class="collapse-item" href="buttons.html">Sous Dossier A</a>
                    <a class="collapse-item" href="cards.html">Sous Dossier B</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
            
<?php
//}
?>

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

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow ">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600">Entreprise</span>
                            <i class="d-flex fa fa-2x fa-building px-2"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown1">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Société A
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Société B
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Société C
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Société D
                            </a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Actualités
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">Date Format JJ Mois YYYY</div>
                                    <span class="font-weight-bold">Titre actualité A</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">Date Format JJ Mois YYYY</div>
                                    Titre Actualité B
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">Date Format JJ Mois YYYY</div>
                                    Titre Actualité C
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Toutes les actualités</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="optionModifier" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-pen fa-fw"></i>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">   </div>
                    </li>

                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="optionEnregistrer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-save fa-fw"></i>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">   </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="optionImprimer" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-print fa-fw"></i>
                        </a>
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">   </div>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Prénom Nom</span>
                            <i class="d-flex fa fa-2x fa-user-circle px-2"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Mon Profil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Paramètres
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Journal d'Activités
                            </a>
                            <div class="dropdown-divider"></div>
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

                
                

      
      
      
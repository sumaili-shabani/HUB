  <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-hub sidebar sidebar-dark accordion" id="accordionSidebar"
        style="background-color: rgb(220, 68, 5);">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0);">
                <img src="<?php echo(base_url()) ?>upload/annumation/hub.png" class="img-responsive img-thumbnail" style="width: 70px; height: 60px;">
                <div class="sidebar-brand-text mx-3">Comptable </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>comptable/dashbord">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tableau de bord</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Evaluation de compte</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Mouvement de compte:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/operation">Mouvement de gestion</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/show_depense">Evaluation de dépenses</a>
                       
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/stat_depense">Stat sur dépenses</a>

                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/caisse">Etat de la caisse</a>


                        
                       
                    </div>
                </div>
            </li>


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities2">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Gestion de paiement</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">comptabilisation</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/paiement_normale">Nos paiements</a>
                        
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/evaluation_paiement">Evaluation paiement</a>
                       <!--  <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/stat_paiement">Statistique sur paiement</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/paiement_pading">Paiement en attente</a>
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>comptable/sms">Envoie SMS</a>
                       
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                Paramètrage connexion
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" onclick="return confirm('êtes-vous sûre de vouloire se deconnecter?');" href="<?php echo(base_url())?>login/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Se Deconnecter</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="<?= base_url()?>js/img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>Interface comptabe</strong> Pour La Gestion et évaluation de projets</p>
                <a class="btn btn-default btn-sm" href="javascript:void(0);" 
                style="background-color: rgb(227, 232, 244);">La formation c'est nous!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->
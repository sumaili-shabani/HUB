  <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-hub hub sidebar sidebar-dark accordion" id="accordionSidebar"
        >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="javascript:void(0);">
                <img src="<?php echo(base_url()) ?>upload/annumation/hub.png" class="img-responsive img-thumbnail" style="width: 70px; height: 60px;">
                <div class="sidebar-brand-text mx-3">Admin <sup>I°</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>admin/dashbord">
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
                    <span>Composants</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <h6 class="collapse-header">Applications:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/category">Variété d'information</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/blog">Blog pour information</a>

                      
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/commentaire">Commentaires des blogs</a>
                        <div class="dropdown-divider"></div>
                        
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/partenariat">Nos partenaires</a>

                        <div class="dropdown-divider"></div>
                        <h6 class="collapse-header">Configuration:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/pays">Pays</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/province">Province</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/ville">Ville</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/category_entreprise">Type entreprise</a>
                        
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Opérations</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nos opérations:</h6>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/entreprise">Entreprises</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/evaluation">Evaluation des projets</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/compterendu">Compte rendu</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/visiteur">Visiteur en attente</a>
                        <div class="dropdown-divider"></div>


                        <h6 class="collapse-header">Configuration basique:</h6>
                       

                        <div class="dropdown-divider"></div>

                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nk-menu-link text-muted nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-dribbble"></i> Nos opérations  </span>
                                </a>
                                <ul class="nk-menu-sub">

                                    <li class="nk-menu-item text-muted">
                                        <a href="<?php echo(base_url()) ?>admin/activities" class="nk-menu-link text-muted" data-original-title="Nos membres" title="">
                                            <span class="nk-menu-text"><i class="fa fa-trello"></i> Activités</span>
                                        </a>
                                    </li>


                                    <li class="nk-menu-item text-muted">
                                        <a href="<?php echo(base_url()) ?>admin/info_membre" class="nk-menu-link text-muted" data-original-title="Nos membres" title="">
                                            <span class="nk-menu-text"><i class="fa fa-trello"></i> Notre famille</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item text-muted">

                                        <a href="<?php echo(base_url()) ?>admin/info_personnel" class="nk-menu-link text-muted" data-original-title="info_personnel" title="">
                                            <span class="nk-menu-text"><i class="fa fa-tag"></i> Info personneles</span>
                                        </a>
                                    </li>

                                   <!--  <li class="nk-menu-item text-muted">

                                        <a href="<?php echo(base_url()) ?>admin/info_choix" class="nk-menu-link text-muted">
                                            <span class="nk-menu-text"><i class="fa fa-picture-o"></i> Info Choix technologique</span>
                                        </a>
                                    </li> -->

                                    <li class="nk-menu-item text-muted">
                                        
                                        <a href="<?php echo(base_url()) ?>admin/info_technologique" class="nk-menu-link text-muted" data-original-title="Notre galerie" title="">
                                            <span class="nk-menu-text"><i class="fa fa-file"></i> Nos services technologiques</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item text-muted">
                                        
                                        <a href="<?php echo(base_url()) ?>admin/info_service" class="nk-menu-link text-muted" data-original-title="Notre galerie" title="">
                                            <span class="nk-menu-text"><i class="fa fa-file"></i> Services humanitaires</span>
                                        </a>
                                    </li>



                                   
                                   
                                    
                                </ul>
                            </li>
                        </ul>
                        
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/carousel">Carousel</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="collapse-header">Configuration formation:</h6>
                       

                        <div class="dropdown-divider"></div>

                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nk-menu-link text-muted nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"> Nos formation  </span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item text-muted">
                                        <a href="<?php echo(base_url()) ?>admin/formations" class="nk-menu-link text-muted" data-original-title="Nos membres" title="">
                                            <span class="nk-menu-text"><i class="fa fa-windows"></i> Formation</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item text-muted">

                                        <a href="<?php echo(base_url()) ?>admin/inscri_formation" class="nk-menu-link text-muted" data-original-title="inscri_formation" title="">
                                            <span class="nk-menu-text"><i class="fa fa-eye"></i> Inscription aux formations</span>
                                        </a>
                                    </li>

                                     <li class="nk-menu-item text-muted">

                                        <a href="<?php echo(base_url()) ?>admin/liste_formation" class="nk-menu-link text-muted" data-original-title="inscri_formation" title="">
                                            <span class="nk-menu-text"><i class="fa fa-list"></i> Filtrage formation</span>
                                        </a>
                                    </li>

                                  
                                </ul>
                            </li>
                        </ul>
                        
                        

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Comptabilité
            </div>

            

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
                        <h6 class="collapse-header">Paiement galerie:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/paiement_normale">Nos paiements</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/evaluation_paiement">Evaluation paiement</a>
                       <!--  <a class="collapse-item" href="<?php echo(base_url()) ?>admin/stat_paiement">Statistique sur paiement</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/paiement_pading">Paiement en attente</a>
                       
                    </div>
                </div>
            </li>

            <!-- Heading -->
            <div class="sidebar-heading">
                paramètrage de système
            </div>

            <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities3"
                    aria-expanded="true" aria-controls="collapseUtilities3">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Paramètre</span>
                </a>
                <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nos paramètres:</h6>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/news">Configuration News</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/site">Configuration Site</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/role">Fonction et privilège</a>

                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/users">Liste des Utilisateurs</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/stat_users">Stat sur Utilisateur</a>

                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/contact_info">Contact pour info</a>

                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/sms">Envoie SMS</a>
                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/module">Module de cours</a>

                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/zoom">conférence zoom</a>


                        <div class="dropdown-divider"></div>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/groupeconf">Groupe de discution</a>
                        <a class="collapse-item" href="<?php echo(base_url()) ?>admin/database">Sauvegarde des données</a>
                       
                    </div>
                </div>
            </li>

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
                <p class="text-center mb-2"><strong>Interface d'administrateur</strong> Pour La Gestion et évaluation de projets</p>
                <a class="btn btn-default btn-sm" href="javascript:void(0);" 
                style="background-color: rgb(227, 232, 244);">La formation c'est nous!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->
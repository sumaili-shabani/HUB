 <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Search -->
    <div id="searchPushTop" class="search-push-top">
      <div class="container position-relative">
        <div class="search-push-top-content pt-3">
          <!-- Close Button -->
          <div class="search-push-top-close-btn">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-soft-secondary mt-2 mr-2" href="javascript:;"
                 data-hs-unfold-options='{
                  "target": "#searchPushTop",
                  "type": "jquery-slide",
                  "contentSelector": ".search-push-top"
                 }'>
                <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
              </a>
            </div>
          </div>
          <!-- End Close Button -->

          <!-- Input -->
          <form class="input-group" id="prefetch2" style="width: 500px;">
            <input type="search" class="form-control typeahead" placeholder="Rechercher..." aria-label="Rechercher...">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">Recherche</button>
            </div>
          </form>
          <!-- End Input -->

          <!-- Content -->
          <div class="row d-none d-md-flex mt-7">
            <div class="col-sm-6">
              
              <div class="row">
                <!-- Nav Link -->
                <div class="col-6">
                  <div class="nav nav-sm nav-x-0 flex-column">
                   
                    <a class="nav-link" href="<?php echo(base_url()) ?>home/about">
                      <i class="fa fa-double-right mr-1"></i> About
                    </a>
                    <a class="nav-link" href="<?php echo(base_url()) ?>home/service">
                      <i class="fa fa-double-right mr-1"></i> Services
                    </a>
                    <a class="nav-link" href="<?php echo(base_url()) ?>home/blog">
                      <i class="fa fa-double-right mr-1"></i> Blog
                    </a>
                  </div>
                </div>
                <!-- End Nav Link -->

                <!-- Nav Link -->
                <div class="col-6">
                  <div class="nav nav-sm nav-x-0 flex-column">
                    
                    <a class="nav-link" href="<?php echo(base_url()) ?>home/contact">
                      <i class="fa fa-double-right mr-1"></i> Contacts
                    </a>
                    <a class="nav-link" href="<?php echo(base_url()) ?>login">
                      <i class="fa fa-double-right mr-1"></i> Se connecter
                    </a>
                    <a class="nav-link" href="<?php echo(base_url()) ?>">
                      <i class="fa fa-double-right mr-1"></i> Accueil
                    </a>
                  </div>
                </div>
                <!-- End Nav Link -->
              </div>
            </div>

            <div class="col-sm-6">
              <!-- Banner -->
              <div class="rounded search-push-top-banner">
                <div class="d-flex align-items-center">
                  <div class="search-push-top-banner-container">
                    <img class="img-fluid search-push-bottom-banner-img mt-8" src="<?php echo($icone_info) ?>" alt="Image Description">
                   
                  </div>

                  <div>
                    <div class="mb-4">
                      <span class="h5">Rejoignez-nous déjà</span>
                      <p>Rejoignent les bancs du hub un jour nouveau 👋</p>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- End Banner -->
            </div>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Search -->

    <div class="header-section">
      <!-- Topbar -->
      <div class="container header-hide-content pt-2 hub">
        <div class="d-flex align-items-center hub">
         

          <div class="ml-auto">
           
            
            <a class="dropdown-item" href="<?php echo(base_url()) ?>home/contact">Contacts</a>

           
          </div>

          <ul class="list-inline ml-2 mb-0">
            <!-- Search -->
            <li class="list-inline-item">
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-xs btn-icon btn-ghost-secondary" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#searchPushTop",
                    "type": "jquery-slide",
                    "contentSelector": ".search-push-top"
                   }'>
                  <i class="fa fa-search"></i>
                </a>
              </div>
            </li>
            <!-- End Search -->

           
          </ul>
        </div>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="<?php echo base_url(); ?>" aria-label="Front">
            <img src="<?php echo($icone_info) ?>" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse">
            <div class="navbar-body header-abs-top-inner">
              <ul class="navbar-nav">
                
                <li class="navbar-nav-item">
                    <a class="nav-link " href="<?php echo(base_url()) ?>">
                      <i class="fa fa-home font-size-1 mr-1"></i>Accueil
                    </a>
                </li>
                

                <li class="navbar-nav-item">
                    <a class="nav-link " href="<?php echo(base_url()) ?>home/travail">
                      <i class="fa fa-info font-size-1 mr-1"></i>Ce que nous faisons
                    </a>
                </li>

                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                  <!-- Pages - Submenu -->
                  <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg" aria-labelledby="pagesMegaMenu" style="min-width: 230px; display: none;">
                    <!-- Account -->
                     <a class="dropdown-item " href="<?php echo(base_url()) ?>home/about">A propos de nous</a>

                    <div class="hs-has-sub-menu">
                      <a id="navLinkPagesAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Hub <span class="badge badge-success badge-pill ml-2">New</span></a>

                      <div id="navSubmenuPagesAccount" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut" aria-labelledby="navLinkPagesAccount" style="min-width: 230px; display: none;">

                        <!-- <a class="dropdown-item " href="<?php echo(base_url()) ?>home/travail">Ce que nous faisons </a> -->
                        <a class="dropdown-item " href="<?php echo(base_url()) ?>home/propositionvaleur">proposition de valeur</a>
                       
                        <a class="dropdown-item " href="<?php echo(base_url()) ?>home/domaine">Domaines d’activité principaux recensés</a>
                        <a class="dropdown-item " href="<?php echo(base_url()) ?>home/entreprise">Les entreprises et les entrepreneurs </a>
                        <a class="dropdown-item " href="<?php echo(base_url()) ?>home/cryptnail">Cryptnail : l'academie du code du nord-kivu</a>
                        <a class="dropdown-item " href="<?php echo(base_url()) ?>home/academie">Académie de leadership </a>
                       
                      </div>
                    </div>
                    <!-- Account -->

                    <!-- Company -->
                    <a class="dropdown-item " href="<?php echo(base_url()) ?>home/secteur">Secteur d'activité</a>
                    <!-- Company -->
                     <!-- Company -->
                    <a class="dropdown-item " href="<?php echo(base_url()) ?>home/ecosysteme">Ecosystème</a>
                    <!-- Company -->
                     <!-- Company -->
                    <a class="dropdown-item " href="<?php echo(base_url()) ?>home/partenariat">Partenariat</a>
                    <!-- Company -->

                  </div>
                  <!-- End Pages - Submenu -->
                </li>

                <li class="navbar-nav-item">
                    <a class="nav-link " href="<?php echo(base_url()) ?>home/contact">
                      <i class="fa fa-envelope font-size-1 mr-1"></i>Contacts
                    </a>
                </li>

                

                <!-- Demos -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "900px"
                      }
                    }'>
                  <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle " href="javascript:;" aria-haspopup="true" aria-expanded="false">Informations</a>

                  <!-- Demos - Mega Menu -->
                  <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                    <div class="row no-gutters">
                      <div class="col-lg-8">
                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="<?php echo base_url(); ?>home/formation">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-67.svg" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Nos formations</span>
                                  <span class="navbar-promo-text">Decouvrez nos formations!</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="<?php echo base_url(); ?>home/latestformation">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-45.svg" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Formation en cours</span>
                                  <span class="navbar-promo-text">Inscrivez-vous déjà!</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>

                        <div class="navbar-promo-card-deck">
                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="<?php echo base_url(); ?>home/service">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-4.svg" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Nos Services</span>
                                  <span class="navbar-promo-text">Explorez plus de nos services!</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->

                          <!-- Promo Item -->
                          <div class="navbar-promo-card navbar-promo-item">
                            <a class="navbar-promo-link" href="<?php echo base_url(); ?>home/blog">
                              <div class="media align-items-center">
                                <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-13.svg" alt="SVG">
                                <div class="media-body">
                                  <span class="navbar-promo-title">Nos blogs <span class="badge badge-success badge-pill ml-1">Nouvelles</span></span>
                                  <span class="navbar-promo-text">Particulières</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Promo Item -->
                        </div>

                       
                      </div>

                      <!-- Promo -->
                      <div class="col-lg-4 navbar-promo d-none d-lg-block">
                        <a class="d-block navbar-promo-inner" href="javascript:void(0);">
                          <div class="position-relative">
                            <img class="img-fluid rounded mb-3" src="<?php echo($icone_info) ?>" alt="Image Description">
                          </div>
                          <span class="navbar-promo-text font-size-1">
                            Structure d’accompagnement à l’entreprenariat innovant, l’incubateur <?php echo($nom_site_info) ?> est un hub de créativité...
                          </span>
                        </a>
                      </div>
                      <!-- End Promo -->
                    </div>
                  </div>
                  <!-- End Demos - Mega Menu -->
                </li>
                <!-- End Demos -->

                <!-- Docs -->
                <li class="hs-has-mega-menu navbar-nav-item"
                    data-hs-mega-menu-item-options='{
                      "desktop": {
                        "position": "right",
                        "maxWidth": "260px"
                      }
                    }'>
                  <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Nos évènements</a>

                  <!-- Docs - Submenu -->
                  <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                    

                    <?php 
                    if ($categories->num_rows() <=0) {
                        # code...
                    }
                    else{
                        foreach ($categories->result_array() as $key) {
                            
                            ?>

                            <!-- Promo Item -->
                            <div class="navbar-promo-item">
                              <a class="navbar-promo-link" href="<?php echo(base_url()) ?>home/publication/<?php echo($key['idcat']) ?>/<?php echo($key['nom']) ?>">
                                <div class="media align-items-center">
                                  <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-1.svg" alt="SVG">
                                  <div class="media-body">
                                    <span class="navbar-promo-title"><?php echo($key['nom']) ?></span>
                                    <small class="navbar-promo-text">catégorie</small>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <!-- End Promo Item -->
                            
                            <?php
                        }
                    }

                     ?>

                     <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="<?php echo(base_url()) ?>home/galery">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-2.svg" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">Evènement</span>
                            <small class="navbar-promo-text">Notre galerie Photos</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                     <!-- Promo Item -->
                    <div class="navbar-promo-item">
                      <a class="navbar-promo-link" href="<?php echo(base_url()) ?>home/event">
                        <div class="media align-items-center">
                          <img class="navbar-promo-icon" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-13.svg" alt="SVG">
                          <div class="media-body">
                            <span class="navbar-promo-title">Nos activités</span>
                            <small class="navbar-promo-text">Soyez à jour sur nos activités</small>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- End Promo Item -->

                   

                    <div class="navbar-promo-footer">
                      <!-- List -->
                      <div class="row no-gutters">
                        <div class="col-6">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Vérifiez les nouveautés</span>
                            <a class="navbar-promo-footer-text" href="<?php echo(base_url()) ?>home/blog"> Visitez-les!</a>
                          </div>
                        </div>
                        <div class="col-6 navbar-promo-footer-ver-divider">
                          <div class="navbar-promo-footer-item">
                            <span class="navbar-promo-footer-text">Avez-vous de questions?</span>
                            <a class="navbar-promo-footer-text" href="<?php echo(base_url()) ?>home/contact"> Contactez-nous!</a>
                          </div>
                        </div>
                      </div>
                      <!-- End List -->
                    </div>
                  </div>
                  <!-- End Docs - Submenu -->
                </li>
                <!-- End Docs -->

                <?php 

                 $first_name;
                 $connected;
                  if ($this->session->userdata('admin_login')) {
                    $connected = $this->session->userdata('admin_login');
                  }
                  elseif($this->session->userdata('id'))
                  {
                        $connected = $this->session->userdata('id');
                  }
                  elseif($this->session->userdata('comptable_login'))
                  {
                        $connected = $this->session->userdata('comptable_login');
                  }
                  elseif($this->session->userdata('instuctor_login'))
                  {

                        $connected = $this->session->userdata('instuctor_login');
                  }
                  else{
                    $connected = 0;
                  }

                  $this->db->where('id',$connected);
                  $users = $this->db->get('users')->result_array();
                 foreach ($users as $row) {
                  $first_name   = $row["first_name"];
                 }
                   
                  

                if($this->session->userdata('admin_login'))
                {
                   
                  ?>
                  <!-- Button -->
                  <li class="navbar-nav-item">
                      <a class="nav-link " href="<?php echo(base_url()) ?>admin/profile">
                        <i class="fa fa-user font-size-1 mr-1"></i><?php echo($first_name) ?>
                      </a>
                  </li>
                  <!-- End Button -->
                  <?php
                }
                elseif($this->session->userdata('id'))
                {
                     ?>
                  <!-- Button -->
                  <li class="navbar-nav-item">
                      <a class="nav-link " href="<?php echo(base_url()) ?>user/profile">
                        <i class="fa fa-user font-size-1 mr-1"></i><?php echo($first_name) ?>
                      </a>
                  </li>
                  <!-- End Button -->
                  <?php
                }
                elseif($this->session->userdata('comptable_login'))
                {
                  ?>
                  <!-- Button -->
                  <li class="navbar-nav-item">
                      <a class="nav-link " href="<?php echo(base_url()) ?>comptable/profile">
                        <i class="fa fa-user font-size-1 mr-1"></i><?php echo($first_name) ?>
                      </a>
                  </li>
                  <!-- End Button -->
                  <?php
                     
                }
                elseif($this->session->userdata('instuctor_login'))
                {

                     ?>
                    <!-- Button -->
                    <li class="navbar-nav-item">
                        <a class="nav-link " href="<?php echo(base_url()) ?>entreprise/profile">
                          <i class="fa fa-user font-size-1 mr-1"></i><?php echo($first_name) ?>
                        </a>
                    </li>
                    <!-- End Button -->
                    <?php
                }
                else{

                  ?>
                  <!-- Button -->
                  <li class="navbar-nav-last-item">
                    <a class="btn btn-sm btn-primary transition-3d-hover" href="<?php echo(base_url()) ?>login" >Se connecter</a>
                  </li>
                  <!-- End Button -->
                  <?php

                }



                 ?>

                
              </ul>
            </div>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
 <?php

 $first_name;
 $last_name;
 $email;
 $image;
 $telephone;
 $full_adresse;
 $biographie;
 $date_nais;
 $passwords;
 $idrole;

 $facebook;
 $linkedin;
 $twitter ;

 $university;
 $faculte;
 $option ;
 $sexe;
 $photo;
 $nom_connected;

 $id_user;
 $connected = $this->session->userdata('comptable_login');
 $email_ok;

 $user = $this->db->get_where("users", array('id' => $connected))->result_array();


 foreach ($user as $row) {
  $photo              = $row["image"];
  $nom_connected      = $row["first_name"];
  $email_ok = $row["email"];
  
 }


  $nombre_de_notification;
  $message;
  $url_notification;
  $created_at_notification;
  $this->db->where('id_user', $connected);
  $this->db->order_by('created_at', 'desc');
  $Notifications= $this->db->get("notification");
  if ($Notifications->num_rows() > 0) {
      $nombre_de_notification = $Notifications->num_rows();

      foreach ($Notifications->result_array() as $not) {
        $message  = $not['message'];
        $url_notification   =   $not['url'];
        $created_at_notification = $not['created_at'];
        
      }

  }
  else{
  $nombre_de_notification=0;
  }


  $nombre_de_message;
  $messagerie = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT  20");
  if ($messagerie->num_rows() > 0) {
    $nombre_de_message= $messagerie->num_rows();
  }
  else{
    $nombre_de_message= 0;
  }


  

 ?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-hub" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-hub" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - Alerts  message-->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-comment fa-fw mr-1"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo($nombre_de_message) ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header bg-hub hub" style="
                                background-color: rgb(220, 68, 5);
                                color:white;">
                                    Mes recents messages
                                </h6>

                                <?php

                                     $nombre_de_message;
                                     $message_description;
                                     $created_at_message;
                                     $idcours_favory;

                                     $message = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT 3 ");

                                     if ($message->num_rows() > 0) {
                                      $nombre_de_favory = $message->num_rows();

                                      foreach ($message->result_array() as $not5) {
                                        
                                       
                                        ?>

                                       

                                        <a class="dropdown-item d-flex align-items-center" href="<?php echo(base_url()) ?>comptable/chat_admin/<?php echo($connected) ?>/<?php echo($not5['id_user']) ?>">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-hub">
                                                    <img alt="avatar" class="img img-thumbnail" src="<?php echo(base_url()) ?>upload/photo/<?php echo($not5['image']) ?>" >
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500"><?php echo(substr(date(DATE_RFC822, strtotime($not5['created_at'])), 0, 23)); ?></div>
                                                <span> <?php echo($not5['first_name']); ?> <?php echo($not5['last_name']); ?>...
                                                  <br>
                                                  <?php echo(substr($not5['message'], 0,42)) ?>...
                                                </span>
                                            </div>
                                        </a>
                                       
                                        <?php
                                      }

                                     }
                                     else{
                                      
                                     } 

                                ?>

                                <?php

                                   
                                      $message_chat_groupe = $this->db->query("
                                        SELECT groupe.idgroupe,code_groupe,id_user,groupe.message,groupe.fichier,groupe.created_at, groupe_chat.nom,groupe_chat.image as logo,groupe_chat.code, users.first_name,users.last_name,users.image, users.id,users.email, users.image AS avatar,
                                          groupe_chat.image AS logo
                                         FROM groupe INNER JOIN groupe_chat ON groupe.code_groupe=groupe_chat.code INNER JOIN users ON groupe.id_user= users.id WHERE groupe.message IS NOT null AND groupe_chat.id_users=".$connected." GROUP BY groupe_chat.code DESC LIMIT 3

                                      ");

                                       if ($message_chat_groupe->num_rows() > 0) {
                                        

                                        foreach ($message_chat_groupe->result_array() as $not6) {
                                         
                                            # code...
                                            ?>

                                            <a class="dropdown-item d-flex align-items-center" href="<?php echo(base_url()) ?>comptable/chat_admin2/<?php echo($connected) ?>/<?php echo($not6['code']) ?>">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-hub">
                                                        <img alt="avatar" class="img img-thumbnail" src="<?php echo(base_url()) ?>upload/groupe/<?php echo($not6['logo']) ?>" >
                                                         
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500"><?php echo(substr(date(DATE_RFC822, strtotime($not6['created_at'])), 0, 23)); ?></div>
                                                    <span> <?php echo($not6['first_name']); ?> <?php echo($not6['last_name']); ?> a réagi dans le <font class="text-warning">groupe</font> <font class="text-success"><?php echo(substr($not6['nom'], 0,30)); ?></font>...
                                                      <br>
                                                      <?php echo(substr($not5['message'], 0,42)) ?>...
                                                      <sup>
                                                        <div class="icon-circle bg-white pull-right mb-1 mt-1">
                                                        
                                                           <img alt="avatar" class="img img-thumbnail" src="<?php echo(base_url()) ?>upload/photo/<?php echo($not6['image']) ?>">
                                                        </div>
                                                      </sup>
                                                    </span>
                                                </div>
                                            </a>

                                            <?php
                                          
                                        }

                                       }
                                       else{
                                        
                                       } 

                                ?>

                                

                                
                                <a class="dropdown-item text-center small text-gray-500" href="<?php echo(base_url()) ?>comptable/message">Voir tous les messages</a>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"><?php echo($nombre_de_notification) ?></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header bg-hub" 
                                style="
                                  background-color: rgb(220, 68, 5);
                                  color:white;"
                                >
                                    Mes notifications
                                </h6>

                                <?php

                                     $this->db->where('id_user', $connected);
                                     $this->db->order_by('created_at', 'desc');
                                     $this->db->limit(6);
                                     $Notifications= $this->db->get("notification");
                                     if ($Notifications->num_rows() > 0) {
                                      

                                      foreach ($Notifications->result_array() as $not) {
                                       
                                        ?>

                                       

                                        <a class="dropdown-item d-flex align-items-center" href="<?php echo(base_url()) ?><?php echo($not['url']) ?>">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-hub">
                                                    <i class="<?php echo($not["icone"]) ?> text-white"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="small text-gray-500"><?php echo(substr(date(DATE_RFC822, strtotime($not['created_at'])), 0, 23)); ?></div>
                                                <span> <?php echo($not["titre"]) ?> <?php echo(substr($not["message"], 0,42)) ?>...</span>
                                            </div>
                                        </a>
                                       
                                        <?php
                                      }

                                     }
                                     else{
                                      $nombre_de_notification=0;
                                     } 

                                   ?>

                                
                                <a class="dropdown-item text-center small text-gray-500" href="<?php echo(base_url()) ?>comptable/notification">Voir toutes les notifications</a>
                            </div>
                        </li>

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo(substr($nom_connected, 0,30)) ?></span>
                                
                                <img class="img-profile rounded-circle"
                                    src="<?php echo(base_url())?>upload/photo/<?php echo($photo) ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo(base_url())?>comptable/profile">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="<?php echo(base_url())?>comptable/basic">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Paramètre
                                </a>
                                <a class="dropdown-item" href="<?php echo(base_url())?>comptable/notification">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mes Activités
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" onclick="return confirm('êtes-vous sûre de vouloire se deconnecter?');" href="<?php echo(base_url())?>login/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Se Deconnecter
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
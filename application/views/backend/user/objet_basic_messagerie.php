<!-- mes scripts commencent -->
<!-- bloque de messagerie -->
<div class="col-md-12">


	<div class="row">								 
	<div class="col-md-12">

		<!-- DIRECT CHAT -->
        <div class="card direct-chat direct-chat-primary">
          <div class="card-header bg-hub">
            <span class="card-title">Discutions instantanées</span>

            <div class="card-tools pull-right">
             
              <button type="button" class="btn btn-tool bg-hub" data-card-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool bg-hub" data-toggle="tooltip" title="Contacts"
                      data-widget="chat-pane-toggle">
                <i class="fa fa-comments"></i>
              </button>
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">

            	<?php

            	$CodeEntrep;

            	$id = $this->session->userdata('id');

            	if (isset($_GET['id'])) {
            	 	$CodeEntrep= $_GET['id'];
            	} 

            	$connected= $id_user;
            	$CodeEntrep= $id_recever;

            	$chat= $this->db->query("SELECT id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message, fichier, code FROM messagerie
                inner join 
                users on users.id=messagerie.id_user WHERE (id_user='".$CodeEntrep."' AND id_recever='".$id_user."')
                OR (id_recever='".$CodeEntrep."' AND id_user='".$id_user."')
                 ORDER BY created_at ASC LIMIT 50");
            	if ($chat->num_rows() < 0) {
            		# code...

                ?>
               <div class="col-md-12">
                  <img src="<?php echo(base_url()) ?>upload/module/chat.svg" class="hub img-thumbnail img-responsive" style="border-radius: 100%;">
                </div>
                <?php
            	}
            	else{

            		foreach ($chat->result_array() as $data) {
            			?>

                  

            			<!-- Message. Default to the left -->
		                  <div class="<?= ($data['id_user'] == $connected) ? 'direct-chat-msg right' : 'direct-chat-msg' ?>" code="<?php echo($data['code']) ?>">

  		                    <div class="direct-chat-infos clearfix">
  		                      <span class="direct-chat-name float-left"><?php echo($data['first_name']) ?> <?php echo($data['last_name']) ?></span>
  		                      <span class="direct-chat-timestamp float-right"><?php echo substr(date(DATE_RFC822, strtotime($data['created_at'])), 0, 23); ?></span>
  		                    </div>
  		                    <!-- /.direct-chat-infos -->
  		                    <img class="direct-chat-img" src="<?php echo(base_url()) ?>upload/photo/<?php echo($data['image']) ?>" alt="message user image">
  		                    <!-- /.direct-chat-img -->
  		                    <div class="direct-chat-text">
  		                      <?php 
                                  echo(html_entity_decode($data['message']));
                                 ?>
                                 <?php 

                                  if ($data['fichier'] !='') {
                                    ?>
                                    <span class="text-muted"><a href="<?php echo(base_url()) ?>upload/groupe/fichier/<?php echo($data['fichier']) ?>" download="<?php echo(base_url()) ?>upload/groupe/fichier/<?php echo($data['fichier']) ?>" class="text-dark"><i class="fa fa-download"></i> télécharger ce fichier</a></span>
                                    <?php
                                  }

                                 ?>

                                
  		                    </div>
  		                    <!-- /.direct-chat-text -->

                        
		                  </div>
		                  <!-- /.direct-chat-msg -->

                      <?php 
                         if ($data['id_user'] == $connected) {
                           # code...
                          ?>
                          <div class="col-md-12" align="right">
                            <a href="javascript:void(0);" class="affichier">
                              <i class="fa fa-eye"></i>
                            </a>
                          </div>
                          <div class="col-md-12  reponse action_message mb-2" style="margin-top: 10px;" id="<?php echo($data['code']) ?>">
                              <div class="row form-inline">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 pull-right" align="right">

                                  <a href="javascript:void(0);" code="<?php echo($data['code']) ?>" class="btn btn-primary btn-sm btn-circle editer_message"><i class="fa fa-edit"></i></a>

                                  <a href="" code="<?php echo($data['code']) ?>" class="btn btn-danger btn-sm btn-circle supprimer_message"><i class="fa fa-trash"></i></a>
                                </div>

                              </div>
                          </div>
                          <?php
                         }
                        ?>


            			

            			<?php
            		}
            	}


            	


            	 ?>

             

            </div>
            <!--/.direct-chat-messages-->

            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts bg-dark">

            	<div class="col-md-12">
            		<div class="row">
            			<div class="col-md-12">

            				<div class="row cart_details_all">
      								<div class="input-group mb-3">
      																  
      								  <input type="search" name="recherche" id="search_text2" class="form-control" placeholder="Rechercher un utilisateur">
      								  <div class="input-group-prepend bg-warning">
      								    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
      								  </div>

      								</div>
      							</div>
            				
            			</div>
            		</div>
            	</div>

            	


              <ul class="contacts-list"  id="country_table2">

                <!-- End Contact Item -->
              </ul>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <nav aria-label="Page navigation example" id="pagination_link2">
                  
                  </nav>
                  </div>
                  <div class="col-md-1"></div>
                </div>
              </div>
              <!-- /.contacts-list -->
            </div>
            <!-- /.direct-chat-pane -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-light col-md-12">
            <form action="<?php echo(base_url()) ?>user/chat_local_view/<?php echo($id) ?>/<?php echo($id_recever2) ?>" method="post" enctype="multipart/form-data" class="row">

            

              <div class="col-md-12 form-group">
                <textarea type="text" name="Message_text" row="" class="form-control textarea" minlength="2" placeholder="Quoi de news?" required=""></textarea>
              </div>

              <div class="col-md-6 pull-right">

                <label class="btn btn-link Attachez" data-toggle="tooltip" data-placement="top" title="Attachez un fichier">
                  <div class="affichier">
                    <a href="javascript:void(0);" class="btn btn-link affichier">
                      <i class="fa fa-video-camera"></i>
                    </a>
                  </div>
                  <div class="form-group reponse" style="display: none;">
                       <input type="file" name="user_image" class="form-control" />
                  </div>
                 
                </label>
                
              </div>

              <div class="col-md-6 form-group pull-right">
                <button type="submit" class="btn btn-hub pull-right">
                    <i class="fa fa-send mr-1"></i> Envoyer
                </button>

              </div>


              
            </form>
          </div>
          <!-- /.card-footer-->
        </div>
        <!--/.direct-chat -->



		
	</div><!--col-md-6-->
</div>	

	
</div>
          		<!-- fin block -->
<!-- fin de mes scripts -->
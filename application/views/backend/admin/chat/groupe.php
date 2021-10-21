<div class="col-md-12">
	<div class="row">

		<!-- menu action -->
		<div class="col-md-4 card mb-2">

			<div class="col-md-12 card-body">
				<div class="row">
					<div class="col-md-12">
						<a href="javascript:void(0);" class="btn btn-hub mr-1 mb-2 viw_groupe">
							<i class="fa fa-comment-o mr-1"></i>Groupe</a>

						<a href="javascript:void(0);" class="btn btn-outline-primary pull-right mr-1 mb-2" id="add_button" data-toggle="modal" data-target="#userModal" title="Ajouter un groupe de discution">
							<i class="fa fa-envelope mr-1"></i>
						Créer un groupe</a>

					</div>
					<div class="col-md-12">
						<div class="mail-side">
                            <ul class="nav list-group">
                                
                                <li class="list-group-item"><a href="javascript:void(0);" class="add_to_groupe"><i class="fa fa-envelope mr-1"></i> Ajoute du groupe</a></li>                                        
                                <li class="list-group-item"><a href="javascript:void(0);" class="delete_to_groupe"><i class="fa fa-tag mr-1"></i>Réturer du groupe</a></li>

                                <li class="list-group-item"><a href="javascript:void(0);" class="deleted_group"><i class="fa fa-trash mr-1"></i>Supprimer ce groupe</a></li>
                            </ul>
                            <div class="col-md-12 text-center">
                            	<h5 class="label">Les groupes dont je fais parti</h5>
                            </div>
                            <hr>
                            <ul class="nav list-group">
                                <?php 
                                $gr = $this->db->where('id_users', $id);
                                $gr = $this->db->get('groupe_chat')->result_array();
                                foreach ($gr as $chat) {
                                    ?>
                                    <li class="list-group-item">
                                        <a href="<?php echo(base_url()) ?>admin/chat_admin2/<?php echo($id) ?>/<?php echo($chat['code']) ?>">

                                        <img src="<?php echo(base_url()) ?>upload/groupe/<?php echo($chat['image']) ?>" class="img img-responsive img-circle" style="width: 20px; height: 20px; border-radius: 50px;">

                                        <?php echo($chat['nom']) ?></a> 

                                    </li>
                                    <?php
                                }

                                 ?>
                        	    
                            		                                        
                                
                            </ul>
                        </div>
					</div>



				</div>


				
			</div>
			
		</div>
		<!-- fin menus -->

		<!-- detail agent -->
		<div class="col-md-8 mb-2">

			<!-- debit -->
			<div class="col-md-12 card">
                <div class=" col-md-12 card-body">
                    <div class="mail-inbox">
                        
                        <div class="body mail-right check-all-parent">
                            
                            <div class="mail-action clearfix m-l-15">
                                <div class="pull-left">
                                    <div class="fancy-checkbox d-inline-block">
                                        <label>
                                            <input class="check-all" type="checkbox" name="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm deleted_group"><i class="fa fa-trash"></i></a>
                                    <a href="" class="btn btn-light btn-sm hidden-sm"><i class="fa fa-refresh"></i></a>                                        
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-tag"></i></button>
                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                                        			                                    		
                                    			<?php 
                                                $gr = $this->db->where('id_users', $id);
                                                $gr = $this->db->get('groupe_chat');
                                                if ($gr->num_rows() > 0) {
                                                    foreach ($gr->result_array() as $chat) {
                                                    ?>
                                                    
                                                    <a class="dropdown-item show_member_of_group" href="javascript:void(0);" code="<?php echo($chat['code']) ?>" >

                                                        <input type="checkbox" name="code" class="code_groupe" value="<?php echo($chat['code']) ?>">

                                                    <img src="<?php echo(base_url()) ?>upload/groupe/<?php echo($chat['image']) ?>" class="img img-responsive img-thumbnail mr-1" style="width: 25px; height: 25px; border-radius: 50px;">

                                                    <?php echo($chat['nom']) ?></a>
                                                    
                                                    <?php
                                                    }

                                                }
                                                else{

                                                }
                                                
                                                ?>
	                                    		                                                
                                        </div>
                                    </div>
                                </div>
                                <div class="pull-right ml-auto">
                                    <div class="pagination-email d-flex">
                                        
                                        <div class="btn-group m-l-20">
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mail-list">
                            	<div class="row clearfix">
					                <div class="col-md-12" style="margin-top: 10px;">
					                    <div class="input-group mb-3">
			                                <input type="text" class="form-control" placeholder="Taper pour rechercher une personne" id="search_text">
			                                <div class="input-group-append">
			                                    <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i> Rechercher</button>
			                                </div>
			                            </div>
					                </div>
					            </div>

                                <ul class="list-unstyled resultat">
                                	<ul class="list-unstyled resultat">

                                		<!-- local list_view -->
                                		<?php include('_list_view.php') ?>
                                		<!-- fin local -->


                                	</ul>
                                </ul>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <nav aria-label="Page navigation example" id="pagination_link">
                                          
                                            </nav>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>

			
			
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
			<!-- fin -->


			
		</div>
		<!-- fin detail -->
		
	</div>
</div>
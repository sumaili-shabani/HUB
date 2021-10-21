<div class="col-md-12">


	<div class="col-md-12">
		<div class="text-center" align="center">
    		<?php
            if($this->session->flashdata('message'))
            {
                echo '
                <div class="alert alert-success">
                <button class="close" data-dismiss="alert">x</button>
                    '.$this->session->flashdata("message").'
                </div>
                ';
            }
            elseif ($this->session->flashdata('message2')) {
              echo '
                <div class="alert alert-danger">
                <button class="close" data-dismiss="alert">x</button>
                    '.$this->session->flashdata("message2").'
                </div>
                ';
            }
            else{

            }
            ?>
    	</div>
    </div>


	<!-- debit canavas -->
	<main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
        <div id="newsfeed-items-grid">  

        	<div class="col-md-12 mb-3">
        		<div class="row">

        			<div class="ui-block-title col-md-12">
	        			<div class="row">

	        				<div class="col-md-12">

				            	<div class="row">
									<div class="col-md-4">
										<a href="" role="button" class="text-muted">
											<i class="fa fa-refresh"></i>Actualiser la page
										</a>

									</div>
									<div class="col-md-4">
										<h4 class="text-muted text-center">Galérie des activités</h4>
									</div>
									<div class="col-md-4">
										<a href="<?= base_url() ?>admin/detail_entreprise/<?php echo($student_id) ?>" class="text-muted pull-right">
											<i class="fa fa-refresh"> retourner en arrière!</i>
										</a>
									</div>
								</div>

				            	
				            </div>

	        				
	        				
	        			</div>		
						
			            
					</div>   
        			
        		</div>
        	</div>           
            <div class="element-wrapper col-md-12 mb-3">
                <div class="element-box-tp col-md-12">

                	<div class="col-lg-12 col-sm-12 col-md-12">
                		<div class="col-md-12">
                			<div class="col-md-12">
                				<div class="col-md-12">
                					<div class="row">


                						<div class="col-md-12">
                							<div class="text-info"><h4>Nos photos</h4></div>
                    							<div class="row col-md-12">
	                    							<?php 
								                    
								                    foreach ($repository as $key) {

								                    	if ($key['type'] == 'photo') {
								                    		?>
									                    	<div class="col-md-3">
									                    		<a href="<?php echo(base_url()) ?>upload/galery/photo/<?php echo($key['fichier']) ?>">
									                    			
									                    			<img class="img img-thumbnail" src="<?php echo(base_url()) ?>upload/galery/photo/<?php echo($key['fichier']) ?>" >
									                    		</a>

									                    		<div class="text-center">
																	<div class="form-group">

																		<a  onClick="return confirm('<?php echo('Etes-vous sûr de vouloir le supprimer?');?>')" href="<?php echo base_url();?>entreprise/operation_repository_galery/delete/<?php echo $key['idgalery'];?>" style="color:grey;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('supprimer cette video');?>"></i></a>


																		
																	</div>
																</div>


									                    	</div>

									                    	<?php
								                    	}

								                    	
								                    	# code...
								                    }

								                     ?>
							                     </div>

                							<div class="row" id="uploaded_images"></div>

                							
                						</div>

                						<div class="col-md-12">
                							<div class="text-info"><h4>Nos videos</h4></div>

                							<div class="row col-md-12">
                								<?php 
							                 
							                    foreach ($repository as $key) {

							                    	if ($key['type'] == 'video') {
							                    		?>

							                    		


								                    	<div class="col-md-3">
									                    	<video class="img img-responsive img-thumbnail" poster="<?php echo(base_url()) ?>upload/galery/video/<?php echo($key['fichier']) ?>" controls="">
																<source src="<?php echo(base_url()) ?>upload/galery/video/<?php echo($key['fichier']) ?>" type="video/webm">
																<source src="<?php echo(base_url()) ?>upload/galery/video/<?php echo($key['fichier']) ?>" type="video/mp4">
																
															</video>
															<div class="text-center">
																<div class="form-group">

																	<a  onClick="return confirm('<?php echo('Etes-vous sûr de vouloir le supprimer?');?>')" href="<?php echo base_url();?>entreprise/operation_repository_galery/delete/<?php echo $key['idgalery'];?>" style="color:grey;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('supprimer cette video');?>"></i></a>


																	
																</div>
															</div>
								                    	</div>
								                    	<?php
							                    	}

							                    	
							                    	# code...
							                    }

							                     ?>
                							</div>


                							<div class="row" id="uploaded_video"></div>
                							

                						</div>


                					</div>
                				</div>
                			</div>
                		</div>
                	</div>


                
              <div class="table-responsive">


              </div>
            </div>
          </div>
        </div>
      </main>
	<!-- fin canavas -->
	
</div>
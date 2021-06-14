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
	        				<div class="col-md-4">
	        					<h6 class="element-header text-center"><?php echo('ajout galérie');?>
				                </h6>
				            </div>
	        				<div class="col-md-2"></div>
	        				<div class="col-md-6">

	        					<div align="right" class="col-md-12 pull-right float-right">
					              	<a href="" class="btn btn-success btn-sm mr-2 mb-2"><i class="fa fa-refresh"></i> Actualiser</a>
				                    <a href="#" role="button" data-toggle="modal" data-target="#modalcanavas" class="btn btn-hub btn-sm mb-2"><i class="fa fa-plus"></i>Ajouter un fichier dans votre galérie</a>
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
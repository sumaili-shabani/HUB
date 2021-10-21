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

	        <div class="ui-block-title">

	        	<div class="col-md-12">

	            	<div class="row">
						<div class="col-md-4">
							<a href="#" role="button" data-toggle="modal" data-target="#modalcanavas" class="text-muted">
								<i class="fa fa-plus"></i>Ajouter les données
							</a>

						</div>
						<div class="col-md-4">
							<h4 class="text-muted text-center">Swot</h4>
						</div>
						<div class="col-md-4">
							<a href="<?= base_url() ?>admin/detail_entreprise/<?php echo($student_id) ?>" class="text-muted pull-right">
								<i class="fa fa-refresh"> retourner en arrière!</i>
							</a>
						</div>
					</div>

	            	
	            </div>

	           
	        </div>
	        <div class="element-wrapper">
	            <div class="element-box-tp">

	                <div class="table-responsive">


				           <table id="bizcanvas" cellspacing="0" border="1">
				              <thead>
				              
				                  
				                  <td>
				                    <h4>force</h4>

				                    <?php 
				                    foreach ($swot as $key) {
				                      if ($key['titre'] == 'Forces') {
				                        ?>
				                       <a href="javascript:void(0);" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>"  style="color:grey;"

				                        >

				                        <p>
				                          <font color="black">
				                            <?php
				                            echo($key['sujet']);
				                            ?>
				                          </font>
				                           
				                        </p>
				                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>

				                     <?php 
				                    foreach ($swot2 as $key) {
				                      if ($key['titre'] == 'Forces') {
				                        ?>
				                        <a  style="color:red;" class="editer" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>" >

					                        <p>
					                          <font color="red">
					                            <?php
					                            echo($key['sujet']);
					                            ?>
					                          </font>

					                          <a   href="<?php echo base_url();?>admin/operation_swot/delete/<?php echo $key['idswot'];?>/<?php echo($key['student_id']) ?>" style="color:red;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('delete');?>"></i></a>
					                          
					                        </p>
					                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>


				                    
				                  </td>

				                  <td>

				                    <h4>Faiblesses</h4>

				                    <?php 
				                    foreach ($swot as $key) {
				                      if ($key['titre'] == 'Faiblesses') {
				                        ?>
				                       <a href="javascript:void(0);" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>"  style="color:grey;"

				                        >

				                        <p>
				                          <font color="black">
				                            <?php
				                            echo($key['sujet']);
				                            ?>
				                          </font>
				                          
				                        </p>
				                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>

				                     <?php 
				                    foreach ($swot2 as $key) {
				                      if ($key['titre'] == 'Faiblesses') {
				                        ?>
				                        <a  style="color:red;" class="editer" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>" >

					                        <p>
					                          <font color="red">
					                            <?php
					                            echo($key['sujet']);
					                            ?>
					                          </font>

					                          <a   href="<?php echo base_url();?>admin/operation_swot/delete/<?php echo $key['idswot'];?>/<?php echo($key['student_id']) ?>" style="color:red;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('delete');?>"></i></a>
					                          
					                        </p>
					                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>


				                    
				                  </td>
				                </tr>
				                <tr>
				                  
				                  <td>

				                     <h4>Opportunités</h4>

				                     <?php 
				                    foreach ($swot as $key) {
				                      if ($key['titre'] == 'Opportunités') {
				                        ?>
				                       <a href="javascript:void(0);" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>"  style="color:grey;"

				                        >

				                        <p>
				                          <font color="black">
				                            <?php
				                            echo($key['sujet']);
				                            ?>
				                          </font>
				                           
				                        </p>
				                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>

				                     <?php 
				                    foreach ($swot2 as $key) {
				                      if ($key['titre'] == 'Opportunités') {
				                        ?>
				                        <a  style="color:red;" class="editer" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>" >

					                        <p>
					                          <font color="red">
					                            <?php
					                            echo($key['sujet']);
					                            ?>
					                          </font>

					                         <a   href="<?php echo base_url();?>admin/operation_swot/delete/<?php echo $key['idswot'];?>/<?php echo($key['student_id']) ?>" style="color:red;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('delete');?>"></i></a>
					                          
					                        </p>
					                          
				                        
				                        </a>



				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>

				                  </td>

				                  <td>

				                    <h4>Menaces</h4>


				                    <?php 
				                    foreach ($swot as $key) {
				                      if ($key['titre'] == 'Menaces') {
				                        ?>
				                       <a href="javascript:void(0);" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>"  style="color:grey;"

				                        >

				                        <p>
				                          <font color="black">
				                            <?php
				                            echo($key['sujet']);
				                            ?>
				                          </font>
				                           
				                        </p>
				                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>

				                     <?php 
				                    foreach ($swot2 as $key) {
				                      if ($key['titre'] == 'Menaces') {
				                        ?>
				                        <a  style="color:red;" class="editer" idswot="<?php echo($key['idswot']) ?>" sujet="<?php echo($key['sujet']) ?>" >

					                        <p>
					                          <font color="red">
					                            <?php
					                            echo($key['sujet']);
					                            ?>
					                          </font>

					                          <a   href="<?php echo base_url();?>admin/operation_swot/delete/<?php echo $key['idswot'];?>/<?php echo($key['student_id']) ?>" style="color:red;"><i style="font-size:15px;" class="fa fa-trash" data-toggle="tooltip" data-placement="top" data-original-title="<?php echo('delete');?>"></i></a>
					                          
					                        </p>
					                          
				                        
				                        </a>


				                       
				                       <?php
				                      }
				                     
				                    }

				                     ?>


				                   
				                  </td>
				                </tr>

				              </thead>
				              
				            </table>

	                    <!-- /Canvas -->


	                </div>
	            </div>
	        </div>
	    </div>
    </main>
	<!-- fin canavas -->
	
</div>
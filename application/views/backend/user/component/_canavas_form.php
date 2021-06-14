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
							<h4 class="text-muted text-center">Lean Canvas</h4>
						</div>
						<div class="col-md-4">
							<a href="<?= base_url() ?>user/detail_entreprise/<?php echo($student_id) ?>" class="text-muted pull-right">
								<i class="fa fa-refresh"> retourner en arrière!</i>
							</a>
						</div>
					</div>

	            	
	            </div>
	        </div>
	        <div class="element-wrapper">
	            <div class="element-box-tp">

	                <div class="table-responsive">

	                    <!-- Canvas -->
	                    <table id="bizcanvas" cellspacing="0" border="1">
	                        <!-- Upper part -->
	                        <tr>
	                            <td colspan="2" rowspan="2">
	                                <h4>Problème</h4>

	                                <?php 
					                  foreach ($link_canavas1 as $key) {
					                    if ($key['titre'] == 'Problème') {
					                      ?>




	                                    <a href="javascript:void(0);"
		                                    
		                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
		                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
		                                    message="<?php echo($key['message']) ?>">
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
					                  foreach ($link_canavas2 as $key) {
					                    if ($key['titre'] == 'Problème') {
					                      ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>

					                                



					                                <?php
					                    }
					                   
					                  }

					                   ?>
	                            </td>
	                            <td colspan="2">
	                                <h4>Solution</h4>


	                                <?php 
					                  foreach ($link_canavas1 as $key) {
					                    if ($key['titre'] == 'solution') {
					                      ?>




					                                <a href="javascript:void(0);"
					                                    
					                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['message']) ?>">
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
					                  foreach ($link_canavas2 as $key) {
					                    if ($key['titre'] == 'solution') {
					                      ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>


					                                <?php
					                    }
					                   
					                  }

					                   ?>


	                            </td>
	                            <td colspan="2" rowspan="2">
	                                <h4>Proposition de valeur unique</h4>

	                                <?php 
					                  foreach ($link_canavas1 as $key) {
					                    if ($key['titre'] == 'proposition de valeur unique') {
					                      ?>




					                                <a href="javascript:void(0);"
					                                    
					                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['message']) ?>" >
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
					                  foreach ($link_canavas2 as $key) {
					                    if ($key['titre'] == 'proposition de valeur unique') {
					                      ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



					                                <?php
					                    }
					                   
					                  }

					                   ?>
	                            </td>
	                            <td colspan="2">
	                                <h4>Avantage déloyale</h4>

	                                <?php 
					                  foreach ($link_canavas1 as $key) {
					                    if ($key['titre'] == 'avantage déloyale') {
					                      ?>

					                                <a href="javascript:void(0);"
					                                    
					                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['message']) ?>" >
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
					                  foreach ($link_canavas2 as $key) {
					                    if ($key['titre'] == 'avantage déloyale') {
					                      ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



					                                <?php
					                    }
					                   
					                  }

					                   ?>



	                            </td>
	                            <td colspan="2" rowspan="2">
	                                <h4>Segments de clients</h4>

	                                <?php 
						              foreach ($link_canavas1 as $key) {
						                if ($key['titre'] == 'segment de client') {
						                  ?>

						                                <a href="javascript:void(0);"
						                                    
						                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
						                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
						                                    message="<?php echo($key['message']) ?>" >
						                                    <p>
						                                        <font color="black">
						                                            <?php
						                        echo($key['sujet']);
						                        ?>
						                                        </font>
						                                        
						                                </a>



						                                <?php
						                }
						               
						              }

						               ?>

	                                <?php 
						              foreach ($link_canavas2 as $key) {
						                if ($key['titre'] == 'segment de client') {
						                  ?>
						                               <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>


						                                <?php
						                }
						               
						              }

						               ?>




	                            </td>
	                        </tr>

	                        <!-- Lower part -->
	                        <tr>
	                            <td colspan="2">
	                                <h4>Indicateurs Clés</h4>

	                                <?php 
						              foreach ($link_canavas1 as $key) {
						                if ($key['titre'] == 'indicateur') {
						                  ?>

						                                <a href="javascript:void(0);"
						                                    
						                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
						                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
						                                    message="<?php echo($key['message']) ?>" >
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
					              foreach ($link_canavas2 as $key) {
					                if ($key['titre'] == 'indicateur') {
					                  ?>
					                               <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



					                                <?php
					                }
					               
					              }

					               ?>



	                            </td>
	                            <td colspan="2">
	                                <h4>Canaux</h4>


	                                <?php 
						              foreach ($link_canavas1 as $key) {
						                if ($key['titre'] == 'canaux') {
						                  ?>

						                                <a href="javascript:void(0);"
						                                    
						                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
						                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
						                                    message="<?php echo($key['message']) ?>" >
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
					              foreach ($link_canavas2 as $key) {
					                if ($key['titre'] == 'canaux') {
					                  ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



					                                <?php
					                }
					               
					              }

					               ?>


	                            </td>
	                        </tr>
	                        <tr>
	                            <td colspan="5">
	                                <h4>Structure des coûts</h4>

	                                <?php 
						              foreach ($link_canavas1 as $key) {
						                if ($key['titre'] == 'structure des coûts') {
						                  ?>

						                                <a href="javascript:void(0);"
						                                    
						                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
						                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
						                                    message="<?php echo($key['message']) ?>" >
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
						              foreach ($link_canavas2 as $key) {
						                if ($key['titre'] == 'structure des coûts') {
						                  ?>
						                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



						                                <?php
						                }
						               
						              }

						               ?>





	                            <td colspan="5">
	                                <h4>Sources de revenus</h4>


	                                <?php 
						              foreach ($link_canavas1 as $key) {
						                if ($key['titre'] == 'sources revenus') {
						                  ?>

						                                <a href="javascript:void(0);"
						                                    
						                                    style="color:grey;" idlink="<?php echo($key['idlink']) ?>"
						                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
						                                    message="<?php echo($key['message']) ?>" >
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
					              foreach ($link_canavas2 as $key) {
					                if ($key['titre'] == 'sources revenus') {
					                  ?>
					                                <a href="javascript:void(0);"
					                                   class="text-success editer"
					                                    style="color:greenyellow;" idlink="<?php echo($key['idlink']) ?>"
					                                    titre="<?php echo($key['titre']) ?>" sujet="<?php echo($key['sujet']) ?>"
					                                    message="<?php echo($key['sujet']) ?>">

					                                    <p>
					                                        <font class="text-danger">
					                                            <?php
										                          echo($key['sujet']);
										                          ?>
					                                        </font>

					                                         <a 
					                                            href="<?php echo base_url();?>user/operation_canavas/delete/<?php echo $key['idlink'];?>/<?php echo $key['student_id'];?>"
					                                            style="color:red;"><i style="font-size:15px;"
					                                                class="fa fa-trash"
					                                                data-toggle="tooltip" data-placement="top"
					                                                data-original-title="<?php echo ('delete');?>"></i>
					                                        </a>

					                                       
					                                    </p>

					                                </a>



					                                <?php
					                }
					               
					              }

					               ?>



	                            </td>
	                        </tr>
	                    </table>
	                    <!-- /Canvas -->


	                </div>
	            </div>
	        </div>
	    </div>
    </main>
	<!-- fin canavas -->
	
</div>
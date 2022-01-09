<?php 

	$url;
	$chart_data = '';

	$titre2 ="";


	if (isset($dates1) && isset($dates2)) {
		if ($dates1 !='' && $dates2 !='') {

		 $url = "impression_pdf_presence_filtrage/".$dates1."/".$dates2;
		 $titre2 = "Statistique sur la présence des entreprises du ".nl2br(substr(date(DATE_RFC822, strtotime($dates1)), 0, 23))." au ".nl2br(substr(date(DATE_RFC822, strtotime($dates2)), 0, 23));

          $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_presence WHERE jour BETWEEN '".$dates1."' AND '".$dates2."' GROUP BY sexe");
         
          if ($detail3->num_rows() > 0) {
              foreach ($detail3->result_array() as $key) {

              	$sexe = "Ceo de Start-up  de genre:".$key["sexe"];

                 $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
              }

              $chart_data = substr($chart_data, 0, -2);
              // echo($chart_data);
          }
          else{

          }



		}
		else{
			$url = "presence";
			$titre2 = "Statistique sur la présence des entreprises du ";
		}


	}
	else{



          $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_presence GROUP BY sexe");
                   
          if ($detail3->num_rows() > 0) {
                  foreach ($detail3->result_array() as $key) {

                  	$sexe = "Ceo de Start-up  de genre: ".$key["sexe"];

                     $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
                  }

                  $chart_data = substr($chart_data, 0, -2);
                  // echo($chart_data);
          }
          else{

          }

		$url = "presence";
		$titre2 = "Statistique sur la présence des entreprises du ";
	}


?>
<div class="col-md12">
	<div class="row">

		<!-- debut de script date presence de jours -->
		<div class="col-md-12 row">
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="col-md-12">
					<form class="row" method="post" action="<?php echo(base_url()) ?>user/statPresenceEntreprise">

						<div class="col-2 mb-4">
							<a href="<?php echo(base_url()) ?>user/<?php echo($url) ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-print"></i>PDF</a>
						</div>

						<div class="col-4">
							<div class="form-group col-md-12">
		                        
		                           <select  name="date1" id="date1" class="form-control selectpicker" data-live-search="true">
		                           	<?php 
		                           	if ($dates->num_rows() > 0) {
		                           		?>
		                           		<option value="">Selectionnez la date</option>
		                           		<?php
		                           		foreach ($dates->result_array() as $key) {
		                           			?>
		                           			<option value="<?php echo($key['jour']) ?>">
		                           				<?php echo(

		                           					nl2br(substr(date(DATE_RFC822, strtotime($key['jour'])), 0, 23))

		                           				) ?>
		                           					
		                           				</option>
		                           			<?php
		                           		}
		                           	}
		                           	else{

		                           		?>
		                           		<option value="">Aucune date n'est diponible</option>
		                           		<?php
		                           	}
		                           	?>
		                           	
		                           </select> 
		                    </div>

						</div>

						<div class="col-4">
							
							<div class="form-group col-md-12">
		                        
		                           <select  name="date2" id="date2" class="form-control selectpicker" data-live-search="true">
		                           	<?php 
		                           	if ($dates->num_rows() > 0) {
		                           		?>
		                           		<option value="">Selectionnez la date</option>
		                           		<?php
		                           		foreach ($dates->result_array() as $key) {
		                           			?>
		                           			<option value="<?php echo($key['jour']) ?>">
		                           				<?php echo(

		                           					nl2br(substr(date(DATE_RFC822, strtotime($key['jour'])), 0, 23))

		                           				) ?>
		                           					
		                           				</option>
		                           			<?php
		                           		}
		                           	}
		                           	else{

		                           		?>
		                           		<option value="">Aucune date n'est diponible</option>
		                           		<?php
		                           	}
		                           	?>
		                           	
		                           </select> 
		                    </div>


						</div>

						<div class="col-2">
							<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Envoyer</button>
						</div>

					</form>
					<hr>
				</div>
				
			</div>

			<div class="col-md-2"></div>
		</div>



		<!-- SCRIPT POUR LES STATISTIQUES -->
		<!-- debit de statistique -->
		<div class="col-md-12">


		    <div class="col-lg-12">
		        <div class="row">

	            <!-- fin de blocs  -->

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-4 col-md-6 mb-4">
	                <div class="card border-left-primary shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
	                                   Nombre Total de ceo musculins</div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_personne_m); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    <i class="fas fa-male fa-2x text-gray-300"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Earnings (Annual) Card Example -->
	            <div class="col-xl-4 col-md-6 mb-4">
	                <div class="card border-left-success shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
	                                   Nombre Total de ceo feminins </div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_personne_f); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    
	                                    <i class="fas fa-female fa-2x text-gray-300"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Tasks Card Example -->
	            <div class="col-xl-4 col-md-6 mb-4">
	                <div class="card border-left-info shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre total de start-ups
	                                </div>
	                                <div class="row no-gutters align-items-center">
	                                    <div class="col-auto">
	                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_total_presence); ?></div>
	                                    </div>
	                                    <div class="col">
	                                        <div class="progress progress-sm mr-2">
	                                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="<?php echo(base_url()) ?>user/entreprise">
	                                    
	                                    <i class="fas fa-university fa-2x text-gray-300"></i>
	                                </a>
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	          
	            
	        </div>
	    </div>

		<!-- fin de statistique -->
		<!-- fin script statistique -->


		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mb-2">
					<div class="card">
						<div class="card-header text-center bg-hub">
							<i class="fa fa-line-chart fa-lg mr-1"></i> <?php echo($titre2) ?>
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-header text-center bg-hub">
							<i class="fa fa-pie-chart fa-lg mr-1"></i> <?php echo($titre2) ?>
						</div>
						<div class="card-body">
							<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
						</div>
					</div>
					 
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">

					<!-- /.mailbox-controls -->
	                
	                <!-- /.mailbox-read-message -->
					
				</div>
			</div>
		</div>

	</div>
</div>




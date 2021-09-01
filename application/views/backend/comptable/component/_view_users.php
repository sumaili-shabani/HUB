<div class="col-md-12">
	<div class="row">
		<!-- stat global -->
		<div class="col-lg-12">
        	<div class="row">

            <!-- fin de blocs  -->

	            <!-- Earnings (Monthly) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	                <div class="card border-left-primary shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
	                                    Nombre Total des start-ups</div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($entreprises); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    <i class="fas fa-home fa-2x text-gray-300"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Earnings (Annual) Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	                <div class="card border-left-success shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
	                                    Nombre Total des coachs </div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($formateurs); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    
	                                    <i class="fas fa-tag fa-2x text-gray-300"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Tasks Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	                <div class="card border-left-info shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre Total des comptables
	                                </div>
	                                <div class="row no-gutters align-items-center">
	                                    <div class="col-auto">
	                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($comptables); ?></div>
	                                    </div>
	                                    <div class="col">
	                                        <div class="progress progress-sm mr-2">
	                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    
	                                    <i class="fas fa-university fa-2x text-gray-300"></i>
	                                </a>
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Pending Requests Card Example -->
	            <div class="col-xl-3 col-md-6 mb-4">
	                <div class="card border-left-warning shadow h-100 py-2">
	                    <div class="card-body">
	                        <div class="row no-gutters align-items-center">
	                            <div class="col mr-2">
	                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
	                                    Nombre Total des administrateurs </div>
	                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($admins); ?></div>
	                            </div>
	                            <div class="col-auto">
	                                <a href="javascript:void(0);">
	                                    
	                                    <i class="fas fa-group fa-2x text-gray-300"></i>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            
	        </div>
    	</div>
    	<!-- fin -->

    	<?php 

			$chart_data = '';
			$url = '';

			$detail3 = $this->db->query("SELECT COUNT(id) AS nombre, nom FROM profile_user  GROUP BY idrole");
			if ($detail3->num_rows() > 0) {
			          foreach ($detail3->result_array() as $key) {

			          	$sexe = "catégorie :".$key["nom"];

			             $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
			          }

			          $chart_data = substr($chart_data, 0, -2);
			          // echo($chart_data);
			}
			else{

			}

		?>

		<!-- debit -->
		<div class="col-xl-12 col-md-6 mb-4">
			<div class="row">
				<div class="col-md-6 mb-2 mt-2">
					<div class="card">
						<div class="card-header bg-hub text-white text-center">
							Statistiques sur les personnes par rapport à leur catégorie 
						</div>
						<div class="card-body">
							<div id="chartContainer" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6 mt-2">
					<div class="card">
						<div class="card-header bg-hub text-white text-center">
							Statistiques sur les personnes par rapport à leur catégorie
						</div>
						<div class="card-body">
							<div id="chartContainer2" style="height: 200px; width: 100%;"></div>
						</div>
					</div>
					 
				</div>
			</div>
			
		</div>
		<!-- fin -->


		
	</div>
</div>
<!-- debit de statistique -->
<div class="row">


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
                                    Nombre Total des paiements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_paie); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>comptable/paiement_normale">
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
                                    Nombre des paiements en attente </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_paie_padding); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?php echo(base_url()) ?>comptable/paiement_pading">
                                    
                                    <i class="fas fa-dollar fa-2x text-gray-300"></i>
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
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Nombre Total des coachs
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo($nombre_coach); ?></div>
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
                                    Nombre D'utilisateurs de comptables </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($nombre_comptable); ?></div>
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

<!-- fin de statistique -->

<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
			<div class="row">

                <div class="col-md-3"></div>

				<div class="col-md-6">
				  <div class="card">
				    <div class="card-header text-white bg-hub">
				      Statistiques de paiement par rapport aux dates
				    </div>
				    <div class="card-body">
				      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
				    </div>
				  </div>
				</div>
                
                <div class="col-md-3"></div>



			</div>
		</div>
	</div>
</div>
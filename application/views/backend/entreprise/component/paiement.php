<!-- paiement -->
<div class="col-md-12 mb-5" style="margin-top: 20px;">
	
	<div class="form-group col-md-12">
		<div class="row">
			<div class="col-md-12 card">
				<form class="row card-body" method="post" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/add_paiement/<?php echo($identrepE) ?>">

					<div class="form-group col-md-12 mb-2" style="margin-top: 10px;">
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


					<div class="col-md-12 mb-4">
		
						<div class="col-md-12" style="margin-top: 15px;">
							<div class="row">
								
								<div class="col-md-7 mb-2">
									<div class="col-md-12">
										<b><img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;"> &nbsp; M-pesa:</b> + 243 817883541 <br>
										<b><img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 20px; width: 50px;"> &nbsp;  Airtel-money:</b> + 243 970524665
									</div>
								</div>
								<div class="col-md-5 mb-2">
									<i class="fa fa-info"></i> ce-ci n'est pas un module de paiement mais plutot une preuve de votre paiement après validation de votre transaction
								</div>
								<div class="col-md-12 mb-2">
								<i class="fa fa-check"></i>	Après avoir transfé l'argent sur m-pesa ou airtel monney dans les numéros ci-haut, Vellez confirmer votre paiement En renseignant les informations requises. 

								</div>
							</div>
							
						</div>
						<hr>
					</div>

					<div class="col-md-12">
						<div class="row">

							<div class="col-md-12 mb-2">
								<label><i class="fa fa-money"></i> Selectionction un mode de paiement</label>
								<select name="motif" id="motif" class="form-control motif" required>
									<option value="">Selectionction un mode de paiement</option>
									<option selected value="m-pesa">m-pesa</option>
									<option value="airtel money">airtel money</option>
								</select>
							</div>

							<div class="col-md-12 mb-2">
								<label><i class="fa fa-key"></i> Saisissez le code de vérification de transation</label>
								<input type="text"  name="token" class="form-control token" placeholder="code de transation envoyé par le réseau après votre paiement">

							</div>

							<div class="col-md-6 mb-2">
								<div class="col-md-12 vodacom" style="margin-top: 10px; display: show">
									<img src="<?php echo(base_url()) ?>upload/module/m-pesa.com.png" class="img-thumbnail img-responsive">
								</div>

								<div class="col-md-12 airtel" style="margin-top: 10px; display: none;">
									<img src="<?php echo(base_url()) ?>upload/module/airtel.jpg" class="img-thumbnail img-responsive">
								</div>

								
							</div>

							<div class="col-md-6 mb-2">
								<label><i class="fa fa-pencil"></i> Entrez le montant</label>
								<input type="number" min="1" name="montant" class="form-control montant" placeholder="50 $" required>

								<input type="submit" name="valuder" value="Valider votre paiement" class="btn btn-outline-success btn-block hub" style="margin-top: 10px;">

								
							</div>



							


							
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<div class="col-md-12 form-group" style="margin-top: 10px;"></div>
</div>
<!-- fin -->
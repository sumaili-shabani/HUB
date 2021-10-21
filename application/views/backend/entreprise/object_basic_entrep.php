
<div class="col-md-12">

	<!-- form commence -->
	<form method="post" id="user_form" enctype="multipart/form-data" action="<?= base_url(); ?>entreprise/modification_panel_entreprise">
	<div class="col-lg-12">
		<div class="row">

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


        	<div class="col-md-12">
        		<label class="label-control"><i class="fa fa-user"></i> Entrer votre nom de l'entreprsie</label>

					 <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrer votre nom de l'entreprsie" value="<?php echo($nomE) ?>">
					 <div class="col-md-12">
		          	<span class="text-danger"><?php echo form_error('nom'); ?></span>
		         </div>
        	</div>

        	


	        <!-- script des category -->
	        <div class="col-md-6">
				<div class="form-group jf-inputwithicon">
					<label><i class="fa fa-tag"></i> category

					 d'entreprise</label>
					<select data-placeholder="votre pays" name="idcat" class="form-control" required="">
						<?php 
							if ($category->num_rows() > 0) {
								foreach ($category->result_array() as $key) {
									?>
									<option value="<?php echo($key['idcat']) ?>"><?php echo($key['nomcat']) ?></option>
									<?php
								}
							}

						?>
						
					</select>
					</span>
				</div>
				
			</div>
			<!-- fin category -->

			<!-- type d'entreprise -->
			<div class="col-md-6">
				<div class="form-group jf-inputwithicon">
					<label><i class="fa fa-tag"></i> Type d'entreprise</label>
					<select data-placeholder="type d'entreprise" name="typeEntrep" required="" class="form-control">
						<option value="public" 
						<?php
						if ($typeEntrepE == 'public') {
						 	echo("selected");
						 } 
						 ?>
						>public</option>
						<option value="privée" 
						<?php
						if ($typeEntrepE == 'privée') {
						 	echo("selected");
						 } 
						 ?>
						>privée</option>
						<option value="gouvernementale" 
						<?php
						if ($typeEntrepE == 'gouvernementale') {
						 	echo("selected");
						 } 
						 ?>
						>gouvernementale</option>
						<option value="non gouvernementale" 
						<?php
						if ($typeEntrepE == 'non gouvernementale') {
						 	echo("selected");
						 } 
						 ?>
						>non gouvernementale</option>
					</select>
					</span>
				</div>
				
			</div>
			<!-- fin type d'entreprise -->

	       

	        <!-- Site web -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-phone"></i> Site web</label>
	       
	        	<input type="url" name="siteweb" id="siteweb" class="form-control" placeholder="https://www.nomdomai.com" value="<?php echo($sitewebE) ?>">
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('siteweb'); ?></span>
	           </div>
	         
	        </div>

	        <!-- fin Site web -->

	        <div class="col-md-6">
				<div class="form-group jf-inputwithicon">
					<label class="label-control"><i class="fa fa-group"></i> Nombre d'employés</label>
					<select data-placeholder="nombreEmploye" name="nombreEmploye" required="" class="form-control">
						<option value="10-50"
						<?php
						if ($nombreEmployeE == '10-50 employés') {
						 	echo("selected");
						 } 
						 ?>
						 >10-50 employés</option>
						<option value="50-100" 
						<?php
						if ($nombreEmployeE == '50-100 employés') {
						 	echo("selected");
						 } 
						 ?>
						>50-100 employés</option>
						<option value="100-200" 
						<?php
						if ($nombreEmployeE == '100-200 employés') {
						 	echo("selected");
						 } 
						 ?>
						>100-200 employés</option>
						
					</select>
					</span>
				</div>
				
			</div>
			<!-- fin nombre employe -->

	        
	        <!-- script des adresses -->

	        <div class="col-md-6">
			<div class="form-group jf-inputwithicon">
				<label><i class="fa fa-tag"></i> Selectionner le pay</label>
				<select data-placeholder="votre pays" name="idPays" class="form-control" required="">
					<?php 
					if ($pays->num_rows() > 0) {
						?>
						<option value="">Selectionnez votre pays</option>
						<?php
						foreach ($pays->result_array() as $key2) {
							?>
							<option selected value="<?php echo($key2['idPays']) ?>"><?php echo($key2['nompays']) ?></option>
							<?php
						}
					}

					 ?>
					
				</select>
				</span>
			</div>
			
		</div>


		<div class="col-md-6">
			<div class="form-group jf-inputwithicon">
				<label><i class="fa fa-tag"></i> Selectionner la province</label>

				<select data-placeholder="votre province" name="idprovince" id="id_province" class="form-control" required>
					<?php 
					if ($provinces->num_rows() > 0) {
						?>
						<option value="">Selectionnez votre province</option>
						<?php
						foreach ($provinces->result_array() as $key2) {
							?>
							<option value="<?php echo($key2['idp']) ?>"><?php echo($key2['nomp']) ?></option>
							<?php
						}
					}

					 ?>
					
				</select>
				</span>
			</div>
			
		</div>

		<div class="col-md-6">
			<div class="form-group jf-inputwithicon">
				<label><i class="fa fa-tag"></i> Selectionner la ville</label>
				<select data-placeholder="votre ville" name="idville" id="id_ville" class="form-control" required>
					
					
				</select>
				</span>
			</div>
			
		</div>





	        <!-- date de facebook -->
	        <div class="col-md-6">
	        	<label class="label-control"><i class="fa fa-facebook"></i> Complèter url facebook</label>
	       
	        	<input type="url" name="facebook" id="full_adresse" class="form-control" value="<?php echo($facebookE) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('facebook'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de facebook -->

	        <!-- date de twitter -->
	        <div class="col-md-12">
	        	<label class="label-control"><i class="fa fa-twitter"></i> Complèter url twitter</label>
	       
	        	<input type="url" name="twitter" id="twitter" class="form-control" value="<?php echo($twitterE) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('twitter'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de twitter -->

	        <!-- date de linkedin -->
	        <div class="col-md-12 mb-2">
	        	<label class="label-control"><i class="fa fa-linkedin"></i> Complèter url linkedin</label>
	       
	        	<input type="url" name="linkedin" id="linkedin" class="form-control" value="<?php echo($linkedinE) ?>" >
	           <div class="col-md-12">
	          	 <span class="text-danger"><?php echo form_error('linkedin'); ?></span>
	           </div>
	         
	        </div>
	        <!-- fin date de linkedin -->

	        <div class="col-md-12 mb-2">
	        	<label class="label-control"><i class="fa fa-book"></i> Entrer la description de votre entreprise</label>
	       
	        	<textarea name="description" class="form-control textarea" placeholder="La description de l'entreprise" rows="5">
	        		<?php echo($descriptionE) ?>
	        	</textarea>
	           
	        </div>

	         
	        
	        <div class="col-md-12">
	        	<div class="form-group">

	        		<input type="hidden" name="idp" id="idp" value="<?php echo($idpE) ?>" />
	        		<input type="hidden" name="idv" id="idv" value="<?php echo($idvE) ?>" />


	        		<input type="hidden" name="operation" id="operation" value="Add" />

	        		<input type="submit" name="action" id="action" class="btn btn-hub btn-round pull-right" value="modifier" />
	        	</div>
	        </div>
			
		</div>
	</div>
	

	</form>
	<!-- fin forme -->
	
</div>
		
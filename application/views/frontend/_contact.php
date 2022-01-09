<div class="col-md-12">
	<div class="row">
		<!-- bloc 1 -->
		<div class="col-md-6">

			
			

			<div class="col-md-12" id="contact_info">

	    		<form method="post" id="user_form" enctype="multipart/form-data" class="form-contact">
	                <div class="row g-3">
	                    <div class="col-md-12" align="center">
	                        <div align="center" class="text-center" style="text-align: center;">
	                         Comment pouvons-nous vous aider?
	                    	</div>
	                        
	                    </div>
	                    
	                    <div class="col-12">

	                    	<div class="form-group">
	                           
	                            <div class="form-control-wrap">
	                                <input type="text" name="name" id="name" class="form-control form-control-lg bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" placeholder="Entrez votre nom">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                           
	                            <div class="form-control-wrap">
	                                <input type="text" name="subject" id="subject" class="form-control form-control-lg bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" placeholder="Entrez votre sujet">
	                            </div>
	                        </div>

	                         <div class="form-group">
	                           
	                            <div class="form-control-wrap">
	                                <input type="email" name="email" id="email" class="form-control form-control-lg bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" placeholder="Entrez votre adresse mail ">
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            
	                            <div class="form-control-wrap">
	                                <div class="form-editor-custom">
	                                    <textarea name="message" id="message"  class="form-control form-control-lg no-resize bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" placeholder="Taper votre message"></textarea>
	                                    <div class="form-editor-action">
	                                        <a class="link collapsed" data-toggle="collapse" href="#filedown" aria-expanded="false" style="font-size: 14px;"><i class="fa fa-file"></i> Attacher un fichier</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div><!-- .col -->
	                    <div class="col-12">
	                        <div class="choose-file">
	                            <div class="form-group collapse" id="filedown" style="">
	                                <div class="support-upload-box">
	                                    <div class="upload-zone dropzone dz-clickable">
	                                        <div class="dz-message" data-dz-message="">
	                                           
	                                            <input type="file" name="user_image" id="user_image" class="form-control">

	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div><!-- .col -->

	                    <div class="col-12">
	                    	<div class="row">
	                    		<div class="col-4"></div>
	                    		<div class="col-4" align="center">
	                    			<button type="submit" class="btn btn-info btn-xs"> <i class="fa fa-globe"></i> Envoyer</button>
	                    		</div>
	                    		<div class="col-4"></div>
	                    	</div>
	                    </div>
	                    
	                </div><!-- .row -->
	            </form><!-- .form-contact -->
	    		
	    	</div>


		</div>
		<!-- fin bloc 1 -->

		<!-- bloc 2 -->
		<div class="col-md-6">

			<?php 

		
				if ($contact_info_site->num_rows() <= 0) {
					# code...
				}
				else{

					foreach ($contact_info_site->result_array() as $row) {

							?>

							<div class="col-12" style="font-size: 16px;">
								<div class="form-group">
									<div class="col-md-12">
								        <h5>Nous serons ravis de vous rencontrer et de répondre à vos préoccupations. </h5>
								        <!-- <p>Pour cela, servez-vous de nous contacter et n'hesitez pas surtout de poser des questions afin de savoir plus sur nous!</p> -->
								     </div>
								     <!-- End Title -->
								   <div class="col-md-12">
								   	 <label class="form-label"><span>Contactez nous au!!!  </span><i class="fa fa-info"></i></label>
								   </div> 
								    <div class="col-md-12">
								    	<ul class="text-soft">
									    	<li class="nav-item">
									    		<span class="text-info"><i class="fa fa-google"></i> Adresse email:</span>  <span class="text-primary"><?php echo($row['email']); ?></span>
									    	</li>
									    	<li>
									    		<span class="text-info"><i class="fa fa-phone"></i> Numéro de téléphone Principal:</span>  <a href="tel:<?php echo($row['tel1']); ?>"><?php echo($row['tel1']); ?> </a>
									    	</li>
									    	<li>
									    		<span class="text-info"><i class="fa fa-phone"></i> Autre Numéro de téléphone:</span>  <a href="tel:<?php echo($row['tel2']); ?>"><?php echo($row['tel2']); ?></a>
									    	</li>
									    	<li>
									    		<span class="text-info"><i class="fa fa-map-marker"></i> Adresse: </span>  <span class="text-soft"><?php echo(nl2br($row['adresse'])); ?></span>
									    	</li>
									    </ul>
								    </div>

								</div>

							</div><!-- .col -->
							
							<?php
						
						# code...
					}
				}


			?>
			
		</div>
		<!-- fin bloc 2 -->

		<!-- bloc 3 -->
		<div class="col-md-12" style="margin-top: 10px;">
			<!-- script pour la carte géographique -->
			  <div class="embed-responsive embed-responsive-16by9 col-lg-12" style="width: 100%; height: 400px;">
			      <!-- <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1Q5K5fz4UoKKXxKVu6KdZhVNrYZ4UScBy" allowfullscreen></iframe> -->

			     
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1038392078676!2d29.214706514103128!3d-1.679743536654087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd0f77dd21b51f%3A0x581b3fa6f38a8eac!2sUn%20Jour%20Nouveau%20Center!5e0!3m2!1sfr!2scd!4v1629463322524!5m2!1sfr!2scd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

			  </div>
			<!-- fin de ces scripts -->
		                

		</div><!-- .col -->
		<!-- fin bloc 3 -->



	</div>
</div>
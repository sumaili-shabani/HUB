 <!-- CTA Section -->
      <div class="container space-bottom-2">
          <div class="text-center py-6" style="background: url(<?php echo base_url(); ?>js/dev/assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
              <h2>Nos partenaires</h2>
              <p>Ils nous accompagnent dans notre aventure entrepreneuriale et nous font confiance.</p>

               <!-- Clients Section -->
                <div class="container space-top-1 space-top-lg-0">
                    <div class="w-lg-80 mx-lg-auto">
                        <div class="row justify-content-center">

                        	<?php 
							    if ($t_info_partainare->num_rows()>0) {
							    	# code...
							    	foreach ($t_info_partainare->result_array() as $key) {
							    		# code...
							    		?>
									   
							    		<div class="col-4 col-sm-3 col-md mb-4">
			                                <a href="<?php echo($key['url']) ?>" target="_blank">
			                                	<img class="max-w-11rem max-w-md-13rem mx-auto" src="<?php echo base_url(); ?>upload/galery/<?php echo($key['image']) ?>" alt="Image Description">
			                                </a>
			                            </div>

								        
							    		<?php
							    	}
							    }
								else{

								}
							?>
                        	
                            
                            
                        </div>
                    </div>
                </div>
                <!-- End Clients Section -->
             
          </div>
      </div>
      <!-- End CTA Section -->

      <div class="col-md-12">

        <div class="container">
          <div class="col-md-12">

            <!-- SVG Shapes -->
            <figure class="position-absolute top-0 left-0 mt-10 ml-10">
                <img src="<?php echo base_url(); ?>js/dev/assets/svg/components/abstract-shapes-11.svg" alt="SVG">
            </figure>
            <figure class="max-w-15rem w-100 position-absolute bottom-0 right-0">
                <div class="mb-n7 mr-n7">
                    <img class="img-fluid" src="<?php echo base_url(); ?>js/dev/assets/svg/components/dots-1.svg" alt="Image Description">
                </div>
            </figure>
            <!-- End SVG Shapes -->
            
          </div>
        </div>
      
      </div>

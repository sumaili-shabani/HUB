<div id="aboutSection" class="container space-2 space-lg-3">
      <!-- Title -->
      <div class="w-lg-65 text-center mx-auto mb-5 mb-sm-9">
        <h4 class="h2">Nos services</h4>
        <p>On t'aide à passer d'une idée à une entreprise.</p>
      </div>
      <!-- End Title -->

      <div class="row">

      	<?php 
		    if ($t_info_service->num_rows()>0) {
		    	# code...
		    	foreach ($t_info_service->result_array() as $key) {
		    		# code...
		    		?>
				   


			        <div class="col-md-4 mb-7 ">
			          <!-- Icon Blocks -->
			         <div class="col-md-12 card">
			         	 <div class="text-center px-lg-3 card-body">
				            <figure class="max-w-8rem mx-auto mb-4">
				              <img class="img-fluid" src="<?php echo base_url(); ?>upload/service/<?php echo($key['image']) ?>" alt="SVG">
				            </figure>
				            <h3><?php echo($key['titre']) ?></h3>
				            <p><?php echo($key['description']) ?></p>
				            
				          </div>
				          <!-- End Icon Blocks -->
				         </div>
			        </div>
		    		<?php
		    	}
		    }
			else{

			}
		?>
       
      </div>
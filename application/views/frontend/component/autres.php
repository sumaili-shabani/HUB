<div id="aboutSection" class="container space-2 space-lg-3">
      <!-- Title -->
      <div class="w-lg-65 text-center mx-auto mb-5 mb-sm-9">
        <h4 class="h2">Et pour t'aider à faire tout ça</h4>
        <p>Une équipe nationale d'experts.</p>
      </div>
      <!-- End Title -->

      <div class="row">

      	<?php 
		    if ($t_info_service->num_rows()>0) {
		    	# code...
		    	foreach ($t_info_service->result_array() as $key) {
		    		# code...
		    		?>
				   
		    		<?php
		    	}
		    }
			else{

			}
		?>
		<!-- bloc -->
		<div class="col-md-4 mb-7 ">
          
        </div>
        <!-- fin bloc -->

        <!-- bloc -->
		<div class="col-md-4 mb-7 ">
          <!-- Icon Blocks -->
            <div class="col-md-12 card">
         	 <div class="text-center px-lg-3 card-body">
	            
	            <h3>COACH</h3>
	            <p>Ton guide tout au long de ton incubation, il t'aidera à affiner ta proposition de valeur et à structurer ton parcours pour accéder vite et bien au marché.</p>
	            
	          </div>
	          <!-- End Icon Blocks -->
	        </div>
        </div>
        <!-- fin bloc -->

        <!-- bloc -->
		<div class="col-md-4 mb-7 "></div>
        <!-- fin bloc -->


       
      </div>
<div class="card">
    <div class="card-body">
        <div class="text-center"> 
            <img src="<?= base_url()?>upload/photo/<?php echo($logoE) ?>" class="rounded-circle" width="150" />
            <h4 class="card-title mt-10"><?php echo($nomE) ?></h4>
            <p class="card-subtitle"><?php echo(html_entity_decode(substr($descriptionE, 0,500))) ?> ...</p>
            
        </div>
    </div>
    <hr class="mb-0"> 
    <div class="card-body">

    	<div class="col-md-12">
    		<div class="row">
    			<div class="col-md-12">
    				 <small class="text-muted d-block">Adresse mail </small>
        			<h6><?php echo($email) ?></h6> 
    			</div>

    			<div class="col-md-12">
    				<small class="text-muted d-block pt-10">Téléphone</small>
        			<h6><a href="tel:<?php echo($telephone) ?>" class="link"><?php echo($telephone) ?></a></h6> 
    			</div>

    			

    			<div class="col-md-6">
    				 <small class="text-muted d-block pt-10">Pays</small>
        			 <h6><?php echo($nompaysE) ?></h6>
    			</div>

    			<div class="col-md-6">
    				  <small class="text-muted d-block pt-10">Province</small>
        				<h6><?php echo($nompE) ?></h6>
    			</div>

    			<div class="col-md-6">
    				 <small class="text-muted d-block pt-10">Ville</small>
       				 <h6><?php echo($nomvE) ?></h6>
    			</div>

    			<div class="col-md-6">

    				<small class="text-muted d-block pt-30">Suivez l'entreprise sur </small>
	                <br/>
	                <a href="<?php echo($facebookE) ?>" target="_blank" class="btn btn-circle btn-sm btn-primary"><i class="fab fa-facebook-f"></i></a>
	                <a href="<?php echo($twitterE) ?>" target="_blank" class="btn btn-circle btn-sm btn-info"><i class="fab fa-twitter"></i></a>
	                <a href="<?php echo($linkedinE) ?>" target="_blank" class="btn btn-circle btn-sm btn-danger"><i class="fab fa-linkedin"></i></a>

    			</div>
                <div class="col-md-12 text-center">
                    <hr>
                    <a href="<?php echo(base_url()) ?>admin/canavas/<?php echo($ceoE) ?>"> &nbsp;lean Canvas</a>

                    <i class="mr-2"></i>|
                    
                    <a href="<?php echo(base_url()) ?>admin/swot/<?php echo($ceoE) ?>">&nbsp;Swot personnel</a>
                    <i class="mr-2"></i>|
                    
                    <a href="<?php echo(base_url()) ?>admin/galery/<?php echo($ceoE) ?>">&nbsp;Galerie</a>
                </div>


    		</div>
    	</div> 
       
         
        

       

        

       


        <div class="map-box">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        </div> 
       
    </div>
</div>
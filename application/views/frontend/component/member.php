<div class="space-bottom-2 space-bottom-lg-3" style="background: url(<?php echo base_url(); ?>js/dev/assets/svg/components/abstract-shapes-9.svg) center no-repeat;">
      <div class="position-relative">
          <div class="container space-2">
              <!-- Title -->
              <div class="row align-items-md-center mb-7">
                  <div class="col-md-6 mb-4 mb-md-0">
                      <h2>Notre famille</h2>
                      <h4>Nous vous aidons à bien planifier votre avenir</h4>
                  </div>
                  <div class="col-md-6 text-md-right">
                      <a class="font-weight-bold" href="#">Un groupe bien qualifié <i class="fa fa-angle-right fa-sm ml-1"></i></a>
                  </div>
              </div>
              <!-- End Title -->

              <div class="js-slick-carousel slick slick-equal-height slick-gutters-3 slick-center-mode-right slick-center-mode-right-offset" data-hs-slick-carousel-options='{
                   "prevArrow": "<span class=\"fa fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-sm-n2\"></span>",
                   "nextArrow": "<span class=\"fa fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-sm-2 mr-xl-4\"></span>",
                   "slidesToShow": 5,
                   "infinite": true,
                   "responsive": [{
                     "breakpoint": 1200,
                       "settings": {
                         "slidesToShow": 4
                       }
                     }, {
                     "breakpoint": 992,
                       "settings": {
                         "slidesToShow": 3
                       }
                     }, {
                     "breakpoint": 768,
                     "settings": {
                       "slidesToShow": 2
                     }
                     }, {
                     "breakpoint": 554,
                     "settings": {
                       "slidesToShow": 1
                     }
                   }]
                 }'>

                <?php 
			    if ($t_info_member->num_rows()>0) {
			    	# code...
			    	foreach ($t_info_member->result_array() as $key) {
			    		# code...
			    		$image = base_url()."upload/photo/".$key['image'];
			    		?>
					    <!-- Article -->
	                    <article class="js-slide pt-2">
	                        <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover show_user" user_id="<?php echo($key['idtinfo_user']) ?>" href="javascript:void(0);" style="background-image: url(<?php echo ($image); ?>);">
	                            <div class="card-body">
	                                <span class="d-block small text-white-70 font-weight-bold text-cap mb-2"><?php echo($key['first_name']) ?> <?php echo($key['last_name']) ?></span>
	                                
	                            </div>
	                            <div class="card-footer border-0 bg-transparent pt-0">
	                            	<h3 class="text-white"><?php echo(substr($key['poste'], 0,15)) ?>...</h3>
	                                <span class="text-white font-size-1 font-weight-bold">Voir plus</span>
	                            </div>
	                        </a>
	                    </article>
	                    <!-- End Article -->
			    		<?php
			    	}
			    }
				else{

				}
			?>

                 
              </div>
          </div>

          <div class="w-100 w-md-65 bg-light position-absolute top-0 right-0 bottom-0 rounded-left z-index-n1"></div>
      </div>
  </div>
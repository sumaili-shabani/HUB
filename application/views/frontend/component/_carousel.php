 <?php 
    if ($carousels->num_rows()>0) {
    	# code...
    	foreach ($carousels->result_array() as $key) {
    		# code...
    		?>

    		<div class="col-md-12" style="margin-top: 20px;"></div>
    		
		    <!-- Hero Section -->
			<div class="d-lg-flex position-relative">
			<div class="container d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
			<!-- Content -->
			<div class="w-md-100">
			  <div class="row">
			    <div class="col-lg-5">
			      <div class="mb-5 mt-11">
			        <div class="display-4 mb-3">
			       
			        
			          <span class="text-muted text-highlight-warning" style="font-size: 25px; margin-top: 20px;">
			            <span class="js-text-animation"
			                  data-hs-typed-options='{
			                    "strings": ["<?php echo($key['description']) ?>", "<?php echo($key['description']) ?>", "<?php echo($key['description']) ?>."],
			                    "typeSpeed": 20,
			                    "loop": true,
			                    "backSpeed": 30,
			                    "backDelay": 2500
			                  }'></span>
			          </span>
			        </div>
			        <p class="lead">
			        	
			        	Avec notre programme de formation et d'accompagnement de 6 mois, nous t'offrons une possibilité de maitriser ton projet et de devenir plus efficace dans le domaine entrepreneurial
			        </p>
			      </div>

			      <a class="btn btn-primary btn-wide transition-3d-hover" href="javascript:void(0);">Nous te formons</a>
			      <a class="btn btn-link btn-wide" href="javascript:void(0);">Nous t'accompagnons <i class="fa fa-angle-right fa-sm ml-1"></i></a>
			    </div>
			  </div>
			</div>
			<!-- End Content -->

			<!-- SVG Shape -->
			<figure class="col-lg-7 col-xl-6 d-none d-lg-block position-absolute top-0 right-0 pr-0 ie-main-hero sm-show" style="margin-top: 5.75rem;">
			  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
			    <path fill="#DC4405" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
			      c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"/>
			    <defs>
			      <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"/>
			    </defs>
			    <clipPath id="mainHeroSVG2">
			      <use xlink:href="#mainHeroSVG1"/>
			    </clipPath>
			    <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
			      <image width="650" height="650" xlink:href="<?php echo base_url(); ?>upload/carousel/<?php echo($key['image']) ?>" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
			    </g>
			  </svg>
			</figure>
			<!-- End SVG Shape -->
			</div>
			</div>
			<!-- End Hero Section -->



    		<?php
    	}
    }
	else{

	}
?>

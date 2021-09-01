
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('_meta.php') ?>
</head>

<body>
  <!-- ========== HEADER ========== -->
 <?php include("_nav.php") ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->

    <div class="position-relative">
      <div class="bg-img-hero" style="background-image: url(<?php echo base_url(); ?>js/dev/assets/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-0 position-relative z-index-2">
          
          <?php include("component/_carousel.php") ?>


        </div>
      </div>

      <!-- SVG Shape -->
      <figure class="position-absolute bottom-0 right-0 left-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#DC4405" points="0,273 1921,273 1921,0 "/>
        </svg>
      </figure>
      <!-- End SVG Shape -->
    </div>
    
    <!-- End Hero Section -->

    <!-- Articles Section -->
    <?php include("component/personnelInfo.php") ?>
    <!-- End Articles Section -->

    <!-- Testimonials Section -->
    <?php include('component/services.php') ?>

      <img class="img-fluid d-none d-md-block w-50 mx-auto mb-7" src="<?php echo base_url(); ?>js/dev/assets/svg/components/three-pointers.svg" alt="SVG Arrow">


      <!-- Popular Categories Section -->
      <?php include("component/member.php") ?>
      <!-- End Popular Categories Section -->
     
      <!-- Popular Categories Section -->
      <?php include("component/autres.php") ?>
      <!-- End Popular Categories Section -->
       <img class="img-fluid d-none d-md-block w-50 mx-auto mb-7" src="<?php echo base_url(); ?>js/dev/assets/svg/components/three-pointers.svg" alt="SVG Arrow">
      <!-- Title -->
      <?php include('component/mini_info.php') ?>
      <!-- End Title -->
    
    
    <!-- End Features Section -->
    <?php include('component/partenaire.php') ?>
    <!-- Demo Examples Section -->

    <!-- End Testimonials Section -->
   		<?php include('component/attentes.php') ?>
    <!-- Features Section -->
   
    <!-- End Demo Examples Section -->

    <!-- Pricing Section -->
  
    <!-- End Pricing Section -->

    <!-- Tools Section -->
    
    <!-- End Tools Section -->

    <!-- Stats Section -->
    
    <!-- End Stats Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 	<?php include("_footer.php") ?>


  <?php include('_script.php') ?>

   <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            var header = new HSHeader($('#header')).init();


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();


            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });


            // INITIALIZATION OF TEXT ANIMATION (TYPING)
            // =======================================================
            var typed = $.HSCore.components.HSTyped.init(".js-text-animation");


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });


            // INITIALIZATION OF FANCYBOX
            // =======================================================
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });


            // INITIALIZATION OF SLICK CAROUSEL
            // =======================================================
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });


            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>


     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">

              <div class="modal-header bg-hub text-center">
                    <span class="nk-block-title modal-title text-white text-center">Paramètrage admin</span>

                    <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger text-white">fermer</a>
                    
                </div>
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    
                    <div class="nk-block">

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                            
                          <div class="col-md-12">
                          <div class="row">
                          	
                          	<div class="col-md-4">
                          		<span id="user_uploaded_image"></span>
                          	</div>
                          	<div class="col-md-8">
                          		<div class="col-md-12">
                          			<div class="row">

                          				<div class="col-md-6">
                              
			                              <label><i class="fa fa-user"></i> nom: <span id="first_name"></span></label>  
			                                  
			                            </div>
			                            <div class="col-md-6">
			                              <label><i class="fa fa-user"></i> postnom: <span id="last_name"></span></label>  
			                                  
			                            </div>

			                            <div class="col-md-12">
			                              <label><i class="fa fa-google"></i> email: <span id="email"></span></label>  
			                                  
			                            </div>


			                            <div class="col-md-12">
			                              <label><i class="fa fa-phone"></i> téléphone <span id="telephone"></span></label>  
			                                 
			                            </div>

			                            <div class="col-md-12">
			                            	<label><i class="fa fa-edit"></i> Fonction: <span class="etat text-primary" id="telephone"></span></label> 
			                            </div>

			                            <div class="col-md-4">
			                              <label><i class="fa fa-male"></i>Sexe: <span id="sexe"></span></label>  
			                                 
			                            </div>



			                           
			                            <div class="col-md-8 media_social form-inline" id="media_social">

			                            </div>

                          				
                          			</div>
                          		</div>
                          	</div>

                           
                          </div>
                        </div>

                        

                       

                        </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->

    <script type="text/javascript">
    	$(document).ready(function() {

    		$(document).on('click', '.show_user', function(){  

    		   $('#userModal').modal('show');
	           var id = $(this).attr("user_id");  

	           $.ajax({  
	                url:"<?php echo base_url(); ?>home/fetch_single_users_info",  
	                method:"POST",  
	                data:{id:id},  
	                dataType:"json",
	                beforeSend:function()
                    {
                       $('.etat').html('<div id="loading" style="" ></div>');
                    }, 
	                success:function(data)  
	                {  
	                      $('.etat').text(data.poste);
	                      $('#first_name').text(data.first_name);  
	                      $('#last_name').text(data.last_name); 

	                      $('#email').text(data.email);
	                      $('#telephone').text(data.telephone);
	                      
	                      $('#sexe').text(data.sexe);
	                      $('#facebook').val(data.facebook);
	                      $('#linkedin').val(data.linkedin);
	                      $('#twitter').val(data.twitter);
	                      $('#idrole').val(data.idrole);

	                      $('.modal-title').text("détail de profile et information de  "+data.first_name);
	                      $('#user_uploaded_image').html(data.user_image); 
	                      $('.media_social').html(data.media_social); 
	                }  
	           });  
	      });
    		
    	});
    </script>

</body>
</html>
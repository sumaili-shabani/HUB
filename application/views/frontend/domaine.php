
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
        <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
          <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
            <h1>Domaines d’activité principaux recensés</h1>
           
          </div>


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

    <!-- main -->

    <div id="aboutSection" class="container space-2 space-lg-3 mt-1">
      <!-- Title -->
     
      <!-- End Title -->

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <!-- contenu -->

            <ul>
              <li>
               AGRI-BUSINESS

              </li>

              <li>
               PETITE TRANSFORMATION
              </li>

              <li>
                MINES

              </li>

              <li>
                SERVICES

              </li>
               <li>
                FIN TECH / E-COMMERCE

              </li>


            </ul>
            
            <!-- fin contenu -->
          </div>
         
        </div>
      </div>
       
    </div>
    <!-- fin -->



   
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 	<?php include("_footer.php") ?>


  <?php include('_script.php') ?>

  <?php include('_script_link.php') ?>

  




</body>
</html>
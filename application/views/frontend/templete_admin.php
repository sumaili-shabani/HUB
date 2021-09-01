
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
     <img class="img-fluid d-none d-md-block w-50 mx-auto mb-7" src="<?php echo base_url(); ?>js/dev/assets/svg/components/three-pointers.svg" alt="SVG Arrow">
    <!-- End Hero Section -->

    <!-- main -->

    <div id="aboutSection" class="container space-2 space-lg-3 mt-1">
      <!-- Title -->
      <div class="w-lg-65 text-center mx-auto mb-5 mb-sm-9">
        <h4 class="h2"><?php echo($title) ?></h4>
       
      </div>
      <!-- End Title -->

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <!-- contenu -->
            <!-- fin contenu -->
          </div>
          <div class="col-md-4 text-primary">
            <!-- menunpub -->
            <!-- fin menu pub -->
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
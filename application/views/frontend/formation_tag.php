
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
            <h1><?php echo($title) ?></h1>
           
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
     

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8">
            <!-- contenu -->
            <?php include('component/detail_formation.php') ?>
           
            <!-- fin contenu -->
          </div>
          <div class="col-md-4 text-primary card">
            <div class="col-md-12 card-body">
              <!-- menunpub -->
              <?php include("component/_menuFormation.php") ?>

              <?php include("_menupub.php") ?>
            </div>

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

  <script type="text/javascript">
      $(document).ready(function() {
          
          /*
          FIN SCRIPT PARTAGE DE BUTTON RESEAUX SOCIAUX
      */

      function load_country_data2(page)
      {
        $.ajax({
         url:"<?php echo base_url(); ?>home/pagination_access_our_article/"+page,
         method:"GET",
         dataType:"json",

          beforeSend:function()
          {
            $('.resultat_menus').html('<div id="loading" style="" ></div>');
          },
         success:function(data)
         {
          $('.resultat_menus').html(data.country_table);
          $('#pagination_link').html(data.pagination_link);
         }
        });
      }
       
      	// load_country_data2(1);

       $(document).on("click", ".pagination li a", function(event){
        event.preventDefault();
        var page = $(this).data("ci-pagination-page");
        load_country_data2(page);
       });


       function load_data(query)
       {
            $.ajax({
             url:"<?php echo base_url(); ?>home/fetch_search_our_articles",
             method:"POST",
             data:{query:query},
              beforeSend:function()
              {
                $('.resultat_menus').html('<div id="loading" style="" ></div>');
              },
              success:function(data){
                $('.resultat_menus').html(data);
              }

            });
        }

       $(document).on('keyup','.search_text',function(event){

            var search = $(this).val();
            if(search != '')
            {
               load_data(search);
               $('#pagination_link2').html('');
            }
            else
            {
               load_country_data2(1);
            }
          
      });



      });
  </script>

  


</body>
</html>
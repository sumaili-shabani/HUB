<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php include('_navigation.php') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('_menuheader.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid mb-4">

                   <div class="col-md-12 card">
                       <div class="row card-body">
                           <!-- mes scripts commencent -->
                            <div class="col-md-12">
                             <?php include("component/objet_basic_module.php") ?>
                            </div>
                           <!-- fin de mes scripts commencent -->
                       </div>
                   </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('_footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

   
   <?php include('_script.php') ?>

   

   <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

          $(document).on('change', '#limit', function(event) {
              event.preventDefault();
              /* Act on the event */
              var limit = $(this).val();
              if (limit !='') {
                $.ajax({
	                  url: '<?php echo base_url(); ?>entreprise/fetch_limit_view_module',
	                  type: 'POST',
	                  data: {limit: limit},
	                  beforeSend:function()
	                  {
	                     $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
	                  },
	                  success: (data)=>{
	                    $('#country_table').html(data);
	                  }
                });
              }
              else{
                swal("erreur!!!", "veillez selectionner un filtre", "error");
              }
          
            
          });

          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>entreprise/pagination_view_module/"+page,
             method:"GET",
             dataType:"json",
              beforeSend:function()
              {
                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data)
             {
              $('#country_table').html(data.country_table);
              $('#pagination_link').html(data.pagination_link);
             }
            });
          }

         $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
         });

         views();
         load_country_data(1);

         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>entreprise/fetch_search_view_module",
             method:"POST",
             data:{query:query},
              beforeSend:function()
              {
                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data){
              $('#country_table').html(data);
             }
            })
         }

         $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
             load_data(search);
            }
            else
            {
              load_country_data(1);
            }
         });

         function views(){
           var recherche = $('#search_text').val();
           if (recherche !='') {
            load_data(recherche);
           }
           else{
            load_country_data(1);
           }
         }


         views();


     });  
     </script>



</body>

</html>
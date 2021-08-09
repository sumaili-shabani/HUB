<?php 
 
 $first_name;
 $last_name;
 $email;
 $image;
 $telephone;
 $full_adresse;
 $biographie;
 $date_nais;
 $passwords;
 $idrole;

 $facebook;
 $linkedin;
 $twitter ;

 $university;
 $faculte;
 $option ;
 $sexe;

 $id_user;

$users2 = $this->db->get_where("users", array(
    'id'    =>  $user_search
))->result_array();
 foreach ($users2 as $row) {
  $id_user    = $row["id"];
  $first_name   = $row["first_name"];
  $last_name    = $row["last_name"];
  $email      = $row["email"];
  $image      = $row["image"];
  $telephone    = $row["telephone"];
  $full_adresse = $row["full_adresse"];
  $biographie   = $row["biographie"];
  $date_nais    = $row["date_nais"];
  $passwords    = $row["passwords"];
  $idrole       = $row["idrole"];
  $sexe       = $row["sexe"];

  $facebook     = $row["facebook"];
  $linkedin     = $row["linkedin"];
  $twitter      = $row["twitter"];
  
 }



 ?>
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

                            <div class="row">
                              
                              <div class="col-md-8">

                                <!-- debut -->

                                <div class="col-md-12 card mb-2">
                                  <div class="col-md-12 card-body">
                                    <?php include("objet_profile.php") ?>
                                  </div>
                                </div>
                                <!-- fin  -->
                                         
                                
                              </div>

                              <div class="col-md-4 card mb-2">

                                <div class="col-md-12 card-body">
                                  <?php include("objet_basic_groupe.php") ?>
                                </div>
                                
                              </div>
                             
                            </div>
                             
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


  <script>
    $(document).ready(function(){

         function load_country_data(page)
         {
          $.ajax({
           url:"<?php echo base_url(); ?>comptable/pagination_users_on_to/"+page,
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
         
         load_country_data(1);

         $(document).on("click", ".pagination li a", function(event){
          event.preventDefault();
          var page = $(this).data("ci-pagination-page");
          load_country_data(page);
         });


         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/fetch_search_user_follow_pagination",
             method:"POST",
             data:{query:query},
             beforeSend:function()
             {
              $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
             },
             success:function(data){
              $('#country_table').html(data);
             }
            });
          }

         $(document).on('keyup','#search_text',function(){
          var search = $(this).val();
          if(search != '')
          {
             load_data(search);
             // $('#pagination_link').html('');
          }
          else
          {
             load_country_data(1);
          }
        });

    
    });

    </script>

</body>

</html>
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
 $photo;

 $id_user;

 foreach ($users as $row) {
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
                <div class="container-fluid">

                   <!-- mes scripts -->

                   <div class="col-md-12 card">
                   	<div class="row card-body">
                   		
                   		<div class="col-md-12">

                   			
	                    	<?php include("component/objet_basic_achat.php") ?>

                   		</div>
                   	</div>
                   </div>
                   
        			<!-- fin -->

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

   
     
   <script type="text/javascript">
   	$(document).ready(function() {

   		 function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/pagination_view_paiements_padding/"+page,
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

         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/fetch_search_view_paiements_padding",
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

          $(document).on('click', '.delete', function(){
              var idp = $(this).attr("idp");
              if(confirm("Etes-vous sûre de vouloir le supprimer?"))
              {
                
                $.ajax({
                  url:"<?php echo base_url(); ?>comptable/supression_paiement_pading",
                  method:"POST",
                  data:{idp:idp},
                  success:function(data)
                  {
                    showSuccessMessage(data);
                    $('.bg-red').fadeOut(1500);
                   load_country_data(1);
                  }
                });
              }
              else
              {

                showErrrorMessage("opération annulée");

              }

          });


          $(document).on('click', '.supprimer_liste', function(event) {
            event.preventDefault();
            /* Act on the event */

                var checkbox = $('.delete_checkbox:checked');

                if(confirm("Etes-vous sûre de vouloir le supprimer?"))
                {
                  
                    if(checkbox.length > 0)
                  {
                   var checkbox_value = [];
                   $(checkbox).each(function(){
                    checkbox_value.push($(this).val());

                   });

                   // alert("email:"+checkbox_value);
                   $.ajax({
                        url:"<?php echo base_url(); ?>comptable/suppression_multiple_fausse_tranaction",
                        method:"POST",
                        data:{
                            checkbox_value:checkbox_value
                        },
                        success:function(data)
                        {
                            
                            showSuccessMessage(data);
                            
                            $('.bg-red').fadeOut(1500);

                            load_country_data(1);

                            
                        }
                   });
                  }
                  else
                  {
                    showErrrorMessage("veillez selectionner au moins une fausse transaction");
                   
                  }

                }
                else
                {

                  showErrrorMessage("opération annulée");

                }


          });

          $(document).on('click', '.valider_liste', function(event) {
            event.preventDefault();
            /* Act on the event */
                var checkbox = $('.delete_checkbox:checked');

                if(confirm("Etes-vous sûre de vouloir le valider?"))
                {
                  
                    if(checkbox.length > 0)
                  {
                   var checkbox_value = [];
                   $(checkbox).each(function(){
                    checkbox_value.push($(this).val());

                   });

                   // alert("email:"+checkbox_value);
                   $.ajax({
                        url:"<?php echo base_url(); ?>comptable/valider_multiple_fausse_tranaction",
                        method:"POST",
                        data:{
                            checkbox_value:checkbox_value
                        },
                        success:function(data)
                        {
                            
                            showSuccessMessage(data);
                            
                            $('.bg-red').fadeOut(1500);

                            load_country_data(1);

                            
                        }
                   });
                  }
                  else
                  {
                    showErrrorMessage("veillez selectionner au moins une fausse transaction");
                   
                  }

                }
                else
                {

                  showErrrorMessage("opération annulée");

                }

          });

         
          const showErrrorMessage = erreur=> {
            swal("Erreur!!!",erreur,"error");
          };

          const showSuccessMessage = function(message) {
            swal("Succès!!!",message,"success");
          };


         



        

   	});
   </script>

</body>

</html>
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

    <!-- modal  -->
    <div id="userModal" class="modal fade">
      <div class="modal-dialog modal-md">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-hub text-white">
              <p class="modal-title text-center">operation </p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                
                <div class="col-md-12">
                  <div class="row">

                    

                    <div class="col-md-12 form-group">
                      <label><i class="fa fa-pencil mr-1"></i> Titre du module</label>
                      <input type="text" name="titre" id="titre" placeholder="Nom de la personne" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                      <label><i class="fa fa-camera mr-1"></i> Image du module</label>
                      <input type="file" name="user_image" id="user_image" placeholder="Nom de la personne" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                      <label> <i class="fa fa-file mr-1"></i> Fichier du module</label>
                      <input type="file" name="user_image2" id="user_image2" placeholder="Nom de la personne" class="form-control">
                    </div>

                   

                    <div class="col-md-12 form-group">
                      <label><i class="fa fa-book mr-1"></i> Saisissez une petite description du moule </label>
                      <textarea class="form-control" name="description" id="description" placeholder="Entrez une petite description du moule..."></textarea>
                    </div>

                    <div class="col-md-12 form-group mb-2 mt-2">
                      <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <span id="user_uploaded_image"></span>
                          </div>
                          <div class="col-md-4"></div>
                      </div>
                    </div>

                    
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
                <input type="hidden" name="idmodule" id="idmodule" placeholder="idmodule">
                <input type="hidden" name="type" id="type" placeholder="iddepense">

                <input type="hidden" name="operation" id="operation" />
                <input type="submit" name="action" id="action" class="btn btn-hub" value="Add" />
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   <!-- fin modal -->


   <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

       var  $message = '';
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Ajout de module");  
               $('#action').val("Add"); 
               $('#user_uploaded_image').html(""); 
          })  
          
          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var titre = $('#titre').val();  
               var description = $('#description').val();
              
               var action = $('#action').val();

                var extension = $('#user_image').val().split('.').pop().toLowerCase();
                var extension2 = $('#user_image2').val().split('.').pop().toLowerCase();

                if(extension != '')
                {
                  if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','webp']) == -1)
                  {
                    swal("Error!!!","Invalid Image File", "error");
                    $('#user_image').val('');
                    return false;
                  }
                } 

                if(extension2 != '')
                {
                  if(jQuery.inArray(extension2, ['pdf','xlsx','txt','zip','docx','sql','ppt','pptx']) == -1)
                  {
                    swal("Error!!!","Invalid file", "error");
                    $('#user_image2').val('');
                    return false;
                  }
                } 


                if(titre != '' && description != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'user/operation_module'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès 👌', data, 'success'); 
                               
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                 load_country_data(1);
                           }  
                      });

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'user/modification_module'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès 👌', data, 'success');
                                   

                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                   load_country_data(1); 
                             }  
                        });

                  }

                }
                else
                {
                  swal("Erreur 🙆!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idmodule = $(this).attr("idmodule");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_module",  
                    method:"POST",  
                    data:{idmodule:idmodule},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         
                         $('#titre').val(data.titre);
                         $('#description').val(data.description);
                         $('#user_uploaded_image').html(data.user_image);
                        
                         $('.modal-title').text("modification du module "+data.titre+" du "+data.created_at+" utilisateur: "+data.first_name+" "+data.last_name);  
                         $('#idmodule').val(idmodule);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idmodule = $(this).attr("idmodule");

              if(confirm("Are you sure you want to delete this?"))
              {
                
                  $.ajax({
                      url:"<?php echo base_url(); ?>user/suppression_module",
                      method:"POST",
                      data:{idmodule:idmodule},
                      success:function(data)
                      {
                         swal('succès 👌', data, 'success');
                          load_country_data(1);
                        
                      }

                  });
              }
              else
              {
                swal("Ouf!!!", "opération annulée :)", "info");
              }
          });

          $(document).on('change', '#limit', function(event) {
              event.preventDefault();
              /* Act on the event */
              var limit = $(this).val();
              if (limit !='') {
                $.ajax({
                  url: '<?php echo base_url(); ?>user/fetch_limit_view_module',
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
             url:"<?php echo base_url(); ?>user/pagination_view_module/"+page,
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
             url:"<?php echo base_url(); ?>user/fetch_search_view_module",
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
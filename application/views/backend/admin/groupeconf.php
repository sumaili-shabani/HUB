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
 $id;

 foreach ($users as $row) {
  $id_user    = $row["id"];
  $id = $id_user;
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
                           
                           <?php include('chat/groupe.php') ?>
                        
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


     <!-- Modal Setup New Project -->
  <div class="modal fade new-project-modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">

                <div class="modal-header bg-hub text-center">
                    <div class="nk-block-title modal-title text-center" align="center">Paramètrage admin</div>
                    
                    <button type="button" class="close text-white" data-dismiss="modal"><i class="fa fa-close"></i></button>
                </div>

                <div class="modal-body">

                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">

                          <div class="d-flex mb-3 mr-3">
                              <div class="icon bg-transparent">
                                  <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($image) ?>" class="rounded mr-3 w40 img-thumbnail img-responsive" alt="" style="height: 60px; width: 600px;">
                              </div>
                              <div class="col-md-12 ml-1">
                                  <h6 class="mb-0"><?php echo($first_name) ?></h6>
                                  <span><?php echo($email) ?></span>
                              </div>

                          </div>
                          
                        </div>
                      </div>
                    </div>

                    <form method="post" id="user_form" action="<?php echo(base_url()) ?>admin/operation_goupe" enctype="multipart/form-data">

                        <div class="col-md-12 form-group">
                          <textarea name="nom" id="nom" rows="4" class="form-control no-resize" placeholder="Quel est le nom de ce groupe ?"></textarea>
                          </div>
                          <div class="align-right col-md-12 mb-2" align="right">

                            <input type="hidden" name="id_users" id="id_users" value="<?php echo($id) ?>">

                            <label class="btn btn-link Attachez" data-toggle="tooltip" data-placement="top" title="" data-original-title="Attachez un logo">
                                <div class="affichier">
                                  <a href="javascript:void(0);" class="btn btn-link affichier">
                                    <i class="fa fa-file-o text-muted"></i>
                                  </a>
                                </div>
                                <div class="col-md-12 reponse">
                                     <input type="file" name="user_image" id="user_image" class="form-control">
                                </div>
                               
                              </label>

                            <input type="hidden" name="code" id="code">
                            
                             <input type="submit" name="action" id="action" class="btn btn-round btn-hub" value="Add">
                        </div>


                          <div class="col-md-12 mb-2">
                            <div class="row">
                              <div class="col-3"></div>
                              <div class="col-6">
                                <div class="col-md-12" style="margin-top: 7px;">
                                  <span id="user_uploaded_image"></span>
                                </div>
                              </div>
                              <div class="col-3"></div>
                              
                            </div>
                          </div>

                    </form>
                  
                </div>
                
                
          </div>
      </div>
  </div>
  <!-- feed-post-modal -->  

   
  <?php include('_script.php') ?>

  <script type="text/javascript">
      $(document).ready(function(){

          $(".reponse").hide();
          $(document).on('click', '.affichier', function(event){
            event.preventDefault();
            $(this).parent().next().slideToggle();

          });

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Ajout d'un groupe");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })

          // operation du groupe 
          $(document).on('submit', '#user_form', function(event){  
             event.preventDefault(); 
             var id_users = $('#id_users').val();
             var nom = $('#nom').val();
             var extension  = $('#user_image').val().split('.').pop().toLowerCase(); 
   
             var action = $('#action').val();


             if(extension != '')  
             {  
                  if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                  {  

                       var erreur = "le format de l'image est incorecte";
                       swal("erreur!!!",erreur,'error');

                       $('#user_image').val('');  
                       return false;  
                  }  
             }

             // alert(id_users+" "+action);

             if(id_users != '' &&  nom !='')
              {

                if (action =="Add") {
                     
                    $.ajax({  
                         url:"<?php echo base_url() . 'admin/operation_groupe'?>",  
                         method:'POST',  
                         data:new FormData(this),  
                         contentType:false,  
                         processData:false,  
                         success:function(data)  
                         {  
                              var message =  data;
                              swal("succès!!!",message,"success"); 

                              $('#user_form')[0].reset();  
                              $('#userModal').modal('hide');  
                              dataTable.ajax.reload();  
                         }  
                    });
                      // alert("insertion");

                }
              else if (action == 'Edit') {
                      $.ajax({  
                           url:"<?php echo base_url() . 'admin/modification_groupe'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                var message =  data;
                                swal("succès!!!",message,"success"); 

                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                refresh_groupe();
                           }  
                      });
                }

              }
              else
              {
                swal("erreur!!!","Tous les champs doivent être remplis","error"); 
              }
               
        }); 

        $(document).on('click', '.update', function(){  
             var code = $(this).attr("code");  
             $.ajax({  
                  url:"<?php echo base_url(); ?>admin/fetch_single_groupe",  
                  method:"POST",  
                  data:{code:code},  
                  dataType:"json",  
                  success:function(data)  
                  {  
                       $('#userModal').modal('show');  
                       $('#nom').val(data.nom);
                       $('#id_users').val(data.id_users);

                        $('.modal-title').text("Modification du groupe "+data.nom);
                       
                       $('#user_uploaded_image').html(data.user_image);
                       $('#code').val(code);  
                       $('#action').val("Edit");  
                  }  
             });  
        });

        $('.checkbox-tick').click(function(){

          if($(this).is(':checked'))
          {
              $(this).closest('tr').addClass('removeRow');
          }
          else
          {
              $(this).closest('tr').removeClass('removeRow');
          }

        });

        // suppression script 
          $(document).on('click', '.deleted_group', function(event){
              event.preventDefault();
              
              if(confirm("êtes-vous sûr de vouloir supprimer ce groupe?"))
              {

                  var checkbox = $('.checkbox-tick:checked');

                  if(checkbox.length > 0)
                  {
                     var checkbox_value = [];
                     $(checkbox).each(function(){
                      checkbox_value.push($(this).val());
                     });

                     // swal("id_groupe:", ""+checkbox_value,"info");
                     $.ajax({
                        url:"<?php echo base_url(); ?>admin/delete_groupe",
                        method:"POST",
                        data:{checkbox_value:checkbox_value},
                        success:function(data)
                        {
                           swal("succès!!", ""+data, "success");
                           refresh_groupe();
                        }

                     });

                     
                  }
                  else
                  {
                    swal("Error!!!🙆","veillez selectionner au moins un groupe", 'danger');
                   
                  }
                
                  
              }
              else
              {
                var erreur = "opération annulée :)";
                swal("Oups!!!",erreur,'info');
              }

           
          });

          // affichage de mes groupes 
          $(document).on('click', '.viw_groupe', function(){
              refresh_groupe();
          });



          function refresh_groupe(){
              var format = $('.resultat');
              $.ajax({
                url:"<?php echo(base_url()) ?>admin/nos_goupe_discution_groupe",
                method: 'GET',
                beforeSend:function()
                {
                  format.html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  format.html(data);
                }
              });
          }


          function load_country_data(page)
          {
             var format = $('.resultat');
            $.ajax({
             url:"<?php echo base_url(); ?>admin/pagination_utilisateur_groupe/"+page,
             method:"GET",
             dataType:"json",
             beforeSend:function()
              {
                format.html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data)
             {
              format.html(data.country_table);
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

        
        // la recherche d'un membre pour le groupe 
        $(document).on('keyup', '#search_text', function(){
          var query = $(this).val();
          var format = $('.resultat');

          if (query !='') {
            $.ajax({
                url:"<?php echo(base_url()) ?>admin/recherche_utilisateur_groupe",
                method: 'POST',
                data: {
                  query: query
                },
                beforeSend:function()
                {
                  format.html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  format.html(data);
                  $('#pagination_link').html("");
                }
            });
          }
          else{
            load_country_data(1);
          }

        });

         // voir les membres du groupe
        $(document).on('dblclick','.show_member_of_group', function(){

              var code = $(this).attr('code');
              // alert(code);
              var format = $('.resultat');

              $.ajax({
                url:"<?php echo(base_url()) ?>admin/profile_groupe",
                method: 'POST',
                data: {
                  code: code
                },
                beforeSend:function()
                {
                  format.html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  format.html(data);
                }
              });

        });

        

        // ajouter au groupe 
        $('.add_to_groupe').click(function(event){
            event.preventDefault();

            var checkbox = $('.checkbox-tick:checked');
            var code_groupe = $('.code_groupe:checked');

            
            if(confirm("Êtes-vous sûr de les intégrer?"))
            {

                var checkbox_value = [];
                var code_groupe_value = [];
                $(checkbox).each(function(){
                  checkbox_value.push($(this).val());
                });

                $(code_groupe).each(function(){
                  code_groupe_value.push($(this).val());
                });

                if(checkbox.length > 0)
                {
                   var checkbox_value = [];
                   $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                   });

                   // swal("id_groupe:", ""+checkbox_value,"info");
                    $.ajax({
                        url:"<?php echo base_url(); ?>admin/integration_du_groupe",
                        method:"POST",
                        data:{
                            checkbox_value:checkbox_value,
                            code_groupe_value:code_groupe_value
                        },
                        success:function(data)
                        {
                           swal("succès", ""+data, "success");
                           $('.removeRow').fadeOut(1500);

                           refresh_groupe();
                        }
                    });

                   
                }
                else
                {
                  swal("Error!!!🙆","veillez selectionner au moins un groupe", 'danger');
                 
                }
              
                
            }
            else
            {
              var erreur = "opération annulée :)";
              swal("Oups!!!",erreur,'info');
            }

        });

        // suppression au groupe 
        $('.delete_to_groupe').click(function(event){
            event.preventDefault();

            var checkbox = $('.checkbox-tick:checked');
            var code_groupe = $('.code_groupe:checked');

            
            if(confirm("Êtes-vous sûr de vouloir les returer?"))
            {

                var checkbox_value = [];
                var code_groupe_value = [];
                $(checkbox).each(function(){
                  checkbox_value.push($(this).val());
                });

                $(code_groupe).each(function(){
                  code_groupe_value.push($(this).val());
                });

                if(checkbox.length > 0)
                {
                   var checkbox_value = [];
                   $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                   });

                   // swal("id_groupe:", ""+checkbox_value,"info");
                    $.ajax({
                        url:"<?php echo base_url(); ?>admin/retirer_integration_du_groupe",
                        method:"POST",
                        data:{
                            checkbox_value:checkbox_value,
                            code_groupe_value:code_groupe_value
                        },
                        success:function(data)
                        {
                           swal("succès", ""+data, "success");
                           $('.removeRow').fadeOut(1500);

                           refresh_groupe();
                        }
                    });

                   
                }
                else
                {
                  swal("Error!!!🙆","veillez selectionner au moins un groupe", 'danger');
                 
                }
              
                
            }
            else
            {
              var erreur = "opération annulée :)";
              swal("Oups!!!",erreur,'info');
            }

        });


         

    });
  </script>





</body>

</html>




                
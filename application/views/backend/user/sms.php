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

                            <!-- en tête -->
                            <div class="col-md-12">
                              <div class="row">

                                <form class="col-md-12 col-xs-12" method="post" id="user_form" enctype="multipart/form-data">
                                  <div class="col-md-12">
                                    <div class="row">

                                      
                                      <div class="col-md-12">
                                      
                                        <div class="row">
                                          <div class="col-md-2">

                                            <div class="col-md-12">

                                               <ul class="navbar-nav ml-auto">
                                                <!-- Nav Item - User Information -->
                                                <li class="nav-item dropdown no-arrow">
                                                    <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="userDropdown" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        
                                                        <i class="fas fa-list fa-2x text-gray-300"></i>
                                                    </a>
                                                    <!-- Dropdown - User Information -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                        aria-labelledby="userDropdown">
                                                       

                                                        <a class="dropdown-item" href="<?php echo(base_url())?>user/sms">
                                                            <i class="fas fa-comment fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Faire l'envoie de sms 
                                                        </a>

                                                        <a class="dropdown-item add_button2" href="javascript:void(0);">
                                                            <i class="fas fa-group fa-sm fa-fw mr-2 text-gray-400"></i>
                                                           Voir les utilisateurs
                                                        </a>

                                                        <a class="dropdown-item message_sender" href="javascript:void(0);">
                                                            <i class="fas fa-envelope fa-sm fa-fw mr-2 text-gray-400"></i>
                                                           Message envoyé
                                                        </a>
                                                       
                                                        
                                                        
                                                    </div>
                                                </li>
                                              </ul>
                                              
                                            </div>
                                            
                                          </div>
                                          <div class="col-md-4"></div>
                                          <div class="col-md-6">
                                            <div class="col-md-12 mb-4 mt-2"><div class="form-group">
                                              <div class="input-group">
                                               
                                               <input type="text" name="search_text" id="search_text" placeholder="Rechercher un message" class="form-control" />
                                               <span class="input-group-addon btn btn-primary"><i class="fa fa-search mr-2"></i></span>
                                               &nbsp; &nbsp; &nbsp;
                                              <span class="input-group-addon btn btn-hub add_button"><i class="fa fa-send"></i> Envoyer un sms</span>
                                              </div>
                                             </div>
                                           </div>
                                          </div>

                                        

                                        </div>
                                        <hr>
                                      </div>

                                      
                                      
                                    </div>
                                  </div>
                                  
                                </form>


                                
                              </div>
                            </div>
                            <!-- fin en-tete -->

                            <!-- resultat -->
                            <div class="col-md-12 mb-2">
                               
                               <div class="col-md-12 table-responsive" id="country_table">
                                
                                 <?php include('component/_view_users.php') ?>
                               </div>
                               <div class="col-md-12">

                                 <div align="right" class="col-md-12" id="pagination_link"></div>
                                 
                               </div>
                            </div>
                            <!-- fin resultat -->

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


  

    <div class="modal fade" id="userModal">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header bg-hub text-white">

                 <div class="modal-title">information personnele aux termes de contrat</div> 
                  <button class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
              </div>
              
              <div class="modal-body">
                <div class="col-md-12">
                  <div class="row">

                      <div class="col-md-4">
                       <select class="form-control" id="roles" name="roles">
                          <?php 
                            if ($roles->num_rows() > 0) {
                              ?>
                              <option value="">Selectionnez une catégorie</option>
                              <?php
                              foreach ($roles->result_array() as $key) {
                                ?>
                                <option value="<?php echo($key['idrole']) ?>"><?php echo(substr($key['nom'], 0,35)) ?>...</option>
                                <?php
                              }
                            }
                            else{

                              ?>                                
                              <option value="">Aucune catégorie n'est diponible</option>
                              <?php
                            }
                          ?>
                       </select>
                      </div>
                      <div class="col-md-3">
                        <button class="btn btn-hub add_button"><i class="fa fa-send"></i> Envoyer sms</button>
                        
                      </div>

                      <div class="col-md-5">
                        <div class="col-md-12 mb-4 mt-2"><div class="form-group">
                          <div class="input-group">

                            <input type="hidden" name="idrole" id="idrole">
                           
                           <input type="text" name="search_text" id="search_text2" placeholder="Rechercher un message" class="form-control" />
                           <span class="input-group-addon btn btn-primary"><i class="fa fa-search mr-2"></i></span>

                          </div>
                         </div>
                       </div>
                      </div>

                      <div class="col-md-12">
                        
                          <hr>
                      </div>



                      <!-- resultat -->
                      <div class="col-md-12 mb-2">
                         
                         <div class="col-md-12 table-responsive" id="country_table2">
                          
                          
                         </div>
                         <div class="col-md-12">

                           <div align="right" class="col-md-12" id="pagination_link2"></div>
                           
                         </div>
                      </div>
                      <!-- fin resultat -->



                  </div>
                </div>






              </div>

                       
            
          </div>
      </div>
    </div>

    <div class="modal fade" id="userModal3">
      <div class="modal-dialog modal-md">
          <div class="modal-content">
              <div class="modal-header bg-hub text-white">
                 <div class="modal-title">information personnele aux termes de contrat</div> 
              </div>
              
            

              <div class="modal-body">
                  <div class="col-md-12">
                      <div class="row">

                          
                       <form method="POST" id="user_form2" class="col-md-12">

                       <div class="col-md-12">
                              <div class="row">

                                
                                  
                                 <div class="col-md-12">
                                    <label><i class="fa fa-envelope"></i>Entrez le message Message</label>
                                    <textarea class="form-control textarea" id="message1" name="message" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Quoi de news?">
                                      
                                    </textarea>
                                   
                                 </div>

                              </div>
                          </div>
                          

                          
                      </div>
                  </div>
              </div>
              <div class="modal-footer bg-white">

                  <button type="submit" class="btn btn-hub envoyer_message" name="valider" id="envoyer_message">
                      <i class="fa fa-send"></i> Envoyer
                  </button>
                  <a href="javascript:void(0);" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> fermer</a>
              </div> 
              </form>
              
          </div>
      </div>
    </div>

   
   <?php include('_script.php') ?>

   <style>
    #loading
    {
     text-align:center; 
     background: url('<?php echo base_url(); ?>js/assets/loader.gif') no-repeat center; 
     height: 150px;
    }
    </style>

  <script type="text/javascript">
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
        {
            type: "pie", 
            showInLegend: true,
            legendText: "{indexLabel}",               
            dataPoints: [<?php echo $chart_data; ?>]
        }
        ]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer2", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
        {
            type: "area", 
            showInLegend: true,
            legendText: "{indexLabel}",               
            dataPoints: [<?php echo $chart_data; ?>]
        }
        ]
    });
    chart.render();
  </script>

   <script type="text/javascript">
     $(document).ready(function($) {

          $('.add_button').click(function(e){ 
               e.preventDefault(); 
               $('#user_form')[0].reset();  
               $('.modal-title').text("Envoie des sms");  
               $('#action').val("Add"); 
               $('#userModal3').modal('show');  

              
          })  

          $('.add_button2').click(function(e){ 
               e.preventDefault(); 
               $('#user_form')[0].reset();  
               $('.modal-title').text("Envoie des sms");  
               $('#action').val("Add"); 
               $('#userModal').modal('show');  

              
          })  
         

          $("#idannee").on("change", function() {

            var annee = $(this).val();
                if (annee !='') {
                  $('#annee').val(annee);
                }
                else{

                  $('#annee').val("");

                  showErrrorMessage("Erreur lors de l'opération!!! Veillez selectionner l'année de la formation 😰");
                }
          });

         

          $(document).on('click', '.message_sender', function(event) {
            event.preventDefault();
            /* Act on the event */
             load_sms_sender_data(1);
          });

          function load_sms_sender_data(page)
          {
            $.ajax({
              url:"<?php echo base_url(); ?>user/pagination_message_sender/"+page,
              method:"GET",
              dataType:"json",
              beforeSend:function()
              {
                 $('#country_table').html('<div id="loading" style="" ></div>');
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
            load_sms_sender_data(page);
          });

          function search_message_sender(query)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>user/search_message_sender",
             method:"POST",
             data:{query:query},
              beforeSend:function()
              {
                 $('#country_table').html('<div id="loading" style="" ></div>');
              },
             success:function(data){
              $('#country_table').html(data);
             }
            })
           }

           $(document).on('keyup', '#search_text', function(event) {
             event.preventDefault();
             /* Act on the event */
              var search = $(this).val();
              if(search != '')
              {
               search_message_sender(search);
              }
              else
              {
                load_sms_sender_data(1);
              }
           });

          $(document).on('click', '.delete', function(){
              var idsms = $(this).attr("idsms");

              if(confirm("Etes-vous sûre de vouloir le supprimer?"))
              {
                
                  $.ajax({
                      url:"<?php echo base_url(); ?>user/supression_message_sender",
                      method:"POST",
                      data:{idsms:idsms},
                      success:function(data)
                      {
                         swal('succès 👌', data, 'success');
                          
                          load_sms_sender_data(1);
                      }

                  });
              }
              else
              {
                swal("Ouf!!!", "opération annulée :)", "info");
              }
          });

          // renvoies de message
          $(document).on('click', '.renvoyer', function(){
              var idsms = $(this).attr("idsms");

              if(confirm("Etes-vous sûre de vouloir le renvoyer?"))
              {
                
                  $.ajax({
                      url:"<?php echo base_url(); ?>user/renvoie_message_sender",
                      method:"POST",
                      data:{idsms:idsms},
                      beforeSend:function()
                      {
                         $('#country_table').html('<div id="loading" style="" ></div>');
                         $(this).attr("disabled", true);
                        
                      },
                      success:function(data)
                      {

                          swal('succès 👌', data, 'success');
                          $('#userModal3').modal('hide');
                          load_sms_sender_data(1);
                      }

                  });
              }
              else
              {
                swal("Ouf!!!", "opération annulée :)", "info");
              }

          });

          

          const showErrrorMessage = function(erreur) {
            swal("Oups!!!", erreur, "info");
          };

          const showSuccessMessage = function(message) {
            swal("Succès!!!", message, "success");
          };


          // pour les utilisateurs 
          function load_sms_sender_users(page)
          {
            $.ajax({
              url:"<?php echo base_url(); ?>user/pagination_message_users/"+page,
              method:"GET",
              dataType:"json",
              beforeSend:function()
              {
                 $('#country_table2').html('<div id="loading" style="" ></div>');
              },
              success:function(data)
              {
                $('#country_table2').html(data.country_table);
                $('#pagination_link2').html(data.pagination_link);
              }
            });
          }
           
         
          $(document).on("click", ".pagination2 li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_sms_sender_users(page);
          });

          load_sms_sender_users(1);

          function search_message_users(query)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>user/search_message_users",
             method:"POST",
             data:{query:query},
              beforeSend:function()
              {
                 $('#country_table2').html('<div id="loading" style="" ></div>');
              },
             success:function(data){
              $('#country_table2').html(data);
             }
            })
           }



          $(document).on('keyup', '#search_text2', function(event) {
             event.preventDefault();
             /* Act on the event */
              var search = $(this).val();
              if(search != '')
              {
               search_message_users(search);
              }
              else
              {
                load_sms_sender_users(1);
              }
          });


          $("#roles").on("change", function() {

            var idrole = $(this).val();
                if (idrole !='') {
                  $('#idrole').val(idrole);
                  load_sms_sender_users_by_role(1);
                }
                else{

                  $('#idrole').val("");

                  showErrrorMessage("Erreur lors de l'opération!!! Veillez selectionner une catégorie 😰");
                }
          });

           // pour les utilisateurs 
          function load_sms_sender_users_by_role(page)
          {
            var idrole = $('#idrole').val();
            if (idrole !='') {

                $.ajax({
                  url:"<?php echo base_url(); ?>user/pagination_message_users_byrole/"+page,
                  method:"POST",
                  dataType:"json",
                  data:{idrole:idrole},
                  beforeSend:function()
                  {
                     $('#country_table2').html('<div id="loading" style="" ></div>');
                  },
                  success:function(data)
                  {
                    $('#country_table2').html(data.country_table);
                    $('#pagination_link2').html(data.pagination_link2);
                  }
                });
            }
          }

          $(document).on("click", ".pagination_filter li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_sms_sender_users_by_role(page);
          });










     });
   </script>

    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
         
            $('.delete_checkbox').click(function(){
              if($(this).is(':checked'))
              {
               $(this).closest('tr').addClass('removeRow');
              }
              else
              {
               $(this).closest('tr').removeClass('removeRow');
              }
            });


            $('#envoyer_message').click(function(event){
                  event.preventDefault();
                  var checkbox = $('.delete_checkbox:checked');

                  var message = $('#message1').val();

                  if (message !='') {
                    // alert(sujet+" message "+message);

                      if(checkbox.length > 0)
                      {
                           var checkbox_value = [];
                           $(checkbox).each(function(){
                            checkbox_value.push($(this).val());
                           });

                           // alert("email:"+checkbox_value+" message:"+message);
                           $.ajax({
                                url:"<?php echo base_url(); ?>user/infomation_telephone",
                                method:"POST",
                                data:{
                                    checkbox_value:checkbox_value,
                                    message: message
                                },
                                beforeSend:function()
                                {
                                   $('#country_table').html('<div id="loading" style="" ></div>');
                                   $(".envoyer_message").attr("disabled", true);
                                  
                                },
                                success:function(data)
                                {
                                    
                                    showSuccessMessage(data);
                                    
                                    $('.removeRow').fadeOut(1500);

                                    
                                }
                           });
                      }
                      else
                      {
                        swal("Erreur!!","veillez selectionner au moins un numéro","error");
                       
                      }

                  }
                  else{
                   
                    if (message=='') {
                        swal("Erreur!!","veillez entrer le message","error");
                    }
                  }
             });


            const showErrrorMessage = function(erreur) {
              swal("Erreur!!!",message,"error");
            };

            const showSuccessMessage = function(message) {
              swal("success!!!",message,"success");
            };

            

            $('#example-tbody').on( 'click', 'tr', function () {
                $(this).toggleClass('bg-danger text-white');
            } );
 

        });
        </script>



</body>

</html>
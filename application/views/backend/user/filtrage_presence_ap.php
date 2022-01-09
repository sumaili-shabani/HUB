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

                            <!-- mes script commencent -->
                            <div class="col-md-12">
                              <div class="row">

                                <div class="col-md-12">

                                    <!-- mes script commencent -->
                                    <?php include("__filtrePresence_users_.php") ?>
                                    <!-- fin de mes scripts -->
                                  
                                </div>
                              </div>
                            </div>


                           <!-- fin mes scripts -->

                           
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


    <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header bg-hub">
                  <div class="nk-block-head nk-block-head-xs col-md-12">
                        <div class="nk-block-title modal-title">Paramètrage admin</div>
                        <a href="#" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                        
                    </div>
                </div>
                
                <div class="modal-body modal-body-lg">
                    
                    <div class="nk-block">

                        <div class="col-md-12 table-responsive resultat_ok">

                        <table id="user_data2" class="table table-bordered table-striped">  
                         <thead>  
                              <tr> 
                                   <th width="5%">
                                     <a href="javascript:void(0)" class="btn btn-hub btn-sm btn-circle select_all envoyer_message" id="#select_all" id="envoyer_message"><i class="fa fa-send"></i></a>
                                   </th>
                                   <th width="10%">Image</th>  
                                   <th width="30%">Nom complet </th>  
                                   <th width="15%">Téléphone</th>
                                   <th width="5%">logo</th> 
                                   <th width="30%">Start-up</th>
                                   <th width="5%">Ajouter</th>
                                   
                              </tr>  
                         </thead>
                         <tbody id="example-tbody">
                          <?php
                          
                          foreach ($users->result_array() as $key) {
                            ?>

                            <tr>
                              <td>
                                 <input type="checkbox"  id="delete_checkbox" value="<?= $key['ceo']?>" class="custom-checkbox delete_checkbox">
                              </td>
                              <td>
                                <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="img img-responsive img-thumbnail" width="50" height="35">
                              </td>
                              <td><?php echo(substr($key['first_name'].' '.$key['last_name'], 0,30)) ?>...</td>
                              
                              <td>
                                <a href="tel:<?php echo($key['telephone']) ?>"><i class="fa fa-phone mr-1"></i> <?php echo($key['telephone']) ?></a>
                              </td>

                              <td>
                                <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['logo']) ?>" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius: 50%;">
                              </td>

                              <td><?php echo(substr($key['nom'], 0,20)) ?></td>
                              
                              <td>
                                <a href="javascript:void(0);" id_user="<?= $key['ceo']?>" class="btn btn-primary btn-sm add_presence">
                                  <i class="fa fa-calendar"></i>
                                </a>
                              </td>
                              

                            </tr>

                            <?php
                          }

                           ?>
                         </tbody>
                         <tfoot>  
                              <tr>  
                                   <th width="5%">
                                     <a href="javascript:void(0)" class="btn btn-hub btn-sm btn-circle select_all envoyer_message" id="#select_all" id="envoyer_message"><i class="fa fa-send"></i></a>
                                   </th>
                                   <th width="10%">Image</th>  
                                   <th width="30%">Nom complet </th>  
                                   <th width="15%">Téléphone</th>
                                   <th width="5%">logo</th> 
                                   <th width="30%">Start-up</th>
                                   <th width="5%">Ajouter</th>
                              </tr>  
                         </tfoot>   
                       </table>
                      
                    </div>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->

      <!-- modal user edit -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal_edit">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-hub">
                  <div class="nk-block-title modal-title">Profil</div>
                </div>
                <div class="modal-body modal-body-lg">
                   
                    <div class="nk-block">

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                            
                          <div class="col-md-12">
                          <div class="row">

                            <div class="col-md-4">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row">
                                    
                                    <div class="col-md-12 mt-1">
                                      <span id="user_uploaded_image"></span>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            
                            <div class="col-md-8">

                              <div class="col-md-12">
                                <div class="row">

                                  <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-12">
                                          <label><i class="fa fa-user"></i> nom: <span class="text-muted" id="first_name"></span></label> 
                                        </div>

                                        <div class="col-md-12">
                                          <label><i class="fa fa-pencil"></i> postnom: <span class="text-muted" id="last_name"></span></label> 
                                        </div>

                                        <div class="col-md-12">
                                          <label><i class="fa fa-google"></i> email: <span class="text-primary" id="email"></span></label> 
                                        </div>



                                      </div>
                                      
                                    </div>

                                    <div class="col-md-12">
                                      <label><i class="fa fa-calendar"></i> date de naissace: <span class="text-muted" id="date_nais"></span></label> 
                                    </div>
                                    <div class="col-md-12">
                                      <label><i class="fa fa-map-marker"></i>  Adresse domicile: <span class="text-muted" id="full_adresse"></span></label> 
                                    </div>
                                    <div class="col-md-12">
                                      <label><i class="fa fa-phone"></i> N°tél: <span class="text-muted" id="telephone"></span></label> 
                                    </div>
                                    <div class="col-md-12">
                                      <label><i class="fa fa-male"></i> Sexe: <span class="text-danger" id="sexe"></span></label> 
                                    </div>

                                    

                                    

                                </div>
                              </div>
                            </div>

                            
                            

                          </div>
                        </div>

                        
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <div class="buysell-field form-action text-center mb-2">
                                    <div>

                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="operation" id="operation" />

                              <!-- <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" /> -->
                                    </div>
                                    <div class="pt-3">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Fermer
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                        </div>

                        </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal user_edit-->

    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>


 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajout de la présence");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      })
      var dataTable2 = $('#user_data2').DataTable();
      var dataTable = $('#user_data').DataTable();

      // var dataTable = $('#user_data').DataTable({  
      //      "processing":true,  
      //      "serverSide":true,  
      //      "order":[],  
      //      "ajax":{  
      //           url:"<?php echo base_url() . 'user/fetch_presence'; ?>",  
      //           type:"POST"  
      //      },  
      //      "columnDefs":[  
      //           {  
      //                "targets":[0, 0, 0],  
      //                "orderable":false,  
      //           },  
      //      ],  
      // });


        $(document).on('click', '.add_presence', function(event){  
               event.preventDefault();  
               var id_user = $(this).attr("id_user");    
              
                if(id_user != '')
                {

                  // swal("id_user",id_user,"success");

                  $.ajax({  
                       url:"<?php echo base_url() . 'user/operation_presence'?>",
                       method:'POST',  
                       data:{
                        id_user: id_user
                       },  
                       success:function(data)  
                       {  
                            console.log(data);
                            swal('succès', ''+data, 'success');  
                            window.location.href="<?php echo base_url() . 'user/presence'?>"; 
                       }  
                    });
                }
                else
                {
                  swal("Erreur!!!", "Veillez selectionner la start-up", "error");
                }   
        });  

      
      $(document).on('click', '.update', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"<?php echo base_url(); ?>user/fetch_single_users",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data)  
                {  
                      $('#userModal_edit').modal('show');  
                      $('#first_name').text(data.first_name);  
                      $('#last_name').text(data.last_name); 

                      $('#email').text(data.email);
                      $('#telephone').text(data.telephone);
                      $('#full_adresse').text(data.full_adresse);
                      $('#biographie').text(data.biographie);
                      $('#date_nais').text(data.date_nais);

                      $('#telephone').text(data.telephone);

                      $('#sexe').text(data.sexe);
                     

                      $('.modal-title').text("détail de profil et information de l'utilisateur "+data.first_name);
                      $('#user_uploaded_image').html(data.user_image);
                      
                      $('#action').val("Edit"); 
                      $('#id').val(id);   
                }  
           });  
      });

      $(document).on('click', '.delete', function(){
          var idp = $(this).attr("idp");

          if(confirm("Etes-vous sûre de vouloir supprimer la présence?"))
          {
            
              $.ajax({
                  url:"<?php echo base_url(); ?>user/supression_presence",
                  method:"POST",
                  data:{idp:idp},
                  success:function(data)
                  {
                     swal("succès!", ''+data, "success");
                     window.location.href="<?php echo base_url() . 'user/presence'?>"; 
                  }
                });
          }
          else
          {
            swal("Ouf!!!", "opération annulée :)", "error");
          }
      });

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


        $('.envoyer_message').click(function(event){
              event.preventDefault();
              var checkbox = $('.delete_checkbox:checked');

              if(checkbox.length > 0)
              {
                   var checkbox_value = [];
                   $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                   });

                   // alert("ceo: "+checkbox_value);
                   $.ajax({
                        url:"<?php echo base_url(); ?>user/multiplePresence",
                        method:"POST",
                        data:{
                            checkbox_value:checkbox_value
                        },
                        success:function(data)
                        {
                            
                            showSuccessMessage(data);
                            window.location.href="<?php echo base_url() . 'user/presence'?>"; 
                            
                            $('.removeRow').fadeOut(1500);

                            
                        }
                   });
              }
              else
              {
                swal("Erreur!!","veillez selectionner au moins une entreprise","error");
               
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
        });



     

 });  
 </script>



</body>

</html>
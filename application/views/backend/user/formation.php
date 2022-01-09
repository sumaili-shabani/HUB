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
                               <div class="col-md-12">
                                 <button class="btn btn-hub btn-md pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
                               </div>
                             </div>
                          </div>
                          <!-- insertion de tableau -->
                          <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>  
                                          <tr>  
                                               <th width="10%">Icone</th>  
                                               <th width="25%">Nom de la formation</th> 
                                               <th width="15%">Edition</th>  
                                               <th width="25%">Description</th>
                                               <th width="15%">Mise à jour </th>
                                              
                                               <th width="5%">Modifier</th> 
                                               <th width="5%">Supprimer</th>  
                                          </tr>  
                                     </thead>

                                     <tfoot>  
                                          <tr>  
                                               <th width="10%">Icone</th>  
                                               <th width="25%">Nom de la formation</th> 
                                               <th width="15%">Edition</th>  
                                               <th width="25%">Description</th>
                                               <th width="15%">Mise à jour </th>
                                              
                                               <th width="5%">Modifier</th> 
                                               <th width="5%">Supprimer</th>  
                                          </tr>  
                                     </tfoot>    
                                    
                                </table>
                            </div>
                          </div>
                          <!-- fin insertion tableau -->
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
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
               <div class="modal-header bg-hub text-center">

                    <div class="nk-block-title modal-title">Paramètrage admin</div>
                    <a href="#" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                 
               </div>
                <div class="modal-body modal-body-lg">
                   
                    <div class="nk-block">

                      

                      <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12">
                        
                        <div class="col-md-12">
                            <div class="row">

                                <div class="form-group col-md-12">
                                  <label><i class="fa fa-tag"></i> Selectionnez l'édition</label>  
                                      <select name="edition_ok" id="edition_ok" class="form-control selectpicker" data-live-search="true">
                                        <option value="">Selectionnez l'édition</option>
                                        <?php
                                          if ($editions->num_rows() > 0) {
                                           foreach ($editions->result_array() as $key) {
                                              ?>
                                               <option value="<?php echo($key['idedition']) ?>"><?php echo($key['nom']) ?></option>
                                              <?php
                                           }
                                          }
                                          else{
                                            ?>
                                            <option value="">aucune édition n'est disponible</option>
                                            <?php
                                          }
                                        ?>
                                        
                                      </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label> <i class="fa fa-globe"></i> Entrer le nom de la formation</label>
                                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom de la formation" />
                                  
                                </div>

                                
                                 <div class="form-group col-md-12">
                                    <label><i class="fa fa-camera"></i> Selectionner l'icone de la formation</label>
                                    <input type="file" name="user_image" id="user_image" class="form-control" />
                                    
                                 </div>
                                
                            </div>
                        </div>

                        <div class="form-group jf-inputwithicon col-md-12">
                            <label><i class="fa fa-book"></i> Description de la formation</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Description de la formation"></textarea>
                        </div>

                        

                        <div class="col-md-12 mb-2">
                          <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                              <span id="user_uploaded_image"></span>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                        </div>

                        <div class="buysell-field form-action text-center mb-2">
                              <div>

                                <input type="hidden" name="idedition" id="idedition" />
                                <input type="hidden" name="idformation" id="idformation" />
                                <input type="hidden" name="operation" id="operation" />
                                <input type="submit" name="action" id="action" class="btn btn-hub" value="Add" />
                              </div>
                              
                          </div>






                      </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->



    
    <script type="text/javascript">
      $(document).ready(function(){
        // alert("cool");
      });
    </script>
  
    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des formations");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'user/fetch_formation'; ?>",  
                    type:"POST"  
               },  
               "columnDefs":[  
                    {  
                         "targets":[0, 3, 4],  
                         "orderable":false,  
                    },  
               ],  
          });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var nom = $('#nom').val();  
               var description = $('#description').val(); 
               var extension = $('#user_image').val().split('.').pop().toLowerCase(); 
               var action = $('#action').val();


               if(extension != '')  
               {  
                    if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                    {  
                         swal("Error!!!","Invalid Image File","error");  
                         $('#user_image').val('');  
                         return false;  
                    }  
               }


               if(nom != '' && description != '' )
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'user/operation_formation'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                dataTable.ajax.reload();  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'user/modification_formation'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  dataTable.ajax.reload();  
                             }  
                        });

                  }

                }
                else
                {
                  // swall("Tous les champs doivent être remplis", "", "danger");
                  swal("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idformation = $(this).attr("idformation");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_formation",  
                    method:"POST",  
                    data:{idformation:idformation},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#nom').val(data.nom);
                         $('#idedition').val(data.idedition);

                         $('#description').val(data.description); 
                         $('.modal-title').text("modification des informations pour le paramètrage de la formation");  
                         $('#idformation').val(idformation);  
                         $('#user_uploaded_image').html(data.user_image);  
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idformation = $(this).attr("idformation");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>user/supression_formation",
                      method:"POST",
                      data:{idformation:idformation},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
            }
            else
            {
              swal("Ouf!!!", "opération annulée :)", "error");
            }

                


          });


          $("#edition_ok").on("change", function(t) {

            var idedition = $(this).val();
            if (idedition !='') {
                $('#idedition').val(idedition);
            }
            else{

                 var erreur = "Veillez complèter une édition 😰";
                 swal("Oups!!!",erreur,'error');
            }
          });



     });  
     </script>

</body>

</html>
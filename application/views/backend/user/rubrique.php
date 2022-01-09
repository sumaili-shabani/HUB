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
                           <?php include('component/__rubrique_app.php') ?>
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

                    <div class="nk-block-title modal-title">Paramètrage user</div>
                    <a href="#" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                 
                </div>
                <div class="modal-body modal-body-lg">
                    
                    <div class="nk-block">

                      

                      <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12">
                        
                        <div class="col-md-12">
                            <div class="row">

                            <div class="form-group jf-inputwithicon col-md-12">
                              <label><i class="fa fa-bicycle"></i> Nom de l'édition</label>
                                 <select  name="editions" id="editions" class="form-control selectpicker" data-live-search="true">
                                  <?php 
                                  if ($editions->num_rows() > 0) {
                                    ?>
                                    <option value="">Selectionnez édition</option>
                                    <?php
                                    foreach ($editions->result_array() as $key) {
                                      ?>
                                      <option value="<?php echo($key['idedition']) ?>">
                                        <?php echo($key['nom']) ?></option>
                                      <?php
                                    }
                                  }
                                  else{

                                    ?>
                                    <option value="">Aucune édition n'est diponible</option>
                                    <?php
                                  }
                                  ?>
                                  
                                 </select> 
                              </div>


                              <div class="form-group jf-inputwithicon col-md-12">
                                  <label><i class="fa fa-bus"></i> Nom de la formation</label>
                                     <select  name="formations" id="formations" class="form-control">
                                     
                                      
                                     </select> 
                              </div>

                             

                              <div class="form-group col-md-12">
                                <label><i class="fa fa-pencil"></i> Nom de rubrique</label>
                                <input type="text" class="form-control" name="nomr" id="nomr" placeholder="Entre le nom" >
                            </div>

                            <div class="form-group col-md-12">
                                <label><i class="fa fa-key"></i> clée des valeurs</label>
                                <input type="text" class="form-control" name="token" id="token" placeholder="Entrez le token">
                            </div>

                           

                            </div>
                        </div>

                        <div class="buysell-field form-action text-center mb-2">
                              <div>

                                <input type="hidden" name="idedition" id="idedition" placeholder="idedition" />

                                <input type="hidden" name="idformation" id="idformation" placeholder="idformation" />

                                

                                <input type="hidden" name="idr" id="idr" />
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
        $('.selectpicker').selectpicker();
      });
    </script>
  
    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des rubriques");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          var dataTable = $('#user_data').DataTable({  
               "processing":true,  
               "serverSide":true,  
               "order":[],  
               "ajax":{  
                    url:"<?php echo base_url() . 'user/fetch_rubrique'; ?>",  
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
               var idedition      = $('#idedition').val();
               var idformation      = $('#idformation').val();
               var nomr         = $('#nomr').val();  
               var token        = $('#token ').val();

               var action = $('#action').val();

               
               if(idedition != '' && idformation  != '' && nomr  != '' && token  != '' )
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'user/operation_rubrique'?>",  
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
                             url:"<?php echo base_url() . 'user/modification_rubrique'?>",  
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
               var idr = $(this).attr("idr");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_rubrique",  
                    method:"POST",  
                    data:{idr:idr},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#idedition').val(data.idedition);
                         $('#idformation').val(data.idformation);
                         $('#nomr').val(data.nomr);
                         
                         $('#token').val(data.token); 
                         
                         $('.modal-title').text("modification des rubriques");  
                         $('#idr').val(idr);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idr = $(this).attr("idr");

              if(confirm("Are you sure you want to delete this?"))
              {
                
                  $.ajax({
                        url:"<?php echo base_url(); ?>user/supression_rubrique",
                        method:"POST",
                        data:{idr:idr},
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

          $(document).on('click', '.activer', function(){
              var idr = $(this).attr("idr");

              if(confirm("Etes-vous sûre de vouloir l'activer?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>user/activation_rubrique",
                      method:"POST",
                      data:{idr:idr},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
            }
            else
            {
              swal("Ouf!!!", "opération annulée 🙆", "error");
            }

          });

          $(document).on('click', '.desactiver', function(){
              var idr = $(this).attr("idr");

              if(confirm("Etes-vous sûre de vouloir le desactiver?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>user/desactivation_rubrique",
                      method:"POST",
                      data:{idr:idr},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         dataTable.ajax.reload();
                      }
                    });
            }
            else
            {
              swal("Ouf!!!", "opération annulée 🙆", "error");
            }

          });


         

          
          $(document).on('change', '#editions', function(){
              var idedition = $(this).val();
              if(idedition != '')
              {
                // alert(idedition);
                 $.ajax({
                    url:"<?php echo base_url(); ?>user/fetch_formation_requete",
                    method:"POST",
                    data:{idedition:idedition},
                    beforeSend:function()
                    {
                       $('#formations').html('<div id="loading" style="" ></div>');
                    },
                    success:function(data)
                    {
                       $('#formations').html(data);

                       $('#idedition').val(idedition);
                    }

                 });
              }
              else
              {
                 $('#formations').html('<option value="">Selectionner un cours</option>');
                 swal("Error", "veillez completer la formation", "error");
                 $('#idedition').val("");
                 
              }
              // alert(idv);
          });

          $(document).on('change', '#formations',function(){
              var idformation = $(this).val();
              if (idformation !='') {
                $('#idformation').val(idformation);
              }
              else{
                swal("Erreur!!!","veillez selectionner la formation","error");
              }
            
          });



     });  
     </script>

</body>

</html>
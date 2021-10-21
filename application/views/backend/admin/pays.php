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

                    		<!-- mes script commencent -->
		                      <div class="col-md-12">
		                         <div class="row">
		                           <div class="col-md-12">
		                             <button class="btn btn-dim btn-sm btn-outline-secondary pull-right  mb-4" id="add_button" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus"></i>Effectuer l'opération</button>
		                           </div>
		                         </div>
		                      </div>
		                      <!-- insertion de tableau -->
		                      <div class="col-md-12">
		                        <div class="table-responsive">
		                            <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
		                                <thead>  
		                                    <tr>  
		                                        <th width="40%">Nom de pays</th>  
		                                        <th width="40%">Mise à jour</th>
		                                         
		                                        
		                                        <th width="5%">Modifier</th> 
		                                        <th width="5%">Supprimer</th>  
		                                    </tr>  
		                               </thead> 

		                               

                                    <tfoot>  
                                        <tr>  
                                            <th width="40%">Nom de pays</th>  
                                            <th width="40%">Mise à jour</th>
                                             
                                            
                                            <th width="5%">Modifier</th> 
                                            <th width="5%">Supprimer</th>  
                                        </tr>  
                                   </tfoot>   
		                                
		                            </table>
		                        </div>
		                      </div>
		                      <!-- fin insertion tableau -->
		                      <!-- fin de mes scripts -->
		                   
		        			<!-- fin -->
                    		
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

    <!-- Modal Setup New Project -->
	<div class="modal fade new-project-modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <p class="modal-title text-center" id="exampleModalLabel"></p>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">&times;</span>
	                </button>
	            </div>
	             <form method="post" id="user_form" enctype="multipart/form-data">
		            <div class="modal-body">

		            	<div class="form-group col-md-12 jf-inputwithicon">
				            <label><i class="fa fa-pencil"></i> Entrez le nom du pays</label>

				            <input type="text" name="nompays" id="nompays" class="form-control" placeholder="Entrez le nom du pays">
				          
				        </div>
		                
		                
		            </div>
		            <div class="modal-footer">
		                
	                    <input type="hidden" name="idPays" id="idPays" />  
	                    <input type="submit" name="action" id="action" class="btn btn-round btn-secondary" value="Add" />  
	                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
	<!-- feed-post-modal -->  


    <script type="text/javascript" language="javascript" >  
    $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajout d'un pays");  
           $('#action').val("Add");  
      });

      // $('.selectpicker').selectpicker();

      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/fetch_pays'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 0, 0],  
                     "orderable":false,  
                },  
           ],  
      });

      $(document).on('submit', '#user_form', function(event){  
           event.preventDefault(); 
           var nompays = $('#nompays').val(); 
 
           var action = $('#action').val();

           // alert(nompays+" "+action);


           if(nompays != '')
            {

	            if (action =="Add") {
	                 
	                $.ajax({  
	                     url:"<?php echo base_url() . 'admin/operation_pays/Add'?>",  
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
                         url:"<?php echo base_url() . 'admin/modification_pays'?>",  
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
	            }

            }
            else
            {
            	swal("erreur!!!","Tous les champs doivent être remplis","error"); 
            }
             
      }); 

      $(document).on('click', '.update', function(){  
           var idPays = $(this).attr("idPays");  
           $.ajax({  
                url:"<?php echo base_url(); ?>admin/fetch_single_pays",  
                method:"POST",  
                data:{idPays:idPays},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal').modal('show');  
                     $('#nompays').val(data.nompays);
                     $('.modal-title').text("modification du pays "+data.nompays);  
                     $('#idPays').val(idPays);  
                     $('#action').val("Edit");  
                }  
           });  
      });

      
      $(document).on('click', '.delete', function(){
          var idPays = $(this).attr("idPays");
          if(confirm("Are you sure you want to delete this?"))
	          {
	            
	           		$.ajax({
		              url:"<?php echo base_url(); ?>admin/suppression_pays",
		              method:"POST",
		              data:{idPays:idPays},
		              success:function(data)
		              {
		                 var message =  data;
                          swal("succès!!!",message,"success"); 
		                 dataTable.ajax.reload();
		              }
		            });
	          }
	          else
	          {
	            var erreur = "opération annulée :)";
	            swal("Oups!!!",erreur,"danger"); 
	          } 

      });

      

	
 });  
 </script>






</body>

</html>
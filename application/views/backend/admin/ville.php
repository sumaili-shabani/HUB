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
		                            <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info" width="100%">
		                                <thead>  
		                                    <tr>  
		                                         <th>Nom de la province</th>  
				                                 <th>Nom de la ville ou chef lieu</th>
				                                 <th>Mis à jour</th>
				                                 <th>Editer</th>  
				                                 <th>Supprimer</th>
		                                    </tr>  
		                               </thead> 

		                               

                                    <tfoot>  
                                        <tr>  
                                             <th>Nom de la province</th>  
			                                 <th>Nom de la ville ou chef lieu</th>
			                                 <th>Mis à jour</th>
			                                 <th>Editer</th>  
			                                 <th>Supprimer</th> 
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
			                
		                    <div class="form-group col-md-12">
		                    	<label><i class="fa fa-tag"></i> Selectionnez le nom de la province</label>
			                    <select name="id_province" id="id_province" class="selectpicker form-control">
								    <option value="">Selectionner la province associée pour  la ville chef lieu </option>
								    <?php
								    foreach($provinces as $row)
								    {
								     echo '<option value="'.$row->idp.'">'.$row->nomp.'</option>';
								     var_dump($row);
								    }


								    ?>
								 </select>

			                </div>

		                    <div class="form-group col-md-12">
		                    	<label><i class="fa fa-pencil"></i> Entrez le nom de la ville</label>
			                    <input type="text" name="nomv" id="nomv" class="form-control" placeholder="nom de la ville">
			                </div>
			                
			                
			            </div>
			            <div class="modal-footer">
			                
		                    <input type="hidden" name="idp" id="idp" /> 
		                    <input type="hidden" name="idv" id="idv" />  
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
		           $('.modal-title').text("Ajout d'une ville");  
		           $('#action').val("Add");  
		      });

		      // $('.selectpicker').selectpicker();

		      var dataTable = $('#user_data').DataTable({  
		           "processing":true,  
		           "serverSide":true,  
		           "order":[],  
		           "ajax":{  
		                url:"<?php echo base_url() . 'admin/fetch_ville'; ?>",  
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
		           var nomv = $('#nomv').val(); 
		           var idp = $('#idp').val();
		 
		           var action = $('#action').val();

		           // alert(nomv+" "+action);


		           if(nomv != '' && idp !='')
		            {

			            if (action =="Add") {
			                 
			                $.ajax({  
			                     url:"<?php echo base_url() . 'admin/operation_ville/Add'?>",  
			                     method:'POST',  
			                     data:new FormData(this),  
			                     contentType:false,  
			                     processData:false,  
			                     success:function(data)  
			                     {  
			                          var message =  data;
		                              showSuccessMessage(message);  
			                          $('#user_form')[0].reset();  
			                          $('#userModal').modal('hide');  
			                          dataTable.ajax.reload();  
			                     }  
			                });
			                  // alert("insertion");

			            }
				        else if (action == 'Edit') {
				        	$.ajax({  
		                         url:"<?php echo base_url() . 'admin/modification_ville'?>",  
		                         method:'POST',  
		                         data:new FormData(this),  
		                         contentType:false,  
		                         processData:false,  
		                         success:function(data)  
		                         {  
		                              var message =  data;
		                              showSuccessMessage(message);  
		                              $('#user_form')[0].reset();  
		                              $('#userModal').modal('hide');  
		                              dataTable.ajax.reload();  
		                         }  
		                    });
			            }

		            }
		            else
		            {
		            	showErrrorMessage("Désolé!!!<br/> Tous les champs doivent être remplis"); 
		            }
		             
		      }); 

		      $(document).on('click', '.update', function(){  
		           var idv = $(this).attr("idv");  
		           $.ajax({  
		                url:"<?php echo base_url(); ?>admin/fetch_single_ville",  
		                method:"POST",  
		                data:{idv:idv},  
		                dataType:"json",  
		                success:function(data)  
		                {  
		                     $('#userModal').modal('show');  
		                     $('#nomv').val(data.nomv);
		                     $('#idp').val(data.idp);
		                     $('.modal-title').text("modification de la ville "+data.nomv);  
		                     $('#idv').val(idv);  
		                     $('#action').val("Edit");  
		                }  
		           });  
		      });

		      $(document).on('click', '.delete', function(){
		          var idv = $(this).attr("idv");

		          if(confirm("Are you sure you want to delete this?"))
			          {
			            
			           		$.ajax({
				              url:"<?php echo base_url(); ?>admin/suppression_ville",
				              method:"POST",
				              data:{idv:idv},
				              success:function(data)
				              {
				                 var message =  data;
		                         showSuccessMessage(message);
				                 dataTable.ajax.reload();
				              }
				            });
			          }
			          else
			          {
			            var erreur = "opération annulée :)";
			            showErrrorMessage(erreur);
			          } 

		          	
		      });

		    $(document).on('change', '#id_province', function(){
		    	var idp = $(this).val();
		    	if (idp !='') {

		    		$('#idp').val(idp);
		    	}
		    	else{
		    		showErrrorMessage("veillez selectionner la province");
		    	}
		    	// alert(idp);
		    });

		    const showErrrorMessage = function(erreur) {
		      swal("Erreur!!!",erreur,"error");
		    };

		    const showSuccessMessage = function(message) {
		      swal("Succès!!!",message,"success");
		    };

			
		 });  
		 </script>






</body>

</html>
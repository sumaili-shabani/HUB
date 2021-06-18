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
                            <div class="col-md-12 mb-2">
	                    		<a href="" class="btn btn-outline-secondary pull-left"><i class="fa fa-refresh"></i> actualisez</a>
	                    	</div>

	                    	<!-- mes scripts commencent -->
	                    	<div class="col-sm-12">
	                    		<?php include("component/padding_paie.php") ?>
	                        </div>
	                    	<!-- fin de mes scripts -->
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

   <script type="text/javascript">
        	$(document).ready(function() {

        		$('#user_data').dataTable();

        		 $(document).on('click', '.delete', function(){
	                  var idp = $(this).attr("idp");
	                  if(confirm("Etes-vous sûre de vouloir le supprimer?"))
	                  {
	                    
	                    $.ajax({
	                      url:"<?php echo base_url(); ?>admin/supression_paiement_pading",
	                      method:"POST",
	                      data:{idp:idp},
	                      success:function(data)
	                      {
	                        showSuccessMessage(data);
	                        $('.bg-red').fadeOut(1500);
	                        // dataTable.ajax.reload();
	                      }
	                    });
	                  }
	                  else
	                  {

	                    showErrrorMessage("opération annulée");

	                  }

	              });

        		 $('.delete_checkbox').click(function(){
	              if($(this).is(':checked'))
	              {
	               $(this).closest('tr').addClass('bg-red');
	              }
	              else
	              {
	               $(this).closest('tr').removeClass('bg-red');
	              }
	            });

        		$('.supprimer_liste').click(function(event){
                  event.preventDefault();
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
	                        url:"<?php echo base_url(); ?>admin/suppression_multiple_fausse_tranaction",
	                        method:"POST",
	                        data:{
	                            checkbox_value:checkbox_value
	                        },
	                        success:function(data)
	                        {
	                            
	                            showSuccessMessage(data);
	                            
	                            $('.bg-red').fadeOut(1500);

	                            
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

	            $('.valider_liste').click(function(event){
                  event.preventDefault();
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
	                        url:"<?php echo base_url(); ?>admin/valider_multiple_fausse_tranaction",
	                        method:"POST",
	                        data:{
	                            checkbox_value:checkbox_value
	                        },
	                        success:function(data)
	                        {
	                            
	                            showSuccessMessage(data);
	                            
	                            $('.bg-red').fadeOut(1500);

	                            
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
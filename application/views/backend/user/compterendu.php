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
                           <div class="row">
	                            <div class="col-md-12">
	                                <div class="col-md-12">
	                                   
	                                    <div class="row">
	                                    	<!-- <div class="col-md-12 mb-2">
	                                    		<a href="" class="btn btn-outline-secondary pull-left"><i class="fa fa-refresh"></i> actualisez</a>
	                                    	</div>

 -->
	                                    	<!-- mes scripts commencent -->
	                                    	<div class="col-sm-12">
	                                    		<?php include("component/_mescomptRendu.php") ?>
		                                    </div>
	                                    	<!-- fin de mes scripts -->
	                                        
	                                    </div>
	                                </div>

	                            </div>
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

    <script type="text/javascript">
        	$(document).ready(function() {

        		$('#user_data').dataTable();

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
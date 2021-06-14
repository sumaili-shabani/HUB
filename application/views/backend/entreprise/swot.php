<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>


<style>
    .activity_col1 {
      background-color: lightyellow;
      border-radius: 7px;
      /*padding: 10px;*/
      font-weight: bold;
      margin: 10px;
      
    }

    .activity_col2 {
      background-color: lightyellow;
      border-radius: 7px;
      /*padding: 10px;*/
      font-weight: bold;
      margin: 10px;
      
    }
    
    .activity_col3 {
      background-color: blue;
      border-radius: 7px;
      padding: 10px;
      color: lightblue;
      font-weight: bold;
      margin: 10px;
    }
    .activity_col4 {
      background-color: silver;
      border-radius: 7px;
      padding: 10px;
      font-weight: bold;
      margin: 10px;
    }
    .activity_col5 {
      background-color: lightblue;
      border-radius: 7px;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      margin: 10px;
    }
    .activity_col6 {
      background-color: darkorange;
      border-radius: 7px;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      margin: 10px;
    }
    .activity_col7 {
      background-color: pink;
      border-radius: 7px;
      padding: 10px;
      width: 100%;
      font-weight: bold;
      margin: 10px;
    }
    @media(max-width: 767px) {
      #tableau {
        margin-left: -40px;
        width: 300px;
        border: 1px solid black;
      }
    }
    @media(min-width: 767px) {
      #tableau {
        width: 1060px;
        border: 1px solid black;
      }
    }
    .back {
      color: black;
    }
    
  </style>

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
                          <?php include('component/_swot_form.php') ?>
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


   <!-- mes scripts commencent déjà pour le modal d'inscription -->

    <div class="modal fade" id="modalcanavas" tabindex="-1" role="dialog" aria-labelledby="new_expense" aria-hidden="true">
      <div class="modal-dialog modal-lg window-popup create-friend-group create-friend-group-1" role="document">
        <div class="modal-content">
        <form class="col-md-12 col-xs-12" method="post" 
        	action="<?php echo(base_url()) ?>entreprise/operation_swot/ajout/<?php echo($student_id) ?>">
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close" style="margin-top: 10px;"><i class="fa fa-close"></i></a>
          <div class="modal-header">
            <h6 class="title">ajouter de swot pour le  busnness model</h6>
          </div>
          <div class="modal-body">

            <!-- ajout de titre -->
                <label class="control-label">titre</label>
                <div class="select">
                    <select class="form-control" name="titre" required="" id="titre">
                       <option value="Forces">Forces</option>
                       <option value="Faiblesses">Faiblesses</option>
                       <option value="Opportunités">Opportunités</option>
                       <option value="Menaces">Menaces</option>

                    </select>
                </div>
            <!-- fin titre -->


            <div class="form-group with-button mb-2">
              <label class="control-label">sujet</label>
              <input class="form-control" type="text" name="sujet" id="sujet" placeholder="Entrer votre sujet" required="">
            </div>

           


            <div class="col-md-12 mb-4">
            	<button type="submit" class="btn btn-secondary float-right action">Ajouter</button>

            </div>
            <div style="margin-top: 50px;"></div>




            </div>
            
            
            

          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- fin de mes scripts -->

     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Modification de swot de plan busness</span>
                        
                    </div>
                    <div class="nk-block">

                    	<form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row" action="">
                    		
                    		<div class="col-md-12">
                    			<div class="input-group flex-nowrap mb-2">
          								  <div class="input-group-prepend">
          								    <span class="input-group-text" id="addon-wrapping"><i class="fa fa-pencil"></i></span>
          								  </div>
          								  <input type="text" name="sujet" id="sujet" class="form-control subject" placeholder="Entrez le text" />
          								</div>
                    		</div>



                    		

                    		<div class="col-md-12" style="margin-bottom: 20px;">
                    			<div class="row">
                    				<div class="col-md-4"></div>
                    				<div class="col-md-4">

                    					<div class="buysell-field form-action text-center mb-2">
				                            <div>

				                            	<input type="hidden" name="idswot" id="idswot" />
             									        <input type="hidden" name="operation" id="operation" />
			                    				     <input type="submit" name="action" id="action" class="btn btn-secondary btn-lg" value="Modifier" />
				                            </div>
				                            <div class="pt-3">
				                                <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
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
    <!-- fin modal-->


    <script type="text/javascript">
    	$(document).ready(function() {
    		$(document).on('click', '.editer', function(event) {
    			event.preventDefault();
    			/* Act on the event */
    			var idswot = $(this).attr('idswot');
    			var text = $(this).attr('sujet');
    			var sujet = $('.subject').val(text);
    			$('#idswot').val(idswot);
    			var url = '<?php echo(base_url()) ?>entreprise/operation_swot/edit/'+idswot;

    			if (text !='') {

    				$('#userModal').modal('show');
    				
    				
    			}
    			
    		});

    		$(document).on('submit', '#user_form', function(event){  
                

               	var sujet = $('#sujet').val(); 
               	var idswot = $('#idswot').val();
               	
                var sujets = $('.subject').val();

    			var url = "editer_my_link_swot";

    			// alert(" sujet: "+sujets);


                if(sujets != '')
                {

                	$.ajax({  
                       url:url,  
                       method:'POST',  
                       data:{
                       	idswot: idswot,
                       	sujet: sujets
                       },   
                       success:function(data)  
                       {  
                            swal('succès 👌', data, 'success'); 
                           
                            $('#userModal').modal('hide');  
                            event.preventDefault();
                       }

                    });
                  
                  

                  

                }
                else
                {
                  swal("Erreur 🙆!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


    	});
    </script>



</body>

</html>
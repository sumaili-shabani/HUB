 <?php

 $first_name="";
 $last_name="";
 $email="";
 $image="";
 $telephone="";
 $full_adresse="";
 $biographie;
 $date_nais="";
 $passwords="";
 $idrole="";

 $facebook="";
 $linkedin="";
 $twitter="" ;

 $university="";
 $faculte="";
 $option="" ;
 $sexe="";
 $photo="";

 $idp="";
 $idv="";
 $cv="";

 $nompays="";
 $nomp="";
 $nomv="";

 $id_user;
 $connected_user = $this->session->userdata('entreprise_login');

 foreach ($users as $row) {
  $id_user    = $row["id"];
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





$identrepE="";
$ceoE="";
$descriptionE="";
$nomE="";
$idPaysE="";
$idcatE="";

$typeEntrepE="";
$idpE="";
$idvE="";
$nombreEmployeE="";
$sitewebE="";
$facebookE="";
$twitterE="";
$linkedinE="";
$logoE="";

$nompaysE="";
$nompE="";
$nomvE="";
$nomcatE="";
foreach ($my_entrep->result_array() as $key) {

	$ceoE  = $key['ceo'];
	$identrepE  = $key['identrep'];
	$idcatE =$key['idcat'];
	$descriptionE  = $key['description'];
	$nomE  = $key['nom'];
	$idPaysE  = $key['idPays'];
	$typeEntrepE  = $key['typeEntrep'];
	$idpE  = $key['idp'];
	$idvE  = $key['idv'];
	$nombreEmployeE  = $key['nombreEmploye'];
	$sitewebE  = $key['siteweb'];
	$facebookE  = $key['facebook'];
	$twitterE  = $key['twitter'];
	$linkedinE  = $key['linkedin'];
	$logoE  = $key['logo'];

	  $usEntre = $this->db->get_where('profile_entreprise', array(
	    'ceo'  =>  $ceoE
	  ));

	  if ($usEntre->num_rows() > 0 ) {
	    # code...
	    foreach ($usEntre->result_array() as $key3) {
	       $nompaysE    = $key3["nompays"];
	       $nompE       = $key3["nomp"];
	       $nomvE       = $key3["nomv"];
	       $nomcatE 	= $key3["nomcat"];
	    }
	  }
	  else{

	  	 $nompaysE = "";
	     $nompE   = "";
	     $nomvE   = "";
	     $nomcatE = "";
	  }


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

                  <div class="col-md-12">
                       <!-- mes scripts commencent -->
                       <?php include('my_profile_entrep.php') ?>
                       <!-- fin de mes scripts commencent -->
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
          $(document).ready(function(){

            $(document).on('change', '#user_image', function(event) {
              event.preventDefault();
              /* Act on the event */

                var extension   = $('#user_image').val().split('.').pop().toLowerCase(); 
                if(extension != '' )  
                {  
                      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                      {   

                          event.preventDefault(); 
                           var erreur = "type d'Image invalide";
                           showErrrorMessage(erreur);  
                           $('#user_image').val('');  
                           return false;  
                      }  
                }


            });


            $(document).on('change', '#user_image2', function(event) {
              event.preventDefault();
              /* Act on the event */

              var extension2   = $('#user_image2').val().split('.').pop().toLowerCase();

              if(extension2 != '' )  
              {  
                    if(jQuery.inArray(extension2, ['pdf']) == -1)  
                    {   

                        event.preventDefault(); 
                         var erreur = "Votre cv doit être de l'extension PDF";
                         showErrrorMessage(erreur);  
                         $('#user_image2').val('');  
                         return false;  
                    }  
              }


            });

            

            $(document).on('change', '#id_province', function(){
            
                var country_id = $(this).val();

                if(country_id != '')
                {
                  // alert(country_id);
                   $.ajax({
                      url:"<?php echo base_url(); ?>entreprise/fetch_ville_requete",
                      method:"POST",
                      data:{idp:country_id},
                      success:function(data)
                      {
                         $('#id_ville').html(data);
                         $('#idp').val(country_id);
                      }
                   });
                }
                else
                {
                   // $('#id_province').html('<option value="">Selectionner une province</option>');

                   showErrrorMessage("veillez selectionner la province");

                }
                // alert(idv);
              });

            $(document).on('change', '#id_ville', function(){
            
                var id_ville = $(this).val();

                if(id_ville != '')
                {

                  $('#idv').val(id_ville);
                  
                }
                else
                {
                   showErrrorMessage("veillez selectionner la ville");

                }
                // alert(idv);
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
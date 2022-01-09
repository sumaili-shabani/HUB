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
                            <?php include("__qrcodePresence.php") ?>
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

   <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/qrcodelib.js"></script>
   <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/qrcodescanjs2.js"></script>

   <!-- <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/WebCodeCam.js"></script>
   <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/main.js"></script> -->
  

   <!--  -->
    <script type="text/javascript">

        $(document).ready(function() {
          var arg = {
                resultFunction: function(result) {
                  
                    // $('tbody').append($('<tr><td>' + result.code + '</td>image:' + result.code + '</td><td>patrona shabani</td><td>M</td><td>2021-01-03</td></tr>'));
                    var personne = result.code;
                    // conversion de date
                    var dates = new Date();
                    var heure = dates.getHours() + 1;
                    var jour = dates.getDate()+'/'+dates.getDay()+'/'+dates.getFullYear()+' '+heure+':'+dates.getMinutes()+':'+dates.getSeconds();
                    // fin conversion de date

                    var personne_provisoire = 8;

                    var echec ='<div class="col-md-12 text-center"><span class="badge badge-danger"><i class="fa fa-close fa-lg"></i> échec</span></div>';
                    var reussite ='<div class="col-md-12 text-center"><span class="badge badge-success"><i class="fa fa-check fa-lg"></i></span> Ok</div>';

                    // console.log("la personne est: "+personne);

                    $.ajax({  
                        url:"<?php echo base_url(); ?>user/fetch_single_users",  
                        method:"POST",  
                        data:{id:personne_provisoire},  
                        dataType:"json",  
                        success:function(data)  
                        {  
                            $('#my_table').show();

                                var personne_provisoire_ok ="Qrc:"+personne_provisoire+"_/"+data.telephone;
                            
                                $.ajax({  
                                   url:"<?php echo base_url() . 'user/operation_presence_qrcode'?>",
                                   method:'POST',  
                                   data:{
                                    id_user: personne_provisoire
                                   },  
                                   success:function(data2)  
                                   {  

                                      
                                      if(data2 == "🗽 la présence existe déjà 🗽")
                                      {
                                        $('.qrcode_success').show();
                                        $('.qrcode_success').html(echec);

                                      }
                                      else  if(data2 == "le samedi et le dimanche sont exclus pour faire les opérations")
                                      {
                                        $('.qrcode_success').show();
                                        $('.qrcode_success').html(echec);
                                        

                                      }
                                      else{

                                        $('.qrcode_success').show();
                                        $('.qrcode_success').html(reussite); 

                                        $('tbody').append($('<tr><td><a class="text-primary" href="tel:'+data.telephone+'">' + data.telephone + '</a></td><td>' + data.user_image + '</td><td>'+data.first_name+'</td><td>'+data.sexe+'</td><td>'+jour+'</td></tr>'));

                                      }

                                      // $('#qrcode_success').show();
                                      // $('#qrcode_success').html(data2);
                                      // swal('succès', ''+data2, 'success');
                                      // dataTable.ajax.reload();  
                                   }  
                                });

                                 


                              
                        }  
                    }); 

                     

                    
                }
            };
            $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play();

            function view_result($id_user){
              var id = id_user;  
               if (id !='') {

                  $.ajax({  
                      url:"<?php echo base_url(); ?>user/fetch_single_users",  
                      method:"POST",  
                      data:{id:id},  
                      dataType:"json",  
                      success:function(data)  
                      {  

                         $('tbody').append($('<tr><td>Qrcode:' + id + '_webF</td>'+data.image+'</td><td>'+data.first_name+'</td><td>'+data.sexe+'</td><td>2021-01-04</td></tr>'));
                            
                      }  
                 });  
               }
               else{

                  swal("Erreur!!!", "Veillez selectionner l'entreprise", "error");
               }
            }

        });
    </script>

     <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
            $(document).on('click', '.play', function(event) {
              event.preventDefault();
              var camera = $('.my_webcame').show();
              /* Act on the event */
            });
            $(document).on('click', '.pause', function(event) {
              event.preventDefault();
              var camera = $('.my_webcame').hide();
              /* Act on the event */
            });
        });
    </script>

   
</body>

</html>
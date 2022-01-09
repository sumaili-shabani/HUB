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
                                <div class="col-md-2 mb-2"></div>

                                <!-- cool le boss -->
                                <div class="col-md-8 mb-2">

                                  <div class="col-md-12 card">
                                    <div class="row card-body">
                                      <div class="col-md-12 ">
                                         <div class="col-md-12">

                                          <div class="col-md-12 text-center">
                                            <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
                                                
                                            </div>
                                          </div>


                                          <h6 class="m-0 text-dark"> Les réponses fournies sont également <small>analysées par la plus haute personnalité pour l'évaluation</small></h6>

                                            <div class="col-md-12 text-center">
                                              <ol class="breadcrumb float-sm-right text-center">
                                                 veillez faire un seul choix stp!
                                              </ol>
                                            </div>
                                         </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12 card mt-2 mb-2">
                                    <div class="row card-body">
                                      <div class="col-md-12">
                                        <?php include('showquestion.php') ?>
                                      </div>
                                    </div>
                                  </div>

                                  
                                  
                                </div>
                                <!-- fin de mes scripts -->
                                <div class="col-md-2 mb-2">
                                  
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
        $(document).ready(function(){
            //alert("boom");

            $(document).on('click','.common_selector_reponse', function(){

            var idq= $(this).attr('idq');
            var valeur= $(this).attr('valeur');

            if (valeur !="mal") {

              $.ajax({
                url: "<?php echo base_url() . 'entreprise/operation_reponse'; ?>",
                type:'POST',
                data:{
                  valeur: valeur,
                  idq: idq

                },
                success: function(data){
                  swal("OK!!!!", data,"success");
                  // alert(data);
                }

              });


            }
            else{

                if(confirm("Etes-vous sûre que c'était mal donné?"))
                {
                    $.ajax({
                      url: "<?php echo base_url() . 'entreprise/operation_reponse'; ?>",
                      type:'POST',
                      data:{
                        valeur: valeur,
                      idq: idq

                      },
                      success: function(data){
                        swal("OK!!!!", "votre sugestion séra bien analysée 👌","info");
                      }

                    });
                }
                else
                {
                  return false; 
                }
            }
          
            // alert('réponse:'+valeur+" Code question:"+idq);

            
          });

             var question_ok = 1;

          $(document).on('click','.valider_plus', function(e){
              e.preventDefault();
              question_ok= question_ok +1;
              var count2 = $('#count2').val();
              var token = $('.token').val();

              if (question_ok<=count2) {

                
                  // alert("cool");
                  $.ajax({
                      url: "<?php echo base_url() . 'entreprise/show_plus_question'; ?>",
                      type:'POST',
                      data:{
                          CommentNewCount: question_ok,
                          token: token
                      },
                      success: function(data){
                        // alert(data);
                        $('#resultat_ok').html(data);
                        $('.question_numerotation').text(question_ok);

                      }

                  }); 

              }
              else{

                var html_data = `
                <div class="col-md-12 mt-2 mb-2">
                      <div class="row">
                        <div class="col-md-3"></div>

                        <!-- cool le boss -->
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body login-card-body">
                              <p class="login-box-msg text-center">prière de complèter la bonne information pour avoir le droit d'accès à toutes les questions.</p>

                                <form method="post" action="<?php echo(base_url())?>entreprise/teste_suggestion_param/">

                                  <div class="form-group mb-3">
                                      <?php
                                        if($this->session->flashdata('message'))
                                        {
                                            echo '
                                            <div class="alert alert-success" style="background:white;">
                                            <button class="close" data-dismiss="alert">x</button>
                                                '.$this->session->flashdata("message").'
                                            </div>
                                            ';
                                        }
                                        elseif ($this->session->flashdata('message2')) {
                                          echo '
                                            <div class="alert alert-danger" style="background:white;">
                                            <button class="close" data-dismiss="alert">x</button>
                                                '.$this->session->flashdata("message2").'
                                            </div>
                                            ';
                                        }
                                        else{

                                        }
                                      ?>
                                  </div>

                                  
                                  <div class="input-group mb-3">
                                    <input type="text" name="token" class="form-control" placeholder="Entrer le token donné">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fa fa-lock"></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <button type="submit" name="btn_submit_personnel" class="btn btn-primary btn-block"><i class="fa fa-globe"></i>  Valider le mot de passe</button>
                                    </div>
                                    <!-- /.col -->
                                  </div>
                                </form>

                              
                              
                            </div>
                            <!-- /.login-card-body -->
                          </div>
                        </div>
                        <!-- fin de mes scripts -->
                        <div class="col-md-3">
                          
                        </div>
                      </div>
                    </div>`;

                    $('#resultat_ok').html(html_data);



                // testcount(question_ok);

              }
               

          });


        });
    </script>


</body>

</html>
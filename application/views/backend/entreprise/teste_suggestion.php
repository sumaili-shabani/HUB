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
                                <div class="col-md-3"></div>

                                <!-- cool le boss -->
                                <div class="col-md-6">
                                  <div class="card">
                                    <div class="card-body login-card-body">
                                      <div class="col-md-12 text-center">
                                        <h4><?php echo($title) ?></h4>
                                        <p class="login-box-msg text-center">prière de complèter la bonne information pour avoir le droit d'accès à toutes les questions.</p>
                                      </div>

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
                                            <button type="submit" name="btn_submit_personnel" class="btn btn-hub btn-block"><i class="fa fa-globe"></i>  Valider le mot de passe</button>
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

</body>

</html>
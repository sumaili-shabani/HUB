
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('_meta.php') ?>
</head>

<body>
  <!-- ========== HEADER ========== -->
 <?php include("_nav.php") ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
     <div class="position-relative">
      <div class="bg-img-hero" style="background-image: url(<?php echo base_url(); ?>js/dev/assets/svg/components/abstract-shapes-12.svg);">
        <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
          <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">

           
          </div>


        </div>
      </div>

      <!-- SVG Shape -->
      <!-- <figure class="position-absolute bottom-0 right-0 left-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#DC4405" points="0,273 1921,273 1921,0 "/>
        </svg>
      </figure> -->
      <!-- End SVG Shape -->
    </div>
    <!-- End Hero Section -->

    <!-- main -->

    <div id="aboutSection" class="container space-2 space-lg-3 mt-1">
      <!-- Title -->


       <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">

                                        <div class="col-md-12">
                                             <!-- Sidebar - Brand -->
                                           <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo(base_url()) ?>">
                                                <img src="<?php echo($icone_info) ?>" class="img-responsive img-thumbnail" style="height: 70px;">
                                                
                                            </a>
                                        </div>  

                                        <h1 class="h4 text-gray-900 mb-4">Authentification</h1>
                                       <span>
                                        Accédez au portail  en utilisant votre e-mail et votre code d'accès.
                                      </span>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url(); ?>login/validation">
                                      <div class="form-group">
                                        <?php
                        if($this->session->flashdata('message'))
                        {
                          echo '
                          <div class="alert alert-success" style="font-size: 14px;">
                          <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message").'
                          </div>
                          ';
                        }
                        elseif ($this->session->flashdata('message2')) {
                          echo '
                          <div class="alert alert-danger" style="font-size: 14px;">
                          <button class="close" data-dismiss="alert">x</button>
                            '.$this->session->flashdata("message2").'
                          </div>
                          ';
                        }
                        else{

                        }
                      ?>
                                      </div>    
                                        <div class="form-group">
                                            <input type="email" name="user_email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entrez votre adresse mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="user_password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Entrez votre mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Souvenez-vous de moi
                                                </label>
                                            </div>
                                        </div>
                                        <button  type="submit" class="btn btn-primary btn-user btn-block">
                                            Se connecter
                                        </button>
                                        
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="<?php echo(base_url()) ?>login/forgot">Mot de passe oublié?</a>
                                    </div>
                                    <div class="text-center">
                                        Avez-vous un compte? <a class="small" href="<?php echo(base_url()) ?>login/register">Créer un compte</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
     
     
       
    </div>
    <!-- fin -->



   
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

 	<?php include("_footer.php") ?>


  <?php include('_script.php') ?>

  <?php include('_script_link.php') ?>

  




</body>
</html>
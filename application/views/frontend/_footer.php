 <!-- ========== FOOTER ========== -->
  <footer class="bg-hub">
    <div class="container">
      <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
          <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
              <a href="index.html" aria-label="Front">
                <img class="brand" src="<?php echo($icone_info) ?>" alt="Logo">
              </a>
            </div>
            <!-- End Logo -->

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
               <li class="nav-item">
                <a class="nav-link media" href="javascript:;">
                    <span class="media">
                      
                      <span class="media-body">
                        
                        <?php echo(substr($blog_info, 0,150)) ?>...
                      </span>
                    </span>
                </a>
              </li>
              
             
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white">Compagnie</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/about">Apropos</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/travail">Savoir plus <span class="badge badge-primary ml-1">Qui sommes-nous?</span></a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/blog">Blog</a></li>
              <li class="nav-item"><a class="nav-link" target="_blank" href="https://www.cryptnail.com/">Cryptnail</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
            <h5 class="text-white">Ressource</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/formation">Formation</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo(base_url()) ?>home/blog">Evènement</a></li>

              <li class="nav-item"><a class="nav-link" target="_blank" href="http://unjournouveau.org">Un jour nouveau</a>
              </li>
              
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5 class="text-white">Contactez-nous au</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="mailto:<?php echo($email_info) ?>"><?php echo($email_info) ?></a></li>
              <li class="nav-item"><a class="nav-link" href="tel:<?php echo($tel1_info) ?>"><?php echo($tel1_info) ?></a></li>
              <li class="nav-item"><a class="nav-link" href="tel:<?php echo($tel2_info) ?>"><?php echo($tel2_info) ?></a></li>
               <li class="nav-item"><a class="nav-link" target="_blank" href="https://forms.gle/vZf4CeR6eU1Q3Dws5">Je crée ma start-up</a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5 class="text-white">Contact pour information</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="media align-items-center">
                      <i class="fa fa-info-circle mr-2"></i>
                      <span class="media-body">Aide</span>
                    </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>login">
                    <span class="media align-items-center">
                      <i class="fa fa-crop mr-2"></i>
                      <span class="media-body">Mon compte</span>
                    </span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>login/register">
                    <span class="media align-items-center">
                      <i class="fa fa-user mr-2"></i>
                      <span class="media-body">Se faire incubé</span>
                    </span>
                </a>
              </li>
            </ul>
            <!-- End Nav Link -->
          </div>
          <div class="col-12 col-md-12 col-12 text-center">
           <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              
                <li class="nav-item">
                  <a class="nav-link media" href="javascript:;">
                      <span class="media">
                        <span class="fa fa-map-marker mt-1 mr-2"></span>
                        <span class="media-body">

                          <?php echo($adresse_info) ?>
                           <img class="brand" src="<?php echo($icone_info) ?>" alt="Logo">
                        </span>

                      </span>
                  </a>
                </li>
            </ul>
          </div>
        </div>
      </div>

      <hr class="opacity-xs my-0">

      <div class="space-1">
        <div class="row align-items-md-center mb-7">
          <div class="col-md-6 mb-4 mb-md-0">
            <!-- Nav Link -->
            <ul class="nav nav-sm nav-white nav-x-sm align-items-center">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>home/contrat">Politique de confidentialité</a>
              </li>
              <li class="nav-item opacity mx-3">&#47;</li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo(base_url()) ?>home/condition">Terme et condition</a>
              </li>
              
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-md-6 text-md-right">
            <ul class="list-inline mb-0">
              <!-- Social Networks -->
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="<?php echo($facebook_info) ?>" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="mailto:<?php echo($email_info) ?>">
                  <i class="fa fa-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="<?php echo($twitter_info) ?>" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-light" href="<?php echo($linkedin_info) ?>" target="_blank">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
              <!-- End Social Networks -->

              <!-- Language -->
              <li class="list-inline-item">
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker dropdown-toggle btn btn-xs btn-soft-light" href="javascript:;"
                     data-hs-unfold-options='{
                        "target": "#footerLanguage",
                        "type": "css-animation",
                        "animationIn": "slideInDown"
                       }'>
                    <img class="dropdown-item-icon" src="<?php echo base_url(); ?>js/dev/assets/vendor/flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                    <span>United States</span>
                  </a>

                  <div id="footerLanguage" class="hs-unfold-content dropdown-menu dropdown-unfold dropdown-menu-bottom mb-2">
                    <a class="dropdown-item active" href="#">Français</a>
                    
                  </div>
                </div>
              </li>
              <!-- End Language -->
            </ul>
          </div>
        </div>

        <!-- Copyright -->
        <div class="w-md-75 text-lg-center mx-lg-auto">
          <p class="text-white opacity-sm small">&copy; Hub. <?php echo(date('Y')) ?> <?php echo($nom_site_info) ?>. Tous les droits sont réservés.</p>
          <p class="text-white opacity-sm small">Lorsque vous visitez ou interagissez avec nos sites, services ou outils, nous ou nos fournisseurs de services autorisés pouvons utiliser des cookies pour stocker des informations afin de vous offrir une expérience meilleure, plus rapide et plus sûre et à des fins de marketing.</p>
        </div>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <form class="js-validate">
            <!-- Sign in -->
            <div id="signinModalForm">
              <div class="text-center mb-5">
                <h2>Sign in</h2>
                <p>Don't have an account yet?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalForm",
                         "groupName": "idForm"
                       }'>Sign up here</a>
                </p>
              </div>

              <a class="btn btn-block btn-white mb-2" href="#">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss mr-2" src="./assets/svg/brands/google.svg" alt="Image Description">
                    Sign in with Google
                  </span>
              </a>

              <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                 data-hs-show-animation-options='{
                     "targetSelector": "#signinWithEmailModalForm",
                     "groupName": "idForm"
                   }'>Sign in with Email</a>
            </div>
            <!-- End Sign in -->

            <!-- Sign in with Modal -->
            <div id="signinWithEmailModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign in</h2>
                <p>Don't have an account yet?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signupModalForm",
                         "groupName": "idForm"
                       }'>Sign up here</a>
                </p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinModalFormSrEmail">Your email</label>
                <input type="email" class="form-control" name="email" id="signinModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinModalFormSrPassword">
                    <span class="d-flex justify-content-between align-items-center">
                      Password
                      <a class="js-animation-link link text-muted" href="javascript:;"
                         data-hs-show-animation-options='{
                           "targetSelector": "#forgotPasswordModalForm",
                           "groupName": "idForm"
                         }'>Forgot Password?</a>
                    </span>
                </label>
                <input type="password" class="form-control" name="password" id="signinModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Sign in</button>
            </div>
            <!-- End Sign in with Modal -->

            <!-- Sign up -->
            <div id="signupModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign up</h2>
                <p>Already have an account?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>Sign in here</a>
                </p>
              </div>

              <a class="btn btn-block btn-white mb-2" href="#">
                  <span class="d-flex justify-content-center align-items-center">
                    <img class="avatar avatar-xss mr-2" src="./assets/svg/brands/google.svg" alt="Image Description">
                    Sign up with Google
                  </span>
              </a>

              <a class="js-animation-link btn btn-block btn-primary mb-2" href="#"
                 data-hs-show-animation-options='{
                     "targetSelector": "#signupWithEmailModalForm",
                     "groupName": "idForm"
                   }'>Sign up with Email</a>

              <div class="text-center mt-3">
                <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
            <!-- End Sign up -->

            <!-- Sign up with Modal -->
            <div id="signupWithEmailModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Sign up</h2>
                <p>Already have an account?
                  <a class="js-animation-link" href="javascript:;"
                     data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>Sign in here</a>
                </p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrEmail">Your email</label>
                <input type="email" class="form-control" name="email" id="signupModalFormSrEmail" placeholder="email@address.com" aria-label="email@address.com" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrPassword">Password</label>
                <input type="password" class="form-control" name="password" id="signupModalFormSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Your password is invalid. Please try again.">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signupModalFormSrConfirmPassword">Confirm password</label>
                <input type="password" class="form-control" name="confirmPassword" id="signupModalFormSrConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-msg="Password does not match the confirm password.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Sign up</button>

              <div class="text-center mt-3">
                <p class="font-size-1 mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
            <!-- End Sign up with Modal -->

            <!-- Forgot Password -->
            <div id="forgotPasswordModalForm" style="display: none; opacity: 0;">
              <div class="text-center mb-5">
                <h2>Forgot password?</h2>
                <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
              </div>

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="resetPasswordSrEmail" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Your email
                    <a class="js-animation-link d-flex align-items-center link text-muted" href="javascript:;"
                       data-hs-show-animation-options='{
                         "targetSelector": "#signinModalForm",
                         "groupName": "idForm"
                       }'>
                      <i class="fas fa-angle-left mr-2"></i> Back to Sign in
                    </a>
                  </span>
                </label>
                <input type="email" class="form-control" name="email" id="resetPasswordSrEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required data-msg="Please enter a valid email address.">
              </div>
              <!-- End Form Group -->

              <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </div>
            <!-- End Forgot Password -->
          </form>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Sign Up Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fa fa-hand-o-up"></i>
  </a>
  <!-- End Go to Top -->
 <div class="row">
    <div class="col-lg-4 col-md-5">
        <?php include('component/menu_entrep.php') ?>
    </div>



    <div class="col-lg-8 col-md-7">
        <div class="col-md-12 col-xl-12">
            <div class="col-md-12 card">
                <ul class="nav nav-pills custom-pills card-body" id="pills-tab" role="tablist">
                   
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Statut</a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Info basiques</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-photo" role="tab" aria-controls="pills-setting" aria-selected="false">Mon Logo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-photo2" role="tab" aria-controls="pills-setting" aria-selected="false">Mon Projet</a>
                    </li>

                    

                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">


                



                <div class="tab-pane fade show active" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                   <?php include('component/entrep_status.php') ?>
                </div>




                 <!-- photo -->
                <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                        <?php include('object_basic_entrep.php') ?>
                    </div>
                </div>
                <!-- fin photo -->

                <!-- photo -->
                <div class="tab-pane fade" id="previous-photo" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                        <?php include('objet_basic_logo.php') ?>
                    </div>
                </div>
                <!-- fin photo -->

                <!-- photo -->
                <div class="tab-pane fade" id="previous-photo2" role="tabpanel" aria-labelledby="pills-setting-tab">
                    <div class="card-body">
                        <?php include('objet_basic_projet.php') ?>
                    </div>
                </div>
                <!-- fin photo -->

             






            </div>
        </div>
    </div>
  </div>


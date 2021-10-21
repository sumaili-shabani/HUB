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
                              <!-- menu -->
                              <div class="col-md-3">

                               <?php include("menu_activities.php") ?>
                                
                              </div>
                              <!-- fin menu -->
                              <!-- contenu -->
                              <div class="col-md-9">

                                <div class="col-md-12">
                                 <form class="form-group col-md-12" method="post" action="<?php echo base_url(); ?>admin/download_photo_our_photos" style="margin-top: 10px;">
                                    <div class="row" id="uploaded_images" style="margin-top: 10px;">
                                      
                                    </div>

                                    <div class="row resultat" id="country_table" style="margin-top: 10px;">

                                    </div>

                                      <div class="col-md-12 col-lg-12" style="margin-top: 10px;">
                                        <div class="row">
                                          <div class="col-md-3"></div>
                                          <div class="col-md-6">
                                            <nav aria-label="Page navigation example" id="pagination_link">
                                
                                            </nav>
                                          </div>
                                          <div class="col-md-3"></div>
                                        </div>
                                      </div>

                                    <div class="form-group col-md-12" style="margin-top: 10px;">
                                      <div class="row">
                              
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <button type="submit" name="download" class="btn btn-outline-primary"> <i class="fa fa-save fa-lg"></i> &nbsp; Télécharger</button>&nbsp;


                                           <button type="button" name="delete" id="delete" class="btn btn-outline-success " id="add_button" data-toggle="modal" data-target="#userModal"> <i class="fa fa-plus fa-lg"></i> &nbsp; Effectuer l'opération</button>
                                           
                                          </div>
                                        <div class="col-md-2"></div>
                                       
                                        </div>
                                    </div>

                                   </form>
                                
                              </div>
                                
                              </div>
                              <!-- fin contenu -->
                               

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

  
    <div id="userModal" class="modal fade">
      <div class="modal-dialog">
       
          <div class="modal-content">
            <div class="modal-header bg-hub text-white">
              <p class="modal-title text-center">Ajout de nos photos</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

               <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                       <div for="files" class="text-center"><i class="fa fa-picture-o"></i>&nbsp; Selectionnez multiples photos</div>
                       <input type="file" name="files" id="files" class="form-control" multiple />
                      <hr>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                </div>

                    
              
            </div>
            <div class="modal-footer">
              
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        
      </div>
    </div> 
     <script type="text/javascript">
     $(document).ready(function() {

          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Ajout des évènements");  
               $('#userModal').modal('show');  
          });

           $('#files').change(function(){
          var files = $('#files')[0].files;
          var error = '';
          var form_data = new FormData();
          for(var count = 0; count<files.length; count++)
          {
           var name = files[count].name;
           var extension = name.split('.').pop().toLowerCase();
           if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','webp']) == -1)
           {
            error += "Invalid " + count + " Image File"
           }
           else
           {
            form_data.append("files[]", files[count]);
           }
          }
          if(error == '')
          {
           $.ajax({
            url:"<?php echo base_url(); ?>admin/upload_our_photos2", //base_url() return http://localhost/tutorial/codeigniter/
            method:"POST",
            data:form_data,
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
              $('#uploaded_images').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
            },
            success:function(data)
            {
               $('#uploaded_images').html(data);
               $('#files').val('');
               $('#userModal').modal('hide');  
            }
           })
          }
          else
          {
           alert(error);
          }
       });



        function load_country_data(page)
       {
        $.ajax({
         url:"<?php echo base_url(); ?>admin/pagination_galery_our_photos2/"+page,
         method:"GET",
         dataType:"json",
          beforeSend:function()
          {
            $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
          },
         success:function(data)
         {
          $('#country_table').html(data.country_table);
          $('#pagination_link').html(data.pagination_link);
         }
        });
       }
     
     load_country_data(1);

     $(document).on("click", ".pagination li a", function(event){
      event.preventDefault();
      var page = $(this).data("ci-pagination-page");
      load_country_data(page);
     });

     $(document).on('click', '.supprimer', function(e){
          e.preventDefault();
          var idg = $(this).attr('idg');

          if(confirm("Etes-vous sûre de vouloir le supprimer?"))
          {
                
              if(idg !='')
                {
                   // alert("idg:"+idg);
                  $.ajax({
                          url:"<?php echo base_url(); ?>admin/supression_photo_galery_our_photos2",
                          method:"POST",
                          data:{idg:idg},
                          success:function(data)
                          {
                             swal("succès!!!👌", ''+data, "success");
                             load_country_data(1);
                            
                          }
                      });
                }
                else
                {
                  swal("error!!!🙆", "Veillez selectionner aumoins un message pour éffectuer cette opération", "error");
                 
                }
                  
              }
          else
          {
            swal("Ouf!!!", "opération annulée :)", "error");
          }

              
        });

       
     });
   </script>


   

</body>

</html>
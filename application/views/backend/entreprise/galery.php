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
                          <?php include('component/_our_galery.php') ?>
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
        <form class="col-md-12 col-xs-12"  method="post"  enctype="multipart/form-data" 
        	action="<?php echo(base_url()) ?>entreprise/operation_swot/ajout/<?php echo($student_id) ?>">
          <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close" style="margin-top: 10px;"><i class="fa fa-close"></i></a>
          <div class="modal-header">
            <h6 class="title">Notre galerie d'évenement</h6>
          </div>
          <div class="modal-body">

            
            <div class="select col-md-12 mb-2">

                <!-- ajout de tupe de fichier -->
                <label class="control-label"><?php echo('selectionner le type de fichier');?></label>
              
                <select class="form-control" name="type_fichier" required="" id="type_fichier">
                   <option value=""> selectionner un type de fichier</option>
                   <option value="photo">Photo</option>
                   <option value="video">video</option>

                </select>
            </div>
           
            <!-- fin tupe de fichier -->

            <div class="form-group with-button photo col-md-12 mb-2" style="display: none;">
              <label class="control-label"><?php echo('selectionnez les photos');?></label>
              <input class="form-control" type="file" name="files" id="files" required="" multiple>
            </div>

            <!-- ajout video -->
            <div class="form-group with-button video col-md-12 mb-2" style="display: none;">
              <label class="control-label"><?php echo('selectionnez les videos');?></label>
              <input class="form-control" type="file" name="files2" id="files2" required="" multiple>
            </div>


           


            <div class="col-md-12 mb-4">
            	<button type="submit" class="btn btn-hub float-right action">Ajouter</button>

            </div>
            <div style="margin-top: 50px;"></div>




            </div>
            
            
            

          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- fin de mes scripts -->



<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('change', '#type_fichier', function(){
      var type_fichier = $(this).val();
      if (type_fichier !='') {

        if (type_fichier=='photo') {

          $('.photo').show();
          $('.video').hide();
        }
        else{

          $('.photo').hide();
          $('.video').show();
        }

      }
      else{
        swal("erreir!!!","veillez selectionner le type de fichier","error");
        $('.photo').hide();
        $('.video').hide();
      }
    });
    
      
      $('#files').change(function(){
      var files = $('#files')[0].files;
      var error = '';
      var form_data = new FormData();
      for(var count = 0; count<files.length; count++)
      {
         var name = files[count].name;
         var extension = name.split('.').pop().toLowerCase();
         if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
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
            url:"<?php echo base_url(); ?>entreprise/upload_multiple", //base_url() return http://localhost/tutorial/codeigniter/
            method:"POST",
            data:form_data, 
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
             $('#uploaded_images').html("<label class='text-success'>Uploading...</label>");
            },
            success:function(data)
            {
             $('#uploaded_images').html(data);
             $('#files').val('');
             $('.modal').modal('hide');
            }
         });
      }
      else
      {
       swal("erreur!!!",error,"error");
      }
     });


      // pour les videos
      $('#files2').change(function(){

      var files = $('#files2')[0].files;
      var error = '';
      var form_data = new FormData();
      for(var count = 0; count<files.length; count++)
      {
         var name = files[count].name;
         var extension = name.split('.').pop().toLowerCase();
         if(jQuery.inArray(extension, ['mp4','webm']) == -1)
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
            url:"<?php echo base_url(); ?>entreprise/upload_multiple_video", //base_url() return http://localhost/tutorial/codeigniter/
            method:"POST",
            data:form_data, 
            contentType:false,
            cache:false,
            processData:false,
            beforeSend:function()
            {
             $('#uploaded_video').html("<label class='text-success'>Uploading...</label>");
            },
            success:function(data)
            {
             $('#uploaded_video').html(data);
             $('#files').val('');
             $('.modal').modal('hide');
            }
         });
      }
      else
      {
       swal("erreur!!!",error,"error");
      }
     });




  });
</script>




</body>

</html>
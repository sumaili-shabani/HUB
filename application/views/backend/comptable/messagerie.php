<!DOCTYPE html>
<html lang="fr">

<head>

   <?php include('_meta.php') ?>
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/assets/css/chat.css">

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
                           <div class="col-md-8">
                            <?php include("objet_basic_messagerie.php") ?>
                             
                           </div>
                           <div class="col-md-4 card">
                             <div class="col-md-12 card-body">

                              <?php include("objet_basic_groupe.php") ?>
                               
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

    <!-- modal  -->
   <div id="userModal" class="modal fade">
      <div class="modal-dialog modal-xs">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-hub text-white">
              <p class="modal-title text-center">cat</p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                    

                  <!-- .contenues -->
                  <div class="col-md-12">
                    <div class="row">

                     

                      <div class="form-group jf-inputwithicon col-md-12 description_mod">
                         
                      </div>

                     
                      
                    </div>
                  </div>
                  <!-- fin contenus -->

                    
              
            </div>
            <div class="modal-footer">
                <input type="hidden" name="code" id="code">
                
                <input type="hidden" name="operation" id="operation" />
                <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   <!-- fin modal -->





  <script type="text/javascript">
    $(document).ready(function(){

        $(".reponse").hide();
        $(document).on('click', '.affichier', function(event){
          event.preventDefault();
          $(this).parent().next().slideToggle();

        });

       

    });
  </script>


  <script>
    $(document).ready(function(){

         function load_country_data(page)
         {
          $.ajax({
           url:"<?php echo base_url(); ?>comptable/pagination_users_on_to/"+page,
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


         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/fetch_search_user_follow_pagination",
             method:"POST",
             data:{query:query},
             beforeSend:function()
             {
              $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
             },
             success:function(data){
              $('#country_table').html(data);
             }
            });
          }

         $(document).on('keyup','#search_text',function(){
          var search = $(this).val();
          if(search != '')
          {
             load_data(search);
             // $('#pagination_link').html('');
          }
          else
          {
             load_country_data(1);
          }
        });

    
    });

    </script>


     <script>
    $(document).ready(function(){

     function load_country_data2(page)
     {
      $.ajax({
       url:"<?php echo base_url(); ?>comptable/pagination_users_on_line/"+page,
       method:"GET",
       dataType:"json",
        beforeSend:function()
        {
          $('#country_table2').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
        },
       success:function(data)
       {
        $('#country_table2').html(data.country_table);
        $('#pagination_link2').html(data.pagination_link);
       }
      });
     }
     
     load_country_data2(1);

     $(document).on("click", ".pagination li a", function(event){
      event.preventDefault();
      var page = $(this).data("ci-pagination-page");
      load_country_data2(page);
     });


     function load_data_search(query)
     {
        $.ajax({
         url:"<?php echo base_url(); ?>comptable/fetch_search_user_online_pagination2",
         method:"POST",
         data:{query:query},
          beforeSend:function()
          {
            $('#country_table2').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
          },
         success:function(data){
          $('#country_table2').html(data);
         }
        });
      }

     $(document).on('keyup','#search_text2',function(){
      var search = $(this).val();
      if(search != '')
      {
         load_data_search(search);
         // $('#pagination_link').html('');
      }
      else
      {
         load_country_data(1);
      }
    });



    });

</script>

<script type="text/javascript">
  $(document).ready(function() {

     $('.action_message').hide();
     $(document).on('dblclick', '.voir_plus', function(event) {
       event.preventDefault();
       /* Act on the event */

       var code = $(this).attr('code');
       var obj =".action_message_"+code+"";
       alert(obj);
       $(obj).show();
       $(this).removeClass('voir_plus');

       $(this).addClass('cacher_plus');


     });


      

     $(document).on('dblclick', '.cacher_plus', function(event) {
       event.preventDefault();
       /* Act on the event */
       $('.action_message').hide();
       $(this).removeClass('cacher_plus');

       $(this).addClass('voir_plus');


     });

     

     $(document).on('click', '.editer_message', function(event){  

               event.preventDefault();
               var code = $(this).attr("code");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>comptable/fetch_single_message",  
                    method:"POST",  
                    data:{code:code},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                        
                         $('.description_mod').html(data.text_description);

                        
                         $('.modal-title').text("modification du message de "+data.nom);  
                         $('#code').val(code);   
                         $('#action').val("Edit"); 
                         $('.textarea').summernote(); 

                    }  
               });  
          });

           $(document).on('submit', '#user_form', function(event){  
               
               var message = $('#message').val();  
               
               var action = $('#action').val();


                if(message != '')
                {
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'comptable/modification_message'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                
                             }  
                        });

                  }

                }
                else
                {
                  event.preventDefault();  
                  var erreur = "Veillez completer le message 🙆";
                  swal("Erreur!!!",erreur,"error");
                }
 
          }); 


          $(document).on('click', '.supprimer_message', function(event){
              var code = $(this).attr("code");

              if(confirm("Etes-vous sûr de vouloir le supprimer?"))
              {
                
                  $.ajax({
                        url:"<?php echo base_url(); ?>comptable/supression_message",
                        method:"POST",
                        data:{code:code},
                        success:function(data)
                        {
                           // Swal.fire("succès!", ''+data, "success"); 
                           var message =  data;
                          
                        }
                      });
              }
              else
              {
                event.preventDefault(); 
                var erreur = "opération annulée :)";
                swal("ops!!!",erreur,"info");
              }

          });





    
  });
</script>




</body>

</html>
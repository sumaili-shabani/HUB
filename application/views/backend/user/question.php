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
                          <?php include("component/objet_basic_module.php") ?>
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


     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-hub text-center">

                    <div class="nk-block-title modal-title">Paramètrage user</div>
                    <a href="#" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>
                 
                </div>
                <div class="modal-body modal-body-lg">
                   
                    <div class="nk-block">

                      

                      <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12">
                        
                        <div class="col-md-12">
                            <div class="row">


                              <div class="form-group jf-inputwithicon col-md-12">
                              <label><i class="fa fa-bicycle"></i> Nom de l'édition</label>
                                 <select  name="editions" id="editions" class="form-control selectpicker" data-live-search="true">
                                  <?php 
                                  if ($editions->num_rows() > 0) {
                                    ?>
                                    <option value="">Selectionnez édition</option>
                                    <?php
                                    foreach ($editions->result_array() as $key) {
                                      ?>
                                      <option value="<?php echo($key['idedition']) ?>">
                                        <?php echo($key['nom']) ?></option>
                                      <?php
                                    }
                                  }
                                  else{

                                    ?>
                                    <option value="">Aucune édition n'est diponible</option>
                                    <?php
                                  }
                                  ?>
                                  
                                 </select> 
                              </div>


                              <div class="form-group jf-inputwithicon col-md-12">
                                  <label><i class="fa fa-bus"></i> Nom de la formation</label>
                                     <select  name="formations" id="formations" class="form-control">
                                     
                                      
                                     </select> 
                              </div>


                              <div class="form-group jf-inputwithicon col-md-12">
                                  <label><i class="fa fa-university"></i> Nom rubrique</label>
                                  <select  name="rubriques" id="rubriques" class="form-control">
                                   
                                  </select> 
                              </div>

                              

                              <div class="form-group col-md-12">
                                <label><i class="fa fa-pencil"></i> Nom de la question</label>
                                <textarea name="nomq" id="nomq" placeholder="Entrez la question" class="form-control"></textarea>
                                
                            </div>

                           
                            </div>
                        </div>

                        <div class="buysell-field form-action text-center mb-2">
                              <div>

                                <input type="hidden" name="idr" id="idr" placeholder="idr" />


                                <input type="hidden" name="idq" id="idq" />
                        <input type="hidden" name="operation" id="operation" />
                        <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
                              </div>
                              <div class="pt-3">
                                  <a href="javascript:void(0);" data-dismiss="modal" class="link link-danger">Annuler l'opération</a>
                              </div>
                          </div>


                      </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->



    
    <script type="text/javascript">
      $(document).ready(function(){
        // alert("cool");
        $('.selectpicker').selectpicker();
      });
    </script>
  
    <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des questions");  
               $('#action').val("Add");  
               $('#user_uploaded_image').html('');  
          })  
          // var dataTable = $('#user_data').DataTable();
          // var dataTable = $('#user_data').DataTable({  
          //      "processing":true,  
          //      "serverSide":true,  
          //      "order":[],  
          //      "ajax":{  
          //           url:"<?php echo base_url() . 'user/fetch_question'; ?>",  
          //           type:"POST"  
          //      },  
          //      "columnDefs":[  
          //           {  
          //                "targets":[0, 0, 0],  
          //                "orderable":true,  
          //           },  
          //      ],  
          // });

          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var idr              = $('#idr').val();
               var nomq         = $('#nomq').val();  
               var action = $('#action').val();

               if(idr != '' && nomq  != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'user/operation_question'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès', ''+data, 'success'); 
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                load_country_data(1);  
                           }  
                      });
                        // alert("insertion");

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'user/modification_question'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès', ''+data, 'success'); 
                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                  load_country_data(1);  
                             }  
                        });

                  }

                }
                else
                {
                  // swall("Tous les champs doivent être remplis", "", "danger");
                  swal("Erreur!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var idq = $(this).attr("idq");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>user/fetch_single_question",  
                    method:"POST",  
                    data:{idq:idq},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         $('#idr').val(data.idr);
                         $('#nomq').val(data.nomq);
                        
                         $('.modal-title').text("modification de la question "+data.nomq);  
                         $('#idq').val(idq);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var idq = $(this).attr("idq");

              if(confirm("Are you sure you want to delete this?"))
            {
              
                $.ajax({
                      url:"<?php echo base_url(); ?>user/supression_question",
                      method:"POST",
                      data:{idq:idq},
                      success:function(data)
                      {
                         swal("succès!", ''+data, "success");
                         load_country_data(1);
                      }
                    });
            }
            else
            {
              swal("Ouf!!!", "opération annulée :)", "error");
            }

          });



          $(document).on('change', '#editions', function(){
              var idedition = $(this).val();
              if(idedition != '')
              {
                // alert(idedition);
                 $.ajax({
                    url:"<?php echo base_url(); ?>user/fetch_formation_requete",
                    method:"POST",
                    data:{idedition:idedition},
                    beforeSend:function()
                    {
                       $('#formations').html('<div id="loading" style="" ></div>');
                    },
                    success:function(data)
                    {
                       $('#formations').html(data);

                       $('#idedition').val(idedition);
                    }

                 });
              }
              else
              {
                 $('#formations').html('<option value="">Selectionner un cours</option>');
                 swal("Error", "veillez completer l'édition", "error");
                 $('#idedition').val("");
                 
              }
              // alert(idv);
          });

          $(document).on('change', '#formations',function(){
              var idformation = $(this).val();
              if(idformation != '')
              {
                // alert(idformation);
                 $.ajax({
                    url:"<?php echo base_url(); ?>user/fetch_rubriques_requete",
                    method:"POST",
                    data:{idformation:idformation},
                    beforeSend:function()
                    {
                       $('#rubriques').html('<div id="loading" style="" ></div>');
                    },
                    success:function(data)
                    {
                       $('#rubriques').html(data);

                       $('#idformation').val(idformation);
                    }

                 });
              }
              else
              {
                 $('#rubriques').html('<option value="">Selectionner un rubrique</option>');
                 swal("Error", "veillez completer la formation", "error");
                 $('#idformation').val("");
                 
              }


              
            
          });

          
          $(document).on('change', '#rubriques',function(){
              var idr = $(this).val();
              if (idr !='') {
                $('#idr').val(idr);
              }
              else{
                swal("Erreur!!!","veillez selectionner la formation","error");
              }
            
          });


          /*script pour le fetch
          ==================================
          ====================================
          */
          

          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>user/pagination_questions/"+page,
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

         $(document).on("click", ".pagination li a", function(event){
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_country_data(page);
         });

       
         views();

         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>user/fetch_search_view_questions",
             method:"POST",
             data:{query:query},
              beforeSend:function()
              {
                $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
              },
             success:function(data){
              $('#country_table').html(data);
             }
            })
         }

          $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
             load_data(search);
            }
            else
            {
              load_country_data(1);
            }
          });

          function views(){
           var recherche = $('#search_text').val();
           if (recherche !='') {
            load_data(recherche);
           }
           else{
            load_country_data(1);
           }
          }

          $(document).on('change', '#limit', function(event) {
              event.preventDefault();
              /* Act on the event */
              var limit = $(this).val();
              if (limit !='') {
                $.ajax({
                  url: '<?php echo base_url(); ?>user/fetch_limit_view_questions',
                  type: 'POST',
                  data: {limit: limit},
                  beforeSend:function()
                  {
                     $('#country_table').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                  },
                  success: (data)=>{
                    $('#country_table').html(data);
                  }
                });
              }
              else{
                swal("erreur!!!", "veillez selectionner un filtre", "error");
              }
          });

          

     });  
     </script>



</body>

</html>
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
                             <?php include("component/objet_basic_operation.php") ?>
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
      <div class="modal-dialog modal-lg">
        <form method="post" id="user_form" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header bg-hub text-white">
              <p class="modal-title text-center">operation </p>
              <button type="button" class="close text-danger" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>
            <div class="modal-body">
                
                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-6 form-group">
                      <label>Type d'opération </label>
                      <select class="form-control" id="idtype" name="idtype">
                        <option value="">Selectionnez l'opération</option>
                        <option value="entree">Entrée</option>
                        <option value="sortie">Sortie</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Nom de la personne </label>
                      <input type="text" name="nomPer" id="nomPer" placeholder="Nom de la personne" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Entrez le montant </label>
                      <input type="text" name="montant_lettre" id="montant_lettre" placeholder="montant en toute lettre" class="form-control">
                    </div>

                    <div class="col-md-6 form-group">
                      <label>Entrez le montant en chiffre unité $ </label>
                      <input type="number" name="montant_nombre" id="montant_nombre" placeholder="montant en chiffre e.g: 100$" class="form-control">
                    </div>

                    <div class="col-md-12 form-group">
                      <label>La date du jour </label>
                      <input type="date" name="jour" id="jour" placeholder="Nom de la personne" class="form-control">
                    </div>

                    <div class="col-md-12 form-group">
                      <label>Entrez le libellé </label>
                      <textarea class="form-control" name="libelle" id="libelle" placeholder="Saisissez le libellé..."></textarea>
                    </div>

                    <div class="col-md-12 form-group">
                      <label>Entrez le motif </label>
                      <textarea class="form-control" name="motif" id="motif" placeholder="Saisissez le motif de l'opération..."></textarea>
                    </div>


                    
                  </div>
                </div>
              
            </div>
            <div class="modal-footer">
                <input type="hidden" name="iddepense" id="iddepense" placeholder="iddepense">
                <input type="hidden" name="type" id="type" placeholder="iddepense">

                <input type="hidden" name="operation" id="operation" />
                <input type="submit" name="action" id="action" class="btn btn-hub" value="Add" />
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
   <!-- fin modal -->


   <script type="text/javascript" language="javascript" >  
     $(document).ready(function(){  

       var  $message = '';
          $('#add_button').click(function(){  
               $('#user_form')[0].reset();  
               $('.modal-title').text("Paramètrage des rôles");  
               $('#action').val("Add");  
          })  
          
          $(document).on('submit', '#user_form', function(event){  
               event.preventDefault();  
               var nomPer = $('#nomPer').val();  
               var libelle = $('#libelle').val();
               var motif = $('#motif').val();
               var jour = $('#jour').val();
               var type = $('#type').val();
               var montant_nombre = $('#montant_nombre').val();

               
               var action = $('#action').val();


               if(nomPer != '' && libelle != '' && motif != '' && jour != '' && type != '' && montant_nombre != '')
                {

                  if (action =="Add") {
                       
                      $.ajax({  
                           url:"<?php echo base_url() . 'comptable/operation_depense'?>",  
                           method:'POST',  
                           data:new FormData(this),  
                           contentType:false,  
                           processData:false,  
                           success:function(data)  
                           {  
                                swal('succès 👌', data, 'success'); 
                               
                                $('#user_form')[0].reset();  
                                $('#userModal').modal('hide');  
                                 load_country_data(1);
                           }  
                      });

                  }
                  if (action == 'Edit') {

                        $.ajax({  
                             url:"<?php echo base_url() . 'comptable/modification_depense'?>",  
                             method:'POST',  
                             data:new FormData(this),  
                             contentType:false,  
                             processData:false,  
                             success:function(data)  
                             {  
                                  swal('succès 👌', data, 'success');
                                   

                                  $('#user_form')[0].reset();  
                                  $('#userModal').modal('hide');  
                                   load_country_data(1); 
                             }  
                        });

                  }

                }
                else
                {
                  swal("Erreur 🙆!!!", "Tous les champs doivent être remplis", "error");
                }


                 
          });  


          $(document).on('click', '.update', function(){  
               var iddepense = $(this).attr("iddepense");  
               $.ajax({  
                    url:"<?php echo base_url(); ?>comptable/fetch_single_depense",  
                    method:"POST",  
                    data:{iddepense:iddepense},  
                    dataType:"json",  
                    success:function(data)  
                    {  
                         $('#userModal').modal('show');  
                         
                         $('#nomPer').val(data.nomPer);
                         $('#type').val(data.type);
                         $('#jour').val(data.jour);
                         $('#motif').val(data.motif);
                         $('#libelle').val(data.libelle);
                         $('#montant_lettre').val(data.montant_lettre);
                         $('#montant_nombre').val(data.montant_nombre);
                        
                         $('.modal-title').text("modification de l'opération "+data.type+" du "+data.created_at+" comptable: "+data.first_name+" "+data.last_name);  
                         $('#iddepense').val(iddepense);   
                         $('#action').val("Edit");  
                    }  
               });  
          });

          $(document).on('click', '.delete', function(){
              var iddepense = $(this).attr("iddepense");

              if(confirm("Are you sure you want to delete this?"))
              {
                
                  $.ajax({
                      url:"<?php echo base_url(); ?>comptable/suppression_depense",
                      method:"POST",
                      data:{iddepense:iddepense},
                      success:function(data)
                      {
                         swal('succès 👌', data, 'success');
                          load_country_data(1);
                          
                         // dataTable.ajax.reload();
                      }

                  });
              }
              else
              {
                swal("Ouf!!!", "opération annulée :)", "info");
              }
          });

          function load_country_data(page)
          {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/pagination_view_depense/"+page,
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
         load_country_data(1);

         function load_data(query)
         {
            $.ajax({
             url:"<?php echo base_url(); ?>comptable/fetch_search_view_depense",
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


          $("#idtype").on("change", function(t) {

            var type = $(this).val();
                if (type !='') {
                  $('#type').val(type);
                }
                else{

                    $('#type').val("");

                    var erreur = "Veillez complèter le type d'opération 😰";
                    swal("Oups!!!",erreur,'error');
                   
                }
          })

         views();


     });  
     </script>



</body>

</html>
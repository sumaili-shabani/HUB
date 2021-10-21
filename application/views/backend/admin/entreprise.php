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
                        			<div class="col-md-4">
                        				<?php include('component/menu_filtre.php') ?>
                        				
                        			</div>

                        			<div class="col-md-8">
                                        
                        				<div class="col-md-12">
                        					<div class="row afficher_liste">
                                               
                        					</div>
                        				</div>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <div class="row">
                                                
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8">
                                                    <nav aria-label="Page navigation example" id="pagination_link2">
                                                  
                                                    </nav>
                                                </div>
                                                <div class="col-md-2"></div>
                                                
                                            </div>
                                        </div>
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
        $(document).ready(function() {
             function load_country_data2(page)
             {
              $.ajax({
               url:"<?php echo base_url(); ?>admin/pagination_candidat_liste/"+page,
               method:"GET",
               dataType:"json",

                beforeSend:function()
                {
                  $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
               success:function(data)
               {
                $('.afficher_liste').html(data.country_table);
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


             function load_data(query)
             {
                  $.ajax({
                   url:"<?php echo base_url(); ?>admin/fetch_search_candidat_pagination",
                   method:"POST",
                   data:{query:query},
                    beforeSend:function()
                    {
                      $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                    },
                    success:function(data){
                      $('.afficher_liste').html(data);
                    }

                  });
              }

             $(document).on('keyup','.search_text',function(event){
                if (event.which == 13) {
                    var search = $(this).val();
                    if(search != '')
                    {
                       load_data(search);
                       $('#pagination_link2').html('');
                    }
                    else
                    {
                       load_country_data2(1);
                    }
                }
                
            });


            $(document).on('click','.idp', function(){

              var idp= $(this).attr('idp');
              // alert("band "+idp);

              $.ajax({
                url:"<?php echo base_url(); ?>admin/show_candidat_by_province",
                method: "POST",
                data:{
                  idp: idp
                },

                beforeSend:function()
                {
                  $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  $('.afficher_liste').html(data);
                }
              });
              
            });

            
             $(document).on('click','.idv', function(){

              var idv= $(this).attr('idv');
              // alert("band "+idv);

              $.ajax({
                url:"<?php echo base_url(); ?>admin/show_candidat_by_ville",
                method: "POST",
                data:{
                  idv: idv
                },

                beforeSend:function()
                {
                  $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  $('.afficher_liste').html(data);
                }
              });
              
            });


            $(document).on('click','.idcat', function(){

              var idcat= $(this).attr('idcat');
              // alert("band "+idcat);

              $.ajax({
                url:"<?php echo base_url(); ?>admin/show_candidat_by_category",
                method: "POST",
                data:{
                  idcat: idcat
                },

                beforeSend:function()
                {
                  $('.afficher_liste').html('<div class="col-md-12 post_data"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
                success: function(data){
                  $('.afficher_liste').html(data);
                }
              });
              
            });




        });
    </script>


    <script>
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>admin/fetch_auto',
       remote:{
        url:'<?php echo base_url(); ?>admin/fetch_auto/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch .typeahead').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="row"><div class="col-md-4" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/photo/{{image}}" class="img-thumbnail" width="48" /></div><div class="col-md-8" style="padding-right:5px; padding-left:5px;">{{name}}</div></div>')
       }
      });
    });
    </script>

</body>

</html>
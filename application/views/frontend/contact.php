
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
            <h1>Contactez-nous pour information</h1>
            <p>Que pouvons nous vous aider?</p>
          </div>

          <div class="row">
            <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="#contact_info">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-7.svg" alt="SVG">
                  </figure>
                  <h3 class="h4">Notre groupe</h3>
                  <p class="text-body mb-0">Nous ici pour vous</p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5">
                  Contactez-nous <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>

            <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="#contact_info">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-4.svg" alt="SVG">
                  </figure>
                  <h3 class="h4">Des questions?</h3>
                  <p class="text-body mb-0">N'hesitez pas surtout</p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5">
                  Contactez-nous<i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>

            <div class="col-md-4 mb-md-n11">
              <!-- Card -->
              <a class="card text-center h-100 transition-3d-hover" href="#contact_info">
                <div class="card-body p-lg-5">
                  <figure class="max-w-8rem w-100 mx-auto mb-4">
                    <img class="img-fluid" src="<?php echo base_url(); ?>js/dev/assets/svg/icons/icon-44.svg" alt="SVG">
                  </figure>
                  <h3 class="h4">Nous sommes ici pour vous servir</h3>
                  <p class="text-body mb-0">N'hesitez pas regoignez déjà notre groupe</p>
                </div>
                <div class="card-footer font-weight-bold py-3 px-lg-5">
                  Contactez-nous <i class="fas fa-angle-right fa-sm ml-1"></i>
                </div>
              </a>
              <!-- End Card -->
            </div>
          </div>
        </div>
      </div>

      <!-- SVG Shape -->
      <figure class="position-absolute bottom-0 right-0 left-0">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#DC4405" points="0,273 1921,273 1921,0 "/>
        </svg>
      </figure>
      <!-- End SVG Shape -->
    </div>
    <!-- End Hero Section -->
    <!-- Hero Section -->
     <img class="img-fluid d-none d-md-block w-50 mx-auto mb-7" src="<?php echo base_url(); ?>js/dev/assets/svg/components/three-pointers.svg" alt="SVG Arrow">
    <!-- End Hero Section -->

    <!-- main -->

    <div id="aboutSection" class="container space-2 space-lg-3 mt-1">
     

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <!-- contenu -->
             <?php include("_contact.php") ?>
            <!-- fin contenu -->
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

  <script type="text/javascript">
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>home/fetch_auto_vides',
       remote:{
        url:'<?php echo base_url(); ?>home/fetch_auto_vides/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch_video .typeahead_video').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-2" style="padding-right:5px; padding-left:5px;"><img src="<?php echo(base_url()) ?>upload/video/{{image}}" class="img-thumbnail" width="68" /></div><div class="col-md-10" style="padding-right:5px; padding-left:5px;"><a class="text-primary" href="<?php echo(base_url()) ?>home/video/{{code}}">{{name}}</a><hr></div></div></div>')
       }
      });
    });
</script>

 <script type="text/javascript">
    $(document).ready(function(){
      var sample_data = new Bloodhound({
       datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
       queryTokenizer: Bloodhound.tokenizers.whitespace,
       prefetch:'<?php echo base_url(); ?>home/fetch_auto_articles',
       remote:{
        url:'<?php echo base_url(); ?>home/fetch_auto_articles/%QUERY',
        wildcard:'%QUERY'
       }
      });
      

      $('#prefetch2 .typeahead').typeahead(null, {
       name: 'sample_data',
       display: 'name',
       source:sample_data,
       limit:10,
       templates:{
        suggestion:Handlebars.compile('<div class="col-md-12 card"><div class="row card-body"><div class="col-md-10" style="padding-right:5px; padding-left:5px;"><a class="text-primary" href="<?php echo(base_url()) ?>home/article/{{idart}}">{{name}}</a><hr></div></div></div>')
       }
      });
    });
</script>


 <script type="text/javascript" language="javascript" >  
   $(document).ready(function(){


      
      $(document).on('submit', '#user_form', function(event){  
           event.preventDefault();




           var name = $('#name').val();
           var subject = $('#subject').val();
           var email = $('#email').val();
           var message = $('#message').val(); 
           var extension = $('#user_image').val().split('.').pop().toLowerCase();
           // alert(nom+" sujet:"+sujet+" email:"+email+" message:"+message);

            if(extension != '')  
           {  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg','txt','xlsx','docx','mp3','mp4']) == -1)  
                {  
                     // alert("Invalid Image File"); 
                     swal("Oups!!!", " erreur liée au format du fichier","error");  
                     $('#user_image').val('');  
                     return false;  
                }  
           } 

           if(name != '' && subject != '' && email != '' && message != '')
            {
                  $.ajax({  
                       url:"<?php echo base_url() . 'home/operation_contact'?>",  
                       method:'POST',  
                       data:new FormData(this),  
                       contentType:false,  
                       processData:false,  
                       success:function(data)  
                       {  
                            swal("succès!!!👌",data,"success");  
                            $('#user_form')[0].reset();    
                       }  
                  });
                 // swal("cool👌", "félicitation", "success");

            }
            else
            {
              if (name=='') {
                swal("error!!!🙆", " Veillez complèter le nom","error");
              }
              if (subject=='') {
                swal("error!!!🙆", " Veillez complèter le sujet","error");
              }
              if (email=='') {
                swal("error!!!🙆", " Veillez complèter votre adresse mail","error");
              }
              if (message=='') {
                swal("error!!!🙆", " Veillez complèter le message","error");
              }
              
            }


             
      });  
      

 });  
  </script>

  




</body>
</html>
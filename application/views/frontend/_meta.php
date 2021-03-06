<?php 
$icone_info;
$tel1_info;
$tel2_info ;
$adresse_info ;
$facebook_info ;
$twitter_info;
$linkedin_info;
$email_info ;
$termes_info;
$confidentialite_info ;
$description_info;
$mission_info;
$objectif_info;
$blog_info;
$nom_site_info;

$whatsapp_info ;
$instagram_info ;

if ($contact_info_site->num_rows() > 0) {
	foreach ($contact_info_site->result_array() as $key) {
		$nom_site_info = $key['nom_site'];
		$icone_info = base_url().'upload/tbl_info/'.$key['icone'];
		$tel1_info = $key['tel1'];
		$tel2_info = $key['tel2'];
		$adresse_info = $key['adresse'];
		$facebook_info = $key['facebook'];
		$twitter_info = $key['twitter'];
		$linkedin_info = $key['linkedin'];
		$email_info = $key['email'];
		$termes_info = $key['termes'];
		$confidentialite_info = $key['confidentialite'];
		$description_info = $key['description'];
		$mission_info = $key['mission'];
		$objectif_info = $key['objectif'];
		$blog_info = $key['blog'];

   

	}

}


 ?>
<!-- Title -->
<title><?php echo($title) ?></title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo($icone_info) ?>">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

<!-- Page Title  -->
<meta name="description" content="<?= $description_info ?>">
<meta name="keywords"    content="<?= $description_info ?>">

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="<?php echo base_url(); ?>js/dev/assets/css/vendor.min.css">

<!-- CSS Front Template -->
<link rel="stylesheet" href="<?php echo base_url(); ?>js/dev/assets/css/theme.min.css?v=1.0">

<link rel="stylesheet" href="<?php echo base_url(); ?>js/dev/flex/datatables/css/jquery.dataTables.min.css">
  
<link rel="stylesheet" href="<?php echo base_url(); ?>js/dev/flex/sweetalert/sweetalert.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/dev/flex/font-awesome/css/font-awesome.min.css">

<style type="text/css">
	#loading
    {
     text-align:center; 
     background: url('./assets/loader.gif') no-repeat center; 
     height: 150px;
    }

    .space-2, .space-top-2 {
	    padding-top: 0rem !important;
	}
</style>


<!-- Custom styles for this template canavas-->
<link href="<?php echo(base_url())?>js/css/canvas.css" rel="stylesheet">
<link href="<?php echo(base_url())?>js/css/my_style.css" rel="stylesheet">

<style>  
     body  
     {  
          margin:0;  
          padding:0;  
          background-color:#f1f1f1;  
     }  
     .box  
     {  
          width:900px;  
          padding:20px;  
          background-color:#fff;  
          border:1px solid #ccc;  
          border-radius:5px;  
          margin-top:10px;  
     }
     .hub{
      background-color: rgb(220, 68, 5);
     } 
     .bg-hub{
      background-color: rgb(220, 68, 5);
      color:white;
     } 
     .btn-hub{
      background-color: rgb(220, 68, 5);
      color:white;
     }
     #loading
    {
     text-align:center; 
     background: url('<?php echo base_url(); ?>js/assets/loader.gif') no-repeat center; 
     height: 150px;
    } 
</style>  

<style>
    @-webkit-keyframes placeHolderShimmer {
      0% {
        background-position: -468px 0;
      }
      100% {
        background-position: 468px 0;
      }
    }

    @keyframes placeHolderShimmer {
      0% {
        background-position: -468px 0;
      }
      100% {
        background-position: 468px 0;
      }
    }

    .content-placeholder {
      display: inline-block;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: forwards;
      animation-fill-mode: forwards;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-name: placeHolderShimmer;
      animation-name: placeHolderShimmer;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
      background: #f6f7f8;
      background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
      background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
      background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
      -webkit-background-size: 800px 104px;
      background-size: 800px 104px;
      height: inherit;
      position: relative;
    }

    .post_data
    {
      padding:24px;
      border:1px solid #f9f9f9;
      border-radius: 5px;
      margin-bottom: 24px;
      box-shadow: 10px 10px 5px #eeeeee;
    }

    .space-2, .space-top-2 {
      padding-top: 0rem !important;
    }
    .space-2, .space-bottom-2 {
      padding-bottom: 1rem !important;
    }

   /* .search-push-top {
        display: none;
        background-color: #DC4405;
        padding-top: 3rem;
        padding-bottom: 3rem;
        box-shadow: inset 0 -10px 20px -10px rgb(151 164 175 / 5%);
        color: #FFF;
    }*/
</style>



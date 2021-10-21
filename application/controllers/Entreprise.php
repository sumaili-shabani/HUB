<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class entreprise extends CI_Controller
{
	private $token;
	private $connected;
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->userdata('instuctor_login'))
	  {
	      	redirect(base_url().'login');
	  }
	  $this->load->library('form_validation');
	  $this->load->library('encryption');
      $this->load->library('pdf');
	  $this->load->model('crud_model'); 

	  $this->load->helper('url');

	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
	  $this->connected = $this->session->userdata('instuctor_login');

	  /*
	  je script pour les galeries du contrat d'expiration
	
		// $this->crud_model->show_galery_expire();
		$this->crud_model->show_galery_expire();
	  */



	}

	function index(){
		$data['title']="mon profile entreprise";
		$this->load->view('backend/entreprise/templete_admin', $data);
  		// $this->load->view('backend/entreprise/templete_admin', $data);
	}

   function joinmetting($param =''){
    $data['title']="Rejoindre la reunion";
    $data['domain']=$param;

    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['variable']  = $this->crud_model->Select_all_news();
    $data['roles']      = $this->crud_model->Select_formations_ok("idrole","role");
    $data['conference']     = $this->crud_model->Select_formations_ok("idconference","conference");
    $this->load->view('backend/entreprise/joinmetting', $data);
  }

  function calendrier(){
    $data['title']="Calendrier d'activité pour une réunion";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['variable']  = $this->crud_model->Select_all_news();
    $this->load->view('backend/entreprise/zoom_calendar', $data);
  }

  function module($param1=''){
    $data['title']="Ajout de module";
    $data['token'] = $param1;
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $this->load->view('backend/entreprise/module', $data);
  }
	
	function dashbord(){
		  $data['title']="Tableau de bord";
	      // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");

	      $data['nombre_client'] = $this->crud_model->statistiques_nombre_tag_by_projet("projet", $this->connected);

	      $data['nombre_canavas'] = $this->crud_model->statistiques_nombre_tag_by_projet("link_canavas", $this->connected);

	      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre_tag("paiement", $this->connected);

	       $data['nombre_swot'] = $this->crud_model->statistiques_nombre_tag_by_projet("swot", $this->connected);
	      $this->load->view('backend/entreprise/dashbord', $data);
	}


	function profile(){
      $data['title']="mon profile entreprise";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/entreprise/profile', $data);
    }

    function basic(){
        $data['title']="Information basique de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/entreprise/notification', $data);
    }

    function client(){
  		$data['title']="Paramétrage  des clients";
  		$data['entreprises']  = $this->crud_model->Select_entreprises();
  		$this->load->view('backend/entreprise/client', $data);		
  	}

    function facturePaiement($param1=''){
       $customer_id = "paiement facture ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_facture_entreprise($param1);
       
       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }

    /*

    *
    *les codes pour le chat
    *=================================================
    ==================================================
    */

    // les scripts pour la gestion d'admiistration 
    function chat_admin($param1, $param2){
        $data['title']="Discution instantané";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['id_user']= $param1;
        $data['id_recever']= $param2;
        $data['id_recever2']= $param2;
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/messagerie', $data);
    }

    function chat_admin2($param1, $param2){

      $title_job = $this->crud_model->get_name_groupe($param2);
      
        $data['title']="le groupe ".$title_job." Discution instantanée";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

        $data['goupe_name']= $title_job;

        $data['id_user']= $param1;
      $data['code_groupe']= $param2;

        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/entreprise/chat_groupe', $data);
    }

    // fin




	  // script de client
  function fetch_client(){  

       $fetch_data = $this->crud_model->make_datatables_client();  
       $data = array();  
       foreach($fetch_data as $row)  
       {  
            $sub_array = array();  
           
            $sub_array[] = nl2br(substr($row->fullname, 0,50));
            $sub_array[] = nl2br(substr($row->tel, 0,15));
            $sub_array[] = nl2br(substr($row->email, 0,20));

            $sub_array[] = nl2br(substr($row->adresse, 0,20));

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
           

            $sub_array[] = '<button type="button" name="update" idclient="'.$row->idclient.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
            $sub_array[] = '<button type="button" name="delete" idclient="'.$row->idclient.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_client(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_client(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_client()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_client($_POST["idclient"]);  
       foreach($data as $row)  
       {  
            $output['fullname'] 	= $row->fullname;
            $output['tel'] 			= $row->tel;
            $output['email'] 		= $row->email;
            $output['adresse'] 		= $row->adresse;
            
           
       }  
       echo json_encode($output);  
  }  


  function operation_client(){

      $insert_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'     	=>     $this->input->post('tel'),
           'email'     	=>     $this->input->post('email'),
           'adresse'    =>     $this->input->post('adresse')
	  );  

      $requete=$this->crud_model->insert_client($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_client(){

      $updated_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'     	=>     $this->input->post('tel'),
           'email'     	=>     $this->input->post('email'),
           'adresse'    =>     $this->input->post('adresse')
	  );

      $this->crud_model->update_client($this->input->post("idclient"), $updated_data);
      echo("modification avec succès");
  }

  function supression_client(){

      $this->crud_model->delete_client($this->input->post("idclient"));
      echo("suppression avec succès");
    
  }

  // fin de script  client 

   // script de location
  function fetch_location(){  

       $fetch_data = $this->crud_model->make_datatables_location();  
       $data = array(); 
       $etat =''; 
       foreach($fetch_data as $row)  
       {  
            $sub_array = array(); 

            if ($row->etat == 0) {
             	$etat ='<span class="badge badge-info">innocupée</span>';
            }
            else{
            	$etat ='<span class="badge badge-success">occupée</span>';
            } 
           
            $sub_array[] = nl2br(substr($row->nom, 0,50)).' ...';
            $sub_array[] = nl2br(substr($row->fullname, 0,15)).' ...';

            $sub_array[] = nl2br(substr($row->montant, 0,20));

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));
            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23));
            $sub_array[] = $etat;

            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
           

            $sub_array[] = '<button type="button" name="update" idl="'.$row->idl.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
            $sub_array[] = '<button type="button" name="delete" idl="'.$row->idl.'" idchambre="'.$row->idchambre.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_location(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_location(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_location()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_location($_POST["idl"]);  
       foreach($data as $row)  
       {  
            $output['montant'] 			= $row->montant;
            $output['idclient'] 		= $row->idclient;
            $output['idchambre'] 		= $row->idchambre;
            $output['date_debit'] 		= $row->date_debit;
            $output['date_fin'] 		= $row->date_fin;
       }  
       echo json_encode($output);  
  }  

  function fetch_single_location_2()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_location_2($_POST["idl"]);  
       foreach($data as $row)  
       {  
            $output['montant'] 			= $row->montant;
            $output['idclient'] 		= $row->idclient;
            $output['idchambre'] 		= $row->idchambre;

            $output['date_debit'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));
            $output['date_fin'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23));
           
            $output['nom'] 				= $row->nom;
            $output['fullname'] 		= $row->fullname;
            $output['adresse'] 			= $row->adresse;

            $output['tel'] 				= $row->tel;
            $output['email'] 			= $row->email;
            $output['montant'] 			= $row->montant;

       }  
       echo json_encode($output);  
  }  


  function operation_location(){

      $insert_data = array(  
           'montant'   		=>     $this->input->post('montant'),
           'idchambre'  	=>     $this->input->post('idchambre'),
           'idclient'   	=>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'    	=>     $this->input->post('date_fin')
	  );  

      $requete=$this->crud_model->insert_location($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_location(){

      $updated_data = array(  
           'montant'   		=>     $this->input->post('montant'),
           'idchambre'  	=>     $this->input->post('idchambre'),
           'idclient'   	=>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'    	=>     $this->input->post('date_fin')
	  );

      $this->crud_model->update_location($this->input->post("idl"), $updated_data);
      echo("modification avec succès");
  }

  function supression_location(){

  		$idchambre = $this->input->post('idchambre');
  		if ($idchambre !='') {
  			
  			$updated_data = array(  
	           'etat'   =>     0
			);

		    $this->crud_model->update_chambre($idchambre, $updated_data);
  		}

      $this->crud_model->delete_location($this->input->post("idl"));
      echo("suppression avec succès");
    
  }

  // fin de script  location 

  function modification_panel($param1='', $param2='', $param3=''){

      if ($param1="option1") {
         $data = array(
            'first_name'        => $this->input->post('first_name'),
            'last_name'       => $this->input->post('last_name'),
            'telephone'       => $this->input->post('telephone'),
            'full_adresse'      => $this->input->post('full_adresse'),
            'biographie'        => $this->input->post('biographie'),
            'date_nais'       => $this->input->post('date_nais'),
            'sexe'          => $this->input->post('sexe'),
            'email'         => $this->input->post('mail_ok'), 

            'facebook'        => $this->input->post('facebook'),
            'linkedin'        => $this->input->post('linkedin'),
            'twitter'         => $this->input->post('twitter')
        );

        $id_user= $this->connected;
        $query = $this->crud_model->update_crud($id_user, $data);
        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
         redirect('entreprise/basic', 'refresh');
      }

  }

  function modification_photo(){

     $id_user= $this->connected;
     if ($_FILES['user_image']['size'] > 0) {
       # code...
        $data = array(
          'image'     => $this->upload_image()
        );
       $query = $this->crud_model->update_crud($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('entreprise/basic_image', 'refresh');

     }
     
  }


  function upload_image()  
  {  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/photo/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
  }

  function modification_account($param1=''){
       $id_user= $this->connected;
       $first_name;

       $passwords = md5($this->input->post('user_password_ancien'));
       
       $users = $this->db->query("SELECT * FROM users WHERE passwords='".$passwords."' AND id='".$id_user."' ");

       if ($users->num_rows() > 0) {
          
          foreach ($users->result_array() as $row) {
            $first_name = $row['first_name'];
            // echo($first_name);
             $nouveau   =  $this->input->post('user_password_nouveau');
             $confirmer =  $this->input->post('user_password_confirmer');
             if ($nouveau == $confirmer) {
              $new_pass= md5($nouveau);

              $data = array(
                  'passwords'  => $new_pass
                );

                 $query = $this->crud_model->update_crud($id_user, $data);
                 $this->session->set_flashdata('message', 'votre clée de sécurité a été changer avec succès '.$first_name);
                   redirect('entreprise/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('entreprise/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('entreprise/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {
	  	$this->session->set_flashdata('message', 'suppression avec succès ');
	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('entreprise/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('entreprise/message/'.$param2);
	  }
	  else{

	  }

  }

  



  /*
  script entreprise commence deja
  ===================================
  **************************************
  ========================================
  */

  function canavas(){
    $data['title']="Busness model canevas!";
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['student_id'] = $this->connected;

    $data['link_canavas1'] = $this->crud_model->show_detail_link_tag($this->connected);
    $data['link_canavas2'] = $this->crud_model->show_detail_link_tag2($this->connected);

    $this->load->view('backend/entreprise/canavas', $data);
  }

  function swot(){
    $data['title']="swot de mon busness!";
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['student_id'] = $this->connected;

    $data['swot'] = $this->crud_model->show_detail_swot_tag($this->connected);
    $data['swot2'] = $this->crud_model->show_detail_swot_tag2($this->connected);

    $this->load->view('backend/entreprise/swot', $data);
  }

  function newprojet(){
    $data['title']="Nouveau projet d'entreprise!";
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['student_id'] = $this->connected;

    // $data['link_canavas1'] = $this->crud_model->show_detail_link_tag($this->connected);
    // $data['link_canavas2'] = $this->crud_model->show_detail_link_tag2($this->connected);

    $this->load->view('backend/entreprise/newprojet', $data);
  }

  function galery(){
    $data['title']="Notre galerie";
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $data['student_id'] = $this->connected;

    $data['repository'] = $this->crud_model->show_detail_galery_tag($this->connected);
   
    $this->load->view('backend/entreprise/galery', $data);
  }



    function profile_entrep(){
      $data['title']="mon profile entreprise";

      $my_entrep = $this->crud_model->get_info_entreprise_tag($this->connected);
      if($my_entrep->num_rows() > 0) {

        $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
        $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


       
        $data['users'] = $this->crud_model->fetch_connected($this->connected);

        $data['category'] = $this->crud_model->fetch_category_register();

        $data['projects'] = $this->crud_model->fetch_projet_tag($this->connected);

        $this->load->view('backend/entreprise/profile_entrep', $data);

      }
      else{

        $insertData = array(
          'nom' =>  'entreprise systèle',
          'ceo' =>   $this->connected,
          'logo'  =>  'logo2.jpg'
        );

        $this->crud_model->insert_nouvelle_entreprise($insertData);

         $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


       
        $data['users'] = $this->crud_model->fetch_connected($this->connected);

        $data['category'] = $this->crud_model->fetch_category_register();
        // $this->load->view('backend/user/viewx', $data);
        $this->load->view('backend/entreprise/profile_entrep', $data);

      }

    }

    function fetch_ville_requete(){
      if($this->input->post('idp'))
      {
        echo $this->crud_model->fetch_ville_requete_crud($this->input->post('idp'));
      }
    }


    function paiement(){
      $data['title']="Faire un paiement pour mon entreprise";

      // $data['MESOFFRES']=$this->crud_model->get_offres_entreprise_tag($this->connected);

      $my_entrep = $this->crud_model->get_info_entreprise_tag($this->connected);
      if($my_entrep->num_rows() > 0) {

        $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($this->connected);
        $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


       
        $data['users'] = $this->crud_model->fetch_connected($this->connected);

        $data['category'] = $this->crud_model->fetch_category_register();
        // $this->load->view('backend/user/viewx', $data);
        $this->load->view('backend/entreprise/paiement', $data);

      }
      else{

        $insertData = array(
          'nom' =>  'entreprise systèle',
          'ceo' =>   $this->connected,
          'logo'  =>  'logo2.jpg'
        );

        $this->crud_model->insert_nouvelle_entreprise($insertData);

         $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


       
        $data['users'] = $this->crud_model->fetch_connected($this->connected);

        $data['category'] = $this->crud_model->fetch_category_register();
        // $this->load->view('backend/user/viewx', $data);
        $this->load->view('backend/entreprise/profile_entrep', $data);

      }

    }


    function modification_panel_entreprise($param1='', $param2='', $param3=''){

     $data = array(
        'nom'           => $this->input->post('nom'),
        'description'     => $this->input->post('description'),
        'idcat'           => $this->input->post('idcat'),
        'typeEntrep'      => $this->input->post('typeEntrep'),
        'nombreEmploye'   => $this->input->post('nombreEmploye'),
        'siteweb'         => $this->input->post('siteweb'),
       
        'idPays'          => $this->input->post('idPays'),
        'idp'             => $this->input->post('idp'),
        'idv'             => $this->input->post('idv'), 

        'facebook'        => $this->input->post('facebook'),
        'linkedin'        => $this->input->post('linkedin'),
        'twitter'         => $this->input->post('twitter')
    );

    $id_user= $this->connected;
    $query = $this->crud_model->update_crud_entreprise($id_user, $data);
    $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
     redirect('entreprise/profile_entrep', 'refresh');

  }

  function modification_photo_entreprise(){

     $id_user= $this->connected;
     if ($_FILES['user_image']['size'] > 0) {
       # code...
        $data = array(
          'logo'     => $this->upload_image()
        );
       $query = $this->crud_model->update_crud_entreprise($id_user, $data);
       $this->session->set_flashdata('message', 'modification avec succès');
           redirect('entreprise/profile_entrep', 'refresh');
     }
     
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('entreprise/profile_entrep', 'refresh');

     }
     
  }


  function add_paiement($param1 =''){

    $identrep = $param1;
    $token = $this->input->post('token');
    if ($identrep !='') {

      $insertdata = array(
          'idpersonne'      => $this->connected,
          'date_paie'       => date('Y-m-d'),
          'montant'         => $this->input->post('montant'),
          'motif'         => $this->input->post('motif'),
          'token'         => $this->input->post('token')
      );


      $id_user= $this->connected;
      $query = $this->crud_model->insert_paiement_pading($insertdata);
       if($query > 0)
       {

            $users_cool = $this->crud_model->get_info_user();
            foreach ($users_cool as $key) {

              
                $id_user_recever = $key['id'];

                if ($key['idrole'] == 1) {
                  $url ="admin/paiement_pading";
                    $nom   = $this->crud_model->get_name_user($id_user);
                    // $nom = $this->input->post('titre');
                    $message ="Nouvelle tentative de paiement ".$nom." vient de faire son paiement";

                    $notification = array(
                      'titre'     =>    "Nouveau de paiement",
                      'icone'     =>    "fa fa-money",
                      'message'   =>     $message,
                      'url'       =>     $url,
                      'id_user'   =>     $id_user_recever
                    );
                    
                    $not = $this->crud_model->insert_notification($notification);

                }
                if ($key['idrole'] == 4) {
                  $url ="comptable/paiement_pading/".$token;
                    $nom   = $this->crud_model->get_name_user($id_user);
                    // $nom = $this->input->post('titre');
                    $message ="Nouvelle tentative de paiement ".$nom." vient de faire son paiement";

                    $notification = array(
                      'titre'     =>    "Nouveau de paiement",
                      'icone'     =>    "fa fa-money",
                      'message'   =>     $message,
                      'url'       =>     $url,
                      'id_user'   =>     $id_user_recever
                    );
                    
                    $not = $this->crud_model->insert_notification($notification);

                }

                # code...
            }

            $this->session->set_flashdata('message', "votre paiement a été mis à jour avec succès!!!🆗 c'est encore en attente de vérification par l'administrateur du système. <br/> pour toute contestation appeler ce numéro +243 817883541 ou +243970524665 ");
          redirect('entreprise/paiement','refresh');
       }
       else{
        $this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
           redirect('entreprise/paiement','refresh');
       }

      
      
      redirect('entreprise/paiement','refresh');
      # code...
    }
    else{
      $this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
      redirect('entreprise/paiement','refresh');
    }

  }


  function operation_canavas($param1 = '', $param2 = '', $param3 = ''){

        if ($param1 == 'ajout') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $this->connected;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            $data['student_id']     = $student_id;
            $data['message']        = $this->input->post('message');
            $query = $this->crud_model->insert_link_canavas($data);
            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'entreprise/canavas', 'refresh');

        }

        if ($param1 == 'edit') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $this->connected;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            
            $data['message']        = $this->input->post('message');


             $query = $this->crud_model->update_link_canavas($param2,$data);

            $this->session->set_flashdata('message' , 'modification avec succès ');
            redirect(base_url() . 'entreprise/canavas', 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_link_canavas($param2);

            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'entreprise/canavas', 'refresh');

        }

    }

    function editer_my_link(){

      $idlink = $this->input->post('idlink');
      $sujet = $this->input->post('sujet');
      $data = array(
        'sujet' =>  $sujet
      );
      
      $query = $this->crud_model->update_link_canavas($idlink,$data);
      echo("modification avec succès!! ");

    }





  function operation_swot($param1 = '', $param2 = '', $param3 = ''){

        if ($param1 == 'ajout') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $this->connected;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            $data['student_id']     = $student_id;
            $data['message']        = $this->input->post('message');
            $query = $this->crud_model->insert_swot_canavas($data);
            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'entreprise/swot', 'refresh');

        }

        if ($param1 == 'edit') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $this->connected;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            
            $data['message']        = $this->input->post('message');

            $query = $this->crud_model->update_swot_canavas($param2, $data);

            $this->session->set_flashdata('message' , 'modification avec succès ');
            redirect(base_url() . 'entreprise/swot', 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_swot_canavas($param2);
            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'entreprise/swot', 'refresh');

        }

    }

    function editer_my_link_swot(){

      $idswot = $this->input->post('idswot');
      $sujet = $this->input->post('sujet');
      $data = array(
        'sujet' =>  $sujet
      );
      
      $query = $this->crud_model->update_swot_canavas($idswot,$data);
      echo("modification avec succès!! ");

    }

    function upload_multiple(){

        sleep(3);
        $student_id = $this->connected;

        if($_FILES["files"]["name"] != '')
        {
         $output = '';
         $config["upload_path"] = './upload/galery/photo/';
         $config["allowed_types"] = 'gif|jpg|png|webp';
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
         {
              $extension = explode('.', $_FILES["files"]["name"][$count]);  
              $new_name = rand() . '.' . $extension[1];
              $type = "photo";

              $_FILES["file"]["name"] = $new_name;
              $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
              $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
              $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
              $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

              // echo($_FILES["files"]["name"][$count]).'<br>';
              // echo($new_name).PHP_EOL;


              if($this->upload->do_upload('file'))
              {
               $data = $this->upload->data();

          
               $output .= '
               <div class="col-md-3" align="center" style="margin-bottom:24px;">
                <img src="'.base_url().'upload/galery/photo/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
                  <br />
                  <input type="checkbox" name="images[]" class="select" value="upload/galery/photo/'.$data["file_name"].'" />
               </div>
               ';
              }

              $data = array(
                  'type'          =>  $type,
                  'fichier'       =>  $new_name,
                  'student_id'    =>  $student_id
              );

              $query = $this->crud_model->insert_galery($data);


         }
         echo $output; 

          


        }

    }



    function upload_multiple_video(){
         sleep(3);
        $student_id = $this->connected;

        if($_FILES["files"]["name"] != '')
        {
         $output = '';
         $config["upload_path"] = './upload/galery/video/';
         $config["allowed_types"] = 'mp4|webm';
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
         {
              $extension = explode('.', $_FILES["files"]["name"][$count]);  
              $new_name = rand() . '.' . $extension[1];
              $type = "video";

              $_FILES["file"]["name"] = $new_name;
              $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
              $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
              $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
              $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

              // echo($_FILES["files"]["name"][$count]).'<br>';
              // echo($new_name).PHP_EOL;


              if($this->upload->do_upload('file'))
              {
               $data = $this->upload->data();

          
               $output .= '
               <div class="col-md-3">
                   <video class="img img-responsive img-thumbnail" poster="asset/images/logo.jpg" controls="">
                      <source src="'.base_url().'uploads/galery/video/'.$data["file_name"].'" type="video/webm">
                      <source src="'.base_url().'uploads/galery/video/'.$data["file_name"].'" type="video/mp4">
                      
                  </video>
               </div>
               ';
              }

              $data = array(
                  'type'          =>  $type,
                  'fichier'       =>  $new_name,
                  'student_id'    =>  $student_id
              );

              $query = $this->crud_model->insert_galery($data);


         }
         echo $output; 

          


        }

    }

    function operation_repository_galery($param1 = '', $param2 = '', $param3 = ''){

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_galery_tag($param2);
            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'entreprise/galery', 'refresh');

        }

    }


    function operationProjet($param1='',$param2=''){
        if ($param1=="ajout") {
          # code...

            $student_id = $this->connected;

            if ($_FILES['logoP']['size'] > 0) {
              $data['logoP']  = $this->upload_logo_projet();
            }
            else{
              $data['logoP']  ="logo2.jpg";
            }

            if ($_FILES['fichierzip']['size'] > 0) {
              $data['fichierzip'] = $this->upload_zip_projet();
            }

            $data['student_id']       = $student_id;

            $data['nomP']             = $this->input->post('nomP');
            $data['idee1']            = $this->input->post('idee1');
            $data['idee2']            = $this->input->post('idee2');
            $data['idee3']            = $this->input->post('idee3');
            $data['idee4']            = $this->input->post('idee4');
            $data['idee5']            = $this->input->post('idee5');

            $data['produit1']         = $this->input->post('produit1');
            $data['produit2']         = $this->input->post('produit2');
            $data['produit3']         = $this->input->post('produit3');
            $data['produit4']         = $this->input->post('produit4');

            $data['client1']          = $this->input->post('client1');
            $data['client2']          = $this->input->post('client2');
            $data['client3']          = $this->input->post('client3');
            $data['marche1']          = $this->input->post('marche1');
            $data['marche2']          = $this->input->post('marche2');

            $data['concurrence1']     = $this->input->post('concurrence1');
            $data['concurrence2']     = $this->input->post('concurrence2');
            $data['moyen1']           = $this->input->post('moyen1');
            $data['moyen2']           = $this->input->post('moyen2');
            $data['moyen3']           = $this->input->post('moyen3');
            $data['moyen4']           = $this->input->post('moyen4');
            $data['moyen5']           = $this->input->post('moyen5');

            $data['partenaire1']      = $this->input->post('partenaire1');
            $data['partenaire2']      = $this->input->post('partenaire2');
            $data['partenaire3']      = $this->input->post('partenaire3');
            $data['faiblesse1']       = $this->input->post('faiblesse1');
            $data['faiblesse2']       = $this->input->post('faiblesse2');
            $data['codeP']            = rand();

            $query = $this->crud_model->insert_projet($data);
            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'entreprise/newprojet', 'refresh');

        }
        else if ($param1=="modification") {
          # code...

            $student_id = $this->connected;
            $codeP = $param2;

            if ($_FILES['logoP']['size'] > 0) {
              $data['logoP']  = $this->upload_logo_projet();
            }
            

            if ($_FILES['fichierzip']['size'] > 0) {
              $data['fichierzip'] = $this->upload_zip_projet();
            }

            $data['student_id']       = $student_id;

            $data['nomP']             = $this->input->post('nomP');
            $data['idee1']            = $this->input->post('idee1');
            $data['idee2']            = $this->input->post('idee2');
            $data['idee3']            = $this->input->post('idee3');
            $data['idee4']            = $this->input->post('idee4');
            $data['idee5']            = $this->input->post('idee5');

            $data['produit1']         = $this->input->post('produit1');
            $data['produit2']         = $this->input->post('produit2');
            $data['produit3']         = $this->input->post('produit3');
            $data['produit4']         = $this->input->post('produit4');

            $data['client1']          = $this->input->post('client1');
            $data['client2']          = $this->input->post('client2');
            $data['client3']          = $this->input->post('client3');
            $data['marche1']          = $this->input->post('marche1');
            $data['marche2']          = $this->input->post('marche2');

            $data['concurrence1']     = $this->input->post('concurrence1');
            $data['concurrence2']     = $this->input->post('concurrence2');
            $data['moyen1']           = $this->input->post('moyen1');
            $data['moyen2']           = $this->input->post('moyen2');
            $data['moyen3']           = $this->input->post('moyen3');
            $data['moyen4']           = $this->input->post('moyen4');
            $data['moyen5']           = $this->input->post('moyen5');

            $data['partenaire1']      = $this->input->post('partenaire1');
            $data['partenaire2']      = $this->input->post('partenaire2');
            $data['partenaire3']      = $this->input->post('partenaire3');
            $data['faiblesse1']       = $this->input->post('faiblesse1');
            $data['faiblesse2']       = $this->input->post('faiblesse2');

            $query = $this->crud_model->update_projet($codeP, $data);
            $this->session->set_flashdata('message' , 'Modification avec succès ');
            redirect(base_url() . 'entreprise/operationProjet/detail/'.$codeP, 'refresh');

        }
        elseif ($param1 =="suppression") {
          $codeP = $param2;
          $query = $this->crud_model->delete_projet($codeP);
            $this->session->set_flashdata('message' , 'Suppression avec succès ');
            redirect(base_url() . 'entreprise/newprojet', 'refresh');
        }
        elseif ($param1 =="detail") {
          $codeP = $param2;

          $data['title']="Modification projet d'entreprise!";
          $data['users'] = $this->crud_model->fetch_connected($this->connected);
          $data['student_id'] = $this->connected;
          $data['codeP'] = $codeP;
          $data['projects'] = $this->crud_model->fetch_projet_tag_by_code($codeP);

          $this->load->view('backend/entreprise/edit_project', $data);
        }
        else{

          $this->session->set_flashdata('message2' , 'Opération non trouvée!!!!');
          redirect(base_url() . 'entreprise/newprojet', 'refresh');
        }



    }


    function upload_logo_projet()  
    {  
         if(isset($_FILES["logoP"]))  
         {  
              $extension = explode('.', $_FILES['logoP']['name']);  
              $new_name = rand() . '.' . $extension[1];  
              $destination = './upload/projet/logo/' . $new_name;  
              move_uploaded_file($_FILES['logoP']['tmp_name'], $destination);  
              return $new_name;  
         }  
    }

    function upload_zip_projet()  
    {  
         if(isset($_FILES["fichierzip"]))  
         {  
              $extension = explode('.', $_FILES['fichierzip']['name']);  
              $new_name = rand() . '.' . $extension[1];  
              $destination = './upload/projet/zip/' . $new_name;  
              move_uploaded_file($_FILES['fichierzip']['tmp_name'], $destination);  
              return $new_name;  
         }  
    }



     /*====================================
    *les code messagerie
    // script de chat
    =======================================
    **
    */

    // pour les follower
   function pagination_users_on_to()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_ti_followe_count();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->entreprise_fetch_pagination_to_users_count($config["per_page"], $start)
    );
    echo json_encode($output);
   }



   // recherche de formations des produits
   function fetch_search_user_follow_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_online_user_follow($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';
        $etat2 = '';
        $url='';

        foreach($data->result() as $row)
        {


            $id = $this->connected;
          
          if ($row->id != $id) {
              $url = base_url().'entreprise/detail_users_profile/'.$row->id;
                  $etat = '<div class="col-md-12"><span class="message">
                    <a href="'.base_url().'entreprise/chat_admin/'.$id.'/'.$row->id.'">
                  &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                      </a> 
                    </span></div>';
          }
          else{
                  $url = base_url().'entreprise/profile';
                  $etat = '

                  <span class="message">
                    <a href="'.base_url().'entreprise/profile" class="text-warning">
                  &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                      </a> 
                    </span>

                  ';
          }


            

           $output .= '
             
              <div class="col-md-12 media text-muted pt-3 mb-2">
                        
              <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle mr-2" style="width: 50px; height: 40px; border-radius: 70%;">

              <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                  <strong class="d-block text-gray-dark"> <a href="'.$url.'" >'.$row->first_name.' '.substr($row->last_name, 0,25).'</a></strong>
                <san class="text-info">'.$row->email.'</span>

                '.$etat.'
              </div>
              
            </div>
           ';
          }

         
      }
      else
      {
          $output .= '
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                
              </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }

   // pagination information sur les produits
    function pagination_users_on_line()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_online();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link' => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->Entreprise_fetch_online_connected($config["per_page"], $start)
    );
    echo json_encode($output);
   }




   // recherche de formations des produits
   function fetch_search_user_online_pagination2()
   {
      $output = '';
      $query = '';
      $url='';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_online_user($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';

         foreach($data->result() as $row)
         {

          if ($row->id != $id) {
            $url= $url = base_url().'entreprise/detail_users_profile/'.$row->id;
            $etat = '<div class="col-md-12"><span class="message">
                <a href="'.base_url().'entreprise/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span></div>';
          }
          else{
              $url = $url = base_url().'entreprise/profile';
              $etat = '

              <div class="col-md-12"><span class="message">
                <a href="'.base_url().'entreprise/profile" class="text-warning">
              &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                  </a> 
                </span>
                </div>

              ';

              
           }



          $output .= '

           <li class="online">
                <a href="'.$url.'">
                    <div class="media">
                        <div class="avtar-pic w35 bg-red">
                          <span>
                          <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle" style="width: 50px; height: 40px; border-radius: 70%;">
                            </span>
                        </div>

                        <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              <span class="name text-info">&nbsp;&nbsp;@'.$row->first_name.' '.substr($row->last_name, 0,25).' </span><br>
                            '.$etat.'
                              
                            </span>
                            
                        </div>

                        
                    </div>
                </a>
            </li>
            

          ';
         }
      }
      else
      {
          $output .= '
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true">
                
              </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }


    function chat_local_view($param1, $param2){
      $data['title']="Discution instantané";
      $data['id_user']= $param1;
      $data['id_recever']= $param2;

      $code = substr(md5(rand(100000000, 200000000)), 0, 10);

      if ($this->input->post('Message_text') !='') {

        $chat['id_user'] = $param1;
        $chat['id_recever'] = $param2;
        $chat['message'] = htmlspecialchars($this->input->post('Message_text'));
        $chat['code'] = $code;

        $md5 = md5(date('d-m-y H:i:s'));


        
        if($_FILES['user_image']['size'] > 0){

          $chat['fichier'] =  $md5.str_replace(' ', '', $_FILES['user_image']['name']);

                // $chat['fichier'] = $this->upload_image_chat_envoie();
                move_uploaded_file($_FILES['user_image']['tmp_name'], 'upload/groupe/fichier/' . $md5.str_replace(' ', '', $_FILES['user_image']['name']));
        }

        $this->crud_model->insert_message($chat);
        
        redirect('entreprise/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('entreprise/chat_admin/'.$param1.'/'.$param2);
      }
      
      
    }


    function detail_users_profile($param1=''){
      $data['title']="Détail de profile utilisateur";
      $data['user_search'] =$param1;
      $data['users'] = $this->crud_model->fetch_connected($param1);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/entreprise/detail_users_profile', $data);
    }


    function fetch_single_message()  
    {  
           $output = array();  
           $data = $this->crud_model->fetch_single_message($this->input->post('code'));  
           foreach($data as $row)  
           {  
                $output['nom'] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));  
               
                $output['text_description']   ='
                  <textarea class="form-control textarea" name="message" id="message">
                      '. html_entity_decode($row->message).'
                  </textarea>
                ';


           }  
           echo json_encode($output);  
    }


    function modification_message(){

        $updated_data = array(  
           'message'    =>     htmlspecialchars($this->input->post("message"))
        );  

        $this->crud_model->update_messagerie($this->input->post("code"), $updated_data);
        // echo("modification avec succès");
    }

    
    function supression_message(){

        $this->crud_model->delete_messagerie($this->input->post("code"));
        
    }

    

    function chat_local_view_groupe($param1, $param2){
    $data['title']="Discution instantané";
    $data['id_user']= $param1;

    $data['code_groupe']= $param2;

    $code = substr(md5(rand(100000000, 200000000)), 0, 10);

    if ($this->input->post('Message_text') !='') {

      $chat['id_user'] = $param1;
      $chat['code_groupe'] = $param2;
      $chat['message'] = $this->input->post('Message_text');
      if($_FILES['user_image']['size'] > 0){

              $chat['fichier'] = $this->upload_image_chat_envoie();
            }
      
      $this->crud_model->insert_message_chat_groupe($chat);
      redirect('entreprise/chat_admin2/'.$param1.'/'.$param2);
    }
    else{
      redirect('entreprise/chat_admin2/'.$param1.'/'.$param2);
    }
    
    
  }

  function upload_image_chat_envoie()  
  {  
     if(isset($_FILES["user_image"]))  
     {  
          $extension = explode('.', $_FILES['user_image']['name']);  
          $new_name = rand() . '.' . $extension[1];  
          $destination = './upload/groupe/fichier/' . $new_name;  
          move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
          return $new_name;  
     }  
  }

  function fetch_single_chat_groupe()  
  {  
        
         $output = array();  
         $data = $this->crud_model->fetch_single_chat_groupe($this->input->post('code'));  
         foreach($data as $row)  
         {  
              $output['nom'] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));  
             
              $output['text_description']   ='
                <textarea class="form-control textarea" name="message" id="message">
                    '. html_entity_decode($row->message).'
                </textarea>
              ';


         }  
         echo json_encode($output);  
  }

  // chat groupe conversation 
  function modification_chat_message(){

      $updated_data = array(  
         'message'    =>     htmlspecialchars($this->input->post("message"))
      );  

      $this->crud_model->update_chat_messagerie($this->input->post("idgroupe"), $updated_data);
      // echo("modification avec succès");
  }

  function supression_chat_message(){

      $this->crud_model->delete_chat_messagerie($this->input->post("idgroupe"));
      
  }

  /*
  // SCRIPT POUR LE MODULE 
  *=========================
  *=========================
  */

  // module

    function pagination_view_module()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_view_module();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="nav pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
    $config["prev_tag_open"] = "<li class='page-item'>";
    $config["prev_tag_close"] = "</li>";
    $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
    $config["cur_tag_close"] = "</a></li>";
    $config["num_tag_open"] = "<li class='page-item'>";
    $config["num_tag_close"] = "</li>";
    $config["num_links"] = 1;
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $start = ($page - 1) * $config["per_page"];

    $output = array(
     'pagination_link'  => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_details_view_module_user($config["per_page"], $start)
    );
    echo json_encode($output);
  }


  function fetch_search_view_module()
  {
    $output = '';
    $query = '';
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->crud_model->fetch_data_search_module($query);
    $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                Image
              </td>

              <td>
                Titre

              </td>
              <td>
               Description
              </td>
              
              <td>
                Lire le module
              </td>
              <td>
                Année
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
              Télécharger
              </td>

              
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($data->result() as $row)
        {

          $btn1 = '<a download="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'" href="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'"  idmodule="'.$row->idmodule.'" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>';

          $output .= '
        
         <tr role="row" class="odd">
            <td>
               <img src="'.base_url().'upload/module/cours/image/'.$row->logoImage.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
            </td>

             <td>'.substr($row->titre, 0,20).'...</td>

             <td>'.substr($row->description, 0,20).'</td>

             <td><a href="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'" target="_blank"><i class="fa fa-file mr-1"></i> Lire le module</a></td>
             <td>'.$row->annee.'</td>
             <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
              
              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-4">
                      <img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                      
                    </div>

                    <div class="col-md-8">
                      
                      <div class="col-md-12">
                        '.$row->first_name.'
                        '.$row->last_name.'
                      </div>
                         
                    </div>
                  </div>
                </div>
                
              </td>

              <td>'.$btn1.'</td>

            

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
        <tfoot role="row" class="odd">
           <tr>
              <td>
                Image
              </td>

              <td>
                Titre

              </td>
              <td>
               Description
              </td>
              
              <td>
                Lire le module
              </td>
              <td>
                Année
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
              Télécharger
              </td>

              
            </tr>

        </tfoot>   
            
        </table>';
   
    echo $output;
  }

  function fetch_limit_view_module()
  {
    $output = '';
    $query = '';
    if($this->input->post('limit'))
    {
     $query = $this->input->post('limit');
    }
    $data = $this->crud_model->fetch_data_limit_module($query);
    $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                Image
              </td>

              <td>
                Titre

              </td>
              <td>
               Description
              </td>
              
              <td>
                Lire le module
              </td>
              <td>
                Année
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
              Télécharger
              </td>

              
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($data->result() as $row)
        {

          $btn1 = '<a download="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'" href="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'"  idmodule="'.$row->idmodule.'" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>';

         $output .= '
        
         <tr role="row" class="odd">
            <td>
               <img src="'.base_url().'upload/module/cours/image/'.$row->logoImage.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
            </td>

             <td>'.substr($row->titre, 0,20).'...</td>

             <td>'.substr($row->description, 0,20).'</td>

             <td><a href="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'" target="_blank"><i class="fa fa-file mr-1"></i> Lire le module</a></td>
             <td>'.$row->annee.'</td>
             <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
              
              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-4">
                      <img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                      
                    </div>

                    <div class="col-md-8">
                      
                      <div class="col-md-12">
                        '.$row->first_name.'
                        '.$row->last_name.'
                      </div>
                         
                    </div>
                  </div>
                </div>
                
              </td>

              <td>'.$btn1.'</td>

            

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
        <tfoot role="row" class="odd">
           <tr>
              <td>
                Image
              </td>

              <td>
                Titre

              </td>
              <td>
               Description
              </td>
              
              <td>
                Lire le module
              </td>
              <td>
                Année
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
              Télécharger
              </td>

              
            </tr>

        </tfoot>   
            
        </table>';
    echo $output;
  }





















}
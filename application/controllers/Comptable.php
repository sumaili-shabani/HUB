<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class comptable extends CI_Controller
{
  	private $token;
  	private $connected;
  	public function __construct()
  	{
  	  parent::__construct();
  	  if(!$this->session->userdata('comptable_login'))
  	  {
  	      	redirect(base_url().'login');
  	  }
  	  $this->load->library('form_validation');
  	  $this->load->library('encryption');
        // $this->load->library('pdf');
  	  $this->load->model('crud_model'); 

  	  $this->load->helper('url');

  	  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
  	  $this->connected = $this->session->userdata('comptable_login');

  	  /*
  	  je script pour les galeries du contrat d'expiration
  	
  		// $this->crud_model->show_galery_expire();
  		$this->crud_model->show_galery_expire();
  	  */



  	}

  	function index(){
  		$data['title']="mon profile entreprise";
  		$this->load->view('backend/comptable/templete_admin', $data);
    		// $this->load->view('backend/comptable/templete_admin', $data);
  	}

  	function dashbord(){
  		   $data['title']="Tableau de bord";
  	     
  	      $data['nombre_paie'] = $this->crud_model->statistiques_nombre("profile_paiement");

          $data['nombre_paie_padding'] = $this->crud_model->statistiques_nombre("profile_paiement_padding");

  	      $data['nombre_coach'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);
          $data['nombre_comptable'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 4);

  	      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

  	      $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");
          $data['chart_data'] = $this->crud_model->get_stat_paie();
  	      $this->load->view('backend/comptable/dashbord', $data);
  	}



    function operation(){
      $data['title']="Opération de gestion";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/comptable/operation', $data);
    }


    /*

      FIN DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI HUB
      MES SCRIPTS HUB COMMENCE DEJE
      ========================================================
      */

      function message(){
        $data['title']="mes messages admin";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        // $this->load->view('backend/admin/viewx', $data);
        $this->load->view('backend/comptable/message', $data);
      }

      function chat_admin($param1, $param2){
        $data['title']="Discution instantané";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['id_user']= $param1;
        $data['id_recever']= $param2;
        $data['id_recever2']= $param2;
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/comptable/messagerie', $data);
    }

    function chat_admin2($param1, $param2){

      $title_job = $this->crud_model->get_name_groupe($param2);
      
        $data['title']="le groupe ".$title_job." Discution instantanée";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

        $data['goupe_name']= $title_job;

        $data['id_user']= $param1;
      $data['code_groupe']= $param2;

        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/comptable/chat_groupe', $data);
    }

    function detail_users_profile($param1=''){
      $data['title']="Détail de profile utilisateur";
      $data['user_search'] =$param1;
      $data['users'] = $this->crud_model->fetch_connected($param1);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/comptable/detail_users_profile', $data);
    }


	/*

    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI Ecommerce
    MES SCRIPTS EcommerceB COMMENCE DEJE
    ========================================================
    */

    function evaluation_paiement(){
		  $data['title']="Evaluation de paiement";
    	$data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

	    $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
        $data['chart_data'] = $this->crud_model->get_stat_paie();
        $this->load->view('backend/comptable/evaluation_paiement', $data);
	  }

    function show_depense(){
      $data['title']="Evaluation de compte";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

      $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
        $data['chart_data'] = $this->crud_model->get_stat_depense();
        $this->load->view('backend/comptable/show_depense', $data);
    }

    function stat_depense(){
      $data['title']  ="Evaluation de compte";
      $data['users']  = $this->crud_model->fetch_connected($this->connected);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

      $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
        $data['chart_data'] = $this->crud_model->get_stat_depense();
        $data['chart_data2'] = $this->crud_model->get_stat_depense_par_nature();
        $this->load->view('backend/comptable/stat_depense', $data);
    }

    function caisse(){
      $data['title']  ="Evaluation de compte";
      $data['users']  = $this->crud_model->fetch_connected($this->connected);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

      $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

      $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
      $data['chart_data'] = $this->crud_model->get_stat_depense();
      $data['chart_data2'] = $this->crud_model->get_stat_depense_par_nature();

      $data['m_entree'] = $this->crud_model->statistiques_somme_montant("profile_depense","entree");
      $data['m_sortie'] = $this->crud_model->statistiques_somme_montant("profile_depense","sortie");

      $data['m_paiement'] = $this->crud_model->statistiques_somme_paiement("paiement");
      // entree
      $n1 = $this->crud_model->statistiques_somme_montant("profile_depense","entree");
      $n2 = $this->crud_model->statistiques_somme_paiement("paiement");
      // sortie 
      $reste = $this->crud_model->statistiques_somme_montant("profile_depense","sortie");

      // resultat
      $entree =$n1+$n2;
      $resultat = $entree -$reste;

      $data['entree'] = $entree;
      $data['m_resultat'] = $resultat;


      $this->load->view('backend/comptable/caisse', $data);
    }

    function paiement_pading($param1=''){
    	$data['title']="Les transactions de paiement!";
    	$data['token']= $param1;
    	$data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

	    $this->load->view('backend/comptable/padding_paie', $data);

    }

    function paiement_normale($param1=''){
    	$data['title']="Les transactions de paiement!";
    	$data['token']= $param1;
    	$data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

	    $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();

	    $this->load->view('backend/comptable/le_paiement', $data);

    }



	function profile(){
      $data['title']="mon profile entreprise";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/comptable/profile', $data);
    }

    function basic(){
        $data['title']="Information basique de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/comptable/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/comptable/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/comptable/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/comptable/notification', $data);
    }

    function client(){
		$data['title']="Paramétrage  des clients";
		$data['entreprises']  = $this->crud_model->Select_entreprises();
		$this->load->view('backend/comptable/client', $data);		
	}



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
         redirect('comptable/basic', 'refresh');
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
           redirect('comptable/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('comptable/basic_image', 'refresh');

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
                   redirect('comptable/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('comptable/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('comptable/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
	  if($param1=='display_delete') {
	  	$this->session->set_flashdata('message', 'suppression avec succès ');
	    $query = $this->crud_model->delete_notifacation_tag($param2);
	    redirect('comptable/notification');
	  }

	  if($param1=='display_delete_message') {

	    $query = $this->crud_model->delete_message_tag($param3);
	    redirect('comptable/message/'.$param2);
	  }
	  else{

	  }

  }

  /*
    les scripts pour confirmation de paiement
    ========================================
    =======================================
    =======================================
    */


    // script pour les paiements

	function pagination_view_paiements_padding()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->count_all_view_paiement_padding();
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
	   'country_table'   => $this->crud_model->fetch_details_view_paiement_padding($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}


	function fetch_search_view_paiements_padding()
	{
	  $output = '';
	  $query = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_paiement_padding($query);
	  $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                <div class="col-md-12 form-inline">
                  <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                  <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
                </div>
              </td>

              <td>
                Profile complet des ceo et leurs entreprises

              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>

              <td>
                supprimer
              </td>
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $mobile = '';

        foreach($data->result() as $row)
        {

          if ($row->motif =="m-pesa") {
            $mobile = '
            <img src="'.base_url().'upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          elseif ($row->motif =="airtel money") {
            $mobile = '
            <img src="'.base_url().'upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          else{
             $mobile = '';
          }


         $output .= '

         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->idp.'" class="delete_checkbox">
            </td>
              
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
                          <div class="col-md-12">
                            <a href="tel:'.$row->telephone.'" class="text-primary">
                              <i class="fa fa-phone"></i>
                              &nbsp;&nbsp;'.$row->telephone.'
                            </a>
                          </div>
                          <div class="col-md-12 text-success">
                            '.$row->nom.'
                          </div>
                    </div>
                  </div>
                </div>
                
              </td>

              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-12">
                      
                      &nbsp;
                      <img src="'.base_url().'upload/photo/'.$row->logo.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                    </div>

                    
                  </div>
                </div>
                
              </td>

              <td class="sorting_1">'.$row->montant.' $</td>
              <td>
                  
                  '.$mobile.'
              </td>
               <td class="sorting_1">
                
                <div class="table-actions">
                     <i class="fa fa-key"></i> &nbsp;'.$row->token.'&nbsp;
                     
                  </div>
               </td>

               <td class="sorting_1">
                
                <div class="table-actions text-center">
                      <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash text-white"></i></a>
                  </div>
               </td>
              
          </tr>






         ';
        }
      }
      $output .= '
          </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
              </td>
              <td>
                Profile complet des ceo et leurs entreprises
              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>
              <td>
                supprimer
              </td>
              
            </tr>

        </tfoot>   
            
        </table>';
	  echo $output;
	}


	 function supression_paiement_pading()
	  {

	      $this->crud_model->delete_paiement_pading($this->input->post("idp"));

	      echo("suppression avec succès");
	    
	  }

	  // suppression trancation
     function suppression_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $this->crud_model->delete_paiement_pading($idp);

                echo("suppression avec succès");


           }
        }
     }
     // fin suppression trancation

     // valider trancation
     function valider_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $info_pro = $this->crud_model->get_info_padding_transaction($idp);



               

                foreach ($info_pro as $key) {
                    $code = rand();
                    $idpersonne   =  $key['idpersonne'];
                    $date_paie    =  $key['date_paie'];
                    $montant      =  $key['montant'];
                    $motif        =  $key['motif'];
                    $token        =  $key['token'];
                    $codeFacture  =  $code;

                    $insertdata = array(
                        'idpersonne'      => $idpersonne,
                        'date_paie'       => $date_paie,
                        'montant'         => $montant,
                        'motif'           => $motif ,
                        'token'           => $token,
                        'codeFacture'     => $codeFacture,
                    );

                    $query = $this->crud_model->insert_paiement_compte($insertdata);
                    if ($query > 0) {
                        # code...
                        $url    ="entreprise/facturePaiement/". $code;
                        $nom    = $this->crud_model->get_name_user($idpersonne);

                        // $nom = $this->input->post('titre');
                        $message ="Bonjour ".$nom." votre paiement a été validé avec succès 👌";

                        $notification = array(
                          'titre'     =>    "Félicitation",
                          'icone'     =>    "fa fa-check",
                          'message'   =>     $message,
                          'url'       =>     $url,
                          'id_user'   =>     $idpersonne
                        );
                        
                        $not = $this->crud_model->insert_notification($notification);

                        echo("Validation paiement mise à jour avec succès!! 👌");

                        // manupilation et augmentation de jours 
                        $info_users = $this->crud_model->get_info_expiration_compte_users($idpersonne);
                        foreach ($info_users as $row) {
                          # code...
                          $fin_event = $row['fin_event'];
                          $new_fin_event =  $this->crud_model->get_expire_day_count($fin_event);

                          $updateData = array(
                              'debit_event' =>  $fin_event,
                              'fin_event'   =>  $new_fin_event
                          );

                          $uptodate = $this->crud_model->update_crud($idpersonne,  $updateData);



                        }

                    }

                }

                $this->crud_model->delete_paiement_pading($idp);

              

           }
        }
     }

      // invalider trancation
     function invalider_multiple_fausse_tranaction()
     {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {
                $idp    = $id[$count];
                $info_pro = $this->crud_model->get_info_paiement_transaction($idp);


                foreach ($info_pro as $key) {
                    $code = rand();
                    $idpersonne   =  $key['idpersonne'];
                    $date_paie    =  $key['date_paie'];
                    $montant      =  $key['montant'];
                    $motif        =  $key['motif'];
                    $token        =  $key['token'];
                    $codeFacture  =  $key['codeFacture'];

                    $url    = "entreprise/facturePaiement/". $codeFacture;
                    $nom    = $this->crud_model->get_name_user($idpersonne);

                    // $nom = $this->input->post('titre');
                    $message ="Bonjour ".$nom." votre paiement a été invalidé suite à une cause valide. prière de vérifier la cause d'invalidité de votre paiement au près de l'administrateur du système 👌";

                    $notification = array(
                      'titre'     =>    "Désolé votre paiement a été invalide",
                      'icone'     =>    "fa fa-close",
                      'message'   =>     $message,
                      'url'       =>     $url,
                      'id_user'   =>     $idpersonne
                    );
                    
                    $not = $this->crud_model->insert_notification($notification);

                   

                    // manupilation et augmentation de jours 
                    $info_users = $this->crud_model->get_info_expiration_compte_users($idpersonne);
                    foreach ($info_users as $row) {
                      # code...
                      $fin_event = $row['fin_event'];
                      $debit_event = $row['debit_event'];
                      $new_fin_event =  $this->crud_model->get_expire_day_count($fin_event);

                      $updateData = array(
                          'debit_event' =>  $debit_event,
                          'fin_event'   =>  $debit_event
                      );

                      $uptodate = $this->crud_model->update_crud($idpersonne,  $updateData);



                    }


                    

                }

                $this->crud_model->delete_paiement_normal($idp);
                echo("votre paiement à été annulé");

              

           }
        }
     }
     // fin valider trancation

    function facture($param1=''){
       $customer_id = "paiement facture ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_facture($param1);

       $dataUpdate = array(
        'etat_paiement' =>  1
       );
       $cool = $this->crud_model->update_paiement_etat($param1, $dataUpdate);

       // echo($html_content);
       $this->load->library('pdf');
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }

    function pdfimpression($param1=''){
       $customer_id = "Evaluation de Compte paiement facture ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_facture_depense($param1);

       $dataUpdate = array(
        'etat_validation' =>  1
       );
       $cool = $this->crud_model->update_depense_etat($param1, $dataUpdate);

       // echo($html_content);
       $this->load->library('pdf');
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("Evaluation dépense  reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }



    // script pour les paiements

    /*
	*==============================
    *script pour le paiement normal
    *==============================
    *==============================
    */

	function pagination_view_paiements()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->count_all_view_paiement();
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
	   'country_table'   => $this->crud_model->fetch_details_view_paiement($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}


	function fetch_search_view_paiements()
	{
	  $output = '';
	  $query = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_paiement($query);
	  $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                <div class="col-md-12 form-inline">
                  <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                  <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
                </div>
              </td>

              <td>
                Profile complet des ceo et leurs entreprises

              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>

              <td>
                supprimer
              </td>
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $mobile = '';
        $etat_paiement ='';

        foreach($data->result() as $row)
        {

          if ($row->motif =="m-pesa") {
            $mobile = '
            <img src="'.base_url().'upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          elseif ($row->motif =="airtel money") {
            $mobile = '
            <img src="'.base_url().'upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          else{

             $mobile = '<img src="'.base_url().'upload/module/chat.svg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">';
          }

          if ($row->etat_paiement ==0) {
            $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-danger btn-circle invvalider_liste btn-sm"><i class="fa fa-trash"></i></a>
            ';
          }
          
          else{
              $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
              ';
          }


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->idp.'" class="delete_checkbox">
              '.$etat_paiement.'
            </td>
              
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
                          <div class="col-md-12">
                            <a href="tel:'.$row->telephone.'" class="text-primary">
                              <i class="fa fa-phone"></i>
                              &nbsp;&nbsp;'.$row->telephone.'
                            </a>
                          </div>
                          <div class="col-md-12 text-success">
                            '.$row->nom.'
                          </div>
                    </div>
                  </div>
                </div>
                
              </td>

              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-12">
                      
                      &nbsp;
                      <img src="'.base_url().'upload/photo/'.$row->logo.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                    </div>

                    
                  </div>
                </div>
                
              </td>

              <td class="sorting_1">'.$row->montant.' $</td>
              <td>
                  
                  '.$mobile.'
              </td>
               <td class="sorting_1">
                
                <div class="table-actions">
                     <i class="fa fa-key"></i> &nbsp;'.substr($row->token, 0,10).'...&nbsp;
                     
                  </div>
               </td>


               <td class="sorting_1">
                
                <div class="table-actions text-center">
                     
                       <a href="'.base_url().'comptable/facture/'.$row->codeFacture.'"  class="btn btn-primary btn-circle btn-sm"><i class="fa fa-print text-white"></i></a>
                  </div>
               </td>
              
          </tr>

         ';

        }
      }
      $output .= '
          </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
              </td>
              <td>
                Profile complet des ceo et leurs entreprises
              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>
              <td>
                supprimer
              </td>
              
            </tr>

        </tfoot>   
            
        </table>';
	  echo $output;
	}

	function fetch_single_personne_user()  
	{  
       $output = array();  
       $data = $this->crud_model->fetch_single_personne_user($_POST["id"]);  
       foreach($data as $row)  
       {  
            $output['first_name'] 		= $row->first_name;  
            $output['last_name'] 		= $row->last_name; 
            $output['email'] 			= $row->email; 
            $output['date_nais'] 		= $row->date_nais; 
            $output['telephone'] 		= $row->telephone; 
            $output['full_adresse'] 	= $row->full_adresse; 

            $output['sexe'] 			= $row->sexe;
            
            if($row->image != '')  
            {  
                $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
            }  
            else  
            {  
                $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
            }  
       }  
       echo json_encode($output);  
	}

	function operation_paiement(){

      $idpersonne   = $this->input->post('idpersonne');
      $montant      = $this->input->post('montant');
      $rand = md5($this->input->post("montant").''.$this->input->post('idpersonne'));
      $insert_data = array(  
           'idpersonne'         =>     $this->input->post('idpersonne'),  
           'date_paie'          =>     $this->input->post("date_paie"), 
           'montant'            =>     $this->input->post("montant"), 
           'motif'              =>     $this->input->post("motif"),
           'token'				=>	   md5($this->input->post("date_paie")),
           'codeFacture'		=>	   trim($rand)
      );

      $users_cool = $this->crud_model->get_info_user();
      foreach ($users_cool as $key) {

          if ($key['idrole'] == 1) {
            $url ="admin/paiement_normale";

            $id_user_recever = $key['id'];

            $nom   = $this->crud_model->get_name_user($idpersonne);
            $message =$nom." vient de payer ".$montant."$";

            $notification = array(
              'titre'     =>    "nouveau paiement",
              'icone'     =>    "fa fa-bell",
              'message'   =>     $message,
              'url'       =>     $url,
              'id_user'   =>     $id_user_recever
            );
            
            $not = $this->crud_model->insert_notification($notification);

          }
          
            # code...
      }


	    $requete=$this->crud_model->insert_paiement($insert_data);
	    echo("Ajout information avec succès");
	    
	}


	function fetch_limit_view_paiements()
	{
	  $output = '';
	  $query = '';
	  if($this->input->post('limit'))
	  {
	   $query = $this->input->post('limit');
	  }
	  $data = $this->crud_model->fetch_data_limit_paiement($query);
	  $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                <div class="col-md-12 form-inline">
                  <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                  <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
                </div>
              </td>

              <td>
                Profile complet des ceo et leurs entreprises

              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>

              <td>
                supprimer
              </td>
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $mobile = '';
        $etat_paiement ='';

        foreach($data->result() as $row)
        {

          if ($row->motif =="m-pesa") {
            $mobile = '
            <img src="'.base_url().'upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          elseif ($row->motif =="airtel money") {
            $mobile = '
            <img src="'.base_url().'upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          else{

             $mobile = '<img src="'.base_url().'upload/module/chat.svg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">';
          }

          if ($row->etat_paiement ==0) {
            $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-danger btn-circle invvalider_liste btn-sm"><i class="fa fa-trash"></i></a>
            ';
          }
          
          else{
              $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
              ';
          }


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->idp.'" class="delete_checkbox">
              '.$etat_paiement.'
            </td>
              
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
                          <div class="col-md-12">
                            <a href="tel:'.$row->telephone.'" class="text-primary">
                              <i class="fa fa-phone"></i>
                              &nbsp;&nbsp;'.$row->telephone.'
                            </a>
                          </div>
                          <div class="col-md-12 text-success">
                            '.$row->nom.'
                          </div>
                    </div>
                  </div>
                </div>
                
              </td>

              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-12">
                      
                      &nbsp;
                      <img src="'.base_url().'upload/photo/'.$row->logo.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                    </div>

                    
                  </div>
                </div>
                
              </td>

              <td class="sorting_1">'.$row->montant.' $</td>
              <td>
                  
                  '.$mobile.'
              </td>
               <td class="sorting_1">
                
                <div class="table-actions">
                     <i class="fa fa-key"></i> &nbsp;'.substr($row->token, 0,10).'...&nbsp;
                     
                  </div>
               </td>


               <td class="sorting_1">
                
                <div class="table-actions text-center">
                     
                       <a href="'.base_url().'comptable/facture/'.$row->codeFacture.'"  class="btn btn-primary btn-circle btn-sm"><i class="fa fa-print text-white"></i></a>
                  </div>
               </td>
              
          </tr>

         ';

        }
      }
      $output .= '
          </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
              </td>
              <td>
                Profile complet des ceo et leurs entreprises
              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>
              <td>
                supprimer
              </td>
              
            </tr>

        </tfoot>   
            
        </table>';
	  echo $output;
	}

  // filtrage de piement par date 
  function fetch_datebetwine_paiement_filtre()
  {
    $output = '';
    $query = '';
    $total;
    $jour1 =$this->input->post('jour1');
    $jour2 =$this->input->post('jour2');
    if($jour1 > $jour2)
    {
     $data = $this->crud_model->fetch_data_paiement_date($jour2, $jour1);
     $total = $this->crud_model->fetch_sum_data_paiement_date($jour2, $jour1);
    }
    else{
      $data = $this->crud_model->fetch_data_paiement_date($jour1, $jour2);
      $total = $this->crud_model->fetch_sum_data_paiement_date($jour1, $jour2);
    }
    
    $output .= '
      <a class="btn btn-outline-warning pull-right mt-2 mb-2" 
      href="'.base_url().'comptable/pdf_liste_facture/'.$jour1.'/'.$jour2.' "><i class="fa fa-print mr-1"></i> PDF</a>
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                <div class="col-md-12 form-inline">
                  <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                  <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
                </div>
              </td>

              <td>
                Profile complet des ceo et leurs entreprises

              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>

              <td>
                supprimer
              </td>
              
              
            </tr>

        </thead>
         <tbody id="example-tbody">
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{
        $mobile = '';
        $etat_paiement ='';

        foreach($data->result() as $row)
        {

          if ($row->motif =="m-pesa") {
            $mobile = '
            <img src="'.base_url().'upload/module/m-pesa.com.png" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          elseif ($row->motif =="airtel money") {
            $mobile = '
            <img src="'.base_url().'upload/module/airtel.jpg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">
            ';
          }
          else{

             $mobile = '<img src="'.base_url().'upload/module/chat.svg" class="img-thumbnail img-responsive" style="height: 25px; width: 50px;">';
          }

          if ($row->etat_paiement ==0) {
            $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-danger btn-circle invvalider_liste btn-sm"><i class="fa fa-trash"></i></a>
            ';
          }
          
          else{
              $etat_paiement = '
                 &nbsp;
                <a href="javascript:void(0);" idp="'.$row->idp.'" class="btn btn-secondary btn-circle btn-sm"><i class="fa fa-eye text-white"></i></a>
              ';
          }


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->idp.'" class="delete_checkbox">
              '.$etat_paiement.'
            </td>
              
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
                          <div class="col-md-12">
                            <a href="tel:'.$row->telephone.'" class="text-primary">
                              <i class="fa fa-phone"></i>
                              &nbsp;&nbsp;'.$row->telephone.'
                            </a>
                          </div>
                          <div class="col-md-12 text-success">
                            '.$row->nom.'
                          </div>
                    </div>
                  </div>
                </div>
                
              </td>

              <td>

                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-12">
                      
                      &nbsp;
                      <img src="'.base_url().'upload/photo/'.$row->logo.'" class="table-user-thumb img img-thumbnail" style="height: 50px;width: 50px;" alt="">
                    </div>

                    
                  </div>
                </div>
                
              </td>

              <td class="sorting_1">'.$row->montant.' $</td>
              <td>
                  
                  '.$mobile.'
              </td>
               <td class="sorting_1">
                
                <div class="table-actions">
                     <i class="fa fa-key"></i> &nbsp;'.substr($row->token, 0,10).'...&nbsp;
                     
                  </div>
               </td>


               <td class="sorting_1">
                
                <div class="table-actions text-center">
                     
                       <a href="'.base_url().'comptable/facture/'.$row->codeFacture.'"  class="btn btn-primary btn-circle btn-sm"><i class="fa fa-print text-white"></i></a>
                  </div>
               </td>
              
          </tr>

         ';

        }
      }

      $output .='
      <tr>
        <td colspan="6">Montant total </td>
        <td><h4>'.$total.'$</h4></td>
        
      </tr>
      
      ';


      $output .= '
          </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                <a href="javascript:void(0);" class="btn btn-danger btn-circle btn-sm supprimer supprimer_liste"> <i class="fa fa-trash"></i> </a>

                <a href="javascript:void(0);" class="btn btn-success btn-circle btn-sm supprimer valider_liste"> <i class="fa fa-check"></i> </a>
              </td>
              <td>
                Profile complet des ceo et leurs entreprises
              </td>
              <td>
                logo startu-up
              </td>
              
              <td>
                Montant
              </td>
              <td>
                Mobile
              </td>
              <td>
                Token de transation
              </td>
              <td>
                supprimer
              </td>
              
            </tr>

        </tfoot>   
            
        </table>';
    echo $output;
  }

   function pdf_liste_facture($jour1='', $jour2=''){
       $customer_id = "Liste de paiement de paiement du ".$jour1." au ".$jour2;
       $html_content = '';
      
       if ($jour1 > $jour2) {
         # code...
        $html_content .= $this->crud_model->fetch_single_details_listePaiement($jour2, $jour1);

       }
       else{
        $html_content .= $this->crud_model->fetch_single_details_listePaiement($jour1, $jour2);

       }

       // echo($html_content);
       $this->load->library('pdf');
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
    }

    /*
    *script pour le chat
    *=====================
    *=====================
    */

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
        
        redirect('comptable/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('comptable/chat_admin/'.$param1.'/'.$param2);
      }
      
      
    }

    // pagination users 
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
     'country_table'   => $this->crud_model->entreprise_fetch_pagination_to_users_count_comptable($config["per_page"], $start)
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
              $url = base_url().'comptable/detail_users_profile/'.$row->id;
                  $etat = '<div class="col-md-12"><span class="message">
                    <a href="'.base_url().'comptable/chat_admin/'.$id.'/'.$row->id.'">
                  &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                      </a> 
                    </span></div>';
          }
          else{
                  $url = base_url().'comptable/profile';
                  $etat = '

                  <span class="message">
                    <a href="'.base_url().'comptable/profile" class="text-warning">
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
     'country_table'   => $this->crud_model->Comptable_fetch_online_connected($config["per_page"], $start)
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
            $url= $url = base_url().'comptable/detail_users_profile/'.$row->id;
            $etat = '<div class="col-md-12"><span class="message">
                <a href="'.base_url().'comptable/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span></div>';
          }
          else{
              $url = $url = base_url().'comptable/profile';
              $etat = '

              <div class="col-md-12"><span class="message">
                <a href="'.base_url().'comptable/profile" class="text-warning">
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
      redirect('comptable/chat_admin2/'.$param1.'/'.$param2);
    }
    else{
      redirect('comptable/chat_admin2/'.$param1.'/'.$param2);
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

  /*
  *script pour les operations depense
  *==========================
  *==========================
  *depense
  *=================================

  */

  function operation_depense(){

        $month = $this->crud_model->get_info_mois();
        $year = $this->crud_model->get_info_annee();
        $insert_data = array( 
             'type'                 =>     $this->input->post('type'), 
             'nomPer'               =>     $this->input->post('nomPer'), 
             'libelle'              =>     $this->input->post('libelle'), 
             'motif'                =>     $this->input->post('motif'),   
             'jour'                 =>     $this->input->post('jour'), 
             'montant_lettre'       =>     $this->input->post('montant_lettre'), 
             'montant_nombre'       =>     $this->input->post('montant_nombre'), 
             'mois'                 =>     $month, 
             'annee'                =>     $year, 
             'id_user'              =>     $this->connected 
        );  
         
        $requete=$this->crud_model->insert_depense($insert_data);
        echo("Enregistrement avec succès");

  }

  function modification_depense()  
  {  
         
         $month = $this->crud_model->get_info_mois();
         $year  = $this->crud_model->get_info_annee();
         $updated_data = array(  
             'type'                 =>     $this->input->post('type'), 
             'nomPer'               =>     $this->input->post('nomPer'), 
             'libelle'              =>     $this->input->post('libelle'), 
             'motif'                =>     $this->input->post('motif'),   
             'jour'                 =>     $this->input->post('jour'), 
             'montant_lettre'       =>     $this->input->post('montant_lettre'), 
             'montant_nombre'       =>     $this->input->post('montant_nombre'), 
             'mois'                 =>     $month, 
             'annee'                =>     $year
         );   

        $this->crud_model->update_depense($this->input->post("iddepense"), $updated_data);
        echo("information mise à jour avec succès"); 
  }

  function suppression_depense()  
  {  
        $this->crud_model->delete_depense($this->input->post("iddepense"));      
         echo("suppression avec succès");  
  }  


  function fetch_single_depense()  
  {  
         $output = array();  
         $data = $this->crud_model->fetch_single_depense($this->input->post("iddepense"));  
         foreach($data as $row)  
         {  
              $output['type']   = $row->type; 
              $output['nomPer']   = $row->nomPer;
              $output['libelle']   = $row->libelle;
              $output['motif']   = $row->motif;
              $output['jour']   = $row->jour;
              $output['montant_lettre']   = $row->montant_lettre;
              $output['montant_nombre']   = $row->montant_nombre;
              $output['mois']   = $row->mois;
              $output['annee']   = $row->annee;

              $output['first_name']   = $row->first_name;
              $output['last_name']   = $row->last_name;
              $output['telephone']   = $row->telephone;

              $output['created_at']   =nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
         }  
         echo json_encode($output);  
  }  

  function pagination_view_depense()
  {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_view_depense();
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
     'country_table'   => $this->crud_model->fetch_details_view_depense($config["per_page"], $start)
    );
    echo json_encode($output);
  }


  function fetch_search_view_depense()
  {
    $output = '';
    $query = '';
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->crud_model->fetch_data_search_depense($query);
    $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
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

          if ($row->etat_validation == 0) {
            # code...
            $btn1 = '<div class="form-inline"><button type="button" name="update" iddepense="'.$row->iddepense.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>
            &nbsp;&nbsp; 
            <a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="text-primary print" ><i class="fa fa-print"></i> </a>
            </div>
            ';


            $btn2 = '<button type="button" name="delete" iddepense="'.$row->iddepense.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>

            ';  

            $etat = '<span class="badge badge-danger"> Invalidée</span>';
          }
          else{

            $btn1 = '<div class="form-inline">
              <a href="javascript:void(0);" class="btn btn-success btn-sm print" ><i class="fa fa-eye"></i> </a>
            
            </div>
            ';
            $btn2 = '<a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="btn btn-primary btn-sm print" ><i class="fa fa-print"></i> </a>';
            $etat = '<span class="badge badge-success"> Valide</span>';
          }
          

          


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->iddepense.'" class="delete_checkbox">
              '.$etat.'
            </td>

             <td>'.$row->nomPer.' </td>

             <td>'.$row->type.'</td>

             <td>'.$row->libelle.'</td>
             <td>'.$row->montant_nombre.'$</td>
             <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->jour)), 0, 23)).'</td>
              
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

              <td>'.$btn2.'</td>

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
              </td>
              
              
            </tr>

        </tfoot>   
            
        </table>';
    echo $output;
  }

  function fetch_limit_view_depense()
  {
    $output = '';
    $query = '';
    if($this->input->post('limit'))
    {
     $query = $this->input->post('limit');
    }
    $data = $this->crud_model->fetch_data_limit_depense($query);
    $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead>
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
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

          if ($row->etat_validation == 0) {
            # code...
            $btn1 = '<div class="form-inline"><button type="button" name="update" iddepense="'.$row->iddepense.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>
            &nbsp;&nbsp; 
            <a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="text-primary print" ><i class="fa fa-print"></i> </a>
            </div>
            ';


            $btn2 = '<button type="button" name="delete" iddepense="'.$row->iddepense.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>

            ';  

            $etat = '<span class="badge badge-danger"> Invalidée</span>';
          }
          else{

            $btn1 = '<div class="form-inline">
              <a href="javascript:void(0);" class="btn btn-success btn-sm print" ><i class="fa fa-eye"></i> </a>
            
            </div>
            ';
            $btn2 = '<a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="btn btn-primary btn-sm print" ><i class="fa fa-print"></i> </a>';
            $etat = '<span class="badge badge-success"> Valide</span>';
          }
          

          


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->iddepense.'" class="delete_checkbox">
              '.$etat.'
            </td>

             <td>'.$row->nomPer.' </td>

             <td>'.$row->type.'</td>

             <td>'.$row->libelle.'</td>
             <td>'.$row->montant_nombre.'$</td>
             <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->jour)), 0, 23)).'</td>
              
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

              <td>'.$btn2.'</td>

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
              </td>
              
              
            </tr>

        </tfoot>   
            
        </table>';
    echo $output;
  }


  // filtrage de piement par date 
  function fetch_datebetwine_depense_filtre()
  {
    $output = '';
    $query = '';
    $total;
    $jour1 =$this->input->post('jour1');
    $jour2 =$this->input->post('jour2');
    if($jour1 > $jour2)
    {
     $data = $this->crud_model->fetch_data_depense_date($jour2, $jour1);
     $total = $this->crud_model->fetch_sum_data_depense_date($jour2, $jour1);
    }
    else{
      $data = $this->crud_model->fetch_data_depense_date($jour1, $jour2);
      $total = $this->crud_model->fetch_sum_data_depense_date($jour1, $jour2);
    }
    
    $output .= '
      <a class="btn btn-outline-warning pull-right mt-2 mb-2" 
      href="'.base_url().'comptable/pdf_liste_facture_depense/'.$jour1.'/'.$jour2.' "><i class="fa fa-print mr-1"></i> PDF</a>
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
           <thead>
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
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

          if ($row->etat_validation == 0) {
            # code...
            $btn1 = '<div class="form-inline"><button type="button" name="update" iddepense="'.$row->iddepense.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>
            &nbsp;&nbsp; 
            <a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="text-primary print" ><i class="fa fa-print"></i> </a>
            </div>
            ';


            $btn2 = '<button type="button" name="delete" iddepense="'.$row->iddepense.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>

            ';  

            $etat = '<span class="badge badge-danger"> Invalidée</span>';
          }
          else{

            $btn1 = '<div class="form-inline">
              <a href="javascript:void(0);" class="btn btn-success btn-sm print" ><i class="fa fa-eye"></i> </a>
            
            </div>
            ';
            $btn2 = '<a href="'.base_url().'comptable/pdfimpression/'.$row->iddepense.'" class="btn btn-primary btn-sm print" ><i class="fa fa-print"></i> </a>';
            $etat = '<span class="badge badge-success"> Valide</span>';
          }
          

          


         $output .= '
        
         <tr role="row" class="odd">
            <td>
              <input type="checkbox" name="delete_checkbox" value="'.$row->iddepense.'" class="delete_checkbox">
              '.$etat.'
            </td>

             <td>'.$row->nomPer.' </td>

             <td>'.$row->type.'</td>

             <td>'.$row->libelle.'</td>
             <td>'.$row->montant_nombre.'$</td>
             <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->jour)), 0, 23)).'</td>
              
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

              <td>'.$btn2.'</td>

          </tr>

         ';
        }
      }

      $output .='
      <tr>
        <td colspan="8">Montant total </td>
        <td><h4>'.$total.'$</h4></td>
        
      </tr>
      
      ';


      $output .= '
          </tbody>
        <tfoot role="row" class="odd">
            <tr>
              <td>
                Etat de l\'opération
              </td>

              <td>
                Profile complet de l\'opérationnel

              </td>
              <td>
               Type
              </td>
              
              <td>
                Libellé
              </td>
              <td>
                Montant
              </td>
              <td>
                Date
              </td>

              <td>
               Utilisateur action
              </td>

              <td>
               Action
              </td>

              <td>
                Imprimmer
              </td>
              
              
            </tr>

        </tfoot>     
            
        </table>';
    echo $output;
  }

   function pdf_liste_facture_depense($jour1='', $jour2=''){
       $customer_id = "Liste de paiement et évaluation de compte du ".$jour1." au ".$jour2;
       $html_content = '';
      
       if ($jour1 > $jour2) {
         # code...
        $html_content .= $this->crud_model->fetch_single_details_listeDepense($jour2, $jour1);

       }
       else{
        $html_content .= $this->crud_model->fetch_single_details_listeDepense($jour1, $jour2);

       }

       // echo($html_content);
       $this->load->library('pdf');
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
    }



  // fin de script categorie







	











}
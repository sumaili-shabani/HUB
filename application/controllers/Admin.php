<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class admin extends CI_Controller
{
		private $token;
		private $connected;
		protected $email_sites;
	    protected $logos_sites;
	    protected $num_dev;
	    protected $token_sms;
		public function __construct()
		{
		  parent::__construct();
		  if(!$this->session->userdata('admin_login'))
		  {
		      	redirect(base_url().'login');
		  }
		  $this->load->library('form_validation');
		  $this->load->library('encryption');
	      $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');

		  $this->email_sites = $this->crud_model->get_email_du_site();
	      $this->logos_sites = $this->crud_model->get_logo_du_site();

	      // pour les envoies des sms 
	      $this->num_dev 	= $this->crud_model->get_info_du_site("tel3");
	      $this->token_sms  = $this->crud_model->get_info_du_site("token_sms");

		  // load helper
    	  $this->load->helper(array('url', 'html', 'new'));

		}

		public function get_pdf_test(){
		      $data = array(
		        'title' => 'Add PDF | ERP',
		        'data' => 'Test'
		      );
		      generate_pdf("welcome.pdf", "backend/admin/pdf_formation", $data);
	    }

	    function printFormation($idf='', $annee=''){


	    	
	        $customer_id = "Bon d'etrée en stock ";
	        $html_content = '';
	        
	        $html_content .= $this->crud_model->fetch_details_view_formation_pdf($idf, $annee);

	       // echo($html_content);
	       $this->pdf->loadHtml($html_content);
	       $this->pdf->setPaper('A4', 'portrait');
    	   //Render the HTML as PDF
	       $this->pdf->render();
	       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
	       
	    }

		function index(){
			$data['title']="mon profile admin";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$this->load->view('backend/admin/templete_admin', $data);
		}

		function add_news(){
	      $data['title']="Information de base!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);

	      $this->load->view('backend/admin/add_news', $data);
	    }

	    function news(){
	      $data['title']="Information de base!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $this->load->view('backend/admin/news', $data);
	    }

	    function zoom(){
	      $data['title']="Paramètrage zoom!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $this->load->view('backend/admin/zoom', $data);
	    }

	    function calendrier(){
	      $data['title']="Calendrier d'activité pour une réunion";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $this->load->view('backend/admin/zoom_calendar', $data);
	    }


	    

	    function invite(){
	      $data['title']="Paramètrage des invités zoom!";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $data['roles']  		= $this->crud_model->Select_formations_ok("idrole","role");
	      $data['conference']  		= $this->crud_model->Select_formations_ok("idconference","conference");
	      $this->load->view('backend/admin/invite_zoom', $data);
	    }

	    function reunion(){
	      $data['title']="Créer une reunion";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $data['roles']  		= $this->crud_model->Select_formations_ok("idrole","role");
	      $data['conference']  		= $this->crud_model->Select_formations_ok("idconference","conference");
	      $this->load->view('backend/admin/reunion', $data);
	    }

	    function joinmetting($param =''){
	      $data['title']="Rejoindre la reunion";
	      $data['domain']=$param;

	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $data['variable']  = $this->crud_model->Select_all_news();
	      $data['roles']  		= $this->crud_model->Select_formations_ok("idrole","role");
	      $data['conference']  		= $this->crud_model->Select_formations_ok("idconference","conference");
	      $this->load->view('backend/admin/joinmetting', $data);
	    }

	    

	    

	    

		function category_news(){

			$data['title']="Paramètrage cétegorie produit";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/category', $data);
		}

		function category(){

			$data['title']="Paramètrage cétegorie produit";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/category', $data);
		}

		function carousel(){

			$data['title']="Paramètrage de carousel sur l'accueil";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/carousel', $data);
		}

		function formations(){

			$data['title']="Paramètrage de formations";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/formations', $data);
		}

		function inscri_formation(){
			$data['title']="Paramètrage de l'inscription aux formations";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['formations']  		= $this->crud_model->Select_formations();
			$this->load->view('backend/admin/inscri_formation', $data);
		}

		function liste_formation(){
			$data['title']="Paramètrage de l'inscription aux formations";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['formations']  		= $this->crud_model->Select_formations_ok("idf","profile_inscription");
			$data['annees']  		= $this->crud_model->Select_formations_ok("annee","profile_inscription");
			$this->load->view('backend/admin/liste_formation', $data);
		}

		function sms(){
			$data['title']="Paramètrage de l'inscription aux formations";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$data['formations']  		= $this->crud_model->Select_formations_ok("idf","profile_inscription");
			$data['annees']  		= $this->crud_model->Select_formations_ok("annee","profile_inscription");

			$data['formateurs'] 	= $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

		    $data['entreprises'] 	= $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

		    $data['admins'] 		= $this->crud_model->statistiques_nombre_tag_by_column("users", 1);
		    $data['comptables'] 	= $this->crud_model->statistiques_nombre_tag_by_column("users", 4);

			$data['roles']  		= $this->crud_model->Select_formations_ok("idrole","role");


			$this->load->view('backend/admin/sms', $data);
		}

		

		function module(){
	      $data['title']="Ajout de module";
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      $this->load->view('backend/admin/module', $data);
	    }

		function blog(){
			$data['title']="Paramétrage  des Blogs et publication";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
 
			$data['articles']  		= $this->crud_model->Select_articles();
			$data['categories']  	= $this->crud_model->Select_category();

			$this->load->view('backend/admin/article', $data);	
		}

		function commentaire(){
			$data['title']="Paramétrage  des commentaire pour les blogs";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
 
			$data['articles']  		= $this->crud_model->Select_articles();
			$data['categories']  	= $this->crud_model->Select_category();
			$data['articles']  	= $this->crud_model->Select_artcle_orders();
			

			$this->load->view('backend/admin/commentaire', $data);	
		}

		function partenariat(){
		    $data['title']="Paramétrage  des publicités";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/admin/publicity_personnele', $data);  
		}


		function info_personnel(){
			$data['title']="Nos informations personneles";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_personnel', $data);
		}

		function info_choix(){
			$data['title']="Parametrage de choix technologiques";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_choix', $data);
		}

		function info_technologique(){
			$data['title']="Parametrage sur nos services technologiques";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_technologique', $data);
		}

		function info_membre(){
			$data['title']="Parametrage sur notre famille";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_membre', $data);
		}


		function info_service(){
			$data['title']="Les informations sur services";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			
			$this->load->view('backend/admin/info_service', $data);
		}

		function contact_info(){
		    $data['title']="Les informations de contact";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		    $this->load->view('backend/admin/contact_info', $data);
		}





		function dashbord(){
			  $data['title']="Tableau de bord";
			  $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		      // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");


		      $data['nombre_client'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

		      $data['nombre_membre'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

		      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

		      $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");
		      $this->load->view('backend/admin/dashbord', $data);
		}



		function profile(){
	      $data['title']="mon profile admin";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/profile', $data);
	    }

	    function basic(){
	        $data['title']="Information basique de mon compte";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic', $data);
	    }

	    function basic_image(){
	        $data['title']="Information basique de ma photo";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_image', $data);
	    }

	    function basic_secure(){
	        $data['title']="Paramètrage de sécurité de mon compte";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_secure', $data);
	    }

	    function notification($param1=''){
	      $data['title']    ="Listes des formations";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	      $data['users']    = $this->crud_model->fetch_connected($this->connected);
	      $this->load->view('backend/admin/notification', $data);
	    }


		function site(){
			$data['title']="Paramétrage  du site";
	    	$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			$this->load->view('backend/admin/site', $data);		
		}
		function role(){
			$data['title']="Paramètrage de roles";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$this->load->view('backend/admin/role', $data);
		}


		function users(){
	      $data['title']="Nos utilisateurs";
	      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
	      $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
	      $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
	      $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
	      $data['users']  = $this->crud_model->Select_users();   
	      $data['roles']  = $this->crud_model->Select_roles();    
	      $this->load->view('backend/admin/users', $data);
	    }

	    function stat_users(){
		    $data['title']="Statistique sur nos utilisateurs";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		    $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
		    $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
		    $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
		    $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
		    $this->load->view('backend/admin/stat_users', $data);
		}

		// script pour la sauvegarge de données 
	    function database($param1 = '', $param2 = '')
	    {
	        
	        if($param1 == 'restore')
	        {
	            // $this->crud_model->import_db();
	            $this->session->set_flashdata('message',"Importation de la base des données avec succès!!!");
	            redirect(base_url() . 'admin/database/', 'refresh');
	        }
	        if($param1 == 'create')
	        {
	          $this->crud_model->create_backup();
	          $this->session->set_flashdata('message',"Sauvegarde de la base des données avec succès!!!");
	          redirect(base_url() . 'admin/database/', 'refresh');
	        }

	        $data['title'] = "Sauvegarde et restauration de la base des données";
	         $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/database', $data);
	    }
	    // fin script sauvegarde des données 


	    /*

	    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI HUB
	    MES SCRIPTS HUB COMMENCE DEJE
	    ========================================================
	    */

	    function visiteur(){
	        $data['title']="Les visiteurs en attente d'activation";
	        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $data['padding'] = $this->crud_model->fetch_all_visiteur();

	        $this->load->view('backend/admin/visiteur', $data);
		}

	    function pays(){

			$data['title']="Paramètrage pays ";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$this->load->view('backend/admin/pays', $data);
		}

		function province(){

			$data['title']="Paramètrage province ";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$this->load->view('backend/admin/province', $data);
		}

		function ville(){

			$data['title']="Paramètrage ville ";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['provinces'] = $this->crud_model->fetch_province(); 
			$this->load->view('backend/admin/ville', $data);
		}

		function category_entreprise(){
			$data['title']="Paramètrage catégorie entreprise";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$this->load->view('backend/admin/category_entreprise', $data);
		}

		function paiement_pading(){
			
		      $data['title']="Paiement en attente de validation";

		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);
		      $data['padding'] = $this->crud_model->fetch_padding_paiement();

		      $this->load->view('backend/admin/paiement_pading', $data);
		}

		function paiement_normale(){

		      $data['title']="Paiement normale de validation";
		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);
		      $data['padding'] = $this->crud_model->fetch_normal_paiement();

		      $this->load->view('backend/admin/paiement_normale', $data);
		}

		function evaluation(){

		      $data['title']="Liste entière de projets startups";
		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);
		      $data['padding'] = $this->crud_model->fetch_all_projects();

		      $this->load->view('backend/admin/evaluation', $data);
		}

		function evaluation_paiement(){
		    $data['title']="Evaluation de paiement";
	    	$data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

		    $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

	        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
	        $data['chart_data'] = $this->crud_model->get_stat_paie();
	        $this->load->view('backend/admin/evaluation_paiement', $data);
	    }

		function entreprise(){
			  $data['title']="liste de Start-up";
			  $data['pays'] = $this->crud_model->fetch_pays_register();
		      $data['provinces'] = $this->crud_model->fetch_province_register();

		      $data['cat_province'] = $this->crud_model->fetch_idp_candiat(); 
		      $data['cat_ville'] = $this->crud_model->fetch_idv_candiat(); 
		     
		      $data['category'] = $this->crud_model->fetch_category_entreprise();

		     
		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);
		      // $this->load->view('backend/user/viewx', $data);
		      $this->load->view('backend/admin/entreprise', $data);
		}

		function compterendu(){
		      $data['title']="Liste entière de mes comptes rendus";
		      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		      $data['users'] = $this->crud_model->fetch_connected($this->connected);
		      $data['padding'] = $this->crud_model->fetch_tag_all_compte_rendu();

		      $this->load->view('backend/admin/compterendu', $data);

		}


		function groupeconf(){

			$data['title']="Paramètrage de groupe de discutions ";
			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['my_group'] = $this->crud_model->fetch_tag_users_chat($this->connected);
			$this->load->view('backend/admin/groupeconf', $data);
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
	      $this->load->view('backend/admin/message', $data);
	    }

	    function chat_admin($param1, $param2){
		    $data['title']="Discution instantané";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		    $data['id_user']= $param1;
		    $data['id_recever']= $param2;
		    $data['id_recever2']= $param2;
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/admin/messagerie', $data);
		}

		function chat_admin2($param1, $param2){

			$title_job = $this->crud_model->get_name_groupe($param2);
			
		    $data['title']="le groupe ".$title_job." Discution instantanée";
		    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

		    $data['goupe_name']= $title_job;

		    $data['id_user']= $param1;
			$data['code_groupe']= $param2;

		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/admin/chat_groupe', $data);
		}

		



	     function operationCompteRendu($param1='',$param2=''){
        if ($param1=="ajout") {
          # code...

            $id_user = $this->connected;
            
            if ($_FILES['fichier']['size'] > 0) {
              $data['fichier'] = $this->upload_fichier_compte_rendu();
            }

            $data['id_user']       = $id_user;

            $data['titre']             = $this->input->post('titre');
            $data['milieu']            = $this->input->post('milieu');
            $data['jour']            = $this->input->post('jour');
            $data['commentaire']            = $this->input->post('commentaire');
            
            $data['codeP']            = rand();

            $query = $this->crud_model->insert_compterendu($data);

            


            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'admin/compterendu', 'refresh');


        }
        else if ($param1=="modification") {
          # code...

            $id_user = $this->input->post('id_user');
            $codeP = $param2;

            if ($_FILES['fichier']['size'] > 0) {
              $data['fichier'] = $this->upload_fichier_compte_rendu();
            }

            $data['titre']             = $this->input->post('titre');
            $data['milieu']            = $this->input->post('milieu');
            $data['jour']            = $this->input->post('jour');
            $data['commentaire']            = $this->input->post('commentaire');

            $query = $this->crud_model->update_compterendu($codeP, $data);
            $this->session->set_flashdata('message' , 'Modification avec succès ');
            redirect(base_url() . 'admin/operationCompteRendu/detail/'.$codeP, 'refresh');

        }
        elseif ($param1 =="suppression") {
          $codeP = $param2;
          $query = $this->crud_model->delete_compterendu($codeP);
            $this->session->set_flashdata('message' , 'Suppression avec succès ');
            redirect(base_url() . 'admin/compterendu', 'refresh');
        }
        elseif ($param1 =="detail") {
          $codeP = $param2;

          $data['title']="Modification de compte rendu!";
          $data['users'] = $this->crud_model->fetch_connected($this->connected);
          $data['id_user'] = $this->connected;
          $data['codeP'] = $codeP;
          $data['projects'] = $this->crud_model->fetch_compterendu_tag_by_code($codeP);

          $this->load->view('backend/admin/edit_compterendu', $data);
        }
        else{

          $this->session->set_flashdata('message2' , 'Opération non trouvée!!!!');
          redirect(base_url() . 'admin/compterendu', 'refresh');
        }



    }

     function upload_fichier_compte_rendu()  
    {  
         if(isset($_FILES["fichier"]))  
         {  
              $extension = explode('.', $_FILES['fichier']['name']);  
              $new_name = rand() . '.' . $extension[1];  
              $destination = './upload/compte/' . $new_name;  
              move_uploaded_file($_FILES['fichier']['tmp_name'], $destination);  
              return $new_name;  
         }  
    }



      // debit des scripts provinces
      function fetch_province(){  

           $fetch_data = $this->crud_model->make_datatables_province();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                // $sub_array[] = nl2br(substr($row->idp, 0,50)).'';
                $sub_array[] = nl2br(substr($row->nomp, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idp="'.$row->idp.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idp="'.$row->idp.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_province(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_province(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_province($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
              'nomp'                 =>     $this->input->post('nomp')    
          );  
           
          $requete=$this->crud_model->insert_province($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_province()  
      {  
           $updated_data = array(  
              'nomp'    =>     $this->input->post('nomp') 
           );   

          $this->crud_model->update_province($this->input->post("idp"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_province()  
      {  
          $this->crud_model->delete_province($this->input->post("idp"));       
          echo("suppression avec succès");  
      }  
   

      function fetch_single_province()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_province($this->input->post("idp"));  
           foreach($data as $row)  
           {  
                $output['nomp']   = $row->nomp; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script provinces

       // debit des scripts ville
    function fetch_ville(){  

           $fetch_data = $this->crud_model->make_datatables_ville();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nomp, 0,50)).'';
                $sub_array[] = nl2br(substr($row->nomv, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                
 
                $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idv="'.$row->idv.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_ville(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_ville(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_ville($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nomv'                 =>     $this->input->post('nomv'),
               'idp'                 =>     $this->input->post('idp')    
      );  
           
          $requete=$this->crud_model->insert_ville($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

    }

    function modification_ville()  
      {  
           $updated_data = array(  
              'nomv'                =>     $this->input->post('nomv'),
            'idp'                 =>     $this->input->post('idp') 
          );   

          $this->crud_model->update_ville($this->input->post("idv"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_ville()  
      {  
          $this->crud_model->delete_ville($this->input->post("idv"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_ville()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_ville($this->input->post("idv"));  
           foreach($data as $row)  
           {  
                $output['nomv']   = $row->nomv; 
                $output['idp']    = $row->idp; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script province et ville

    // debit des scripts category
    function fetch_category(){  

	       $fetch_data = $this->crud_model->make_datatables_category();  
	       $data = array();  
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array();  

	            $sub_array[] = nl2br(substr($row->nomcat, 0,50)).'';
	            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	            

	            $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
	            $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_category(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_category(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);


	}

    function operation_category($param1 ='', $param2='', $param3=''){
	    if ($param1='Add') {

	      $insert_data = array( 
	           'nomcat'                 =>     $this->input->post('nomcat')   
	      );  
	       
	      $requete=$this->crud_model->insert_category($insert_data);

	      echo("Enregistrement avec succès");
	           
	      # code...
	    }
	   

	}

    function modification_category()  
	{  
	       $updated_data = array(  
	          'nomcat'                =>     $this->input->post('nomcat')
	       );   

	      $this->crud_model->update_category($this->input->post("idcat"), $updated_data);
	      echo("information mise à jour avec succès"); 
	}

	function suppression_category()  
	{  
	      $this->crud_model->delete_category($this->input->post("idcat"));      
	       echo("suppression avec succès");  
	}  


	function fetch_single_category()  
	{  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_category($this->input->post("idcat"));  
	       foreach($data as $row)  
	       {  
	            $output['nomcat']   = $row->nomcat; 
	       }  
	       echo json_encode($output);  
	}  

	// fin de script categorie


	// debit des scripts category
    function fetch_category_news(){  

	       $fetch_data = $this->crud_model->make_datatables_category_news();  
	       $data = array();  
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array();  

	            $sub_array[] = nl2br(substr($row->nom, 0,50)).'';
	            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	            

	            $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
	            $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_category_news(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_category_news(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);


	}

    function operation_category_news($param1 ='', $param2='', $param3=''){
	    if ($param1='Add') {

	      $insert_data = array( 
	           'nom'                 =>     $this->input->post('nom')   
	      );  
	       
	      $requete=$this->crud_model->insert_category_news($insert_data);

	      echo("Enregistrement avec succès");
	           
	      # code...
	    }
	   

	}

    function modification_category_news()  
	{  
	       $updated_data = array(  
	          'nom'                =>     $this->input->post('nom')
	       );   

	      $this->crud_model->update_category_news($this->input->post("idcat"), $updated_data);
	      echo("information mise à jour avec succès"); 
	}

	function suppression_category_news()  
	{  
	      $this->crud_model->delete_category_news($this->input->post("idcat"));      
	       echo("suppression avec succès");  
	}  


	function fetch_single_category_news()  
	{  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_category_news($this->input->post("idcat"));  
	       foreach($data as $row)  
	       {  
	            $output['nom']   = $row->nom; 
	       }  
	       echo json_encode($output);  
	}  

	// fin de script categorie













		/*

	    DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI Ecommerce
	    MES SCRIPTS EcommerceB COMMENCE DEJE
	    ========================================================
	    */


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
		         redirect('admin/basic', 'refresh');
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
		           redirect('admin/basic_image', 'refresh');
		     }
		     else{

		        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
		        redirect('admin/basic_image', 'refresh');

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
		                   redirect('admin/basic_secure', 'refresh');

		               }
		               else{
		   
		                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
		                redirect('admin/basic_secure', 'refresh');
		               }
		         
		          }

		       }
		       else{

		          $this->session->set_flashdata('message2', 'information incorecte');
		          redirect('admin/basic_secure', 'refresh');
		       }
		     
		  } 

		  function view_1($param1='', $param2='', $param3=''){
		      
			  if($param1=='display_delete') {
			  	$this->session->set_flashdata('message', 'suppression avec succès ');
			    $query = $this->crud_model->delete_notifacation_tag($param2);
			    redirect('admin/notification');
			  }

			  if($param1=='display_delete_message') {

			    $query = $this->crud_model->delete_message_tag($param3);
			    redirect('admin/message/'.$param2);
			  }
			  else{

			  }

		  }



	    // script des utilisateurs 
	    function fetch_users(){  

	           $fetch_data = $this->crud_model->make_datatables_users();  
	           $data = array(); 
	           $etat =''; 
	           foreach($fetch_data as $row)  
	           {  
	           		if ($row->idrole == 1) {
	           			$etat ='<span class="badge badge-success">Admin</span>';
	           		}
	           		else if ($row->idrole == 2) {
	           			$etat ='<span class="badge badge-danger">Coatch</span>';
	           		}
	           		else if ($row->idrole == 3) {
	           			$etat ='<span class="badge badge-info">Start-up</span>';
	           		}
	           		else if ($row->idrole == 4) {
	           			$etat ='<span class="badge badge-dark">Comptable</span>';
	           		}
	           		else{
	           			$etat ='<span class="badge badge-danger">User</span>';
	           		}

	                $sub_array = array();  
	                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" />';  
	                $sub_array[] = nl2br(substr($row->first_name, 0,50)).'...';  
	                $sub_array[] = nl2br(substr($row->last_name, 0,50)).'...'; 

	                $sub_array[] = nl2br(substr($row->sexe, 0,50)).'';

	                $sub_array[] = nl2br(substr($row->email, 0,50));

	                $sub_array[] = nl2br(substr($row->telephone, 0,50));
	                $sub_array[] = $etat;

	                
	 
	                $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	                
	                $data[] = $sub_array;  
	           }  
	           $output = array(  
	                "draw"                =>     intval($_POST["draw"]),  
	                "recordsTotal"        =>     $this->crud_model->get_all_data_users(),  
	                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_users(),  
	                "data"                =>     $data  
	           );  
	           echo json_encode($output);  
	      }

	      function operation_users(){

	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $insert_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'passwords'      =>     md5(123456),
	                   'idrole'         =>     $this->input->post("idrole"), 
	                   'image'          =>     $this->upload_image_users()
	                );    
	          }  
	          else  
	          {  
	                 $user_image = "icone-user.png";  
	                 $insert_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'passwords'      =>     md5(123456),
	                   'image'          =>     $user_image
	                );   
	          }

	        $requete=$this->crud_model->insert_users($insert_data);
	        echo("Ajout information avec succès");
	        
	      }

	      function modification_users(){

	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $updated_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'linkedin'       =>     $this->input->post("linkedin"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'image'          =>     $this->upload_image_users()
	                );    
	          }  
	          
	          else  
	          {   
	               $updated_data = array(  
	                   'first_name'     =>     $this->input->post('first_name'),  
	                   'last_name'      =>     $this->input->post("last_name"),
	                   'email'          =>     $this->input->post("email"),
	                   'telephone'      =>     $this->input->post("telephone"),
	                   'full_adresse'   =>     $this->input->post("full_adresse"),
	                   'date_nais'      =>     $this->input->post("date_nais"), 
	                   'sexe'           =>     $this->input->post("sexe"),
	                   'facebook'       =>     $this->input->post("facebook"),
	                   'twitter'        =>     $this->input->post("twitter"),
	                   'idrole'         =>     $this->input->post("idrole"),
	                   'linkedin'       =>     $this->input->post("linkedin")
	                );   
	          }
	  
	          
	          $this->crud_model->update_users($this->input->post("id"), $updated_data);

	          echo("modification avec succès");
	      }

	      function supression_users(){
	 
	          $this->crud_model->delete_users($this->input->post("id"));
	          echo("suppression avec succès");
	        
	      }

	      function fetch_single_users()  
	      {  
	           $output = array();  
	           $data = $this->crud_model->fetch_single_users($this->input->post('id'));  
	           foreach($data as $row)  
	           {  
	                $output['first_name'] = $row->first_name;  
	                $output['last_name'] = $row->last_name; 

	                $output['email'] = $row->email;
	                $output['telephone'] = $row->telephone;
	                $output['full_adresse'] = $row->full_adresse;
	                $output['biographie'] = $row->biographie;
	                $output['date_nais'] = $row->date_nais;
	                $output['sexe'] = $row->sexe;
	                $output['idrole'] = $row->idrole;

	                $output['facebook'] = $row->facebook;
	                $output['linkedin'] = $row->linkedin;
	                $output['twitter'] = $row->twitter;
	                $output['image'] = $row->image;

	                if($row->image != '')  
	                {  
	                     $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	                }  
	                else  
	                {  
	                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	                }  

	                
	           }  
	           echo json_encode($output);  
	      }

      // fun script utilisateurs 



	    // script de role
		function fetch_role(){  

		       $fetch_data = $this->crud_model->make_datatables_role();  
		       $data = array();  
		       foreach($fetch_data as $row)  
		       {  
		            $sub_array = array();  
		           
		            $sub_array[] = nl2br(substr($row->nom, 0,50)); 
		            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
		           

		            $sub_array[] = '<button type="button" name="update" idrole="'.$row->idrole.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
		            $sub_array[] = '<button type="button" name="delete" idrole="'.$row->idrole.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
		            $data[] = $sub_array;  
		       }  
		       $output = array(  
		            "draw"                =>     intval($_POST["draw"]),  
		            "recordsTotal"        =>     $this->crud_model->get_all_data_role(),  
		            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_role(),  
		            "data"                =>     $data  
		       );  
		       echo json_encode($output);  
		  }

		  function fetch_single_role()  
		  {  
		       $output = array();  
		       $data = $this->crud_model->fetch_single_role($_POST["idrole"]);  
		       foreach($data as $row)  
		       {  
		            $output['nom']    = $row->nom;  
		            
		           
		       }  
		       echo json_encode($output);  
		  }  


		  function operation_role(){

		    $insert_data = array(  
		           'nom'            =>     $this->input->post('nom')
		    );  

		      $requete=$this->crud_model->insert_role($insert_data);
		      echo("Ajout information avec succès");
		      
		  }

		  function modification_role(){

		      $updated_data = array(  
		           'nom'            =>     $this->input->post('nom')
		    );

		      $this->crud_model->update_role($this->input->post("idrole"), $updated_data);

		      echo("modification avec succès");
		  }

		  function supression_role(){

		      $this->crud_model->delete_role($this->input->post("idrole"));
		      echo("suppression avec succès");
		    
		  }

		  // fin role

		// script de tbl_info
	    function fetch_tbl_info(){  

	           $fetch_data = $this->crud_model->make_datatables_tbl_info();  
	           $data = array();  
	           foreach($fetch_data as $row)  
	           {  
	                $sub_array = array();  
	                $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail img-responsive" width="50" height="35" style="border-radius:50%;" />';  
	                $sub_array[] = nl2br(substr($row->nom_site, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->email, 0,10)).'...';  
	                $sub_array[] = nl2br(substr($row->tel1, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->tel2, 0,5)).'...'; 
	                $sub_array[] = nl2br(substr($row->adresse, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->facebook, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->twitter, 0,10)).'...'; 
	                $sub_array[] = nl2br(substr($row->linkedin, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->termes, 0,10)).'...'; 
	                // $sub_array[] = nl2br(substr($row->confidentialite, 0,10)).'...'; 
	                
	 
	                $sub_array[] = '<button type="button" name="update" idinfo="'.$row->idinfo.'" class="btn btn-warning btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
	                $sub_array[] = '<button type="button" name="delete" idinfo="'.$row->idinfo.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
	                $data[] = $sub_array;  
	           }  
	           $output = array(  
	                "draw"                =>     intval($_POST["draw"]),  
	                "recordsTotal"        =>     $this->crud_model->get_all_data_tbl_info(),  
	                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tbl_info(),  
	                "data"                =>     $data  
	           );  
	           echo json_encode($output);  
	      }

	      function fetch_single_tbl_info()  
	      {  
	           $output = array();  
	           $data = $this->crud_model->fetch_single_tbl_info($_POST["idinfo"]);  
	           foreach($data as $row)  
	           {  
	                $output['nom_site']     = $row->nom_site;  
	                $output['adresse']      = $row->adresse; 
	                $output['tel1']       = $row->tel1; 
	                $output['tel2']       = $row->tel2; 
	                $output['email']      = $row->email; 
	                $output['facebook']     = $row->facebook; 
	                $output['twitter']      = $row->twitter; 
	                $output['linkedin']     = $row->linkedin;

	                $output['termes']       = $row->termes;
	                $output['confidentialite']  = $row->confidentialite;

	                $output['description']   = $row->description;
	                $output['mission']       = $row->mission;
	                $output['objectif']      = $row->objectif;
	                $output['blog']      = $row->blog;

	                $output['tel3']      = $row->tel3;
	                $output['token_sms'] = $row->token_sms;


	                if($row->icone != '')  
	                {  
	                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->icone.'" />';  
	                }  
	                else  
	                {  
	                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	                }  
	           }  
	           echo json_encode($output);  
	      }  


	      function operation_tbl_info(){


	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $insert_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'confidentialite'        =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"),
	               'blog'               =>     $this->input->post("blog"), 
	               'tel3'               =>     $this->input->post("tel3"),
	               'token_sms'          =>     $this->input->post("token_sms"),
	               'icone'              =>     $this->upload_image_tbl_info()
	          );    
	          }  
	          else  
	          {  
	               $user_image = "icone-user.png";  
	               $insert_data = array(  
	               'nom_site'           =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'               =>     $this->input->post('tel2'), 
	               'adresse'            =>     $this->input->post("adresse"), 
	               'facebook'           =>     $this->input->post("facebook"), 
	               'twitter'            =>     $this->input->post("twitter"),
	               'linkedin'           =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'             =>     $this->input->post("termes"),
	               'confidentialite'    =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"), 
	               'blog'               =>     $this->input->post("blog"), 
	               'tel3'               =>     $this->input->post("tel3"),
	               'token_sms'          =>     $this->input->post("token_sms"),
	               'icone'              =>     $user_image
	          );   
	          }

	        
	         
	        $requete=$this->crud_model->insert_tbl_info($insert_data);
	        echo("Ajout information avec succès");
	        
	      }

	      function modification_tbl_info(){
	  
	          if($_FILES["user_image"]["size"] > 0)  
	          {  
	               $updated_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'confidentialite'        =>     $this->input->post("confidentialite"), 
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"),
	               'blog'               =>     $this->input->post("blog"),
	                'tel3'               =>     $this->input->post("tel3"),
	               'token_sms'          =>     $this->input->post("token_sms"), 
	               'icone'                  =>     $this->upload_image_tbl_info()
	          );    
	          }  
	          else  
	          {  
	               $updated_data = array(  
	               'nom_site'             =>     $this->input->post('nom_site'),  
	               'tel1'               =>     $this->input->post("tel1"), 
	               'tel2'                 =>     $this->input->post('tel2'), 
	               'adresse'              =>     $this->input->post("adresse"), 
	               'facebook'             =>     $this->input->post("facebook"), 
	               'twitter'              =>     $this->input->post("twitter"),
	               'linkedin'             =>     $this->input->post("linkedin"), 
	               'email'              =>     $this->input->post("email"),
	               'termes'               =>     $this->input->post("termes"),
	               'description'        =>     $this->input->post("description"), 
	               'mission'            =>     $this->input->post("mission"), 
	               'objectif'           =>     $this->input->post("objectif"), 
	               'blog'               =>     $this->input->post("blog"),
	               'tel3'               =>     $this->input->post("tel3"),
	               'token_sms'          =>     $this->input->post("token_sms"),
	               'confidentialite'        =>     $this->input->post("confidentialite")
	          );    
	          }
	  
	          $this->crud_model->update_tbl_info($this->input->post("idinfo"), $updated_data);

	          echo("modification avec succès");
	      }

	      


	      function supression_tbl_info(){
	 
	          $this->crud_model->delete_tbl_info($this->input->post("idinfo"));

	          echo("suppression avec succès");
	        
	      }

	      // fin script tbl_info


	      function upload_image_users()  
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

	      function upload_image_tbl_info()  
	  	  {  
	  	       if(isset($_FILES["user_image"]))  
	  	       {  
	  	            $extension = explode('.', $_FILES['user_image']['name']);  
	  	            $new_name = rand() . '.' . $extension[1];  
	  	            $destination = './upload/tbl_info/' . $new_name;  
	  	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	  	            return $new_name;  
	  	       }  
	  	  }

	  	  function upload_image_module()  
	      {  
	           if(isset($_FILES["user_image"]))  
	           {  
	                $extension = explode('.', $_FILES['user_image']['name']);  
	                $new_name = rand() . '.' . $extension[1];  
	                $destination = './upload/module/cours/image/' . $new_name;  
	                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	                return $new_name;  
	           }  
	      }

	      function upload_image_module_fichier()  
	      {  
	           if(isset($_FILES["user_image2"]))  
	           {  
	                $extension = explode('.', $_FILES['user_image2']['name']);  
	                $new_name = rand() . '.' . $extension[1];  
	                $destination = './upload/module/cours/fichier/' . $new_name;  
	                move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
	                return $new_name;  
	           }  
	      }

	  	  // debit des scripts pays
    function fetch_pays(){  

           $fetch_data = $this->crud_model->make_datatables_pays();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nompays, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idPays="'.$row->idPays.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';

                $sub_array[] = '<button type="button" name="delete" idPays="'.$row->idPays.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_pays(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_pays(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);


      }

      function operation_pays($param1 ='', $param2='', $param3=''){
        if ($param1='Add') {

          $insert_data = array( 
               'nompays'                 =>     $this->input->post('nompays')   
          );  
           
          $requete=$this->crud_model->insert_pays($insert_data);

          echo("Enregistrement avec succès");
               
          # code...
        }
       

      }

      function modification_pays()  
      {  
           $updated_data = array(  
              'nompays'                =>     $this->input->post('nompays')
           );   

          $this->crud_model->update_pays($this->input->post("idPays"), $updated_data);
          echo("information mise à jour avec succès"); 
      }

      function suppression_pays()  
      {  
          $this->crud_model->delete_pays($this->input->post("idPays"));      
           echo("suppression avec succès");  
      }  
   

      function fetch_single_pays()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_pays($this->input->post("idPays"));  
           foreach($data as $row)  
           {  
                $output['nompays']   = $row->nompays; 
           }  
           echo json_encode($output);  
      }  
   
    // fin de script pays

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

    function pdf_projet($param1=''){
       $customer_id = "Appel à candidature de projet ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_candidature_projet($param1);

       echo($html_content);
       // $this->load->library('pdf');
       // $this->pdf->loadHtml($html_content);
       // $this->pdf->render();
       // $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }


    function pagination_candidat_liste()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_candidat_followe_count();
    $config["per_page"] = 2;
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
     'country_table'   => $this->crud_model->fetch_details_pagination_candidat_admin($config["per_page"], $start)
    );
    echo json_encode($output);
   }

   // recherche de formations des produits
   function fetch_search_candidat_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_candidats_user($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';
        $etat2 = '';

          foreach($data->result() as $row)
          {

              $output .= '

              <div class="col-xs-6 col-lg-12 col-12 mb-2">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4 mb-2">

                            <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->logo.'" alt="Card image cap" style="height:190px;">

                            </div>

                            <div class="col-md-8">
                                <div class="pull-right">
                                  <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:50px; width:50px; border-radius: 50%;">
                                </div>
                                <div class="col-md-12 text-uppercase">
                                    <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
                                    &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone mr-1"></i>'.substr($row->telephone, 0,100).'</a>
                                </div>
                                <div class="col-md-12 list-item-heading mb-4">
                                    Email: <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
                                    <b>Description: </b> '.substr($row->description, 0,200).'... <br>
                                    <p>
                                        <b>Ceo: </b> '.substr($row->first_name.''.$row->last_name, 0,29).'
                                        <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
                                        <b>Téléphone:</b>
                                        '.substr($row->telephone, 0,100).'

                                    </p>
                                </div>
                                <footer>
                                     <div class="col-md-12 text-center">
                                       <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
                                     </div>
                                </footer>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>

               ';
            

          }

         
      }
      else
      {
          $output .= '
           <div class="col-md-12" >
              <div class="row">
                  <div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="media text-muted pt-3">
                    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                    
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
           </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }

   // fin des script 



   /*
   fin des scripts offres
   =======================
   =======================
   */


   function show_candidat_by_province(){
    
      $output = '';
      $query = '';
      if($this->input->post('idp'))
      {
       $query = $this->input->post('idp');
      }
      $data = $this->crud_model->fultrage_fetch_data_candidat_by_province($query);
      
      if($data->num_rows() > 0)
      {


         foreach($data->result() as $row)
         {

            
           $output .= '
              <div class="col-xs-6 col-lg-12 col-12 mb-2">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4 mb-2">

                            <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->logo.'" alt="Card image cap" style="height:190px;">

                            </div>

                            <div class="col-md-8">
                                <div class="pull-right">
                                  <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:50px; width:50px; border-radius: 50%;">
                                </div>
                                <div class="col-md-12 text-uppercase">
                                    <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
                                    &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone mr-1"></i>'.substr($row->telephone, 0,100).'</a>
                                </div>
                                <div class="col-md-12 list-item-heading mb-4">
                                    Email: <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
                                    <b>Description: </b> '.substr($row->description, 0,200).'... <br>
                                    <p>
                                        <b>Ceo: </b> '.substr($row->first_name.''.$row->last_name, 0,29).'
                                        <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
                                        <b>Téléphone:</b>
                                        '.substr($row->telephone, 0,100).'

                                    </p>
                                </div>
                                <footer>
                                     <div class="col-md-12 text-center">
                                       <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
                                     </div>
                                </footer>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>

               ';
         }
      }
      else
      {
          $output .= '
            <div class="col-md-12" >
                  <div class="row">
                      <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                        
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
               </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;

  }

   function show_candidat_by_ville(){
    
      $output = '';
      $query = '';
      if($this->input->post('idv'))
      {
       $query = $this->input->post('idv');
      }
      $data = $this->crud_model->fultrage_fetch_data_candidat_by_ville($query);
      
      if($data->num_rows() > 0)
      {


         foreach($data->result() as $row)
         {

            
         	$output .= '
              <div class="col-xs-6 col-lg-12 col-12 mb-2">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4 mb-2">

                            <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->logo.'" alt="Card image cap" style="height:190px;">

                            </div>

                            <div class="col-md-8">
                                <div class="pull-right">
                                  <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:50px; width:50px; border-radius: 50%;">
                                </div>
                                <div class="col-md-12 text-uppercase">
                                    <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
                                    &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone mr-1"></i>'.substr($row->telephone, 0,100).'</a>
                                </div>
                                <div class="col-md-12 list-item-heading mb-4">
                                    Email: <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
                                    <b>Description: </b> '.substr($row->description, 0,200).'... <br>
                                    <p>
                                        <b>Ceo: </b> '.substr($row->first_name.''.$row->last_name, 0,29).'
                                        <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
                                        <b>Téléphone:</b>
                                        '.substr($row->telephone, 0,100).'

                                    </p>
                                </div>
                                <footer>
                                     <div class="col-md-12 text-center">
                                       <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
                                     </div>
                                </footer>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>

               ';


           
         }
      }
      else
      {
          $output .= '
            <div class="col-md-12" >
                  <div class="row">
                      <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                        
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
               </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;

  }

  // auto complete text candidat d'emplois
  function fetch_auto()
  {
      echo $this->crud_model->fetch_data_auto($this->uri->segment(3));
  }


    /*
   les script pour offres d'emplois
   ================================
   */

    function detail_entreprise($param1){
      $data['title']="profile entreprise";

      $my_entrep = $this->crud_model->get_info_entreprise_tag($param1);
      if($my_entrep->num_rows() > 0) {

        $data['my_entrep'] = $this->crud_model->get_info_entreprise_tag($param1);
        $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();

       
        $data['users'] = $this->crud_model->fetch_connected($param1);

        $data['category'] = $this->crud_model->fetch_category_register();

        $data['projects'] = $this->crud_model->fetch_projet_tag($param1);

        $this->load->view('backend/admin/profile_entrep', $data);

      }
      else{

        $insertData = array(
          'nom' =>  'entreprise systèle',
          'ceo' =>   $param1,
          'logo'  =>  'logo2.jpg'
        );

        $this->crud_model->insert_nouvelle_entreprise($insertData);

        $data['pays'] = $this->crud_model->fetch_pays_register();
        $data['provinces'] = $this->crud_model->fetch_province_register();


       
        $data['users'] = $this->crud_model->fetch_connected($param1);

        $data['category'] = $this->crud_model->fetch_category_register();
        
        // $this->load->view('backend/user/viewx', $data);
        $this->load->view('backend/admin/profile_entrep', $data);

      }

    }



    function fetch_ville_requete(){
      if($this->input->post('idp'))
      {
        echo $this->crud_model->fetch_ville_requete_crud($this->input->post('idp'));
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

	    $id_user= $this->input->post('id_user');
	    $query = $this->crud_model->update_crud_entreprise($id_user, $data);
	    $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
	     redirect('admin/detail_entreprise/'.$id_user, 'refresh');

	}

	function modification_photo_entreprise(){

	     $id_user= $this->input->post('id_user');
	     if ($_FILES['user_image']['size'] > 0) {
	       # code...
	        $data = array(
	          'logo'     => $this->upload_image()
	        );
	       $query = $this->crud_model->update_crud_entreprise($id_user, $data);
	       $this->session->set_flashdata('message', 'modification avec succès');
	          redirect('admin/detail_entreprise/'.$id_user, 'refresh');
	     }
	     
	     else{

	        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
	        redirect('admin/detail_entreprise/'.$id_user, 'refresh');

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
            redirect(base_url() . 'admin/newprojet', 'refresh');

        }
        else if ($param1=="modification") {
          # code...

            $student_id = $this->input->post('student_id');
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
            redirect(base_url() . 'admin/operationProjet/detail/'.$codeP, 'refresh');

        }
        elseif ($param1 =="suppression") {
          $codeP = $param2;
          $query = $this->crud_model->delete_projet($codeP);
            $this->session->set_flashdata('message' , 'Suppression avec succès ');
            redirect(base_url() . 'admin/evaluation', 'refresh');
        }
        elseif ($param1 =="detail") {
          $codeP = $param2;

          $data['title']="Modification projet d'entreprise!";
          $data['users'] = $this->crud_model->fetch_connected($this->connected);
          $data['student_id'] = $this->connected;
          $data['codeP'] = $codeP;
          $data['projects'] = $this->crud_model->fetch_projet_tag_by_code($codeP);

          $this->load->view('backend/admin/edit_project', $data);
        }
        else{

          $this->session->set_flashdata('message2' , 'Opération non trouvée!!!!');
          redirect(base_url() . 'admin/newprojet', 'refresh');
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

    /*
	  script entreprise commence deja
	  ===================================
	  **************************************
	  ========================================
	*/

	function galery($param1=''){
	    $data['title']="Notre galerie";
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['student_id'] = $param1;

	    $data['repository'] = $this->crud_model->show_detail_galery_tag($param1);
	   
	    $this->load->view('backend/admin/galery', $data);
	}

	function canavas($param1=''){
	    $data['title']="Busness model canevas!";
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['student_id'] = $param1;

	    $data['link_canavas1'] = $this->crud_model->show_detail_link_tag($param1);
	    $data['link_canavas2'] = $this->crud_model->show_detail_link_tag2($param1);

	    $this->load->view('backend/admin/canavas', $data);
	}

	function swot($param1=''){
	    $data['title']="swot de mon busness!";
	    $data['users'] = $this->crud_model->fetch_connected($this->connected);
	    $data['student_id'] = $param1;

	    $data['swot'] = $this->crud_model->show_detail_swot_tag($param1);
	    $data['swot2'] = $this->crud_model->show_detail_swot_tag2($param1);

	    $this->load->view('backend/admin/swot', $data);
	}


	function operation_canavas($param1 = '', $param2 = '', $param3 = ''){

        if ($param1 == 'ajout') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $param2;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            $data['student_id']     = $student_id;
            $data['message']        = $this->input->post('message');
            $query = $this->crud_model->insert_link_canavas2($data);

            if ($query > 0) {
            	# code...
            	if ($student_id != $this->connected) {
				                	# code...
	            	$url ="entreprise/canavas";

	                $id_user_recever = $student_id;

	                // $nom = $this->input->post('first_name');
	                $nom   = $this->crud_model->get_name_user($this->connected);
	                $message ="Coach ".$nom." Vient de corriger votre busness model canavas dans la colonne:".$this->input->post('titre');

	                $notification = array(
	                  'titre'     =>    "Nouvelle correction",
	                  'icone'     =>    "fa fa-tasks",
	                  'message'   =>     $message,
	                  'url'       =>     $url,
	                  'id_user'   =>     $id_user_recever
	                );
	                
	                $not = $this->crud_model->insert_notification($notification);
	                
	            }
            }


            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'admin/canavas/'.$student_id, 'refresh');

        }

        if ($param1 == 'edit') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $param2;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            
            $data['message']        = $this->input->post('message');


             $query = $this->crud_model->update_link_canavas2($param2,$data);

            $this->session->set_flashdata('message' , 'modification avec succès ');
            redirect(base_url() . 'admin/canavas/'.$student_id, 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_link_canavas2($param2);

            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'admin/canavas/'.$param3, 'refresh');

        }

    }

    function editer_my_link(){

      $idlink = $this->input->post('idlink');
      $sujet = $this->input->post('sujet');
      $data = array(
        'sujet' =>  $sujet
      );
      
      $query = $this->crud_model->update_link_canavas2($idlink,$data);
      echo("modification avec succès!! ");

    }





  function operation_swot($param1 = '', $param2 = '', $param3 = ''){

        if ($param1 == 'ajout') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $param2;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            $data['student_id']     = $student_id;
            $data['message']        = $this->input->post('message');
            $query = $this->crud_model->insert_swot_canavas2($data);
            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'admin/swot/'.$student_id , 'refresh');

        }

        if ($param1 == 'edit') 
        {
            
            // echo("nom :".$nom." studentid:".$student_id." news_id=".$param2);
            $student_id = $this->connected;
            $data['titre']          = $this->input->post('titre');
            $data['sujet']          = $this->input->post('sujet');
            
            $data['message']        = $this->input->post('message');

            $query = $this->crud_model->update_swot_canavas2($param2, $data);

            $this->session->set_flashdata('message' , 'modification avec succès ');
            redirect(base_url() . 'admin/swot/'.$student_id , 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_swot_canavas2($param2);
            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'admin/swot/'.$param3 , 'refresh');

        }

    }

    function editer_my_link_swot(){

      $idswot = $this->input->post('idswot');
      $sujet = $this->input->post('sujet');
      $data = array(
        'sujet' =>  $sujet
      );
      
      $query = $this->crud_model->update_swot_canavas2($idswot,$data);
      echo("modification avec succès!! ");

    }

     function show_candidat_by_category(){
    
      $output = '';
      $query = '';
      if($this->input->post('idcat'))
      {
       $query = $this->input->post('idcat');
      }
      $data = $this->crud_model->fultrage_fetch_data_candidat_by_category($query);
      
      if($data->num_rows() > 0)
      {


         foreach($data->result() as $row)
         {

            
           $output .= '
              <div class="col-xs-6 col-lg-12 col-12 mb-2">
                <div class="card">
                    
                    <div class="card-body">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4 mb-2">

                            <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->logo.'" alt="Card image cap" style="height:190px;">

                            </div>

                            <div class="col-md-8">
                                <div class="pull-right">
                                  <img class="card-img-top" src="'.base_url().'upload/photo/'.$row->image.'" alt="Card image cap" style="height:50px; width:50px; border-radius: 50%;">
                                </div>
                                <div class="col-md-12 text-uppercase">
                                    <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
                                    &nbsp;<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone mr-1"></i>'.substr($row->telephone, 0,100).'</a>
                                </div>
                                <div class="col-md-12 list-item-heading mb-4">
                                    Email: <a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google"></i> '.substr($row->email, 0,50).'</a>
                                    <b>Description: </b> '.substr($row->description, 0,200).'... <br>
                                    <p>
                                        <b>Ceo: </b> '.substr($row->first_name.''.$row->last_name, 0,29).'
                                        <b>Pays: </b> '.substr($row->nompays, 0,100).' <br>
                                        <b>Téléphone:</b>
                                        '.substr($row->telephone, 0,100).'

                                    </p>
                                </div>
                                <footer>
                                     <div class="col-md-12 text-center">
                                       <a href="'.base_url().'admin/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
                                     </div>
                                </footer>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>

               ';
         }
      }
      else
      {
          $output .= '
            <div class="col-md-12" >
                  <div class="row">
                      <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                        
                      </div>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
               </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;

  }

  function valider_visiteur($param1=''){

      if ($param1 !='') {

        $query = $this->crud_model->fetch_tag_visiteur($param1);
        if ($query->num_rows() > 0) {
          # code...
          foreach ($query->result_array() as $key) {
            
            // debit 
            $insert_data = array( 
                   'first_name'   =>     $key['first_name'],
                   'image'        =>     $key['image'],
                   'passwords'    =>     $key['passwords'],
                   'email'        =>     $key['email'],
                   'idrole'       =>     3
            );

            $query2 = $this->crud_model->insert_user($insert_data);
            if ($query2 > 0) {
            	# code...

            	$this->session->set_flashdata('message', "Félicitation!!!! ".$key['first_name']." vient d'intégrer l'incubateur avec succès!!!📘");
                $this->delete_visiteur($param1);
                redirect('admin/visiteur','refresh');
            }
            else{
            	redirect('admin/visiteur','refresh');
            }

            // fin

          }
        }
        else{
          redirect('admin/visiteur','refresh');
        }

        # code...
      }
      else{
        redirect('admin/visiteur','refresh');
      }

      
      
      
    }

    function delete_visiteur($param1=''){

        if ($param1 !='') {

          $query = $this->crud_model->fetch_tag_visiteur($param1);
          if ($query->num_rows() > 0) {
            # code...
            foreach ($query->result_array() as $key) {
              
              // debit 
              $this->crud_model->delete_visiteur($param1);

              // $this->session->set_flashdata('message', "Succès!!!! ".$key['first_name']." vient d'être rejeté avec succès!!!🆗");

              redirect('admin/visiteur','refresh');
              // fin
            }

          }
          else{
            redirect('admin/visiteur','refresh');
          }
          # code...
          
        }
        else{

          redirect('admin/visiteur','refresh');

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
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count($config["per_page"], $start)
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
	            $url = base_url().'admin/detail_users_profile/'.$row->id;
	                $etat = '<div class="col-md-12"><span class="message">
	                  <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id.'">
	                &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
	                    </a> 
	                  </span></div>';
	        }
	        else{
	                $url = base_url().'admin/profile';
	                $etat = '

	                <span class="message">
	                  <a href="'.base_url().'admin/profile" class="text-warning">
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
     'country_table'   => $this->crud_model->fetch_details_pagination_online_connected($config["per_page"], $start)
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
          	$url= $url = base_url().'admin/detail_users_profile/'.$row->id;
            $etat = '<div class="col-md-12"><span class="message">
                <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span></div>';
          }
          else{
          	  $url = $url = base_url().'admin/profile';
              $etat = '

              <div class="col-md-12"><span class="message">
                <a href="'.base_url().'admin/profile" class="text-warning">
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
        
        redirect('admin/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('admin/chat_admin/'.$param1.'/'.$param2);
      }
      
      
    }


    function detail_users_profile($param1=''){
    	$data['title']="Détail de profile utilisateur";
	    $data['user_search'] =$param1;
	    $data['users'] = $this->crud_model->fetch_connected($param1);
	    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
	    $this->load->view('backend/admin/detail_users_profile', $data);
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
	* script de group de chat
	*

	====================================================
	====================================================
	====================================================

	*/

	function operation_groupe(){
    	  $code = substr(md5(rand(100000000, 200000000)), 0, 10);
	      $insert_data = array(  
	           'nom'          			=>     $this->input->post('nom'),  
	           'id_users'           	=>     $this->input->post("id_users"), 
	           'code'         		    =>     $code, 
	           'image'                  =>     $this->upload_image_groupe()
		  );  
	       
	      $requete=$this->crud_model->insert_groupe_chat($insert_data);
	      echo("le groupe est créé avec succès");
	      // redirect('admin/groupeconf', 'refresh');
	      
    }

    function modification_groupe(){

    	if($_FILES["user_image"]["size"] > 0)  
      	{
      		$update_data = array(  
		           'nom'          			=>     $this->input->post('nom'),  
		           'id_users'           	=>     $this->input->post("id_users"),  
		           'image'                  =>     $this->upload_image_groupe()
			);  

      	}
      	else
      	{
      		$update_data = array(  
		           'nom'          			=>     $this->input->post('nom'),  
		           'id_users'           	=>     $this->input->post("id_users") 
			);
      	}

	    $code = $this->input->post('code');   
	    $requete=$this->crud_model->update_groupe_chat($code,$update_data);
	    echo("mise à jour du groupe avec succès");
	      
    }

    function delete_groupe()
	{
	    if($this->input->post('checkbox_value'))
	    {
	       $id = $this->input->post('checkbox_value');
	       for($count = 0; $count < count($id); $count++)
	       {
	            $code    = $id[$count];
	            $this->crud_model->delete_groupe_chat($code);

	            echo($code);
	            
	       }

	       // echo("suppression groupe avec succès");

	    }
	}


    function fetch_single_groupe()  
	{  
       $output = array();  
       $data = $this->crud_model->fetch_single_groupe_chat($this->input->post('code'));  
       foreach($data as $row)  
       {  
            $output['nom'] 		= $row->nom; 
            $output['id_users'] = $row->id_users;
             
            
            if($row->image != '')  
            {  
                 $output['user_image'] = '<img src="'.base_url().'upload/groupe/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
            }  
            else  
            {  
                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
            }  
 
       }  

       echo json_encode($output);  
	}

	function upload_image_groupe()  
	{  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/groupe/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
	}

	// lieste de mes groupes 
	function nos_goupe_discution_groupe(){
      	$id = $this->connected;
    	$output = '';
   
    	$this->db->where("id_users", $id);
    	$resultat = $this->db->get("groupe_chat");

    	if ($resultat->num_rows() > 0) {
    		$output .='<ul class="list-unstyled resultat">';

    		foreach ($resultat->result() as $key) {
    			$output .='

    			<li class="clearfix bg-white card mb-2">
                    <div class="col-md-12  row mt-1">

                    	<div class="col-2 mb-2">
	                    	<div class="md-left">
		                        <label class="fancy-checkbox">
		                            <input type="checkbox" name="checkbox" class="checkbox-tick show_member_of_group2" value="'.$key->idgroupe.'" >
		                            <span></span>
		                        </label>
		                        <a href="javascript:void(0);" code="'.$key->code.'" class="mail-star active update"><i class="fa fa-edit"></i></a>  

		                        <a href="javascript:void(0);" code="'.$key->code.'" class="mail-star text-danger active deleted_group"><i class="fa fa-trash"></i></a> 

		                    </div>
                    	</div>

                    	<div class="col-7 mb-2">
	                    	<div class="col-md-12">
	                    		<p class="sub text-justify "><a href="'.base_url().'admin/chat_admin2/'.$id.'/'.$key->code.'" class="mail-detail-expand text-justify">'.$key->nom.' </a></p>
		                    </div>
                    	</div>
                    	<div class="col-3 mb-2">
	                    	<div class="md-right">
		                        <img class="img rounded img-thumbnail img-responsive" src="'.base_url().'upload/groupe/'.$key->image.'" alt="" style="border-radius: 50%; border-color: white;">
		                        
		                    </div>
                    	</div>
	                    
	                    
                    </div>
                </li>

    			';
    		}

    		$output .='</ul>';

            echo($output);
    	}
    	else{

    	}
    } 
    // voir le groupe de profile
    function profile_groupe(){
      	$id = $this->connected;
    	$output = '';
    	
    	$etat = '';
        $url = '';

        $query = $this->input->post('code');

    	$resultat = $this->crud_model->get_users_groupe_by_code($query);
    	if ($resultat->num_rows() > 0) {
    		$output .='<ul class="list-unstyled resultat">';

    		$output .='<ul class="list-unstyled resultat">';

    		foreach ($resultat->result() as $row) {

    			if ($row->id_user != $id) {
	                $url = base_url().'admin/detail_users_profile/'.$row->id_user;
	                    $etat = '<div class="col-md-12"><span class="message">
	                      <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id_user.'">
	                    &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
	                        </a> 
	                      </span></div>';
	            }
	            else{
	                    $url = base_url().'admin/profile';
	                    $etat = '

	                    <span class="message">
	                      <a href="'.base_url().'admin/profile" class="text-warning">
	                    &nbsp;&nbsp;<i class="fa fa-user"></i> profile
	                        </a> 
	                      </span>

	                    ';
	            }

    			$output .='

    			<li class="clearfix bg-white card mb-2">
		            <div class="col-md-12 mt-1">
		                  <div class="md-left">
		                      <label class="fancy-checkbox">
		                          <input type="checkbox" name="checkbox" class="checkbox-tick" value="'.$row->id.'">
		                          <span></span>
		                      </label>
		                      <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>                                                
		                  </div>
		                  <div class="md-right">
		                      
		                      <div class="col-md-12 media text-muted pt-3 mb-2">
		                            
		                          <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle mr-2" style="width: 50px; height: 40px; border-radius: 70%;">

		                          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
		                              <strong class="d-block text-gray-dark"> <a href="'.$url.'" >'.$row->first_name.' '.substr($row->last_name, 0,25).'</a></strong>
		                            <san class="text-info">'.$row->email.'</span>
		                              '.$etat.'
		                            
		                          </div>
		                          
		                      </div>





		                      
		                  </div>
		              </div>
		            </li>

    			';
    		}

    		$output .='</ul>';

            echo($output);

    		
    	}
    	else{

    	}
    }

     // pour les follower
   function pagination_utilisateur_groupe()
   {

	    $this->load->library("pagination");
	    $config = array();
	    $config["base_url"] = "#";
	    $config["total_rows"] = $this->crud_model->fetch_pagination_ti_followe_count();
	    $config["per_page"] = 3;
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
	     'country_table'   => $this->crud_model->fetch_details_pagination_groupe($config["per_page"], $start)
	    );
	    echo json_encode($output);
    }

    // la rechere pour le groupe
    function recherche_utilisateur_groupe(){
      	$id = $this->connected;
    	$output = '';
    	$etat = '';
        $url = '';
    	$query = $this->input->post('query');
    	$resultat = $this->crud_model->recherche_utilisateur_requete($query);
    	if ($resultat->num_rows() > 0) {
    		$output .='<ul class="list-unstyled resultat">';

    		foreach ($resultat->result() as $row) {

    			if ($row->id != $id) {
	                $url = base_url().'admin/detail_users_profile/'.$row->id;
	                    $etat = '<div class="col-md-12"><span class="message">
	                      <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id.'">
	                    &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
	                        </a> 
	                      </span></div>';
	            }
	            else{
	                    $url = base_url().'admin/profile';
	                    $etat = '

	                    <span class="message">
	                      <a href="'.base_url().'admin/profile" class="text-warning">
	                    &nbsp;&nbsp;<i class="fa fa-user"></i> profile
	                        </a> 
	                      </span>

	                    ';
	            }

    			$output .='

    			<li class="clearfix bg-white card mb-2">
		            <div class="col-md-12 mt-1">
		                  <div class="md-left">
		                      <label class="fancy-checkbox">
		                          <input type="checkbox" name="checkbox" class="checkbox-tick" value="'.$row->id.'">
		                          <span></span>
		                      </label>
		                      <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>                                                
		                  </div>
		                  <div class="md-right">
		                      
		                      <div class="col-md-12 media text-muted pt-3 mb-2">
		                            
		                          <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle mr-2" style="width: 50px; height: 40px; border-radius: 70%;">

		                          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
		                              <strong class="d-block text-gray-dark"> <a href="'.$url.'" >'.$row->first_name.' '.substr($row->last_name, 0,25).'</a></strong>
		                            <san class="text-info">'.$row->email.'</span>
		                              '.$etat.'
		                            
		                          </div>
		                          
		                      </div>





		                      
		                  </div>
		              </div>
		            </li>

    			';
    		}

    		$output .='</ul>';

            echo($output);
    	}
    	else{

    		$output .= '
	            <div class="col-md-12" >
	                  <div class="row">
	                      <div class="col-md-2"></div>
	                    <div class="col-md-8">
	                      <div class="media text-muted pt-3">
	                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
	                        
	                      </div>
	                    </div>
	                    <div class="col-md-2"></div>
	                  </div>
	               </div>
	          ';

    	}
    }


    // ajout au groupe 
    function integration_du_groupe()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           $gr = $this->input->post('code_groupe_value');
           for($count = 0; $count < count($id); $count++)
           {
                $id_user    = $id[$count];

                for($count2 = 0; $count2 < count($gr); $count2++)
		        {
	                $code_groupe    = $gr[$count2];

	                $data = array(
	                	'id_user'		=>	$id_user,
	                	'code_groupe'	=>	$code_groupe
	                );

	                $query = $this->crud_model->insert_integration_groupe($data);

	                // isertion des notification 
	                if ($query > 0) {
	                	# code...

	                	$users_cool = $this->crud_model->get_info_user_tag($id_user);
			            foreach ($users_cool as $key) {

			                if ($key['idrole'] == 1) {
				                if ($key['id'] != $this->connected) {
				                	# code...
				                	$url ="admin/chat_admin2/".$id_user."/".$code_groupe;

					                $id_user_recever = $key['id'];

					                // $nom = $this->input->post('first_name');
					                $nom   = $this->crud_model->get_name_user($this->connected);
					                $message =$nom." Vient de nous ajouter dans un groupe ";

					                $notification = array(
					                  'titre'     =>    "Nouveau groupe",
					                  'icone'     =>    "fa fa-comment",
					                  'message'   =>     $message,
					                  'url'       =>     $url,
					                  'id_user'   =>     $id_user_recever
					                );
					                
					                $not = $this->crud_model->insert_notification($notification);
					                
				                }

				            }

				            if ($key['idrole'] == 2) {
				                $url ="user/chat_admin2/".$id_user."/".$code_groupe;

				                $id_user_recever = $key['id'];

				                // $nom = $this->input->post('first_name');
				                $nom   = $this->crud_model->get_name_user($this->connected);
				                $message =$nom." Vient de nous ajouter dans un groupe ";

				                $notification = array(
				                  'titre'     =>    "Nouveau groupe",
				                  'icone'     =>    "fa fa-comment",
				                  'message'   =>     $message,
				                  'url'       =>     $url,
				                  'id_user'   =>     $id_user_recever
				                );
				                
				                $not = $this->crud_model->insert_notification($notification);

				            }

				            if ($key['idrole'] == 3) {
				                $url ="entreprise/chat_admin2/".$id_user."/".$code_groupe;

				                $id_user_recever = $key['id'];

				                // $nom = $this->input->post('first_name');
				                $nom   = $this->crud_model->get_name_user($this->connected);
				                $message =$nom." Vient de nous ajouter dans un groupe ";

				                $notification = array(
				                  'titre'     =>    "Nouveau groupe",
				                  'icone'     =>    "fa fa-comment",
				                  'message'   =>     $message,
				                  'url'       =>     $url,
				                  'id_user'   =>     $id_user_recever
				                );
				                
				                $not = $this->crud_model->insert_notification($notification);

				            }
				            // comptable
				            if ($key['idrole'] == 4) {
				                $url ="comptable/chat_admin2/".$id_user."/".$code_groupe;

				                $id_user_recever = $key['id'];

				                // $nom = $this->input->post('first_name');
				                $nom   = $this->crud_model->get_name_user($this->connected);
				                $message =$nom." Vient de nous ajouter dans un groupe ";

				                $notification = array(
				                  'titre'     =>    "Nouveau groupe",
				                  'icone'     =>    "fa fa-comment",
				                  'message'   =>     $message,
				                  'url'       =>     $url,
				                  'id_user'   =>     $id_user_recever
				                );
				                
				                $not = $this->crud_model->insert_notification($notification);

				            }
			              
			                # code...
			            }

	                }
	                // fin insertion 
		                
		        }
                
           }

           echo("intégration du groupe avec succès");

        }
    }

    function retirer_integration_du_groupe()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           $gr = $this->input->post('code_groupe_value');
           for($count = 0; $count < count($id); $count++)
           {
                $id_user    = $id[$count];

                for($count2 = 0; $count2 < count($gr); $count2++)
		        {
	                $code_groupe    = $gr[$count2];

	                $this->crud_model->returer_suppression_au_groupe_discution($code_groupe, $id_user);
		                
		        }
                
           }

           echo("suppession au groupe avec succès");

        }
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
			redirect('admin/chat_admin2/'.$param1.'/'.$param2);
		}
		else{
			redirect('admin/chat_admin2/'.$param1.'/'.$param2);
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


	// script de article
	function fetch_article(){  

	       $fetch_data = $this->crud_model->make_datatables_article();  
	       $data = array();  
	       $etat = '';
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array(); 

	            if ($row->type=='texte') {
	            	$etat = '
	            <div class="user-avatar bg-dim-primary d-none d-sm-flex text-center">
	                <span><i class="fa fa-file text-primary" ></i></span>
	            </div>
	             ';
	            }
	            elseif ($row->type=='video'){
	            	$etat = '
		                <div class="user-avatar bg-dim-danger d-none d-sm-flex">
		                    <span><i class="fa fa-video-camera text-primary"></i></span>
		                </div>
		            ';
	            }
	            else{

	            	$etat = '';
	            }


	            $sub_array[] = $etat;
	           
	            // $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
	            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
	            $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

	            $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

	            $sub_array[] = nl2br(substr($row->type, 0,15)).'';

	            $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	           
	            $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	            $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	            
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);  
	  }


	  function fetch_article_pub(){  

	       $fetch_data = $this->crud_model->make_datatables_article();  
	       $data = array();  
	       $etat = '';
	       foreach($fetch_data as $row)  
	       {  
	            $sub_array = array(); 

	            if ($row->type=='texte') {
	              $etat = '
	            <div class="user-avatar bg-dim-success d-none d-sm-flex">
	                <span><i class="fa fa-file text-success" ></i></span>
	            </div>
	             ';
	            }
	            elseif ($row->type=='video'){
	              $etat = '
	                <div class="user-avatar bg-dim-danger d-none d-sm-flex">
	                    <span><i class="fa fa-video-camera text-success"></i></span>
	                </div>
	            ';
	            }
	            else{

	              $etat = '';
	            }


	            $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idart.'" id="delete_checkbox" />'; 

	            // $sub_array[] = $etat;
	           
	            $sub_array[] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
	            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
	            $sub_array[] = nl2br(substr($row->description, 0,10)).'...'; 

	            $sub_array[] = nl2br(substr($row->nom_cat, 0,15)).' ...';

	            $sub_array[] = nl2br(substr($row->type, 0,15)).'';

	            // $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

	           
	            $sub_array[] = '<button type="button" name="update" idart="'.$row->idart.'" class="btn btn-success btn-circle btn-sm update"><i class="fa fa-edit"></i></button>'; 

	            $sub_array[] = '<button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	            
	            $data[] = $sub_array;  
	       }  
	       $output = array(  
	            "draw"                =>     intval($_POST["draw"]),  
	            "recordsTotal"        =>     $this->crud_model->get_all_data_article(),  
	            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_article(),  
	            "data"                =>     $data  
	       );  
	       echo json_encode($output);  
	  }



	  function operation_article(){

	      if($_FILES["user_image"]["size"] > 0)  
	      {  
	           $insert_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'), 
	               'image'          =>     $this->upload_image_article()
	            );    
	      }  
	      else  
	      {  
	             $user_image = "icone-user.png";  
	             $insert_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'),
	               'image'          =>     $user_image
	            );   
	      }

	    $requete=$this->crud_model->insert_article($insert_data);
	    echo("Ajout information avec succès");
	    
	  }

	  function modification_article(){

	      if($_FILES["user_image"]["size"] > 0)  
	      {  
	           $updated_data = array(  
	               'nom'     	      =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type'), 
	               'image'          =>     $this->upload_image_article()
	            );    
	      }  
	      
	      else  
	      {   
	           $updated_data = array(  
	               'nom'     	    =>     $this->input->post('nom'),  
	               'description'    =>     htmlspecialchars($this->input->post("description")),
	               'lien'           =>     $this->input->post("lien"),
	               'idcat'     	    =>     $this->input->post('idcat'), 
	               'type'     	    =>     $this->input->post('type')
	            );   
	      }

	      
	      $this->crud_model->update_article($this->input->post("idart"), $updated_data);

	      echo("modification avec succès");
	  }

	  function supression_article(){

	      $this->crud_model->delete_article($this->input->post("idart"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_article()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_article($this->input->post('idart'));  
	       foreach($data as $row)  
	       {  
	            $output['nom'] = $row->nom;  
	            $output['description'] = $row->description; 

	            $output['lien'] 	= $row->lien;
	            $output['type'] 	= $row->type;
	            $output['idcat'] 	= $row->idcat;
	            
	            $output['image'] 	= $row->image;
	            $output['text_description']   ='
	              <textarea class="form-control textarea" name="description" id="description" placeholder="Parler un peu sur la description de l\'article">
	                  '.$row->description.'
	              </textarea>
	            ';


	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  

	            
	       }  
	       echo json_encode($output);  
	  }

	  function upload_image_article()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/article/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }


    function pagination_view_article($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_articles_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_articles();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_article()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_article($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-hub d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-hub" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-hub"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nom_cat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idart="'.$row->idart.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idart="'.$row->idart.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th> 
              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	// fin de sript article 

	/**
   * commentaires des articles de publications
   ===============================================
   *===============================================
   *

   */

   	function operation_commentaire(){

	    $insert_data = array(  
           'etape1'     	=>     htmlspecialchars($this->input->post('etape1')),  
           'etape2'    		=>     htmlspecialchars($this->input->post("etape2")),
           'idart'          =>     $this->input->post("idart")
        ); 

	    $requete=$this->crud_model->insert_commentaire($insert_data);
	    echo("Ajout information avec succès");
	    
	  }

	  function modification_commentaire(){

	    $updated_data = array(  
            'etape1'     	=>     htmlspecialchars($this->input->post('etape1')),  
   			'etape2'    	=>     htmlspecialchars($this->input->post("etape2")),
   			'idart'         =>     $this->input->post("idart")
        );

	    $this->crud_model->update_commentaire($this->input->post("idcomment"), $updated_data);

	    echo("modification avec succès");
	  }

	  function supression_commentaire(){

	      $this->crud_model->delete_commentaire($this->input->post("idcomment"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_commentaire()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_commentaire($this->input->post('idcomment'));  
	       foreach($data as $row)  
	       {  
	            $output['etape1'] = $row->etape1;  
	            $output['etape2'] = $row->etape2; 
	            $output['idart']  = $row->idart;

	            $output['nom']  = $row->nom;

	            $output['description']  = substr(nl2br(html_entity_decode($row->description)), 100) .'...';

	            $output['text_description']   ='
	              <textarea class="form-control textarea" name="etape1" id="etape1" >
	                  '.$row->etape1.'
	              </textarea>
	            ';

	            $output['text_description2']   ='
	              <textarea class="form-control textarea" name="etape2" id="etape2">
	                  '.$row->etape2.'
	              </textarea>
	            ';
	            

	            $output['image'] 	= $row->image;
	            
	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/article/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	            
	       }  
	       echo json_encode($output);  
	  }

	function pagination_view_commentaire($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_commentaire_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_commentaire();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_commentaire()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_commentaire($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            if ($row->type=='texte') {
              $etat = '
                <div class="user-avatar bg-dim-success d-none d-sm-flex text-center">
                    <span><i class="fa fa-file text-hub" ></i></span>
                </div>
               ';
            }
            elseif ($row->type=='video'){
              $etat = '
                  <div class="user-avatar bg-dim-danger d-none d-sm-flex">
                      <span><i class="fa fa-video-camera text-hub"></i></span>
                  </div>
              ';
            }
            else{

              $etat = '';
            }


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/article/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,20)).'...'.'</td>
          <td>'.nl2br(substr($row->description, 0,20)).' ....'.'</td>
          <td>'.nl2br(substr($row->nomcat, 0,20)).' ...'.'</td>
          <td>'.$etat.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
          
          <td><button type="button" name="update" idcomment="'.$row->idcomment.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idcomment="'.$row->idcomment.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="20%">Nom de la vidéo</th>  
                  <th width="20%">Description </th> 
                  <th width="10%">Catégorie </th> 
                  <th width="10%">Type </th>  
                  <th width="20%">Mise à jour</th>
                   
                  
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th> 
              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	/*

	*upload galery
	*===============================
	*===============================

	*/

	function upload_galery2()
    {
      sleep(3);
      if($_FILES["files"]["name"] != '')
      {
       $output = '';
       $config["upload_path"] = './upload/galery/';
       $config["allowed_types"] = 'gif|jpg|png|webp';
       $this->load->library('upload', $config);
       $this->upload->initialize($config);
       for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
       {
        $extension = explode('.', $_FILES["files"]["name"][$count]);  
        $new_name = rand() . '.' . $extension[1];

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

         $insert_data = array(  
             'image'         =>     $new_name              
         ); 
         $requete=$this->crud_model->insert_galery2($insert_data);

         $output .= '
         <div class="col-md-4" align="center" style="margin-bottom:24px;">
          <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
            <br />
            <input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
         </div>
         ';
        }
       }
       echo $output;   
      }
    }


     // pagination contact 
	function pagination_galery_member2()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_galery_personnel();
	  $config["per_page"] = 3;
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_galery2($config["per_page"], $start)
	  );
	  echo json_encode($output);
	  }

	  function supression_photo_galery_personnele(){

	    $this->crud_model->delete_photo_galery_personnele($this->input->post("idg"));
	    echo("suppression avec succès");

	  }

	  function modification_galery_entrep_personnele(){
  
          $updated_data = array(  
                 'url'            =>     $this->input->post('url')
          );
  
          $this->crud_model->update_galery_entrep_personnele($this->input->post("idg"), $updated_data);
          echo("modification avec succès");
      }

    function fetch_single_galery_entrep_personnele()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_galery_entreprise_personnele($_POST["idg"]);  
         foreach($data as $row)  
         {  
              $output['url']    = $row->url;  
              
             
         }  
         echo json_encode($output);  
    }

    function download_photo_galery()
   {
      if($this->input->post('images'))
      {
        $this->load->library('zip');
        $images = $this->input->post('images');
        foreach($images as $image)
        {
          $this->zip->read_file($image);
          // echo($image);
        }
        $this->zip->download(''.time().'.zip');
      }
   }

   // script de  tinfo_user
    function fetch_tinfo_user(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_user();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->first_name.''.$row->last_name, 0,22)).' ...';
              $sub_array[] = nl2br(substr($row->email, 0,20)).' ...';

              $sub_array[] = nl2br(substr($row->poste, 0,20)).' ...';
              $sub_array[] = nl2br(substr($row->telephone, 0,15));

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-hub btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_user(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_user(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_user()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_user($_POST["idtinfo_user"]);  
         foreach($data as $row)  
         {  
              $output['first_name']    = $row->first_name; 
              $output['last_name']    = $row->last_name;
              $output['email']    = $row->email;
              $output['telephone']    = $row->telephone;
              $output['sexe']    = $row->sexe;
              $output['facebook']    = $row->facebook;
              $output['twitter']    = $row->twitter;
              $output['linkedin']    = $row->linkedin;
              $output['poste']    = $row->poste;


              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'          =>     $this->upload_image_users()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.png";   
             $insert_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin'),
                 'image'          =>     $user_image
              );  
      }

        

      $requete=$this->crud_model->insert_tinfo_user($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'            =>     $this->upload_image_users()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin')
            );  
      }

      $this->crud_model->update_tinfo_user($this->input->post("idtinfo_user"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_user(){

        $this->crud_model->delete_tinfo_user($this->input->post("idtinfo_user"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_user

    // script de  tinfo_personnel
    function fetch_tinfo_personnel(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_personnel();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-hub btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_personnel(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_personnel(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_personnel()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_personnel($_POST["idtinfo_personnel"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_personnel(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'description'            =>     $this->input->post('description'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_personnel($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_personnel(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'description'      =>     $this->input->post('description'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_personnel($this->input->post("idtinfo_personnel"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_personnel(){

        $this->crud_model->delete_tinfo_personnel($this->input->post("idtinfo_personnel"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_personnel

    // script de  tinfo_choix
    function fetch_tinfo_choix(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_choix();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_choix="'.$row->idtinfo_choix.'" class="btn btn-warning btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_choix="'.$row->idtinfo_choix.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_choix(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_choix(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_choix()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_choix($_POST["idtinfo_choix"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_choix(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'description'      =>     $this->input->post('description'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_choix($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_choix(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'description'      =>     $this->input->post('description'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_choix($this->input->post("idtinfo_choix"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_choix(){

        $this->crud_model->delete_tinfo_choix($this->input->post("idtinfo_choix"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_choix

    // script de  tinfo_service
    function fetch_tinfo_service(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_service();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-hub btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_service(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_service(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_service()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_service($_POST["idtinfo_service"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.jpg";  
             $insert_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description'),
                   'image'            =>     $user_image
            );  
      }

        

      $requete=$this->crud_model->insert_tinfo_service($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description')
            );  
      }

      $this->crud_model->update_tinfo_service($this->input->post("idtinfo_service"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_service(){

        $this->crud_model->delete_tinfo_service($this->input->post("idtinfo_service"));
        echo("suppression avec succès");
      
    }

    function upload_image_service()  
	{  
       if(isset($_FILES["user_image"]))  
       {  
            $extension = explode('.', $_FILES['user_image']['name']);  
            $new_name = rand() . '.' . $extension[1];  
            $destination = './upload/service/' . $new_name;  
            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
            return $new_name;  
       }  
	}
    // fin informations tinfo_service

    // script de  tinfo_techno
    function fetch_tinfo_techno(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_techno();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,70)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_techno="'.$row->idtinfo_techno.'" class="btn btn-hub btn-sm btn-circle update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_techno="'.$row->idtinfo_techno.'" class="btn btn-danger btn-sm btn-circle delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_techno(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_techno(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_techno()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_techno($_POST["idtinfo_techno"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_techno(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_techno($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_techno(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_techno($this->input->post("idtinfo_techno"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_techno(){

        $this->crud_model->delete_tinfo_techno($this->input->post("idtinfo_techno"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_techno


    /**
	   * carousel des articles de publications
	   ===============================================
	   *===============================================
	   *
    */

   	function operation_carousel(){

   		if($_FILES["user_image"]["size"] > 0)  
	    {
	    	$insert_data = array(  
	           'description'    =>     htmlspecialchars($this->input->post('description')),  
	           'image'    		=>     $this->upload_carousel()
	        ); 

	    	$requete=$this->crud_model->insert_carousel($insert_data);
	    	echo("Ajout information avec succès");
	    }
	    else{

	    	$insert_data = array(  
	           'description'    =>     htmlspecialchars($this->input->post('description')),  
	        ); 

	    	$requete=$this->crud_model->insert_carousel($insert_data);
	    	echo("Ajout information avec succès");
	    }

	    
	    
	  }

	  function modification_carousel(){

	  	if($_FILES["user_image"]["size"] > 0)  
	    {
	    	$updated_data = array(  
	           'description'    =>     htmlspecialchars($this->input->post('description')),  
	           'image'    		=>     $this->upload_carousel()
	        ); 

	    	$this->crud_model->update_carousel($this->input->post("idc"), $updated_data);
	    	echo("modification avec succès");
	    }
	    else{

	    	$updated_data = array(  
	           'description'    =>     htmlspecialchars($this->input->post('description'))  
	        ); 

	    	$this->crud_model->update_carousel($this->input->post("idc"), $updated_data);
	    	echo("modification avec succès");
	    }

	   
	  }

	  function supression_carousel(){

	      $this->crud_model->delete_carousel($this->input->post("idc"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_carousel()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_carousel($this->input->post('idc'));  
	       foreach($data as $row)  
	       {  

	            $output['description']  = $row->description;

	           
	            $output['image'] 	= $row->image;
	            
	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/carousel/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	            
	       }  
	       echo json_encode($output);  
	  }

	function pagination_view_carousel($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_carousel_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_carousel();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_carousel()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_carousel($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="60%">Description </th> 
                  <th width="20%">Mise à jour</th>
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

         $output .= '
	         <tr>
	          
	          
	          <td><img src="'.base_url().'upload/carousel/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

	          <td>'.nl2br(substr($row->description, 0,80)).' ....'.'</td>
	          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
	          
	          <td><button type="button" name="update" idc="'.$row->idc.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
	          <td><button type="button" name="delete" idc="'.$row->idc.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
	          

	         </tr>
	     ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="60%">Description </th> 
                  <th width="20%">Mise à jour</th>
                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>
              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	function upload_carousel()  
	{  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/carousel/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	}

	// fin carousel 


	/**
	   * formations des articles de publications
	   ===============================================
	   *===============================================
	   *
    */

   	function operation_formations(){

   		if($_FILES["user_image"]["size"] > 0)  
	    {
	    	$insert_data = array(  
	           'nom'    			=>     htmlspecialchars($this->input->post('nom')),
	           'date_debit'    		=>     htmlspecialchars($this->input->post('date_debit')),
	           'date_fin'    		=>     htmlspecialchars($this->input->post('date_fin')),
	           'fin_inscription'    =>     $this->input->post('fin_inscription'),
	           'description'    	=>     htmlspecialchars($this->input->post('description')),
	    
	           'image'    			=>     $this->upload_formations()
	        ); 

	    	$requete=$this->crud_model->insert_formations($insert_data);
	    	echo("Ajout information avec succès");
	    }
	    else{

	    	$insert_data = array(  
	           'nom'    			=>     htmlspecialchars($this->input->post('nom')),
	           'date_debit'    		=>     htmlspecialchars($this->input->post('date_debit')),
	           'date_fin'    		=>     htmlspecialchars($this->input->post('date_fin')),
	           'fin_inscription'    =>     $this->input->post('fin_inscription'),
	           'description'    	=>     htmlspecialchars($this->input->post('description')) 
	        ); 

	    	$requete=$this->crud_model->insert_formations($insert_data);
	    	echo("Ajout information avec succès");
	    }

	    
	    
	  }

	  function modification_formations(){

	  	if($_FILES["user_image"]["size"] > 0)  
	    {
	    	$updated_data = array(  
	           'nom'    			=>     htmlspecialchars($this->input->post('nom')),
	           'date_debit'    		=>     htmlspecialchars($this->input->post('date_debit')),
	           'date_fin'    		=>     htmlspecialchars($this->input->post('date_fin')),
	           'fin_inscription'    =>     $this->input->post('fin_inscription'),
	           'description'    	=>     htmlspecialchars($this->input->post('description')),  
	           'image'    			=>     $this->upload_formations()
	        ); 

	    	$this->crud_model->update_formations($this->input->post("idf"), $updated_data);
	    	echo("modification avec succès");
	    }
	    else{

	    	$updated_data = array(  
	           'nom'    			=>     htmlspecialchars($this->input->post('nom')),
	           'date_debit'    		=>     htmlspecialchars($this->input->post('date_debit')),
	           'date_fin'    		=>     htmlspecialchars($this->input->post('date_fin')),
	           'fin_inscription'    =>     $this->input->post('fin_inscription'),
	           'description'    	=>     htmlspecialchars($this->input->post('description')) 
	        ); 

	    	$this->crud_model->update_formations($this->input->post("idf"), $updated_data);
	    	echo("modification avec succès");
	    }

	   
	  }

	  function supression_formations(){

	      $this->crud_model->delete_formations($this->input->post("idf"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_formations()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_formations($this->input->post('idf'));  
	       foreach($data as $row)  
	       {  

	            $output['nom']  			= $row->nom;
	            $output['date_debit']  		= $row->date_debit;
	            $output['date_fin']  		= $row->date_fin;
	            $output['fin_inscription']  = $row->fin_inscription;
	            $output['description']  	= $row->description;

	            $output['text_description']   ='
	             <label><i class="fa fa-edit"></i> Saisissez une description de la formation</label>
	              <textarea class="form-control textarea" name="description" id="description" placeholder="Saisissez une description de la formation">
	                  '.$row->description.'
	              </textarea>
	            ';

	           
	            $output['image'] 	= $row->image;
	            
	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/formations/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	            
	       }  
	       echo json_encode($output);  
	  }

	function pagination_view_formations($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_formations_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_formations();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_formations()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_formations($query);
	 $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="10%">Titre </th>

                  <th width="20%">Date debit </th>
                  <th width="20%">Date fin </th>
                  <th width="10%">Fin inscription </th>

                  <th width="20%">Mise à jour</th>

                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th>  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($data->num_rows() < 0) {
        
      }
      else{

        foreach($data->result() as $row)
        {

            


         $output .= '
         <tr>
          
          <td><img src="'.base_url().'upload/formations/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,30)).' ....'.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->fin_inscription)), 0, 23)).'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

          
          <td><button type="button" name="update" idf="'.$row->idf.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
          <td><button type="button" name="delete" idf="'.$row->idf.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
          

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="10%">Avatar</th> 
                  <th width="10%">Titre </th>

                  <th width="20%">Date debit </th>
                  <th width="20%">Date fin </th>
                  <th width="10%">Fin inscription </th>

                  <th width="20%">Mise à jour</th>

                  <th width="5%">Modifier</th> 
                  <th width="5%">Supprimer</th> 

              </tr>  
         </tfoot>   
          
      </table>';

	    echo($output);
	  
	}

	function upload_formations()  
	{  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/formations/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	}

	// fin formations 


	/**
	   * inscription_formations des articles de publications
	   ===============================================
	   *===============================================
	   *
    */

	function stat_entree(){
		 $data['title']="Filtrage sur l'inscription de formation";
		 $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 

		 $date1=$this->input->post('date1');
		 $date2=$this->input->post('date2');
		 if ($date1=='' && $date2=='') {
		 	
		 	$data['title']="Filtrage sur l'inscription de formation";
		 	$this->load->view('backend/admin/stat_entree_stock', $data);
		 }
		 else{
		 	$data['title']="Filtrage entrée en stock marchandise";

		 	$data['date1']=$date1;
		 	$data['date2']=$date2;
		 	$this->load->view('backend/admin/stat_entree_stock', $data);
		 }
	}

   	function operation_inscription_formations(){

   		$email =    htmlspecialchars($this->input->post('email'));
   		$annee =    htmlspecialchars($this->input->post('annee'));
   		$idf   =    htmlspecialchars($this->input->post('idf'));

   		$test = $this->crud_model->fetch_single_test_inscription_formations($idf,$email,$annee);
   		if ($test > 0) {

   			echo("vous vous  êtes déjà inscrit pour cette formation 🏧");
   		}
   		else{

   			$insert_data = array(  
	           'nomcomplet'    		=>     htmlspecialchars($this->input->post('nomcomplet')),
	           'email'    			=>     htmlspecialchars($this->input->post('email')),
	           'telephone'    		=>     htmlspecialchars($this->input->post('telephone')),
	           'niveau_etude'    	=>     $this->input->post('niveau_etude'),
	           'domicile'    		=>     htmlspecialchars($this->input->post('domicile')),

	           'idf'    			=>     htmlspecialchars($this->input->post('idf')),
	           'annee'    			=>     htmlspecialchars($this->input->post('annee'))
	        ); 

	    	$requete=$this->crud_model->insert_inscription_formations($insert_data);
	    	echo("Ajout information avec succès");

   		}
	    
	  }

	  function modification_inscription_formations(){

	  	$updated_data = array(  
           'nomcomplet'    		=>     htmlspecialchars($this->input->post('nomcomplet')),
           'email'    			=>     htmlspecialchars($this->input->post('email')),
           'telephone'    		=>     htmlspecialchars($this->input->post('telephone')),
           'niveau_etude'    	=>     $this->input->post('niveau_etude'),
           'domicile'    		=>     htmlspecialchars($this->input->post('domicile')),

           'idf'    			=>     htmlspecialchars($this->input->post('idf')),
           'annee'    			=>     htmlspecialchars($this->input->post('annee'))
        ); 

    	$this->crud_model->update_inscription_formations($this->input->post("idinscription"), $updated_data);
    	echo("modification avec succès");

	   
	  }

	  function supression_inscription_formations(){

	      $this->crud_model->delete_inscription_formations($this->input->post("idinscription"));
	      echo("suppression avec succès");
	    
	  }

	  function fetch_single_inscription_formations()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_inscription_formations($this->input->post('idinscription'));  
	       foreach($data as $row)  
	       {  
				$output['nom']  			= $row->nom;
	            $output['date_debit']  		= $row->date_debit;
	            $output['date_fin']  		= $row->date_fin;
	           
	            $output['nomcomplet']  	= $row->nomcomplet;
	            $output['email']  	= $row->email;

	            $output['idf']  	= $row->idf;
	            $output['annee']  	= $row->annee;
	            $output['domicile']  	= $row->domicile;
	            $output['niveau_etude']  	= $row->niveau_etude;
	            $output['telephone']  	= $row->telephone;

	            $output['date_debit'] = nl2br(substr(date(DATE_RFC822, 
	            	strtotime($row->date_debit)), 0, 23));

	           
	           
	            $output['image'] 	= $row->image;
	            
	            if($row->image != '')  
	            {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/formations/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
	            }  
	            else  
	            {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	            }  
	            
	       }  
	       echo json_encode($output);  
	  }

	function pagination_view_inscription_formations($param1='')
	{
	  $limit = $param1;
	  if ($limit !='') {
	  	$output = $this->crud_model->fetch_details_view_inscription_formations_limit($limit);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_inscription_formations();
	  }
	  
	  echo($output);
	}

	function pagination_view_inscription_pdf()
	{
	  $idf 		= 	$_GET['idf'];
	  $annee 	= 	$_GET['annee'];
	  if ($idf !='' && $annee !='') {
	  	$output = $this->crud_model->fetch_details_view_inscription_pdf($idf, $annee);
	  }
	  else{
	  	$output = $this->crud_model->fetch_details_view_inscription_formations();
	  }
	  
	  echo($output);
	}

	function fetch_search_view_inscription_formations()
	{
	  $output = '';
	  $query = '';
	  $etat = '';
	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_search_view_inscription_formations($query);
		 $output .= '
	      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	          <thead class="tb-member-head thead-light">  
	              <tr> 
	                  <th width="10%">Avatar</th> 
	                  <th width="10%">Titre </th>

	                  <th width="20%">Date debit </th>
	                  <th width="20%">Date fin </th>
	                  <th width="10%">Apprenant Nom complet</th>

	                  <th width="20%">Mise à jour</th>

	                  <th width="5%">Modifier</th> 
	                  <th width="5%">Supprimer</th>  
	              </tr>  
	         </thead> 

	         <tbody>
	      ';
	      if ($data->num_rows() < 0) {
	        
	      }
	      else{

	        foreach($data->result() as $row)
	        {

	         $output .= '
	         <tr>
	          
	          <td><img src="'.base_url().'upload/formations/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

	          <td>'.nl2br(substr($row->nom, 0,30)).' ....'.'</td>
	          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
	          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
	          <td>'.nl2br(substr($row->nomcomplet, 0,15)).' ....'.'</td>
	          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

	          
	          <td><button type="button" name="update" idinscription="'.$row->idinscription.'" class="btn btn-hub btn-circle btn-sm update"><i class="fa fa-edit"></i></button></td>
	          <td><button type="button" name="delete" idinscription="'.$row->idinscription.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button></td>
	          

	         </tr>
	         ';
	        }
	      }
	      $output .= '
	          </tbody>

	         <tfoot>  
	              <tr>  
	                  <th width="10%">Avatar</th> 
	                  <th width="10%">Titre </th>

	                  <th width="20%">Date debit </th>
	                  <th width="20%">Date fin </th>
	                  <th width="10%">Apprenant Nom complet</th>

	                  <th width="20%">Mise à jour</th>

	                  <th width="5%">Modifier</th> 
	                  <th width="5%">Supprimer</th> 

	              </tr>  
	         </tfoot>   
	          
	      </table>';

	    echo($output);
	  
	}


	// ajout des contacts
    function fetch_contact(){  

       $fetch_data = $this->crud_model->make_datatables_contact();  
       $data = array();  
       foreach($fetch_data as $row)  
       {  

          if ($row->fichier != '') {
            $etat = '<a href="'.base_url().'upload/contact/'.$row->fichier.'" class="badge badge-white"><i class="fa fa-file"></i></a>';
          }
          else{
            $etat = '';
          }

            $sub_array = array();

            $sub_array[] = '
            <input type="checkbox" class="delete_checkbox" value="'.$row->email.'" />
            ';  
              
            $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
            $sub_array[] = nl2br(substr($row->sujet, 0,20)).'...'; 
            $sub_array[] = $row->email; 
            $sub_array[] = nl2br(substr($row->message, 0,50)).'...';
            $sub_array[] = substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23);

            $sub_array[] = $etat; 

            $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-dark btn-circle btn-sm update"><i class="fa fa-comment-o"></i></button>'; 

            $sub_array[] = '<button type="button" name="delete" idcontact="'.$row->id.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';  
            $data[] = $sub_array;  
       }  
       $output = array(  
            "draw"                =>     intval($_POST["draw"]),  
            "recordsTotal"        =>     $this->crud_model->get_all_data_contact(),  
            "recordsFiltered"     =>     $this->crud_model->get_filtered_data_contact(),  
            "data"                =>     $data  
       );  
       echo json_encode($output);  
  }

  function fetch_single_contact()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_contact($this->input->post('idcontact'));  
       foreach($data as $row)  
       {  
            $output['nom'] = $row->nom;  
            $output['message'] = $row->message;
            $output['email'] = $row->email;
            $output['sujet'] = $row->sujet; 

       }  
       echo json_encode($output);  
  } 

  function operation_contact(){

    $insert_data = array(  
         'nom'          =>     $this->input->post('name'),  
         'sujet'       =>     $this->input->post("subject"),
         'email'         =>     $this->input->post("email"),  
         'message'       =>     $this->input->post("message")  
         
  );  
     
    $requete=$this->crud_model->insert_contact($insert_data);
    echo("Ajout message  avec succès");
    
  }

  
  function supression_contact()
  {

      $this->crud_model->delete_contact($this->input->post("idcontact"));

      echo("suppression avec succès");
    
  }

    public function get_image(){
		$icone = $this->crud_model->get_logo_du_site();
		$iconev = base_url()."upload/tbl_info/".$icone;
		return $iconev;
	}

    function infomation_par_mail()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {


           		$website = $this->email_sites;

                $to =$id[$count];
                $subject = $this->input->post('sujet');
                $message2 = $this->input->post('message');
                 

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@etskase.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();


                $info = "<div class='text-center' style='
	                	text-align: center !important;
		                '>
		                	<h1 class='h4 text-gray-900 mb-4' style='
			                	color: #3a3b45 !important;
			                	margin-bottom: 1.5rem !important;
		                	'>Information personnelle</h1>
							".$subject."
	                </div>"
                ;

                $message2 = "<div class='col-md-12' style='
					          position: relative;
							  display: flex;
							  flex-direction: column;
							  min-width: 0;
							  word-wrap: break-word;
							  background-color: #fff;
							  background-clip: border-box;
							  border: 1px solid #e3e6f0;
							  border-radius: 0.35rem;
							  position: relative;
							  width: 100%;
							  padding-right: 0.75rem;
							  padding-left: 0.75rem;
                '>
                <div class='card-header' style='
                	  flex: 1 1 auto;
					  min-height: 1px;
					  padding: 1.25rem;
					  border-radius: calc(0.35rem - 1px) calc(0.35rem - 1px) 0 0;
                '>
                		".$info."
                </div>
                <div class='card-body' style='flex: 1 1 auto;
				  min-height: 1px;
				  padding: 1.25rem;
				  '>
               			 <p>
	               			 <img src='".$this->get_image()."' style='
	               			 	float: left; margin-right: 10px;
	               			 	padding: .25rem;
							    background-color: #fff;
							    border: 1px solid #dddfeb;
							    border-radius: .35rem;
							    max-width: 100%;
							    height: auto;
							    width: 200px;
							    vertical-align: middle;
    							border-style: none;
    						'
	               			 > 
	               			 ".$this->input->post('message')."
               			 </p>
               
                </div>
                </div>
                ";

                mail($to,$subject,$message2,$headers);


           }

           if(mail($to,$subject,$message2,$headers) > 0){
                echo("message envoyé avec succès");
           } 
           else {
                echo("échec lors de l'envoie de message!!!!!!!!!!!!");
           }


        }
    }

    function infomation_telephone()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {

           		$website = $this->email_sites;
                $to =$id[$count];
                $message = htmlentities($this->input->post('message'));
                $num_dev = $this->num_dev;
                $token_sms = $this->token_sms;

                // echo("tél:".$to." message:".$message." num_dev:".$num_dev." 
                // 	token:".$token_sms);

                $this->envoieSMS($to, $message, $num_dev, $token_sms);

           }

        }
    }
    // fin contact

    function envoieSMS($tel, $message, $num_dev,$token)
    {
        $etat = false;
        try {
            //form's fields name:
            $value = '{
	            "outboundSMSMessageRequest":{
	                "address": "tel:' . $tel . '", 
	                "senderAddress":"tel:'.$num_dev.'", 
	                "outboundSMSTextMessage":{ 
	                    "message": "' .$message. '" 
	                } 
	            }
	        }';
            //API url:
            $url = 'https://api.orange.com/smsmessaging/v1/outbound/tel:'.$num_dev.'/requests';
            //JSON data(not exact, but will be compiled to JSON) file: 
            // use key 'http' even if you send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-Type: application/json\r\n" .
                        "Authorization:Bearer ".$token."\r\n",
                    'method'  => 'POST',
                    'content' => $value
                )
            );
            //engine:
            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $etat = false;
            if ($result === FALSE) { /* Handle error */
                $etat = false;
            } else {
                $etat = true;

            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        if ($etat) {
                	# code...
        	$data = array(
        		'tel' 	=> $tel,
        		'message' 	=> $message,
        		'etat' 	=>	'ok'
        	);
        	$query = $this->crud_model->insert_message_sender($data);
        	echo("📞 ".$tel." envoyé 🆗");
        }
        else{

        	$data = array(
        		'tel' 	=> $tel,
        		'message' 	=> $message,
        		'etat' 	=>	'faux'
        	);
        	$query = $this->crud_model->insert_message_sender($data);
        	echo(" échec !!!!");
        }
       
        // return $etat;
    }

    function supression_message_sender(){

	      $this->crud_model->delete_message_sender($this->input->post("idsms"));
	      echo("suppression avec succès");
	    
	}

	function renvoie_message_sender(){

		   $data = $this->crud_model->fetch_single_message_sender($this->input->post('idsms')); 
		   $idsms = $this->input->post('idsms'); 
	       foreach($data as $row)  
	       {  
	            $to = $row->tel; 
	            $message = $row->message; 
	            $etat = $row->etat;

                $num_dev = $this->num_dev;
                $token_sms = $this->token_sms;

                // echo("tél:".$to." message:".$message." num_dev:".$num_dev." 
                // 	token:".$token_sms);

                if ($message !='') {
                	# code...
                	$this->envoieSMS($to, $message, $num_dev, $token_sms);
                	$data = array(
		        		'tel' 	=> $to,
		        		'message' 	=> $message,
		        		'etat' 	=>	'ok'
		        	);
                	$query = $this->crud_model->update_message_sender($idsms, $data);
        			
                }


	       }  
	       
	    
	}

    // pagination sms sender 
    function pagination_message_sender()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_message_sender();
    $config["per_page"] = 5;
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
     'pagination_link'  => $this->pagination->create_links(),
     'country_table'   => $this->crud_model->fetch_detailsmessage_sender($config["per_page"], $start)
    );
    echo json_encode($output);
  }

   function search_message_sender()
   {
	  $output = '';
	  $query = '';

	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_sms_sender($query);
	   $output .= '
   
	    <table class="table-striped table-bordered nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="true" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	     <theader>
	       <tr>
	        <th width="5%">Avatar</th>
	        <th width="15%">Télephone</th>
	        <th width="10%">Etat</th>
	        <th width="40%">Message</th>
	        <th width="20%">Mise à jour</th>
	        <th width="5%">Renvoyer</th>
	        <th width="5%">Supprimer</th>
	       </tr>
	     <theader>
	     <tbody>
	    ';

	    if ($data->num_rows() <= 0) {
	    	# code...
	    }
	    else{

	    	foreach($data->result() as $row)
		    {

	          if ($row->etat == "ok") {
	            $etat ='<span class="badge badge-success"><i class="fa fa-check"></i> bien envoyé</span>';
	          }
	          else if ($row->etat == "faux") {
	            $etat ='<span class="badge badge-danger"><i class="fa fa-close"></i> échec d\'envoie</span>';
	          }
	          else{
	            $etat ='<span class="badge badge-danger"><i class="fa fa-eye"></i></span>';
	          }

	          $link = '<a href="tel:'.$row->tel.'" class="text-primary"><i class="fa fa-phone"></i></a>';


	          $btn1 = '<button type="button" name="delete" idsms="'.$row->idsms.'" class="btn btn-hub btn-circle btn-sm renvoyer"><i class="fa fa-send"></i></button>';

	          $btn2 = '<button type="button" name="delete" idsms="'.$row->idsms.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
	           $output .= '
	           <tr>
	            <td>'.$link.'</td>
	             <td>'.$row->tel.'</td>
	            <td>'.$etat.'</td>
	            <td>'.substr($row->message, 0,40).'...</td>
	            <td>'.substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23).'</td>
	            <td>'.$btn1.'</td>
	            <td>'.$btn2.'</td>
	           </tr>
	           ';

		    }

	    }
	      
        $output .= '
            <tbody>
            <tfooter>
             <tr>
              <th width="5%">Avatar</th>
              <th width="15%">Télephone</th>
              <th width="10%">Etat</th>
              <th width="40%">Message</th>
              <th width="20%">Mise à jour</th>
              <th width="5%">Renvoyer</th>
              <th width="5%">Supprimer</th>
             </tr>
           <tfooter>
        </table>';
	  	echo $output;
	}

	// pour les personnes 

	// pagination user to sms 
    function pagination_message_users()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_message_users();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination pagination2">';
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
     'country_table'   => $this->crud_model->fetch_detailsmessage_users($config["per_page"], $start)
    );
    echo json_encode($output);
  }

   function search_message_users()
   {
	  $output = '';
	  $query = '';

	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_sms_users($query);
	   $output .= '
	   
	    <table class="table-striped table-bordered nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="true" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	     <theader>
	       <tr>
	        <th width="5%">Selectionner</th>
	        <th width="5%">Avatar</th>
	        <th width="20%">Nom complet</th>
	        <th width="15%">Télephone</th>
	        <th width="10%">Statut</th>
	        <th width="20%">Email</th>
	        <th width="5%">Sexe</th>
	        <th width="20%">Mise à jour</th>
	        
	        
	       </tr>
	     <theader>
	     <tbody>
	    ';
	    if ($data->num_rows() <= 0) {
	    	# code...
	    }
	    else{

	    	foreach($data->result() as $row)
		    {

		          
		          if ($row->idrole == 1) {
		            $etat ='<span class="badge badge-success"><i class="fa fa-tag"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 2) {
		            $etat ='<span class="badge badge-warning"><i class="fa fa-user"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 3) {
		            $etat ='<span class="badge badge-secondary"><i class="fa fa-home"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 4) {
		            $etat ='<span class="badge badge-primary"><i class="fa fa-money"></i> '.$row->nom.'</span>';
		          }
		          else{
		            $etat ='<span class="badge badge-danger"><i class="fa fa-eye"></i></span>';
		          }

		          $link = '<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
		           <input type="checkbox" name="tel" value="'.$row->telephone.'" class="tels delete_checkbox">
		          ';

		           $email = '<a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google mr-1"></i> '.$row->email.'</a>
		          
		          ';

		           $output .= '
		           <tr>
		            <td>'.$link.'</td>
		            <td><img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" /></td>

		             <td>'.substr($row->first_name.' '.$row->last_name, 0,20).'...</td>

		            <td>'.$row->telephone.'</td>
		            <td>'.$etat.'</td>
		            <td>'.$email.'</td>
		            <td>'.$row->sexe.'</td>


		            <td>'.substr(date(DATE_RFC822, strtotime($row->debit_event)), 0, 23).'</td>
		           
		           </tr>
		           ';
		        

		    }

	    }
	      
          $output .= '
	        <tbody>
	        <tfooter>
	         <tr>
	          <th width="5%">Selectionner</th>
	          <th width="5%">Avatar</th>
	          <th width="20%">Nom complet</th>
	          <th width="15%">Télephone</th>
	          <th width="10%">Statut</th>
	          <th width="20%">Email</th>
	          <th width="5%">Sexe</th>
	          <th width="20%">Mise à jour</th>
	          
	         </tr>
	       <tfooter>
	    </table>';
	  	echo $output;
	}

	// filtrage par categorie 
	// pagination user to sms 
    function pagination_message_users_byrole()
	{
		sleep(1);
		$idrole = $this->input->post('idrole');

	    $this->load->library("pagination");
	    $config = array();
	    $config["base_url"] = "#";
	    $config["total_rows"] = $this->crud_model->count_all_message_users_byrole($idrole);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	    $config["use_page_numbers"] = TRUE;
	    $config["full_tag_open"] = '<ul class="pagination pagination_filter">';
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
	     'pagination_link2'  => $this->pagination->create_links(),
	     'country_table'   => $this->crud_model->fetch_detailsmessage_users_byrole($config["per_page"], $start, $idrole)
	    );
	    echo json_encode($output);
	}


	/*
	*script pour le filtrage
	*===========================
	*
	*/

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
	      href="'.base_url().'admin/pdf_liste_facture/'.$jour1.'/'.$jour2.' "><i class="fa fa-print mr-1"></i> PDF</a>
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

	/*
  *script pour les operations module
  *==========================
  *==========================
  *module
  *=================================

  */

  function operation_module(){

        $month = $this->crud_model->get_info_mois();
        $year = $this->crud_model->get_info_annee();

        $code = rand().'-'.$year;

        $data['annee'] 			= $year;
        $data['code'] 			= $code;
        $data['id_user'] 		= $this->connected;
        $data['titre'] 			= $this->input->post('titre');
        $data['description'] 	= $this->input->post('description');

	    if($_FILES["user_image"]["size"] > 0)  
	    {  
	          $data['logoImage'] =     $this->upload_image_module();      
	    }
	    else{
	    	  $data['logoImage'] = "livre.jpg";
	    } 

	    if($_FILES["user_image2"]["size"] > 0)  
	    {  
	          $data['fichier'] =     $this->upload_image_module_fichier();     
	    }
	    else{
	    	$data['fichier'] = "";
	    } 
         
        $requete=$this->crud_model->insert_module($data);

        if ($requete > 0) {

        	$users_cool = $this->crud_model->get_info_user();
            foreach ($users_cool as $key) {

                if ($key['idrole'] == 3) {
	               
	                $id_user_recever = $key['id'];
	                # code...
		        	$url    ="entreprise/module/". $code;
		            $nom    = $this->crud_model->get_name_user($this->connected);

		            $message ="Bonjour!  ".$nom." vient d'ajouter un module ".$this->input->post('titre');


		            $notification = array(
		              'titre'     =>    "Vous avez peut être raté un module",
		              'icone'     =>    "fa fa-book",
		              'message'   =>     $message,
		              'url'       =>     $url,
		              'id_user'   =>     $id_user_recever
		            );
		            
		            $not = $this->crud_model->insert_notification($notification);

	            }

	            
              
                # code...
            }

        	echo("Enregistrement avec succès");
            
        }



  }

  function modification_module()  
  {  
         
        $month = $this->crud_model->get_info_mois();
        $year = $this->crud_model->get_info_annee();

        
        // $data['id_user'] 		= $this->connected;
        $data['titre'] 			= $this->input->post('titre');
        $data['description'] 	= $this->input->post('description');

	    if($_FILES["user_image"]["size"] > 0)  
	    {  
	          $data['logoImage'] =     $this->upload_image_module();      
	    }
	    
	    if($_FILES["user_image2"]["size"] > 0)  
	    {  
	          $data['fichier'] =     $this->upload_image_module_fichier();     
	    }
	   

        $this->crud_model->update_module($this->input->post("idmodule"), $data);
        echo("information mise à jour avec succès"); 
  }

  function suppression_module()  
  {  
        $this->crud_model->delete_module($this->input->post("idmodule"));      
         echo("suppression avec succès");  
  }  


  function fetch_single_module()  
  {  
         $output = array();  
         $data = $this->crud_model->fetch_single_module($this->input->post("idmodule"));  
         foreach($data as $row)  
         {  
              $output['titre']   	  = $row->titre;
	          $output['description']  = $row->description;

	          $output['first_name']   	  = $row->first_name;
	          $output['last_name']   	  = $row->last_name;

              $output['created_at']   =nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
              if($row->logoImage != '')  
	          {  
	                 $output['user_image'] = '<img src="'.base_url().'upload/module/cours/image/'.$row->logoImage.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->logoImage.'" />';  
	          }  
	          else  
	          {  
	                 $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
	          }  
         }  
         echo json_encode($output);  
  }  


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
     'country_table'   => $this->crud_model->fetch_details_view_module($config["per_page"], $start)
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
              Modifier
              </td>

              <td>
                Supprimer
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

          $btn1 = '<button type="button" name="update" idmodule="'.$row->idmodule.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';

          $btn2 = '<button type="button" name="delete" idmodule="'.$row->idmodule.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  

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
              Modifier
              </td>

              <td>
                Supprimer
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
              Modifier
              </td>

              <td>
                Supprimer
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

          $btn1 = '<button type="button" name="update" idmodule="'.$row->idmodule.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';

          $btn2 = '<button type="button" name="delete" idmodule="'.$row->idmodule.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  

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
              Modifier
              </td>

              <td>
                Supprimer
              </td>
              
              
            </tr>

        </tfoot>   
            
        </table>';
    echo $output;
  }


  function operation_news($param1='',$param2='',$param3=''){

      
      	  if($param1 =="ajout")  
          {  
                $insert_data = array(  
		           'apropos'      	=>     $this->input->post('apropos'),
		           'don'      		=>     $this->input->post('don'), 
		           'structure'      =>     $this->input->post('structure'),
		           'apropos_text'   =>     $this->input->post('apropos_text'),  
		           'financement'    =>     $this->input->post('financement'), 
		           'carierre'      	=>     $this->input->post('carierre'), 
		           'partenariat'    =>     $this->input->post('partenariat')
			  	); 

			  	$requete=$this->crud_model->insert_news($insert_data);
	      		$this->session->set_flashdata('message',"Enregistrement avec succès!!!");
	            redirect(base_url() . 'admin/add_news/', 'refresh');
          }  

          if($param1 =="modification")  
          {  
                $update_data = array(  
		           'apropos'      	=>     $this->input->post('apropos'), 
		           'don'      		=>     $this->input->post('don'), 
		           'structure'      =>     $this->input->post('structure'),
		           'apropos_text'   =>     $this->input->post('apropos_text'), 
		           'financement'    =>     $this->input->post('financement'), 
		           'carierre'      	=>     $this->input->post('carierre'), 
		           'partenariat'    =>     $this->input->post('partenariat')
			  	); 

			  	$requete=$this->crud_model->update_news($param2, $update_data);
	      		$this->session->set_flashdata('message',"Modification avec succès!!!");
	            redirect(base_url() . 'admin/operation_news/detail/'.$param2, 'refresh');
          }  

          if($param1 =="suppression")  
          {  
                

			  	$requete=$this->crud_model->delete_news($param2);
	      		$this->session->set_flashdata('message',"Suppression avec succès!!!");
	            redirect(base_url() . 'admin/news/', 'refresh');
          } 

          if($param1 =="detail")  
          {  
                
			  	$data['variable'] = $this->crud_model->fetch_news($param2);
	            $data['title']="Détail de la configuration";
			    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
			    $data['users'] = $this->crud_model->fetch_connected($this->connected);
			    $this->load->view('backend/admin/edit_news', $data);
          }  
          else  
          {  
               redirect(base_url() . 'admin/news/', 'refresh');
          }
   
    }


    /*
    script pour la conference
    ===========================
    zoom conference
    ==========================
    ****************************
    ****************************

    */

    // script de conference
	
	  function fetch_single_conference()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_conference($_POST["idconference"]);  
	       foreach($data as $row)  
	       {  
	            $output['nom']    				= $row->nom;
	            $output['date_debit']    		= $row->date_debit;
	            $output['date_fin']    			= $row->date_fin;
	            $output['heure_debit']    		= $row->heure_debit;
	            $output['heure_fin']    		= $row->heure_fin;
	            
	            $output['first_name']    		= $row->first_name; 
	            $output['last_name']   			= $row->last_name;
	            $output['telephone']    		= $row->telephone; 
	            
	           
	       }  
	       echo json_encode($output);  
	  }  


	  function operation_conference(){

	  	$id_user 	= $this->connected;
	  	$nom 	= $this->input->post('nom');
	  	
	  	$codeReservation = str_shuffle(substr("0123456789", 0,10));

	  	$query = $this->crud_model->fetch_single_conference_in_stadium($id_user, $nom);
	  	if ($query > 0) {
	  		# code...
	  		echo "echec!!!";
	  	}
	  	else{

		    $insert_data = array(  
		           'nom'            	 =>     $this->input->post('nom'),
		           'date_debit'          =>     $this->input->post('date_debit'),
		           'heure_debit'         =>     $this->input->post('heure_debit'),
		           'date_fin'            =>     $this->input->post('date_fin'),
		           'heure_fin'           =>     $this->input->post('heure_fin'),
		           'id_user'    		 =>     $id_user  
		    );  

		    $requete=$this->crud_model->insert_conference($insert_data);
		    echo("Ajout information avec succès");
	  	}

	      
	  }

	  function modification_conference(){

	      $updated_data = array(  
	      	   'nom'            	 =>     $this->input->post('nom'),
	           'date_debit'          =>     $this->input->post('date_debit'),
	           'heure_debit'         =>     $this->input->post('heure_debit'),
	           'date_fin'            =>     $this->input->post('date_fin'),
	           'heure_fin'           =>     $this->input->post('heure_fin')
	      );

	      $this->crud_model->update_conference($this->input->post("idconference"), $updated_data);
	      echo("modification avec succès");
	  }

	  

	  function supression_conference(){

	      $this->crud_model->delete_conference($this->input->post("idconference"));
	      echo("suppression avec succès");
	    
	  }

	   // pagination user to sms 
    function pagination_conference_client()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_conferences();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination pagination2">';
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
     'country_table'   => $this->crud_model->fetch_detail_conference($config["per_page"], $start)
    );
    echo json_encode($output);
  }

   function search_conference_client()
   {
	  $output = '';
	  $query = '';

	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_conference_ok($query);
	  $output .= '
   
	    <table class="table-striped table-bordered nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="true" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	     <theader>
	       <tr>
	        
	        <th width="10%">Avatar</th>
	        <th width="20%">Nom de la Conférence</th>
	        <th width="10%">Date debit</th>
	        <th width="10%">Heure debit</th>
	        
	        <th width="10%">Date fin</th>
	        <th width="10%">Heure fin</th>
	        <th width="20%">Mise à jour</th>

	        <th width="5%">Editer</th>
	        <th width="5%">Supprimer</th>
	        
	        
	       </tr>
	     <theader>
	     <tbody>
	    ';
	      foreach($data->result() as $row)
	      {
	          

	          $etat ='<span class="badge badge-warning"><i class="fa fa-user"></i> Client </span>';


	           $email = '<a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google mr-1"></i> '.$row->email.'</a>
	          
	          ';

	         
	           $output .= '
	           <tr>
	            
	            <td><img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" /></td>

	            <td>'.substr($row->nom, 0,20).'...</td>

	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
	            <td>'.$row->heure_debit.'</td>
	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
	            <td>'.$row->heure_fin.'</td>

	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>

	            <td>
	              <button type="button" name="update" idconference="'.$row->idconference.'" class="btn btn-warning btn-circle btn-sm update mr-2"><i class="fa fa-edit"></i></button> 
	            </td>
	            <td>
	            <button type="button" name="delete" idconference="'.$row->idconference.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>
	            </td>
	            
	           </tr>
	           ';

	      }
	      $output .= '
	            <tbody>
	            <tfooter>
	             <tr>
	              <th width="10%">Avatar</th>
	              <th width="20%">Nom de la Conférence</th>
	              <th width="10%">Date debit</th>
	              <th width="10%">Heure debit</th>
	              
	              <th width="10%">Date fin</th>
	              <th width="10%">Heure fin</th>
	              <th width="20%">Mise à jour</th>

	              <th width="5%">Editer</th>
	              <th width="5%">Supprimer</th>
	              
	              
	             </tr>
	           <tfooter>
	    </table>';
	  	echo $output;
	}

	// fin conference

	/*
    script pour la invite
    ===========================
    zoom invite
    ==========================
    ****************************
    ****************************

    */

    // script de invite
	
	  function fetch_single_invite()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_invite($_POST["idinvite"]);  
	       foreach($data as $row)  
	       {  
	            $output['nom']    				= $row->nom;
	            $output['date_debit']    		= $row->date_debit;
	            $output['date_fin']    			= $row->date_fin;
	            $output['heure_debit']    		= $row->heure_debit;
	            $output['heure_fin']    		= $row->heure_fin;
	            
	            $output['first_name']    		= $row->first_name; 
	            $output['last_name']   			= $row->last_name;
	            $output['telephone']    		= $row->telephone; 
	            
	           
	       }  
	       echo json_encode($output);  
	  }  


	  function operation_invite(){

	  	$id_user 	= $this->connected;
	  	$idconference 	= $this->input->post('idconference');
	  	
	  	$codeReservation = str_shuffle(substr("0123456789", 0,10));

	  	$query = $this->crud_model->fetch_single_invite_in_stadium($id_user, $idconference);
	  	if ($query > 0) {
	  		# code...
	  		echo "echec!!!";
	  	}
	  	else{

		    $insert_data = array(  
		           'idconference'        =>     $this->input->post('idconference'),
		           'id_user'    		 =>     $id_user  
		    );  

		    $requete=$this->crud_model->insert_invite($insert_data);
		    echo("Ajout information avec succès");
	  	}

	      
	  }

	  function modification_invite(){
	  	  $id_user 	= $this->connected;
	      $updated_data = array(  
      	    'idconference'        =>     $this->input->post('idconference'),
	        'id_user'    		  =>     $id_user  
	      );

	      $this->crud_model->update_conference($this->input->post("idinvite"), $updated_data);
	      echo("modification avec succès");
	  }

	  

	  function supression_invite(){

	      $this->crud_model->delete_invite($this->input->post("idinvite"));
	      echo("suppression avec succès");
	    
	  }

	   // pagination user to sms 
    function pagination_invite_client()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_invites();
    $config["per_page"] = 4;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination pagination2">';
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
     'country_table'   => $this->crud_model->fetch_detail_invite($config["per_page"], $start)
    );
    echo json_encode($output);
  }

   function search_invite_client()
   {
	  $output = '';
	  $query = '';

	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_invite_ok($query);
	  $output .= '
   
	    <table class="table-striped table-bordered nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="true" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	     <theader>
	       <tr>
	        
	        <th width="10%">Avatar</th>
	        <th width="20%">Nom de la Conférence</th>
	        <th width="10%">Date debit</th>
	        <th width="10%">Heure debit</th>
	        
	        <th width="10%">Date fin</th>
	        <th width="10%">Heure fin</th>
	        <th width="20%">Mise à jour</th>

	        <th width="5%">Profil</th>
	        <th width="5%">Supprimer</th>
	        
	        
	       </tr>
	     <theader>
	     <tbody>
	    ';
	      foreach($data->result() as $row)
	      {
	          

	          $etat ='<span class="badge badge-warning"><i class="fa fa-user"></i> Client </span>';


	           $email = '<a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google mr-1"></i> '.$row->email.'</a>
	          
	          ';

	         
	           $output .= '
	           <tr>
	            
	            <td><img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" /></td>

	            <td>'.substr($row->nom, 0,20).'...</td>

	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
	            <td>'.$row->heure_debit.'</td>
	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
	            <td>'.$row->heure_fin.'</td>

	            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>

	            <td>
	              <button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-circle btn-sm update mr-2"><i class="fa fa-user"></i></button> 
	            </td>
	            <td>
	            <button type="button" name="delete" idinvite="'.$row->idinvite.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>
	            </td>
	            
	           </tr>
	           ';

	      }
	      $output .= '
	            <tbody>
	            <tfooter>
	             <tr>
	              <th width="10%">Avatar</th>
	              <th width="20%">Nom de la Conférence</th>
	              <th width="10%">Date debit</th>
	              <th width="10%">Heure debit</th>
	              
	              <th width="10%">Date fin</th>
	              <th width="10%">Heure fin</th>
	              <th width="20%">Mise à jour</th>

	              <th width="5%">Profil</th>
	              <th width="5%">Supprimer</th>
	              
	              
	             </tr>
	           <tfooter>
	    </table>';
	  	echo $output;
	}
	// fin invite

	function fetch_single_personne_zoom()  
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
                $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="200" height="200" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
            }  
            else  
            {  
                $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
            }  
       }  
       echo json_encode($output);  
	}



	// pagination user to sms 
    function pagination_message_users_zoom()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->count_all_message_users();
    $config["per_page"] = 10;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination pagination2">';
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
     'country_table'   => $this->crud_model->fetch_detailsmessage_users_zoom($config["per_page"], $start)
    );
    echo json_encode($output);
  }

   function search_message_users_zoom()
   {
	  $output = '';
	  $query = '';

	  if($this->input->post('query'))
	  {
	   $query = $this->input->post('query');
	  }
	  $data = $this->crud_model->fetch_data_sms_users($query);
	   $output .= '
	   
	    <table class="table-striped table-bordered nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="true" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
	     <theader>
	       <tr>
	        <th width="5%">Selectionner</th>
	        <th width="5%">Avatar</th>
	        <th width="20%">Nom complet</th>
	        <th width="15%">Télephone</th>
	        <th width="10%">Statut</th>
	        
	        <th width="5%">Sexe</th>
	        <th width="20%">Mise à jour</th>
	        
	        
	       </tr>
	     <theader>
	     <tbody>
	    ';
	    if ($data->num_rows() <= 0) {
	    	# code...
	    }
	    else{

	    	foreach($data->result() as $row)
		    {

		          
		          if ($row->idrole == 1) {
		            $etat ='<span class="badge badge-success"><i class="fa fa-tag"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 2) {
		            $etat ='<span class="badge badge-warning"><i class="fa fa-user"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 3) {
		            $etat ='<span class="badge badge-secondary"><i class="fa fa-home"></i> '.$row->nom.'</span>';
		          }
		          else if ($row->idrole == 4) {
		            $etat ='<span class="badge badge-primary"><i class="fa fa-money"></i> '.$row->nom.'</span>';
		          }
		          else{
		            $etat ='<span class="badge badge-danger"><i class="fa fa-eye"></i></span>';
		          }

		          $link = '<a href="tel:'.$row->telephone.'" class="text-primary"><i class="fa fa-phone"></i></a>
		           <input type="checkbox" name="id" value="'.$row->id.'" class="tels delete_checkbox">
		          ';

		           $email = '<a href="mailto:'.$row->email.'" class="text-primary"><i class="fa fa-google mr-1"></i> '.$row->email.'</a>
		          
		          ';

		           $output .= '
		           <tr>
		            <td>'.$link.'</td>
		            <td><img src="'.base_url().'upload/photo/'.$row->image.'" class="table-user-thumb" style="border-radius: 50%; width: 50px; height: 30px;" /></td>

		             <td>'.substr($row->first_name.' '.$row->last_name, 0,20).'...</td>

		            <td>'.$row->telephone.'</td>
		            <td>'.$etat.'</td>
		            
		            <td>'.$row->sexe.'</td>


		            <td>'.substr(date(DATE_RFC822, strtotime($row->debit_event)), 0, 23).'</td>
		           
		           </tr>
		           ';
		        

		    }

	    }
	      
          $output .= '
	        <tbody>
	        <tfooter>
	         <tr>
	          <th width="5%">Selectionner</th>
	          <th width="5%">Avatar</th>
	          <th width="20%">Nom complet</th>
	          <th width="15%">Télephone</th>
	          <th width="10%">Statut</th>
	          
	          <th width="5%">Sexe</th>
	          <th width="20%">Mise à jour</th>
	          
	         </tr>
	       <tfooter>
	    </table>';
	  	echo $output;
	}

	// pagination user to sms 
    function pagination_message_users_byrole_zoom()
	{
		sleep(1);
		$idrole = $this->input->post('idrole');

	    $this->load->library("pagination");
	    $config = array();
	    $config["base_url"] = "#";
	    $config["total_rows"] = $this->crud_model->count_all_message_users_byrole($idrole);
	    $config["per_page"] = 5;
	    $config["uri_segment"] = 3;
	    $config["use_page_numbers"] = TRUE;
	    $config["full_tag_open"] = '<ul class="pagination pagination_filter">';
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
	     'pagination_link2'  => $this->pagination->create_links(),
	     'country_table'   => $this->crud_model->fetch_detailsmessage_users_byrole_zoom($config["per_page"], $start, $idrole)
	    );
	    echo json_encode($output);
	}

	function infomation_zoom()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {

           		$website 		= 	$this->email_sites;
                $id_user 		=	$id[$count];
                $url 			= 	htmlentities($this->input->post('link'));
                $idconference 	= 	$this->input->post('idconference');

                $mon_lien = $this->input->post('link');


                $num_dev = $this->num_dev;
                $token_sms = $this->token_sms;

                // echo("id:".$id_user." message:".$url);

               

			  	
			  	$codeReservation = str_shuffle(substr("0123456789", 0,10));

			  	$query2 = $this->crud_model->fetch_single_invite_in_stadium($id_user, $idconference);
			  	if ($query2 > 0) {
			  		# code...
			  		echo "echec!!!";
			  	}
			  	else{

				    $insert_data = array(  
				           'idconference'        =>     $this->input->post('idconference'),
				           'id_user'    		 =>     $id_user  
				    );  

				    $query=$this->crud_model->insert_invite($insert_data);

				    // invitation
	                if ($query > 0) {

	                	$nom_respect	= $this->crud_model->get_name_user($this->connected);

	                    $nom    		= $this->crud_model->get_name_user($id_user);
	                    $idrole     	= $this->crud_model->get_role_user($id_user);
	                    $telephone    	= $this->crud_model->get_telephone_user($id_user);

	                    if ($idrole == 1) {
	                    	# code...
	                    	$url    	="admin/joinmetting/". $url;
	                    }
	                    elseif ($idrole == 2) {
	                    	# code...
	                    	$url    	="user/joinmetting/". $url;
	                    }
	                    elseif ($idrole == 3) {
	                    	# code...
	                    	$url    	="entreprise/joinmetting/". $url;
	                    }
	                    elseif ($idrole == 4) {
	                    	# code...
	                    	$url    	="comptable/joinmetting/". $url;
	                    }
	                    else{
	                    	$url = '';
	                    }

	                    $message =$nom_respect." Vient de vous ajouter pour faire part dans une conférence";

	                    $notification = array(
	                      'titre'     =>    "Bonjour  ".$nom." vous venez d'être sélectionné(e) dans une conférence",
	                      'icone'     =>    "fa fa-video",
	                      'message'   =>     $message,
	                      'url'       =>     $url,
	                      'id_user'   =>     $id_user
	                    );
	                    
	                    $not = $this->crud_model->insert_notification($notification);

	                    if ($telephone !='') {
		                	# code...

		                	//$this->envoieSMS($telephone, $message." votre lien: ".$mon_lien, $num_dev, $token_sms);
		                }

	                }
 
				    // fin invitation


			  	}

                



                

           }

        }
    }





	
	 
  

































}



 ?>
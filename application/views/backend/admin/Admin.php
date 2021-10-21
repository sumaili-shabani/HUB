<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class admin extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  if(!$this->session->userdata('admin_login'))
		  {
		      	redirect(base_url().'login');
		  }
		  $this->load->library('form_validation');
		  $this->load->library('encryption');
	      // $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');

		}

		function index(){
			$data['title']="mon profile admin";
			$this->load->view('backend/admin/templete_admin', $data);
		}

		function dashbord(){
			  $data['title']="Tableau de bord";
		      // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");


		      $data['nombre_client'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

		      $data['nombre_membre'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

		      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

		      $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");
		      $this->load->view('backend/admin/dashbord', $data);
		}



		function profile(){
	      $data['title']="mon profile admin";
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/admin/profile', $data);
	    }

	    function basic(){
	        $data['title']="Information basique de mon compte";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic', $data);
	    }

	    function basic_image(){
	        $data['title']="Information basique de ma photo";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_image', $data);
	    }

	    function basic_secure(){
	        $data['title']="Paramètrage de sécurité de mon compte";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/admin/basic_secure', $data);
	    }

	    function notification($param1=''){
	      $data['title']    ="Listes des formations";
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
			$this->load->view('backend/admin/role', $data);
		}

		function category(){

			$data['title']="Paramètrage cétegorie produit";
			$this->load->view('backend/admin/category', $data);
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

	    function pays(){

			$data['title']="Paramètrage pays ";
			$this->load->view('backend/admin/pays', $data);
		}

		function province(){

			$data['title']="Paramètrage province ";
			$this->load->view('backend/admin/province', $data);
		}

		function ville(){

			$data['title']="Paramètrage ville ";
			$data['provinces'] = $this->crud_model->fetch_province(); 
			$this->load->view('backend/admin/ville', $data);
		}

		function category_entreprise(){
			$data['title']="Paramètrage catégorie entreprise";
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




	    /*

	   	FIN DEBIT FONCTION APPEL DES VIEWS UTILISATION DE PORTALI HUB
	    MES SCRIPTS HUB COMMENCE DEJE
	    ========================================================
	    */


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

                
 
                $sub_array[] = '<button type="button" name="update" idp="'.$row->idp.'" class="btn btn-secondary btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
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

                
 
                $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-secondary btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
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

	            

	            $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-secondary btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';  
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

	  	  // debit des scripts pays
    function fetch_pays(){  

           $fetch_data = $this->crud_model->make_datatables_pays();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->nompays, 0,50)).'';
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idPays="'.$row->idPays.'" class="btn btn-secondary btn-circle btn-sm update"><i class="fa fa-edit"></i></button>';

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





















}



 ?>
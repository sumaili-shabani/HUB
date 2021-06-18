<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
class login extends CI_Controller
{
	protected $email_sites;
	protected $logos_sites;
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->library('form_validation');
	  $this->load->library('encryption');
	  $this->load->model('crud_model'); 
	  $this->email_sites = $this->crud_model->get_email_du_site();
	  $this->logos_sites = $this->crud_model->get_logo_du_site();
	  
	}


	public function get_image(){
		$icone = $this->crud_model->get_logo_du_site();
		$iconev = base_url()."upload/tbl_info/".$icone;
		return $iconev;
	}


	public function index(){
		$data["title"] = "Connexion au système Gestion galerie nord kivu";  
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('login', $data);
		// $this->load->view('panel', $data);
	}
	public function register(){
		$data["title"] = "Devenez de à présent membre au système ";  
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('register', $data);
	}
	public function forgot(){
		$data["title"] = "Avez-vous oublié votre mot de passe au système 
		Gestion galerie nord kivu professionnel";  
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('forgot', $data);
	}
	public function accueil(){
		echo("bonjour dans le codeigner");
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
	}

	function validation()
	{
	      $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
	      $this->form_validation->set_rules('user_password', 'Password', 'required');
	      if($this->form_validation->run())
	      {
	         $result = $this->crud_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
	         if($result == '')
	         {
	          
	          	if ($this->session->userdata('id')) {

	          		$id=$this->session->userdata('id');
				    $cours = $this->db->get_where('online', array(
						    	'id_user'	=>	$id
						    ));
			       
			        if ($cours->num_rows() > 0) {
			        	# code...
			        }
			        else{

			        	$insert = array(
							'id_user'	=>	$this->session->userdata('id')
						);
						$this->crud_model->insert_online($insert);
			        }

					redirect('user/dashbord');
				}
				elseif ($this->session->userdata('admin_login')) {

					$id=$this->session->userdata('admin_login');
				    $cours = $this->db->get_where('online', array(
						    	'id_user'	=>	$id
						    ));
			       
			        if ($cours->num_rows() > 0) {
			        	# code...
			        }
			        else{

			        	$insert = array(
							'id_user'	=>	$this->session->userdata('admin_login')
						);
						$this->crud_model->insert_online($insert);
			        }

					redirect('admin/dashbord');
				}
				elseif ($this->session->userdata('instuctor_login')) {

					$id=$this->session->userdata('instuctor_login');
				    $cours = $this->db->get_where('online', array(
						    	'id_user'	=>	$id
						    ));
			       
			        if ($cours->num_rows() > 0) {
			        	# code...
			        }
			        else{

			        	$insert = array(
							'id_user'	=>	$this->session->userdata('instuctor_login')
						);
						$this->crud_model->insert_online($insert);
			        }

					redirect('entreprise/dashbord');
					
				}
				else{
					
				}
	         	// $this->panel();
	         }
	         else
	         {
	          $this->session->set_flashdata('message2',$result);
	          redirect('login', 'refresh');
	         }
	      }
	      else
	      {
	      	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
	       	redirect('login', 'refresh');
	      }
	      
	}



	function register_validation()
  	 {

        $avatar = "icone-user.png";
  		  $this->form_validation->set_rules('first_name', 'first name', 'required|trim');
  		  $this->form_validation->set_rules('mail_ok', 'email', 'required|trim|valid_email|is_unique[users.email]');
  		  $this->form_validation->set_rules('user_password', 'password', 'required');
  		  $users_exits = $this->crud_model->get_users_email_padding_user($this->input->post('mail_ok'));
  		  if ($users_exits->num_rows() > 0) {

  		  	  $this->session->set_flashdata('message2', 'Erreur!!! Cette adresse mail existe déjà veillez vérifier les informations requises🔕');
	  		  redirect('login/register','refresh');
  		  }
  		  else{

  		  	  if($this->form_validation->run())
	  		  {
	  			   $verification_key = md5(rand());
	               $encrypted_password = md5($this->input->post("user_password"));
	  			   $data = array(
	  			    'first_name'  			=> $this->input->post('first_name'),
	  			    'email'  			    => $this->input->post('mail_ok'),
	  			    'passwords' 			=> $encrypted_password,
	  			    'idrole' 			    => 2,
	  			    'image'           		=> $avatar
	  			   );
	  		   	   $id = $this->crud_model->insert_padding_user($data);
	  			   if($id > 0)
	  			   {

	  			    $this->session->set_flashdata('message', "votre compte a été créé avec succès mais necessite une validation de l'administrateur du système pour être opérationnel, prière de patienter un peu  ".$this->input->post('first_name'));

	  			        $users_cool = $this->crud_model->get_info_user();
			            foreach ($users_cool as $key) {

			                if ($key['idrole'] == 1) {
				                $url ="admin/visiteur";

				                $id_user_recever = $key['id'];

				                // $nom   = $this->crud_model->get_name_user($idpersonne);
				                $nom = $this->input->post('first_name');
				                $message =$nom." Vient de rejoindre la plateforme ";

				                $notification = array(
				                  'titre'     =>    "Nouvelle inscription",
				                  'icone'     =>    "fa fa-user",
				                  'message'   =>     $message,
				                  'url'       =>     $url,
				                  'id_user'   =>     $id_user_recever
				                );
				                
				                $not = $this->crud_model->insert_notification($notification);

				            }

				            if ($key['idrole'] == 2) {
				                $url ="user/visiteur";

				                $id_user_recever = $key['id'];

				                // $nom   = $this->crud_model->get_name_user($idpersonne);
				                $nom = $this->input->post('first_name');
				                $message =$nom." Vient de rejoindre la plateforme ";

				                $notification = array(
				                  'titre'     =>    "Nouvelle inscription",
				                  'icone'     =>    "fa fa-user",
				                  'message'   =>     $message,
				                  'url'       =>     $url,
				                  'id_user'   =>     $id_user_recever
				                );
				                
				                $not = $this->crud_model->insert_notification($notification);

				            }
			              
			                # code...
			            }


	  				     redirect('login','refresh');
	  			   }
	  			   else{
	  			   	$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
	  				     redirect('login/register','refresh');
	  			   }
	  		  }
	  		  else
	  		  {		
	  		  		$this->session->set_flashdata('message2', 'erreur veillez vérifier les informations requises');
	  		   		redirect('login/register','refresh');
	  		  }

  		  }

  		  

  	 }



	function logout()
	{
	  
	    $id;
		if($this->session->userdata('id')) {

		  $id=$this->session->userdata('id');
		  $this->crud_model->delete_online($id);

		}
		elseif($this->session->userdata('admin_login')) {
		  $id=$this->session->userdata('admin_login');
		  $this->crud_model->delete_online($id);
		}
		elseif($this->session->userdata('instuctor_login')) {
		  $id=$this->session->userdata('instuctor_login');
		  $this->crud_model->delete_online($id);
		}
		else{
		  $id=0;
		}

		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
		 $this->session->unset_userdata($row);
		}
		redirect('login', 'refresh');
	}

	function recupere_secure(){
		$data["title"] = "Récupération mot de passe";  
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
		$this->load->view('forgot', $data);
	}

	

    function change_secure($param1='', $param2='',$param3='')
    {
        $data['title'] = "recupération de mot de passe";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['verification_key'] = $param1;
        $req = $this->db->where('verification_key', $param1);
        $req = $this->db->get('recupere');
        if ($req->num_rows() > 0) {
            foreach ($req->result_array() as $key) {
                $data['email'] = $key['email'];
            }
        }
        else{

        }

        $this->load->view('secure', $data);
    }


    function recupere_passe_word(){

        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        $this->form_validation->set_rules('user_password2', 'Confirm Password', 'required');
        if($this->form_validation->run())
        {
            $user_password      = $this->input->post('user_password');
            $user_password2     = $this->input->post('user_password2');
            $verification_key   = $this->input->post('verification_key');
            $email              = $this->input->post('email');
            

            if ($user_password==$user_password2) {
                // echo($user_password.'='.$user_password2.' email:'.$email.' verification_key:'.$verification_key);
                $data = array(
                    'passwords'             => md5($user_password)
                );

                $this->crud_model->update_user($email,$data);

                $this->session->set_flashdata('message', "félicitation votre mot de passe a été modifié avec succès");
                redirect('login');


            }
            else{

                $this->session->set_flashdata('message2', "les deux mots de passe doivent être identiques");
                redirect(base_url().'login/change_secure/'.$verification_key);

            }

            

            
            
        }
        else
        {
        	$this->session->set_flashdata('message2', "veillez vérifier les informations requises");
            $verification_key   = $this->input->post('verification_key');
            redirect(base_url().'login/change_secure/'.$verification_key);
        }

    }

   
    function recuperaion_password(){

        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        if($this->form_validation->run())
        {
            $result = $this->crud_model->can_recuperation($this->input->post('user_email'));
            if($result == '')
            {
                $code=str_shuffle(substr("1f-èh_çà234567890+6@-?[K89ZTY\J0-T9*h#+/@THSBJ98461700221VPEHI?S&8!}\|", 0,10));

                $verification_key = md5(rand());
                $mail    = $this->input->post('user_email');
                $website = $this->email_sites;

                $to =$this->input->post('user_email');

                $info = "<div class='text-center' style='
	                	text-align: center !important;
		                '>
		                	<h1 class='h4 text-gray-900 mb-4' style='
			                	color: #3a3b45 !important;
			                	margin-bottom: 1.5rem !important;
		                	'>Reinitialisation de mot de passe</h1>
							vous êtes au bout de réunitialisation de mot de passe; prière d'entrer les bonnes bonnes informations secretes.
	                </div>"
                ;

                $subject = "votre mot de passe de recupération au compte system Ets yetu";
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
							    vertical-align: middle;
    							border-style: none;
    						'
	               			 > 
	               			 Salut!!! voici votre code de recupération de votre mot de passe au système de Ets yetu  ".$verification_key." cliquer sur ce lien pour changer votre nouveau mot de passe 
	               			 <a href='".base_url()."login/change_secure/".$verification_key."'>
	               			 changer mon mot de passe</a>.
               			 </p>
               
                </div>
                </div>
                ";

                $headers= "MIME Version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: no-reply@congoback.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

                mail($to,$subject,$message2,$headers);

                if(mail($to,$subject,$message2,$headers) > 0){

                    $data = array(
                        'email'             => $to,
                        'verification_key'  => $verification_key
                    );

                    $this->crud_model->insert_recupere($data);

                    $this->session->set_flashdata('message', "mail de vérification envoyé. prière de vérifier votre boite email ");
                    redirect('login/forgot','refresh');

                } 
                else {
                    $this->session->set_flashdata('message2', "Votre compte est encoure de restauration");
                    redirect('login/forgot', 'refresh');
                }

            }
            else
            {
                $this->session->set_flashdata('message2',$result);
                redirect('login/forgot', 'refresh');
            }
        }
        else
        {
        	$this->session->set_flashdata('message2', "Erreur veillez vérifier les informations requises"); 
        	redirect('login/forgot', 'refresh');
        }

    }


















}




 ?>
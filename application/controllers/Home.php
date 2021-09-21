<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
	protected $email_sites;
	protected $logos_sites;
	protected $num_dev;
	protected $token_sms;
	
	public function __construct()
	{
	  parent::__construct();
	  $this->load->library('form_validation');
	  $this->load->library('encryption');
	  $this->load->model('crud_model'); 
	  $this->email_sites = $this->crud_model->get_email_du_site();
	  $this->logos_sites = $this->crud_model->get_logo_du_site();

      // pour les envoies des sms 
      $this->num_dev 	= $this->crud_model->get_info_du_site("tel3");
      $this->token_sms  = $this->crud_model->get_info_du_site("token_sms");
	  
	}

	public function index(){
		$data['title']="Créé ta startup chez hub un jour nouveau";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/home', $data);
	}

	public function blog($param1 =''){
		
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

		if ($param1 !='') {
            $title_job = $this->crud_model->get_name_article_pub($param1);
            $data['title']          = $title_job;
            $data['category_article']  = $this->crud_model->Select_article_by_tag($param1);
            $data['offre_tag']  = $this->crud_model->Select_our_articles_tag($param1);
            $data['commentaires']  = $this->crud_model->Select_our_commentaire_to_articles_tag($param1);
            $this->load->view('frontend/article_tag', $data);
        }
        else{

            $data['title']="Nos blogs et évenèments";
            $data['category_article']  = $this->crud_model->Select_article_all_ok();
            $data['article_tag']  = $this->crud_model->Select_article_all_ok();
            $this->load->view('frontend/blog', $data);

        }

		
	}

	public function formation($param1 =''){
		
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

		if ($param1 !='') {
            $title_job = $this->crud_model->get_name_formation_pub($param1);
            $data['title']          = $title_job;
            $data['offre_tag']  = $this->crud_model->Select_our_formation_tag($param1);
            $this->load->view('frontend/formation_tag', $data);
        }
        else{

            $data['title']="Explorez des formations au prix le plus bas possible jamais atteint!";
            $data['category_article']  = $this->crud_model->Select_article_all_ok();
            $data['article_tag']  = $this->crud_model->Select_article_all_ok();
            $this->load->view('frontend/formation', $data);

        }

		
	}

	public function latestformation($param1 =''){
		
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

		if ($param1 !='') {
            $title_job = $this->crud_model->get_name_formation_pub($param1);
            $data['title']          = $title_job;
            $data['offre_tag']  = $this->crud_model->Select_our_formation_tag($param1);
            $this->load->view('frontend/formation_tag', $data);
        }
        else{

            $data['title']="Explorez des formations au prix le plus bas possible jamais atteint!";
            $data['category_article']  = $this->crud_model->Select_article_all_ok();
            $data['article_tag']  = $this->crud_model->Select_article_all_ok();
            $this->load->view('frontend/latestformation', $data);

        }

		
	}


	public function publication($param1 ='', $param2=''){
		
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();

		if ($param1 !='') {
            $title_job = $this->crud_model->get_name_article_publication($param1);
            $data['title']          = $title_job;
            $data['idpub']          = $param1;
            $data['category_article']  = $this->crud_model->Select_article_by_tag($param1);
            $data['offre_tag']  = $this->crud_model->Select_our_articles_tag($param1);
            $data['commentaires']  = $this->crud_model->Select_our_commentaire_to_articles_tag($param1);
            $this->load->view('frontend/publication', $data);
        }
        else{

            $data['title']="Nos blogs et évenèments";
            $data['category_article']  = $this->crud_model->Select_article_all_ok();
            $data['article_tag']  = $this->crud_model->Select_article_all_ok();
            $this->load->view('frontend/blog', $data);

        }

		
	}

	function contact(){
		$data['title']="Contactez-nous pour information";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/contact', $data);
	}

	function about(){
		$data['title']="Ce que nous faisons!";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/about', $data);
	}

	function galery(){
		$data['title']="Notre galerie Photos";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/galery', $data);
	}

	function event(){
		$data['title']="Nous vous proposons d’être l’un des  Partenaires privilégiés de la vie du HUB UJN au travers de plusieurs activités!";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/event', $data);
	}

	function secteur(){
		$data['title']="Secteur d'activité";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/secteur', $data);
	}

	function ecosysteme(){
		$data['title']="Ecosystème";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/carriere', $data);
	}

	function partenariat(){
		$data['title']="carrière d'activité";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/partenariat', $data);
	}
	function propositionvaleur(){
		$data['title']="Proposition de valeur";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/propositionvaleur', $data);
	}

	function domaine(){
		$data['title']="Domaines d’activité principaux recensés";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/domaine', $data);
	}

	function entreprise(){
		$data['title']="Domaines d’activité principaux recensés";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/entreprise', $data);
	}

	function cryptnail(){
		$data['title']="cryptnail : l’académie du code du nord kivu";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/scriptnail', $data);
	}

	function academie(){
		$data['title']="Académie de leadership : soyez partenaire du Centre de formation et d’excellence D’UJN";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/academie', $data);
	}
	


	function contrat(){
		$data['title']="Politique de confidentialité";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/contrat', $data);
	}

	function condition(){
		$data['title']="Terme et condition";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/condition', $data);
	}

	function service(){
		$data['title']="Nos services!";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$data['padding_articles']   = $this->crud_model->Select_padding_articles_tri();
		$this->load->view('frontend/service', $data);
	}

	function travail(){
		$data['title']="Ce que nous faisons!";
		$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
		$data['categories']  	= $this->crud_model->Select_category_menu();
		$data['carousels']  	= $this->crud_model->Select_carousel_slider();

		$data['t_info_choix']  	= $this->crud_model->Select_tinfo_choix_slider();
		$data['t_info_service']  	= $this->crud_model->Select_tinfo_services_slider();
		$data['t_info_partainare']  	= $this->crud_model->Select_partenaires_slider();

		$data['t_info_personnel']  	= $this->crud_model->Select_infopersonnel_slider();
		$data['t_info_member']  	= $this->crud_model->Select_tinfo_member_slider();
		$data['infos_news']  = $this->crud_model->Select_all_to_news();
		$this->load->view('frontend/travail', $data);
	}


	function fetch_single_users_info()  
  	{  
       $output = array();  
       $data = $this->crud_model->fetch_single_users_info($this->input->post('id'));  
       foreach($data as $row)  
       {  
            $output['first_name'] = $row->first_name;  
            $output['last_name'] = $row->last_name; 

            $output['email'] = $row->email;
            $output['telephone'] = $row->telephone;
            
            $output['sexe'] = $row->sexe;
           
            $output['facebook'] = $row->facebook;
            $output['linkedin'] = $row->linkedin;
            $output['twitter'] = $row->twitter;
            $output['poste'] = $row->poste;
            $output['image'] = $row->image;
            $output['bio'] = substr($row->bio, 0,500).'...';
            if ($row->cv !=null) {
            	$output['media_social'] ='
                 <a href="'.$row->facebook.'" target="_blank" class="btn btn-primary btn-circle btn-xs mr-1"><i class="fa fa-facebook"></i></a>

                 <a href="'.$row->twitter.'" target="_blank" class="btn btn-info btn-circle btn-xs mr-1"><i class="fa fa-twitter"></i></a>
                 <a href="'.$row->linkedin.'" target="_blank" class="btn btn-primary btn-circle btn-xs mr-1"><i class="fa fa-linkedin"></i></a>

                 <a href="'.base_url().'upload/cv/'.$row->cv.'" target="_blank" class="btn btn-success btn-circle btn-xs mr-1"><i class="fa fa-user mr-1"></i> Voir son cv</a>
            	';
            }
            else{
            	 $output['media_social'] ='
                 <a href="'.$row->facebook.'" target="_blank" class="btn btn-primary btn-circle btn-xs mr-1"><i class="fa fa-facebook"></i></a>

                 <a href="'.$row->twitter.'" target="_blank" class="btn btn-info btn-circle btn-xs mr-1"><i class="fa fa-twitter"></i></a>
                 <a href="'.$row->linkedin.'" target="_blank" class="btn btn-primary btn-circle btn-xs mr-1"><i class="fa fa-linkedin"></i></a>
                 ';
                
            	
            }

           

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

  	function operation_contact(){

  		$name = $this->input->post("name");
  		$subject = $this->input->post("subject");
  		$email = $this->input->post("email");
  		$message = $this->input->post("message");

	  	if ($_FILES['user_image']['size'] > 0) {
	 		
	 		$logo = $this->upload_image_fichier_contact_radio();
	 		$insert_data = array(  

		           'nom'           =>     $name,  
		           'sujet'         =>     $subject,
		           'email'         =>     $email,  
		           'message'       =>     $message,
		           'fichier'       =>     $logo  
		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	if ($requete > 0) {
	      		# code...
	      		try {

			        $headers= "MIME Version 1.0\r\n";
			        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
			        $headers .= "From: no-reply@congoback.com" . "\r\n" ."Reply-to: ".$email.""."\r\n"."X-Mailer: PHP/".phpversion();

			        mail($this->email_sites,$subject,$message,$headers);

			        if(mail($this->email_sites,$subject,$message,$headers) > 0){

			           echo("Nous vous répondrons dans un instant");
			        } 
			        else {
			           $msg = "Erreur lors de l'opération!!! Veillez complèter tous les champs 🙆";
			        }

			      
			    } catch (PDOException $e) {
			      die("impossible de faire la modification:".$e->getMessage());
			    }
	      	}
	 	}
	 	else{
	 		$insert_data = array(  
				   'nom'           =>     $name,  
		           'sujet'         =>     $subject,
		           'email'         =>     $email,  
		           'message'       =>     $message           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	if ($requete > 0) {
	      		# code...
	      		try {

			        $headers= "MIME Version 1.0\r\n";
			        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
			        $headers .= "From: no-reply@congoback.com" . "\r\n" ."Reply-to: ".$email.""."\r\n"."X-Mailer: PHP/".phpversion();

			        mail($this->email_sites,$subject,$message,$headers);

			        if(mail($this->email_sites,$subject,$message,$headers) > 0){

			           echo("Nous vous répondrons dans un instant");
			        } 
			        else {
			           $msg = "Erreur lors de l'opération!!! Veillez complèter tous les champs 🙆";
			        }

			      
			    } catch (PDOException $e) {
			      die("impossible de faire la modification:".$e->getMessage());
			    }
	      	}
	      	
	 	}
  
      }


      function upload_image_fichier_contact_radio()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/contact/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  }


	  // pagination de articles
        function pagination_access_our_article()
		{

		  $this->load->library("pagination");
		  $config = array();
		  $config["base_url"] = "#";
		  $config["total_rows"] = $this->crud_model->fetch_pagination_articles();
		  $config["per_page"] = 4;
		  $config["uri_segment"] = 3;
		  $config["use_page_numbers"] = TRUE;
		  $config["full_tag_open"] = '<ul class="pagination">';
		  $config["full_tag_close"] = '</ul>';
		  $config["first_tag_open"] = '<li class="page-item">';
		  $config["first_tag_close"] = '</li>';
		  $config["last_tag_open"] = '<li class="page-item">';
		  $config["last_tag_close"] = '</li>';
		  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&gt;&gt;</i>';
		  $config["next_tag_open"] = '<li class="page-item">';
		  $config["next_tag_close"] = '</li>';
		  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&lt;&lt;</i>';
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
		   'country_table'   => $this->crud_model->fetch_details_pagination_articles($config["per_page"], $start)
		  );
		  echo json_encode($output);
		}



     // recherche de formations
     function fetch_search_our_articles()
     {
          $output = '';
          $query = '';
          if($this->input->post('query'))
          {
           $query = $this->input->post('query');
          }
          $data = $this->crud_model->fetch_data_search_articles($query);
          
          if($data->num_rows() > 0)
          {

              
               foreach($data->result() as $key)
               {

                 $vues  =  $this->db->query("SELECT COUNT(idart) AS total FROM vues WHERE idart=".$key->idart." ");
                  if ($vues->num_rows() <=0) {
                    $nombre_vue = 0;
                  }
                  else{
                    foreach ($vues->result_array() as $key_vue) {
                      $nombre_vue = $key_vue['total'];
                    }
                  }

                $output .= '
                  <div class="col-md-6 p-r-25 p-r-15-sr991 mb-2">
			          <!-- Item latest -->
			          <div class="col-md-12 m-b-45">
			            <a href="'.base_url().'home/blog/'.$key->idart.'" class="img-fluid">
			              <img src="'.base_url().'upload/article/'.$key->image.'" alt="IMG" class="img img-responsive img-thumbnail" style="height: 200px; border-color:#DC4405;">
			            </a>
			            <div class="col-md-12 p-t-16">
			              <h5 class="p-b-5">
			                <a href="'.base_url().'home/blog/'.$key->idart.'" class="f1-m-3 cl2 hov-cl10 trans-03">
			                  '.nl2br(substr($key->nom, 0,200)).'...
			                </a>
			              </h5>

			              <span class="cl8">
			               
			                <span class="f1-s-3 m-rl-3">
			                  <i class="fa fa-eye"></i>  '.$nombre_vue.' vue(s) &nbsp;&nbsp; - &nbsp;&nbsp;
			                </span>
			                <span class="f1-s-3">
			                  '.nl2br(substr(date(DATE_RFC822, strtotime($key->created_at)), 0, 23)).'
			                </span>
			              </span>
			            </div>
			          </div>
			        </div>


                  
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
          }

        echo $output;
     }

     // fin script articles 

    // insertion de vues 
    function insert_vue(){

        $idart      = $this->input->post('idart');
        $machine    = $this->input->post('machine');
        $test_existe = $this->crud_model->Select_idart_tag_insert($idart,$machine);
        if ($test_existe->num_rows() > 0) {
            echo("adresse ip existe deja");
        }
        else{

            $data_insert = array(
                'idart'        => $this->input->post('idart'),
                'machine'       => $this->input->post('machine')
            );

            $query = $this->crud_model->insert_vues_ip($data_insert);

        }
        
    }

    // pagination de articles par categori
    function pagination_access_our_article_bycat()
	{
	  $idcat = $this->input->post('idcat');
	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_articles_bycat($idcat);
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_articles_bycat($config["per_page"], $start, $idcat)
	  );
	  echo json_encode($output);
	}

	// pagination de articles
    function pagination_access_our_formation()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_formations();
	  $config["per_page"] = 3;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_formations($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}



     // recherche de formations
     function fetch_search_our_formation()
     {
          $output = '';
          $query = '';
          if($this->input->post('query'))
          {
           $query = $this->input->post('query');
          }
          $data = $this->crud_model->fetch_data_search_formations($query);
          
          if($data->num_rows() > 0)
          {

              
              $link ='';
		      $jour = date('Y-m-d');


		      foreach($data->result() as $key)
		      {


		        if ($key->fin_inscription >= $jour) {
		          # code...
		          $link = '
		          <a class="btn btn-dark btn-sm" href="'.base_url().'home/formation/'.$key->idf.'"><i class="fa fa-eye"></i> voir plus</a>

		          <a class="btn btn-hub btn-sm" href="'.base_url().'home/formation/'.$key->idf.'"><i class="fa fa-hand-o-right"></i> Je m\'inscris à cette formation</a>';
		        }
		        else{
		          $link = '<a class="btn btn-dark btn-sm" href="'.base_url().'home/formation/'.$key->idf.'"><i class="fa fa-eye"></i> voir plus</a>

		          <a class="btn btn-danger btn-sm" href="javascript:void(0);"><i class="fa fa-calendar"></i> L\'inscription s\'est cloturée</a>

		          ';
		        }


		       $output .= '
		        <div class="col-md-12 p-r-25 p-r-15-sr991 mb-2">

		          <div class="card">
		            <div class="card-body">
		              <div class="col-md-12">

		                <div class="row">

		                  <div class="col-md-4">
		                    <a href="'.base_url().'home/formation/'.$key->idf.'" class="img-fluid">
		                      <img src="'.base_url().'upload/formations/'.$key->image.'" alt="IMG" class="img img-responsive img-thumbnail" style="height: 200px; border-color:#DC4405;">
		                    </a>
		                  </div>

		                  <div class="col-md-8">

		                    <h5 class="card-title">'. substr($key->nom, 0,100).'</h5>
		                   
		                    <div class="card-text">
		                      Debit inscription: <span class="text-warning">
		                        <i class="fa fa-calendar mr-1"></i> '.nl2br(substr(date(DATE_RFC822, strtotime($key->date_debit)), 0, 23)).'
		                      </span>
		                    </div>
		                    <div class="card-text">
		                      Fin inscription: <span class="text-warning">
		                        <i class="fa fa-calendar mr-1"></i> '.nl2br(substr(date(DATE_RFC822, strtotime($key->fin_inscription)), 0, 23)).'
		                      </span>
		                    </div>
		                    
		                    
		                    '.$link.'

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
                    <div class="media text-muted pt-3">
                        <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true">
                        
                      </div>
                ';
          }

        echo $output;
     }

     // fin script articles 

    function operation_inscription_formations(){
    	$year = $this->crud_model->get_info_annee();
   		$email =    htmlspecialchars($this->input->post('email'));
   		$annee =    $year;
   		$idf   =    htmlspecialchars($this->input->post('idf'));

   		$test = $this->crud_model->fetch_single_test_inscription_formations_home($idf,$email);
   		if ($test > 0) {
   			$this->session->set_flashdata('message2', 'vous vous  êtes déjà inscrit pour cette formation 🏧');
		    redirect('home/formation/'.$idf, 'refresh');
   			
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

   			if ($requete > 0) {
   				# code...

   				$users_cool = $this->crud_model->get_info_user();
	            foreach ($users_cool as $key) {

	                if ($key['idrole'] == 1) {
		               
		                $id_user_recever = $key['id'];
		                # code...
			        	$url    ="admin/inscri_formation/";
			            $nom    = htmlspecialchars($this->input->post('nomcomplet'));

			            $message = $nom." vient d'ajouter un module ".$this->input->post('titre');


			            $notification = array(
			              'titre'     =>    "Nouvelle inscription à la formation",
			              'icone'     =>    "fa fa-compass",
			              'message'   =>     $message,
			              'url'       =>     $url,
			              'id_user'   =>     $id_user_recever
			            );
			            
			            $not = $this->crud_model->insert_notification($notification);

		            }

		            
	              
	                # code...
	            }
   			}
   			else{

   			}


	    	$this->session->set_flashdata('message', "Félécitation!!! Votre inscription est encours de traitement 🆗, vous recevrez une notification de confirmation dans un instant!");
	    	redirect('home/formation/'.$idf, 'refresh');
	    	

   		}
	    
	  }

	  // pagination de articles
    function pagination_access_our_formation_latest()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_formations_latest();
	  $config["per_page"] = 3;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary btn-sm">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_details_pagination_formations_latest($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}


	// auto complete text roffres d'emplois
	function search_auto_offres_articles()
	{
	    echo $this->crud_model->recherche_data_auto_articles($this->uri->segment(3));
	}

	/*
	script pour nos photos
	**********************
	=========================
	=============================
	*/
	 // pagination de galery de la pages
	function pagination__galeries()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_galeries();
	  $config["per_page"] = 9;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-info btn-sm">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info btn-sm">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_pagination_galery_page($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}


	/*
	script pour nos photos evenement
	**********************
	=========================
	=============================
	*/
	 // pagination de galery de la pages
	function pagination__galeries2()
	{

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_galeries2();
	  $config["per_page"] = 9;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-info btn-sm">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info btn-sm">&lt;&lt;</i>';
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
	   'country_table'   => $this->crud_model->fetch_pagination_galery_page2($config["per_page"], $start)
	  );
	  echo json_encode($output);
	}




















}


?>
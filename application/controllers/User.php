<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class user extends CI_Controller
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
    if(!$this->session->userdata('id'))
    {
          redirect(base_url().'login');
    }
    $this->load->library('form_validation');
    $this->load->library('encryption');
    $this->load->library('pdf');
    $this->load->model('crud_model'); 

    $this->load->helper('url');

    $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
    $this->connected = $this->session->userdata('id');

    $this->email_sites = $this->crud_model->get_email_du_site();
    $this->logos_sites = $this->crud_model->get_logo_du_site();

    // pour les envoies des sms 
    $this->num_dev  = $this->crud_model->get_info_du_site("tel3");
    $this->token_sms  = $this->crud_model->get_info_du_site("token_sms");

    /*
    je script pour les galeries du contrat d'expiration
  
    // $this->crud_model->show_galery_expire();
    $this->crud_model->show_galery_expire();
    */



  }

  function index(){
    $data['title']="mon profile entreprise";
    $this->load->view('backend/user/templete_admin', $data);
      // $this->load->view('backend/user/templete_admin', $data);
  }

  function module(){
    $data['title']="Ajout de module";
    $data['users'] = $this->crud_model->fetch_connected($this->connected);
    $this->load->view('backend/user/module', $data);
  }


   function zoom(){
      $data['title']="Paramètrage zoom!";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['variable']  = $this->crud_model->Select_all_news();
      $this->load->view('backend/user/zoom', $data);
    }

    function calendrier(){
      $data['title']="Calendrier d'activité pour une réunion";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['variable']  = $this->crud_model->Select_all_news();
      $this->load->view('backend/user/zoom_calendar', $data);
    }


    

    function invite(){
      $data['title']="Paramètrage des invités zoom!";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['variable']  = $this->crud_model->Select_all_news();
      $data['roles']      = $this->crud_model->Select_formations_ok("idrole","role");
      $data['conference']     = $this->crud_model->Select_formations_ok("idconference","conference");
      $this->load->view('backend/user/invite_zoom', $data);
    }

    function reunion(){
      $data['title']="Créer une reunion";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['variable']  = $this->crud_model->Select_all_news();
      $data['roles']      = $this->crud_model->Select_formations_ok("idrole","role");
      $data['conference']     = $this->crud_model->Select_formations_ok("idconference","conference");
      $this->load->view('backend/user/reunion', $data);
    }

    function joinmetting($param =''){
      $data['title']="Rejoindre la reunion";
      $data['domain']=$param;

      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['variable']  = $this->crud_model->Select_all_news();
      $data['roles']      = $this->crud_model->Select_formations_ok("idrole","role");
      $data['conference']     = $this->crud_model->Select_formations_ok("idconference","conference");
      $this->load->view('backend/user/joinmetting', $data);
    }





  function sms(){
    $data['title']="Paramètrage de l'inscription aux formations";
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
    $data['formations']     = $this->crud_model->Select_formations_ok("idf","profile_inscription");
    $data['annees']     = $this->crud_model->Select_formations_ok("annee","profile_inscription");

    $data['formateurs']   = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

    $data['entreprises']  = $this->crud_model->statistiques_nombre_tag_by_column("users", 3);

    $data['admins']     = $this->crud_model->statistiques_nombre_tag_by_column("users", 1);
    $data['comptables']   = $this->crud_model->statistiques_nombre_tag_by_column("users", 4);

    $data['roles']      = $this->crud_model->Select_formations_ok("idrole","role");


    $this->load->view('backend/user/sms', $data);
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
        $this->load->view('backend/user/message', $data);
      }

      function chat_admin($param1, $param2){
        $data['title']="Discution instantané";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
        $data['id_user']= $param1;
        $data['id_recever']= $param2;
        $data['id_recever2']= $param2;
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/user/messagerie', $data);
    }

    function chat_admin2($param1, $param2){

      $title_job = $this->crud_model->get_name_groupe($param2);
      
        $data['title']="le groupe ".$title_job." Discution instantanée";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();

        $data['goupe_name']= $title_job;

        $data['id_user']= $param1;
      $data['code_groupe']= $param2;

        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/user/chat_groupe', $data);
    }

    function detail_users_profile($param1=''){
      $data['title']="Détail de profile utilisateur";
      $data['user_search'] =$param1;
      $data['users'] = $this->crud_model->fetch_connected($param1);
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/detail_users_profile', $data);
    }

  

  function dashbord(){
      $data['title']="Tableau de bord";
        // $data['nombre_location'] = $this->crud_model->statistiques_nombre("profile_location");


        $data['nombre_projet'] = $this->crud_model->statistiques_nombre("projet");

        $data['nombre_startup'] = $this->crud_model->statistiques_nombre("entreprise");

        $data['nombre_coach'] = $this->crud_model->statistiques_nombre_tag_by_column("users", 2);

        $data['nombre_visiteur'] = $this->crud_model->statistiques_nombre("padding_users");
        $this->load->view('backend/user/dashbord', $data);
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
        $this->load->view('backend/user/entreprise', $data);
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

        $this->load->view('backend/user/profile_entrep', $data);

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
        $this->load->view('backend/user/profile_entrep', $data);

      }

    }




  function profile(){
      $data['title']="mon profile entreprise";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/user/viewx', $data);
      $this->load->view('backend/user/profile', $data);
    }

    function basic(){
        $data['title']="Information basique de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/user/basic', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/user/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/user/basic_secure', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/user/notification', $data);
    }

    function client(){
    $data['title']="Paramétrage  des clients";
    $data['entreprises']  = $this->crud_model->Select_entreprises();
    $this->load->view('backend/user/client', $data);    
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
            $output['fullname']   = $row->fullname;
            $output['tel']      = $row->tel;
            $output['email']    = $row->email;
            $output['adresse']    = $row->adresse;
            
           
       }  
       echo json_encode($output);  
  }  


  function operation_client(){

      $insert_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'      =>     $this->input->post('tel'),
           'email'      =>     $this->input->post('email'),
           'adresse'    =>     $this->input->post('adresse')
    );  

      $requete=$this->crud_model->insert_client($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_client(){

      $updated_data = array(  
           'fullname'   =>     $this->input->post('fullname'),
           'tel'      =>     $this->input->post('tel'),
           'email'      =>     $this->input->post('email'),
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
            $output['montant']      = $row->montant;
            $output['idclient']     = $row->idclient;
            $output['idchambre']    = $row->idchambre;
            $output['date_debit']     = $row->date_debit;
            $output['date_fin']     = $row->date_fin;
       }  
       echo json_encode($output);  
  }  

  function fetch_single_location_2()  
  {  
       $output = array();  
       $data = $this->crud_model->fetch_single_location_2($_POST["idl"]);  
       foreach($data as $row)  
       {  
            $output['montant']      = $row->montant;
            $output['idclient']     = $row->idclient;
            $output['idchambre']    = $row->idchambre;

            $output['date_debit'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));
            $output['date_fin'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23));
           
            $output['nom']        = $row->nom;
            $output['fullname']     = $row->fullname;
            $output['adresse']      = $row->adresse;

            $output['tel']        = $row->tel;
            $output['email']      = $row->email;
            $output['montant']      = $row->montant;

       }  
       echo json_encode($output);  
  }  


  function operation_location(){

      $insert_data = array(  
           'montant'      =>     $this->input->post('montant'),
           'idchambre'    =>     $this->input->post('idchambre'),
           'idclient'     =>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'     =>     $this->input->post('date_fin')
    );  

      $requete=$this->crud_model->insert_location($insert_data);
      echo("Ajout information avec succès");
      
  }

  function modification_location(){

      $updated_data = array(  
           'montant'      =>     $this->input->post('montant'),
           'idchambre'    =>     $this->input->post('idchambre'),
           'idclient'     =>     $this->input->post('idclient'),
           'date_debit'     =>     $this->input->post('date_debit'),
           'date_fin'     =>     $this->input->post('date_fin')
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
         redirect('user/basic', 'refresh');
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
           redirect('user/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('user/basic_image', 'refresh');

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
                   redirect('user/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('user/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('user/basic_secure', 'refresh');
       }
     
  } 

  function view_1($param1='', $param2='', $param3=''){
      
    if($param1=='display_delete') {
      $this->session->set_flashdata('message', 'suppression avec succès ');
      $query = $this->crud_model->delete_notifacation_tag($param2);
      redirect('user/notification');
    }

    if($param1=='display_delete_message') {

      $query = $this->crud_model->delete_message_tag($param3);
      redirect('user/message/'.$param2);
    }
    else{

    }

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
     'country_table'   => $this->crud_model->fetch_details_pagination_candidat_coach($config["per_page"], $start)
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
                                    <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
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
                                       <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
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
                                    <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
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
                                       <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
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
                                    <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
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
                                       <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
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
                                    <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary">'.substr($row->nom, 0,29).'</a>
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
                                       <a href="'.base_url().'user/detail_entreprise/'.$row->ceo.'" class="text-primary text-center"><i class="fa fa-eye mr-1"></i> voir son profile</a>
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
            redirect(base_url() . 'user/newprojet', 'refresh');

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
            redirect(base_url() . 'user/operationProjet/detail/'.$codeP, 'refresh');

        }
        elseif ($param1 =="suppression") {
          $codeP = $param2;
          $query = $this->crud_model->delete_projet($codeP);
            $this->session->set_flashdata('message' , 'Suppression avec succès ');
            redirect(base_url() . 'user/evaluation', 'refresh');
        }
        elseif ($param1 =="detail") {
          $codeP = $param2;

          $data['title']="Modification projet d'entreprise!";
          $data['users'] = $this->crud_model->fetch_connected($this->connected);
          $data['student_id'] = $this->connected;
          $data['codeP'] = $codeP;
          $data['projects'] = $this->crud_model->fetch_projet_tag_by_code($codeP);

          $this->load->view('backend/user/edit_project', $data);
        }
        else{

          $this->session->set_flashdata('message2' , 'Opération non trouvée!!!!');
          redirect(base_url() . 'user/newprojet', 'refresh');
        }



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

             $users_cool = $this->crud_model->get_info_user();
              foreach ($users_cool as $key) {

                
                  $id_user_recever = $key['id'];

                  if ($key['idrole'] == 1) {
                    $url ="admin/compterendu";
                      $nom   = $this->crud_model->get_name_user($id_user);
                      // $nom = $this->input->post('titre');
                      $message ="Un compte rendu,  ".$nom." vient de faire: ".$this->input->post('titre');

                      $notification = array(
                        'titre'     =>    "Nouveau compte rendu",
                        'icone'     =>    "fa fa-tag",
                        'message'   =>     $message,
                        'url'       =>     $url,
                        'id_user'   =>     $id_user_recever
                      );
                      
                      $not = $this->crud_model->insert_notification($notification);

                  }

                  # code...
              }


            $this->session->set_flashdata('message' , 'Enregistrement avec succès ');
            redirect(base_url() . 'user/compterendu', 'refresh');


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
            redirect(base_url() . 'user/operationCompteRendu/detail/'.$codeP, 'refresh');

        }
        elseif ($param1 =="suppression") {
          $codeP = $param2;
          $query = $this->crud_model->delete_compterendu($codeP);
            $this->session->set_flashdata('message' , 'Suppression avec succès ');
            redirect(base_url() . 'user/compterendu', 'refresh');
        }
        elseif ($param1 =="detail") {
          $codeP = $param2;

          $data['title']="Modification de compte rendu!";
          $data['users'] = $this->crud_model->fetch_connected($this->connected);
          $data['id_user'] = $this->connected;
          $data['codeP'] = $codeP;
          $data['projects'] = $this->crud_model->fetch_compterendu_tag_by_code($codeP);

          $this->load->view('backend/user/edit_compterendu', $data);
        }
        else{

          $this->session->set_flashdata('message2' , 'Opération non trouvée!!!!');
          redirect(base_url() . 'user/compterendu', 'refresh');
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
     
      $this->load->view('backend/user/galery', $data);
  }

  function canavas($param1=''){
      $data['title']="Busness model canevas!";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['student_id'] = $param1;

      $data['link_canavas1'] = $this->crud_model->show_detail_link_tag($param1);
      $data['link_canavas2'] = $this->crud_model->show_detail_link_tag2($param1);

      $this->load->view('backend/user/canavas', $data);
  }

  function swot($param1=''){
      $data['title']="swot de mon busness!";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['student_id'] = $param1;

      $data['swot'] = $this->crud_model->show_detail_swot_tag($param1);
      $data['swot2'] = $this->crud_model->show_detail_swot_tag2($param1);

      $this->load->view('backend/user/swot', $data);
  }

  function evaluation(){
        $data['title']="Liste entière de projets startups";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $data['padding'] = $this->crud_model->fetch_all_projects();

        $this->load->view('backend/user/evaluation', $data);
  }

  function visiteur(){
        $data['title']="Les visiteurs en attente d'activation";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $data['padding'] = $this->crud_model->fetch_all_visiteur();

        $this->load->view('backend/user/visiteur', $data);
  }

  function compterendu(){
      $data['title']="Liste entière de mes comptes rendus";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['padding'] = $this->crud_model->fetch_tag_compte_rendu($this->connected);

      $this->load->view('backend/user/compterendu', $data);

  }

  function newcompterendu(){
      $data['title']="Ajout d'un compte rendu";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site(); 
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      $data['padding'] = $this->crud_model->fetch_all_projects();

      $this->load->view('backend/user/newcompterendu', $data);

  }

  function pdf_projet($param1=''){
     $customer_id = "Appel à candidature de projet ".$param1;
     $html_content = '';
     $html_content .= $this->crud_model->fetch_candidature_projet_coach($param1);

     echo($html_content);
     // $this->load->library('pdf');
     // $this->pdf->loadHtml($html_content);
     // $this->pdf->render();
     // $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
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
            redirect(base_url() . 'user/canavas/'.$student_id, 'refresh');


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
            redirect(base_url() . 'user/canavas/'.$student_id, 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_link_canavas2($param2);

            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'user/canavas/'.$param3, 'refresh');

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
            redirect(base_url() . 'user/swot/'.$student_id , 'refresh');

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
            redirect(base_url() . 'user/swot/'.$student_id , 'refresh');

        }

        if ($param1 == 'delete') 
        {
            
            $query = $this->crud_model->delete_swot_canavas2($param2);
            $this->session->set_flashdata('message' , 'suppression avec succès ');
            redirect(base_url() . 'user/swot/'.$param3 , 'refresh');

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

            if($query2 > 0)
            {

                    $users_cool = $this->crud_model->get_info_user();
                    foreach ($users_cool as $key) {

                        if ($key['idrole'] == 1) {
                            $url ="admin/users";

                            $id_user_recever = $key['id'];

                            $nom   = $this->crud_model->get_name_user($this->connected);
                            // $nom = $this->input->post('first_name');
                            $message =$nom." Vient d'activer un visiteur ";

                            $notification = array(
                              'titre'     =>    "Nouvelle acceptation",
                              'icone'     =>    "fa fa-group",
                              'message'   =>     $message,
                              'url'       =>     $url,
                              'id_user'   =>     $id_user_recever
                            );
                            
                            $not = $this->crud_model->insert_notification($notification);

                        }

                        # code...
                    }

                    $this->session->set_flashdata('message', "Félicitation!!!! ".$key['first_name']." vient d'intégrer l'incubateur avec succès!!!📘");


                    $this->delete_visiteur($param1);
                    redirect('user/visiteur','refresh');
            }

            // fin

          }
        }
        else{
          redirect('user/visiteur','refresh');
        }

        # code...
      }
      else{
        redirect('user/visiteur','refresh');
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

              redirect('user/visiteur','refresh');
              // fin
            }

          }
          else{
            redirect('user/visiteur','refresh');
          }
          # code...
          
        }
        else{

          redirect('user/visiteur','refresh');

        }

        
      
    }

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
     'country_table'   => $this->crud_model->entreprise_fetch_pagination_to_users_count_user($config["per_page"], $start)
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
              $url = base_url().'user/detail_users_profile/'.$row->id;
                  $etat = '<div class="col-md-12"><span class="message">
                    <a href="'.base_url().'user/chat_admin/'.$id.'/'.$row->id.'">
                  &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                      </a> 
                    </span></div>';
          }
          else{
                  $url = base_url().'user/profile';
                  $etat = '

                  <span class="message">
                    <a href="'.base_url().'user/profile" class="text-warning">
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
     'country_table'   => $this->crud_model->Comptable_fetch_online_connected_user($config["per_page"], $start)
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
            $url= $url = base_url().'user/detail_users_profile/'.$row->id;
            $etat = '<div class="col-md-12"><span class="message">
                <a href="'.base_url().'user/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span></div>';
          }
          else{
              $url = $url = base_url().'user/profile';
              $etat = '

              <div class="col-md-12"><span class="message">
                <a href="'.base_url().'user/profile" class="text-warning">
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
        
        redirect('user/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('user/chat_admin/'.$param1.'/'.$param2);
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
      redirect('user/chat_admin2/'.$param1.'/'.$param2);
    }
    else{
      redirect('user/chat_admin2/'.$param1.'/'.$param2);
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

        $data['annee']      = $year;
        $data['code']       = $code;
        $data['id_user']    = $this->connected;
        $data['titre']      = $this->input->post('titre');
        $data['description']  = $this->input->post('description');

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

        
        // $data['id_user']    = $this->connected;
        $data['titre']      = $this->input->post('titre');
        $data['description']  = $this->input->post('description');

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
              $output['titre']      = $row->titre;
            $output['description']  = $row->description;

            $output['first_name']       = $row->first_name;
            $output['last_name']      = $row->last_name;

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
    $config["total_rows"] = $this->crud_model->count_all_view_module_user($this->connected);
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
     'country_table'   => $this->crud_model->fetch_details_view_module_ok_user($config["per_page"], $start, $this->connected)
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
    $data = $this->crud_model->fetch_data_search_module_user_tag($query, $this->connected);
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
                Action
              </td>

              <td>
                Modele
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
          if ($row->id_user == $this->connected) {
            # code...
             $btn1 = '<button type="button" name="update" idmodule="'.$row->idmodule.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';

             $btn2 = '<button type="button" name="delete" idmodule="'.$row->idmodule.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>'; 
          }
          else{

            $btn1 = '<button type="button" name="delete" idmodule="'.$row->idmodule.'" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>'; 
            $btn2 = '<a download="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'" href="'.base_url().'upload/module/cours/fichier/'.$row->fichier.'"  idmodule="'.$row->idmodule.'" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>';

          }
          

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



  /*
  // script pour les sms 
  /*====================
  *
  */
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
                //  token:".$token_sms);

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
            'tel'   => $tel,
            'message'   => $message,
            'etat'  =>  'ok'
          );
          $query = $this->crud_model->insert_message_sender($data);
          echo("📞 ".$tel." envoyé 🆗");
        }
        else{

          $data = array(
            'tel'   => $tel,
            'message'   => $message,
            'etat'  =>  'faux'
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
                //  token:".$token_sms);

                if ($message !='') {
                  # code...
                  $this->envoieSMS($to, $message, $num_dev, $token_sms);
                  $data = array(
                    'tel'   => $to,
                    'message'   => $message,
                    'etat'  =>  'ok'
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
              $output['nom']            = $row->nom;
              $output['date_debit']       = $row->date_debit;
              $output['date_fin']         = $row->date_fin;
              $output['heure_debit']        = $row->heure_debit;
              $output['heure_fin']        = $row->heure_fin;
              
              $output['first_name']       = $row->first_name; 
              $output['last_name']        = $row->last_name;
              $output['telephone']        = $row->telephone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_conference(){

      $id_user  = $this->connected;
      $nom  = $this->input->post('nom');
      
      $codeReservation = str_shuffle(substr("0123456789", 0,10));

      $query = $this->crud_model->fetch_single_conference_in_stadium($id_user, $nom);
      if ($query > 0) {
        # code...
        echo "echec!!!";
      }
      else{

        $insert_data = array(  
               'nom'               =>     $this->input->post('nom'),
               'date_debit'          =>     $this->input->post('date_debit'),
               'heure_debit'         =>     $this->input->post('heure_debit'),
               'date_fin'            =>     $this->input->post('date_fin'),
               'heure_fin'           =>     $this->input->post('heure_fin'),
               'id_user'         =>     $id_user  
        );  

        $requete=$this->crud_model->insert_conference($insert_data);
        echo("Ajout information avec succès");
      }

        
    }

    function modification_conference(){

        $updated_data = array(  
             'nom'               =>     $this->input->post('nom'),
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
    $config["total_rows"] = $this->crud_model->count_all_conferences_tug($this->connected);
    $config["per_page"] = 3;
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
     'country_table'   => $this->crud_model->fetch_detail_conference_tug($config["per_page"], $start, $this->connected)
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

            if ($row->id_user != $this->connected) {
              # code...
              $btn1 = '<button type="button" name="update" idconference="'.$row->idconference.'" class="btn btn-warning btn-circle btn-sm mr-2"><i class="fa fa-camera"></i></button>';
              $btn2 = '<button type="button" name="delete" idconference="'.$row->idconference.'" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-video"></i></button>';
            }
            else{
              $btn1 = ' <button type="button" name="update" idconference="'.$row->idconference.'" class="btn btn-warning btn-circle btn-sm update mr-2"><i class="fa fa-edit"></i></button> ';
              $btn2 = '<button type="button" name="delete" idconference="'.$row->idconference.'" class="btn btn-danger btn-circle btn-sm delete"><i class="fa fa-trash"></i></button>';
            }
            

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
                '.$btn1.' 
              </td>
              <td>
                '.$btn2.' 
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
              $output['nom']            = $row->nom;
              $output['date_debit']       = $row->date_debit;
              $output['date_fin']         = $row->date_fin;
              $output['heure_debit']        = $row->heure_debit;
              $output['heure_fin']        = $row->heure_fin;
              
              $output['first_name']       = $row->first_name; 
              $output['last_name']        = $row->last_name;
              $output['telephone']        = $row->telephone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_invite(){

      $id_user  = $this->connected;
      $idconference   = $this->input->post('idconference');
      
      $codeReservation = str_shuffle(substr("0123456789", 0,10));

      $query = $this->crud_model->fetch_single_invite_in_stadium($id_user, $idconference);
      if ($query > 0) {
        # code...
        echo "echec!!!";
      }
      else{

        $insert_data = array(  
               'idconference'        =>     $this->input->post('idconference'),
               'id_user'         =>     $id_user  
        );  

        $requete=$this->crud_model->insert_invite($insert_data);
        echo("Ajout information avec succès");
      }

        
    }

    function modification_invite(){
        $id_user  = $this->connected;
        $updated_data = array(  
            'idconference'        =>     $this->input->post('idconference'),
          'id_user'         =>     $id_user  
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
            $output['first_name']     = $row->first_name;  
            $output['last_name']    = $row->last_name; 
            $output['email']      = $row->email; 
            $output['date_nais']    = $row->date_nais; 
            $output['telephone']    = $row->telephone; 
            $output['full_adresse']   = $row->full_adresse; 

            $output['sexe']       = $row->sexe;
            
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

              $website    =   $this->email_sites;
                $id_user    = $id[$count];
                $url      =   htmlentities($this->input->post('link'));
                $idconference   =   $this->input->post('idconference');

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
                   'id_user'         =>     $id_user  
            );  

            $query=$this->crud_model->insert_invite($insert_data);

            // invitation
                  if ($query > 0) {

                    $nom_respect  = $this->crud_model->get_name_user($this->connected);

                      $nom        = $this->crud_model->get_name_user($id_user);
                      $idrole       = $this->crud_model->get_role_user($id_user);
                      $telephone      = $this->crud_model->get_telephone_user($id_user);

                      if ($idrole == 1) {
                        # code...
                        $url      ="admin/joinmetting/". $url;
                      }
                      elseif ($idrole == 2) {
                        # code...
                        $url      ="user/joinmetting/". $url;
                      }
                      elseif ($idrole == 3) {
                        # code...
                        $url      ="entreprise/joinmetting/". $url;
                      }
                      elseif ($idrole == 4) {
                        # code...
                        $url      ="comptable/joinmetting/". $url;
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
    // fin script 






  /*
  * mise à jour de ,es scripts de la présence
  *===========================================
  *===========================================
  */

  function presence(){
    $data['title']="Gestion de présence pour les entreprises";
    $data['users']  = $this->crud_model->Select_etreprise();
    $data['dates']  = $this->crud_model->fetch_categores_dates_presence();
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/user/presence', $data);
  }

  function qrcodepresence(){

    $data['title']  = "Gestion de présence avec la technologie qrcode";
    $data['users']  = $this->crud_model->Select_etreprise();
    $data['dates']  = $this->crud_model->fetch_categores_dates_presence();
    $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
    $this->load->view('backend/user/qrcodepresence', $data);
  }

  function filtrage_presence_ap(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['title']="Filtre pour la gestion de présence des entreprises";
        $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();


        $data['users']  = $this->crud_model->Select_etreprise();
        $data['dates']  = $this->crud_model->fetch_categores_dates_presence();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param2,$param1);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2);

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2);

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);

        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param1,$param2);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);
        }

        $this->load->view('backend/user/filtrage_presence_ap', $data);

  }

  function impression_pdf_presence_filtrage($param1='', $param2=''){
       $customer_id = "liste de présence par fultrage du ".$param1."jusqu'au ".$param2;
       
       $html_content = $this->crud_model->fetch_single_details_presence_filtre($param1,$param2);

       // echo($html_content);

       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("liste".$customer_id.".pdf", array("Attachment"=>0));
  }

  function statPresenceEntreprise(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');
         $data['title']="Statistique sur la présence des entreprises";

        

        $data['users']  = $this->crud_model->Select_etreprise();
        $data['dates']  = $this->crud_model->fetch_categores_dates_presence();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;

          $data['title']="Statistique sur la présence des entreprises du ".nl2br(substr(date(DATE_RFC822, strtotime($param1)), 0, 23))." au ".nl2br(substr(date(DATE_RFC822, strtotime($param2)), 0, 23));
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param2,$param1);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2);

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2);

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);

        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;

          $data['title']="Statistique sur la présence des entreprises";
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param1,$param2);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);
        }

        $this->load->view('backend/user/statPresenceEntreprise', $data);
    }


  // script de presence
    function fetch_presence(){  

         $fetch_data = $this->crud_model->make_datatables_presence();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '
              <input type="checkbox" class="delete_checkbox2" value="'.$row->id_user.'" />
              ';  
             
              $sub_array[] = nl2br(substr($row->first_name .' '.$row->last_name, 0,50)).' 
              ...'; 
              $sub_array[] = nl2br(substr($row->sexe, 0,10)).'';  
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->jour)), 0, 23)); 
              
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
             
              $sub_array[] = '<a href="'.base_url().'user/pdf_presence_entreprise/'.$row->id_user.'" type="button" name="pdf"  class="btn btn-primary btn-sm pdf"><i class="fa fa-print"></i></a>'; 

              $sub_array[] = '<button type="button" name="delete" id="'.$row->id_user.'" class="btn btn-warning btn-sm update"><i class="fa fa-user"></i></button>'; 
               
              $sub_array[] = '<button type="button" name="delete" idp="'.$row->idp.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_presence(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_presence(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_presence()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_presence($_POST["idp"]);  
         foreach($data as $row)  
         {  
              $output['jour']         = $row->jour;
              $output['id_user']      = $row->id_user; 
              $output['id']           = $row->id; 
             
         }  
         echo json_encode($output);  
    }  


    function operation_presence(){
        
        
        $id_user  = $this->input->post('id_user');
        if ($id_user !='') {
          # code...

          $this->AjoutPresence($id_user);
        }
        else{
          echo("Impossible de faire l'opération");
        }
        
    }

    function operation_presence_qrcode(){
        $id_user  = $this->input->post('id_user');
        if ($id_user !='') {
          # code...

          $this->AjoutPresence($id_user);
        }
        else{
          echo("Impossible de faire l'opération");
        }
    }

    function AjoutPresence($id_user_presence){
        
        $to_day =  $this->crud_model->show_day();
        $name_day;
        $jour = $this->crud_model->tester_de_jour($to_day);

        $id_user  = $id_user_presence;

        foreach ($jour->result_array() as $key) {
            $name_day= $key['nom_jour'];

            if ($name_day=="Saturday" || $name_day=="Sunday") {

              echo "le samedi et le dimanche sont exclus pour faire les opérations";            
            }
            else{

                  // echo($name_day.' id_user:'.$id_user);
                  // echo("Ajourd'hui le ".$to_day);

                  $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                  if ($prsence_par_jour > 0) {
                    echo "🗽 la présence existe déjà 🗽";
                  }
                  else{

                      try {

                        $insert_data = array(  
                           'id_user'     =>     $id_user,
                           'jour'        =>     $to_day
                        );

                        $requete=$this->crud_model->insert_presence($insert_data);
                        echo("Présence ajoutée avec succès");
                                
                      } catch (PDOException $e) {
                        echo("impossible ".$e->getMessage());
                      }

                  }
              
            }
        }
       
        
    }




   

    function supression_presence(){

        $this->crud_model->delete_presence($this->input->post("idp"));
        echo("suppression avec succès");
      
    }
 
    // fin script presence 

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
              $output['date_nais'] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_nais)), 0, 23)); 
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

    function multiplePresence()
    {
        if($this->input->post('checkbox_value'))
        {
           $id = $this->input->post('checkbox_value');
           for($count = 0; $count < count($id); $count++)
           {

                $id_user =$id[$count];
                //appel de la fonction pour insertion opération
                $this->AjoutPresence($id_user);
                
               
           }

        }
    }

    function pdf_presence_entreprise($id_user){
       $customer_id = "liste de présence de la start-up";
       $html_content = "";
       $html_content .= $this->crud_model->fetch_single_presence_apprenant($id_user);

       // echo($html_content);

       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("liste de presence de la start-up".$customer_id.".pdf", array("Attachment"=>0));
    }

    function edition(){
      $data['title']="Paramétrage  des éditions pour formation";
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/edition', $data);  
    }

    function formation(){
      $data['title']="Paramétrage  des formations";
      $data['editions']  = $this->crud_model->Select_editions();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/formation', $data);  
    }

     function rubrique(){
      $data['title']        = "Paramétrage  des rubriques";
      $data['formations']   = $this->crud_model->fetch_membre_formation();
      $data['editions']     = $this->crud_model->fetch_membre_edition();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/rubrique', $data);
    }

    function question(){
      $data['title']      ="Paramétrage  des questions";
      $data['editions']  = $this->crud_model->Select_editions();
      $data['formations']   = $this->crud_model->fetch_membre_formation();
      $data['rubriques']   = $this->crud_model->fetch_membre_rubrique();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/question', $data);
    }

    function reponse(){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();
      $data['reponses']   = $this->crud_model->fetch_membre_reponses();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
      $this->load->view('backend/user/reponse', $data);
    }

    function teste_suggestion(){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();



      if ($this->input->post('idedition')) {

        $token = $this->input->post('idedition');
        echo($token);
        # code...
      }
      else{
        $this->load->view('backend/admin/teste_suggestion', $data);
      }

    }

    // requete de cours
    function fetch_formation_requete(){
      if($this->input->post('idedition'))
      {
        echo $this->crud_model->fetch_formations_requete($this->input->post('idedition'));
      }

    }

     // requete de cours
    function fetch_rubriques_requete(){
      if($this->input->post('idformation'))
      {
        echo $this->crud_model->fetch_rubrique_requete($this->input->post('idformation'));
      }

    }

    function teste_suggestion_param($param1=''){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();
      $data['contact_info_site']  = $this->crud_model->Select_contact_info_site();


      $param1 = $this->input->post('token');
     
      if ($param1 !='') {

        $token = $param1;
        // tester si existe
        $question_one = $this->crud_model->fetch_membre_question_param_one($token);
        // fin de tester
        $data['questions'] = $this->crud_model->fetch_membre_question_param($token);
        $data['question_one'] = $this->crud_model->fetch_membre_question_param_one($token);
        $data['token'] = $token;
        if ($question_one->num_rows() >0) {
          $this->load->view('backend/admin/test_sugestion_valider', $data);
        }
        else{
          $result ="Token incorect!!!";
          $this->session->set_flashdata('message2',$result);
          $this->load->view('backend/admin/teste_suggestion', $data);
        }
        
      }
      else{
        $result ="Veillez completer le token!!!";
        $this->session->set_flashdata('message2',$result);
        $this->load->view('backend/admin/teste_suggestion', $data);
      }


    }



    // script de formation
      function fetch_formation(){  

           $fetch_data = $this->crud_model->make_datatables_formation();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                 $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->image.'" class="img-thumbnail" width="50" height="35" />'; 
                $sub_array[] = nl2br(substr($row->nom, 0,50)).'...';
                $sub_array[] = nl2br(substr($row->edition, 0,35)).'...';
                $sub_array[] = nl2br(substr($row->description, 0,50));  
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idformation="'.$row->idformation.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idformation="'.$row->idformation.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_formation(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_formation(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_formation()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_formation($_POST["idformation"]);  
           foreach($data as $row)  
           {  
                $output['nom']            = $row->nom;
                $output['idedition']        = $row->idedition;
                  
                $output['description']    = $row->description;  
                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
               
           }  
           echo json_encode($output);  
      }  


      function operation_formation(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
               'nom'            =>     $this->input->post('nom'),  
               'idedition'      =>     $this->input->post('idedition'),  
               'description'    =>     $this->input->post("description"), 
               'image'          =>     $this->upload_image_tbl_info()
          );    
          }  
          else  
          {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
               'nom'            =>     $this->input->post('nom'),
               'idedition'      =>     $this->input->post('idedition'),   
               'description'    =>     $this->input->post("description"), 
               'image'          =>     $user_image
          );   
          }

        $requete=$this->crud_model->insert_formation($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_formation(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
               'nom'            =>     $this->input->post('nom'),
               'idedition'      =>     $this->input->post('idedition'),   
               'description'    =>     $this->input->post("description"), 
               'image'          =>     $this->upload_image_tbl_info()
          );    
          }  
          else  
          {   
               $updated_data = array(  
               'nom'            =>     $this->input->post('nom'),
               'idedition'      =>     $this->input->post('idedition'),   
               'description'    =>     $this->input->post("description")
          );   
          }
  
          
          $this->crud_model->update_formation($this->input->post("idformation"), $updated_data);

          echo("modification avec succès");
      }

      function supression_formation(){
 
          $this->crud_model->delete_formation($this->input->post("idformation"));
          echo("suppression avec succès");
        
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

    // fin script formation 


    // script de edition
      function fetch_edition(){  

           $fetch_data = $this->crud_model->make_datatables_edition();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = nl2br(substr($row->nom, 0,35)).'...'; 
               
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idedition="'.$row->idedition.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idedition="'.$row->idedition.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_edition(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_edition(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_edition()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_edition($_POST["idedition"]);  
           foreach($data as $row)  
           {  
                $output['nom']    = $row->nom; 

               
           }  
           echo json_encode($output);  
      }  


      function operation_edition(){

          $insert_data = array(  
             'nom'            =>     $this->input->post('nom')
      );  

        $requete=$this->crud_model->insert_edition($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_edition(){
  
          $updated_data = array(  
             'nom'            =>     $this->input->post('nom')
      );
  
          $this->crud_model->update_edition($this->input->post("idedition"), $updated_data);

          echo("modification avec succès");
      }

      function supression_edition(){
 
          $this->crud_model->delete_edition($this->input->post("idedition"));
          echo("suppression avec succès");
        
      }
    // fin script edition

      // script de rubrique
      function fetch_rubrique(){  

           $fetch_data = $this->crud_model->make_datatables_rubrique();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->active == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idr="'.$row->idr.'" class="btn btn-success btn-sm desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idr="'.$row->idr.'" class="btn btn-danger btn-sm  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat;  

                $sub_array[] = nl2br(substr($row->nomr  , 0,30)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 
                $sub_array[] = nl2br(substr($row->token , 0,20)).' ...';

                $sub_array[] = '<button type="button" name="update" idr="'.$row->idr.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idr="'.$row->idr.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_rubrique(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_rubrique(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_rubrique()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_rubrique($_POST["idr"]);  
           foreach($data as $row)  
           {  
                $output['idedition']        = $row->idedition;
                $output['idformation']      = $row->idformation;
                $output['nomr']             = $row->nomr;
                $output['token']          = $row->token;
               
           }  
           echo json_encode($output);  
      }  


      function operation_rubrique(){

          $insert_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomr'                 =>     $this->input->post('nomr'),
             'token'                =>     $this->input->post('token')   
          ); 

        $requete=$this->crud_model->insert_rubrique($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_rubrique(){

          $updated_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomr'                 =>     $this->input->post('nomr'),
             'token'                =>     $this->input->post('token') 
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("modification avec succès");
      }

      function activation_rubrique(){

          $updated_data = array(  
             'active'  =>     1
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("l'opération est activée avec succès 👌");
      }

      function desactivation_rubrique(){

          $updated_data = array(  
             'active'  =>     0
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("🏧l'opération est desactivée avec succès🏧");
      }

      function supression_rubrique(){
 
          $this->crud_model->delete_rubrique($this->input->post("idr"));
          echo("suppression avec succès");
        
      }
      // fin de script des rubrique 


      // script de question
      function fetch_question(){  

           $fetch_data = $this->crud_model->make_datatables_question();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                
                $sub_array[] = nl2br(substr($row->nomq  , 0,50)).' ...';
                $sub_array[] = nl2br(substr($row->nomr  , 0,25)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 

                $sub_array[] = '<button type="button" name="update" idq="'.$row->idq.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idq="'.$row->idq.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  

           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_question(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_question(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_question()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_question($_POST["idq"]);  
           foreach($data as $row)  
           {  
                $output['idr']        = $row->idr;
                $output['nomq']       = $row->nomq;
               
           }  
           echo json_encode($output);  
      }  


      function operation_question(){

          $insert_data = array(  
             'nomq'               =>     $this->input->post('nomq'),
             'idr'                =>     $this->input->post('idr')   
          ); 

        $requete=$this->crud_model->insert_question($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_question(){

          $updated_data = array(  
              'nomq'               =>     $this->input->post('nomq'),
              'idr'                =>     $this->input->post('idr') 
          ); 

          $this->crud_model->update_question($this->input->post("idq"), $updated_data);
          echo("modification avec succès");
      }

      function supression_question(){
 
          $this->crud_model->delete_question($this->input->post("idq"));
          echo("suppression avec succès");
        
      }

      function pagination_questions()
      {

        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = "#";
        $config["total_rows"] = $this->crud_model->count_all_view_questions();
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
         'country_table'   => $this->crud_model->fetch_details_view_question($config["per_page"], $start)
        );
        echo json_encode($output);
      }


    function fetch_search_view_questions()
    {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_question($query);
      $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
            <thead>  
                <tr> 
                    <th width="35%">Nom de la question</th>
                    <th width="15%">Nom de rubrique</th> 
                    <th width="20%">Nom de la formation</th>
                    <th width="10%">Nom de l\'édition</th>  

                    <th width="10%">Mise à jour</th>  
                    
                    <th width="5%">Modifier</th> 
                    <th width="5%">Supprimer</th>  
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

          $btn1 = '<button type="button" name="update" idq="'.$row->idq.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';

          $btn2 = '<button type="button" name="delete" idq="'.$row->idq.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  

         $output .= '
        
         <tr role="row" class="odd">
            <td>'.substr($row->nomq, 0,40).'...</td>
            <td>'.substr($row->nomr, 0,20).'...</td>
            <td>'.substr($row->nom_formation, 0,20).'...</td>

            <td>'.substr($row->nom_edition, 0,20).'...</td>
             
            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
            
            <td>'.$btn1.'</td>
            <td>'.$btn2.'</td>

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
          <tfoot>  
            <tr>  
                <th width="35%">Nom de la question</th>
                <th width="15%">Nom de rubrique</th> 
                <th width="20%">Nom de la formation</th>
                <th width="10%">Nom de l\'édition</th>  

                <th width="10%">Mise à jour</th>  
                
                <th width="5%">Modifier</th> 
                <th width="5%">Supprimer</th>      
            </tr>  
          </tfoot>    
            
        </table>';
      echo $output;
    }

    function fetch_limit_view_questions()
    {
      $output = '';
      $query = '';
      if($this->input->post('limit'))
      {
       $query = $this->input->post('limit');
      }
      $data = $this->crud_model->fetch_data_limit_question($query);
      $output .= '
      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
            <thead>  
                <tr> 
                    <th width="35%">Nom de la question</th>
                    <th width="15%">Nom de rubrique</th> 
                    <th width="20%">Nom de la formation</th>
                    <th width="10%">Nom de l\'édition</th>  

                    <th width="10%">Mise à jour</th>  
                    
                    <th width="5%">Modifier</th> 
                    <th width="5%">Supprimer</th>  
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

          $btn1 = '<button type="button" name="update" idq="'.$row->idq.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';

          $btn2 = '<button type="button" name="delete" idq="'.$row->idq.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  

         $output .= '
        
         <tr role="row" class="odd">
            <td>'.substr($row->nomq, 0,40).'...</td>
            <td>'.substr($row->nomr, 0,20).'...</td>
            <td>'.substr($row->nom_formation, 0,20).'...</td>

            <td>'.substr($row->nom_edition, 0,20).'...</td>
             
            <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>
            
            <td>'.$btn1.'</td>
            <td>'.$btn2.'</td>

          </tr>

         ';
        }
      }
      $output .= '
        </tbody>
          <tfoot>  
            <tr>  
                <th width="35%">Nom de la question</th>
                <th width="15%">Nom de rubrique</th> 
                <th width="20%">Nom de la formation</th>
                <th width="10%">Nom de l\'édition</th>  

                <th width="10%">Mise à jour</th>  
                
                <th width="5%">Modifier</th> 
                <th width="5%">Supprimer</th>      
            </tr>  
          </tfoot>    
            
        </table>';
      echo $output;
    }

      // fin de script des question


      // script de reponse
      function fetch_reponse(){  

           $fetch_data = $this->crud_model->make_datatables_reponse();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                
               
                $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idrep.'" /> &nbsp;&nbsp;&nbsp; <a href="'.base_url().'user/pdf_reponse/'.$row->idr.'" class="btn btn-primary btn-sm print"><i class="fa fa-print"></i></a>'; 

                $sub_array[] = nl2br(substr($row->nomq  , 0,50)).' ...';
                $sub_array[] = nl2br(substr($row->valeur  , 0,20)).' ...';
                $sub_array[] = nl2br(substr($row->nomr  , 0,25)).' ...'; 
                
               
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idrep="'.$row->idrep.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idrep="'.$row->idrep.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_reponse(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_reponse(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_reponse()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_reponse($_POST["idrep"]);  
           foreach($data as $row)  
           {  
                $output['idq']        = $row->idq;
                $output['valeur']     = $row->valeur;
               
           }  
           echo json_encode($output);  
      }  


      function operation_reponse(){

          $idq = $this->input->post('idq');
          $id_user = $this->connected;

          $prsence_par_jour = $this->crud_model->tester_reponse($id_user,$idq);
          if ($prsence_par_jour > 0) {
            echo "🗽 vous avez déjà répondu à cette question!🗽";
          }
          else{

              try {

                $insert_data = array(  
                   'valeur'             =>     $this->input->post('valeur'),
                   'idq'                =>     $this->input->post('idq'),
                   'id_user'            =>     $this->connected  
                ); 

                $requete=$this->crud_model->insert_reponse($insert_data);
                echo("Merci beaucoup pour votre sugestion");
                        
              } catch (PDOException $e) {
                echo("impossible ".$e->getMessage());
              }

          }

          
        
      }

      function modification_reponse(){

          $updated_data = array(  
              'valeur'             =>     $this->input->post('valeur'),
              'idq'                =>     $this->input->post('idq') 
          ); 

          $this->crud_model->update_reponse($this->input->post("idrep"), $updated_data);
          echo("modification avec succès");
      }

      function supression_reponse(){
 
          $this->crud_model->delete_reponse($this->input->post("idrep"));
          echo("suppression avec succès");
        
      }

      function Delete_multiple_reponse()
     {
        if($this->input->post('checkbox_value'))
        {
         $id = $this->input->post('checkbox_value');
         for($count = 0; $count < count($id); $count++)
         {
          $this->crud_model->Delete_reponse_tag($id[$count]);
         }
         echo("suppression avec succès");
        }

     }
      // fin de script des reponse

    function pdf_reponse($param1=''){
       $customer_id = "pdf reponses pour les apprenants de rubrique formation_".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_pdf_reponse($param1);

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("pdf reponses pour les apprenants de rubrique formation_".$customer_id.".pdf", array("Attachment"=>0));
    }

    function pagination_reponses()
    {

        $this->load->library("pagination");
        $config = array();
        $config["base_url"] = "#";
        $config["total_rows"] = $this->crud_model->count_all_view_reponses();
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
         'country_table'   => $this->crud_model->fetch_details_view_reponse($config["per_page"], $start)
        );
        echo json_encode($output);
      }
















}
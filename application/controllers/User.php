<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class user extends CI_Controller
{
  private $token;
  private $connected;
  public function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('id'))
    {
          redirect(base_url().'login');
    }
    $this->load->library('form_validation');
    $this->load->library('encryption');
      // $this->load->library('pdf');
    $this->load->model('crud_model'); 

    $this->load->helper('url');

    $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
    $this->connected = $this->session->userdata('id');

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




















}
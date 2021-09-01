<?php 
class crud_model extends CI_Model{
   // opertion role
  var $table1 = "role";  
  var $select_column1 = array("idrole", "nom", "created_at");  
  var $order_column1 = array(null, "nom", "created");
  // fin de la role

  // opertion tbl_info
  var $table2 = "tbl_info";  
  var $select_column2 = array("idinfo", "nom_site", "icone", "adresse", "tel1","tel2","facebook","twitter", "linkedin", "email", "termes", "confidentialite", 
    "description", "mission", "objectif","blog");  
  var $order_column2 = array(null, "nom_site", "adresse","tel1","tel2", 
    "description", "mission", "objectif","blog", null, null);
  // fin de la tbl_info

  // opertion category
  var $table3 = "category";  
  var $select_column3 = array("idcat", "nom", "created_at");  
  var $order_column3 = array(null, "nom", "created_at");
  // fin category

   //users
  var $table8 = "users";  
  var $select_column8 = array("id", "first_name", "last_name", "email","image","telephone","full_adresse","biographie","date_nais","facebook","twitter","linkedin","idrole","sexe");  
  var $order_column8 = array(null, "first_name", "last_name","telephone","sexe","id", null, null);
  // fin information



  // contact
  var $table12 = "contact";  
  var $select_column12 = array("id", "nom", "sujet","email", "message","fichier","created_at");  
  var $order_column12 = array(null, "nom", "sujet","email","fichier", null, null);
  // fin contact

  // opertion category information
  var $table15 = "profile_article";  
  var $select_column15 = array("idart", "nom","description","lien","image", 
    "type","idcat","nom_cat","created_at");  
  var $order_column15 = array(null, "nom","description","lien","type","idcat","nom_cat", "created_at");
  // fin category

  // opertion tinfo_personnel
  var $table16 = "tinfo_personnel";  
  var $select_column16 = array("idtinfo_personnel", "titre","description","icone", "created_at");  
  var $order_column16 = array(null, "titre","description","icone", "created_at");
  // fin de la tinfo_personnel

  // opertion tinfo_service
  var $table17 = "tinfo_service";  
  var $select_column17 = array("idtinfo_service", "titre","description","image", "created_at");  
  var $order_column17 = array(null, "titre","description","image", "created_at");
  // fin de la tinfo_service

  // opertion tinfo_choix
  var $table18 = "tinfo_choix";  
  var $select_column18 = array("idtinfo_choix", "titre","description","icone", "created_at");  
  var $order_column18 = array(null, "titre","description","icone", "created_at");
  // fin de la tinfo_choix

  // opertion tinfo_techno
  var $table19 = "tinfo_techno";  
  var $select_column19 = array("idtinfo_techno", "titre","icone", "created_at");  
  var $order_column19 = array(null, "titre","icone", "created_at");
  // fin de la tinfo_techno

  //tinfo_user
  var $table20 = "tinfo_user";  
  var $select_column20 = array("idtinfo_user", "first_name", "last_name","sexe", "email","image","telephone","facebook","twitter","linkedin","poste","created_at");  
  var $order_column20 = array(null, "first_name", "last_name","telephone","sexe","email",
    "created_at",null, null);
  // fin tinfo_user




  // script pour les provinces
  var $table21 = "province";  
  var $select_column21 = array("idp", "nomp", "created_at");  
  var $order_column21 = array("idp", "nomp",null);
  // fin de ces scripts

  // script pour les ville
  var $table23 = "profile_ville";  
  var $select_column23 = array("idp", "nomp", "nomv","idv","created_at");  
  var $order_column23 = array("idv", "nomp","nomv",null);
  // fin de ces scripts


  // script pour les pays
  var $table25 = "tbl_pays";  
  var $select_column25 = array("idPays", "nompays","created_at");  
  var $order_column25 = array("idPays", "nompays",null);
  // fin de ces scripts
  // script pour les categorie d'entreprise
  var $table26 = "tbl_category";  
  var $select_column26 = array("idcat", "nomcat","created_at");  
  var $order_column26 = array("idcat", "nomcat",null);






  // information basique du site
  function Select_contact_info_site()
  {
      return $this->db->query('SELECT * FROM tbl_info  LIMIT 1');
  }

  // messagerie
  function insert_message($data){
      $this->db->insert('messagerie', $data);
  }

// test_email si existe
  function get_users_email($email)
  {
      $this->db->limit(1);
      return $this->db->get_where('users', array('email' => $email));
  }

  // test_email si existe
  function get_users_email_padding_user($email)
  {
      $this->db->limit(1);
      return $this->db->get_where('padding_users', array('email' => $email));
  }
// utilisateur connecte
  function fetch_connected($id){
      $this->db->where('id',$id);
      $this->db->limit(1);
      return $this->db->get('users')->result_array();
  }

  // utilisateur visiteur
  function fetch_tag_visiteur($id){
      $this->db->where('id',$id);
      $this->db->limit(1);
      return $this->db->get('padding_users');
  }
  // online 
  function insert_online($data){
      $this->db->insert('online', $data);
  }
  // creation de compte
  function insert_user($data)
  {
    $this->db->insert('users', $data);
    return $this->db->insert_id();
  } 

  // creation de compte
  function insert_padding_user($data)
  {
    $this->db->insert('padding_users', $data);
    return $this->db->insert_id();
  } 

  // insertion dans la table recuper pwd 
  function insert_recupere($data){
     $this->db->insert('recupere', $data);
  }

  // suppression deconnexion en ligne 
  function delete_online($id_user){
    $this->db->where('id_user', $id_user);
    $this->db->delete("online");
  }

  // pagination des utilisateurs connectés
  function fetch_pagination_online(){
    $query = $this->db->get("profile_online");
    return $query->num_rows();
  }

  //modification des utilisateurs
  function update_user($email, $data)
  {
    $this->db->where('email', $email);
    return $this->db->update('users', $data);
  }

  // insertion des notifications 
  function insert_notification($data)  
  {  
     $this->db->insert('notification', $data);  
  }
  function update_crud($user_id, $data)  
  {  
       $this->db->where("id", $user_id);  
       $this->db->update("users", $data);  
  }
  //supression de notification
  function delete_notifacation_tag($id){
    $this->db->where('id', $id);
    $this->db->delete('notification');
  }

  function Select_users()
  {
      $this->db->order_by('first_name','ASC');
      $this->db->limit(50);
      return $this->db->get('users');
  }

  function Select_roles()
  {
      $this->db->order_by('nom','ASC');
      $this->db->limit(50);
      return $this->db->get('role');
  }

  function fetch_single_message($code)  
  {  
       $this->db->where("code", $code);  
       $query=$this->db->get('messagerie');  
       return $query->result();  
  } 

  function fetch_single_chat_groupe($idgroupe)  
  {  
       $this->db->where("idgroupe", $idgroupe);  
       $query=$this->db->get('groupe');  
       return $query->result();  
  } 

  function get_info_user(){
      $nom = $this->db->get("users")->result_array();
      return $nom;
  }

  function get_info_user_tag($id){
      $this->db->limit(1);
      $nom = $this->db->get_where("users", array(
        'id'  =>  $id
      ))->result_array();
      return $nom;
  }

  function statistiques_nombre_tag_by_column($query, $value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE idrole=".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }

  function statistiques_nombre_tag_by_projet($query, $value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE student_id=".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }


  function statistiques_nombre($query){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }

  function statistiques_somme_montant($query, $type){
      $montant;
      $data_ok = $this->db->query("SELECT SUM(montant_nombre) AS montant from ".$query." WHERE type='".$type."' AND etat_validation=1 ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $montant = $key['montant'];
        }
        # code...
      }
      else{
           $montant = 0;
      }

      return $montant;
  }

  function statistiques_somme_paiement($query){
      $montant;
      $data_ok = $this->db->query("SELECT SUM(montant) AS montant from ".$query." WHERE  etat_paiement=1 ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $montant = $key['montant'];
        }
        # code...
      }
      else{
           $montant = 0;
      }

      return $montant;
  }

  

  function statistiques_nombre_tag($query, $idpersonne){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE idpersonne=".$idpersonne." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;
  }


  function statistiques_nombre_where($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone."='".$value."' ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }

  function statistiques_nombre_where_null($query, $colone,$value){
      $my_nombre;
      $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone." is ".$value." ");
      if ($data_ok->num_rows() > 0) {

        foreach ($data_ok->result_array() as $key) {
          $my_nombre = $key['nombre'];
        }
        # code...
      }
      else{
           $my_nombre = 0;
      }

      return $my_nombre;

  }




  // script pour role du site
   function make_query_role()  
   {  
          
         $this->db->select($this->select_column1);  
         $this->db->from($this->table1);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idrole", $_POST["search"]["value"]);  
              $this->db->or_like("nom", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idrole', 'DESC');  
         }  
    }

   function make_datatables_role(){  
         $this->make_query_role();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_role(){  
         $this->make_query_role();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_role()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table1);  
         return $this->db->count_all_results();  
    }

    function insert_role($data)  
    {  
         $this->db->insert('role', $data);  
    }

    
    function update_role($idrole, $data)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->update("role", $data);  
    }


    function delete_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $this->db->delete("role");  
    }

    function fetch_single_role($idrole)  
    {  
         $this->db->where("idrole", $idrole);  
         $query=$this->db->get('role');  
         return $query->result();  
    } 
    // fin de script role

    // script pour information du site
    function make_query_tbl_info()  
    {  
          
         $this->db->select($this->select_column2);  
         $this->db->from($this->table2);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("adresse", $_POST["search"]["value"]);  
              $this->db->or_like("nom_site", $_POST["search"]["value"]);
              $this->db->or_like("tel1", $_POST["search"]["value"]); 
              $this->db->or_like("tel2", $_POST["search"]["value"]);
              $this->db->or_like("email", $_POST["search"]["value"]);
              $this->db->or_like("idinfo", $_POST["search"]["value"]);
              $this->db->or_like("termes", $_POST["search"]["value"]);
              $this->db->or_like("confidentialite", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idinfo', 'DESC');  
         }  
    }

   function make_datatables_tbl_info(){  
         $this->make_query_tbl_info();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tbl_info(){  
         $this->make_query_tbl_info();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tbl_info()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table2);  
         return $this->db->count_all_results();  
    }

    function insert_tbl_info($data)  
    {  
         $this->db->insert('tbl_info', $data);  
    }

    
    function update_tbl_info($idinfo, $data)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->update("tbl_info", $data);  
    }


    function delete_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $this->db->delete("tbl_info");  
    }

    function delete_compte_utilisateur($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_tbl_info($idinfo)  
    {  
         $this->db->where("idinfo", $idinfo);  
         $query=$this->db->get('tbl_info');  
         return $query->result();  
    } 

    // fin de tbl_info 

    // script users
    function make_query_users()  
    {  
          
         $this->db->select($this->select_column8);  
         $this->db->from($this->table8);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("first_name", $_POST["search"]["value"]);  
              $this->db->or_like("last_name", $_POST["search"]["value"]); 
              $this->db->or_like("full_adresse", $_POST["search"]["value"]); 
              $this->db->or_like("biographie", $_POST["search"]["value"]);  
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column8[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('id', 'DESC');  
         }  
    }

    function make_datatables_users(){  
         $this->make_query_users();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_users(){  
         $this->make_query_users();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_users()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table8);  
         return $this->db->count_all_results();  
    }

    function insert_users($data)  
    {  
         $this->db->insert('users', $data);  
    }

    
    function update_users($id, $data)  
    {  
         $this->db->where("id", $id);  
         $this->db->update("users", $data);  
    }


    function delete_users($id)  
    {  
         $this->db->where("id", $id);  
         $this->db->delete("users");  
    }

    function fetch_single_users($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('users');  
         return $query->result();  
    }

    function fetch_single_users_info($idtinfo_user)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $query=$this->db->get('tinfo_user');  
         return $query->result();  
    }

    //fin de script users

    // operation pays
       function make_query_pays()  
      {  
            
           $this->db->select($this->select_column25);  
           $this->db->from($this->table25);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nompays", $_POST["search"]["value"]);  
                $this->db->or_like("idPays", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column25[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idPays', 'DESC');  
           }  
      }

     function make_datatables_pays(){  
           $this->make_query_pays();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_pays(){  
           $this->make_query_pays();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_pays()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table25);  
           return $this->db->count_all_results();  
      }

      function insert_pays($data){
          $this->db->insert('tbl_pays', $data);
      }

      function update_pays($idPays, $data)  
      {  
           $this->db->where("idPays", $idPays);  
           $this->db->update("tbl_pays", $data);  
      }

      function delete_pays($idPays)  
      {  
           $this->db->where("idPays", $idPays);  
           $this->db->delete("tbl_pays");  
      }

      function fetch_single_pays($idPays)  
      {  
           $this->db->where("idPays", $idPays);  
           $query=$this->db->get('tbl_pays');  
           return $query->result();  
      }

      // fin operation pays

      /*

    UTILISATION DE PORTAIL JOB
    MES SCRIPTS JOB COMMENCE DEJE
    ========================================================
    */



     // operation province
       function make_query_province()  
      {  
            
           $this->db->select($this->select_column21);  
           $this->db->from($this->table21);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomp", $_POST["search"]["value"]);  
                $this->db->or_like("idp", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column21[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idp', 'DESC');  
           }  
      }

     function make_datatables_province(){  
           $this->make_query_province();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_province(){  
           $this->make_query_province();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_province()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table21);  
           return $this->db->count_all_results();  
      }

      function insert_province($data){
          $this->db->insert('province', $data);
      }

      function update_province($idp, $data)  
      {  
           $this->db->where("idp", $idp);  
           $this->db->update("province", $data);  
      }

      function delete_province($idp)  
      {  
           $this->db->where("idp", $idp);  
           $this->db->delete("province");  
      }

      function fetch_single_province($idp)  
      {  
           $this->db->where("idp", $idp);  
           $query=$this->db->get('province');  
           return $query->result();  
      }
       // fin operation province

      // operation ville
       function make_query_ville()  
      {  
            
           $this->db->select($this->select_column23);  
           $this->db->from($this->table23);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomp", $_POST["search"]["value"]);  
                $this->db->or_like("nomv", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column23[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idv', 'DESC');  
           }  
      }

     function make_datatables_ville(){  
           $this->make_query_ville();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_ville(){  
           $this->make_query_ville();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_ville()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table23);  
           return $this->db->count_all_results();  
      }

      function insert_ville($data){
          $this->db->insert('ville', $data);
      }

      function update_ville($idv, $data)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->update("ville", $data);  
      }

      function delete_ville($idv)  
      {  
           $this->db->where("idv", $idv);  
           $this->db->delete("ville");  
      }

      function fetch_single_ville($idv)  
      {  
           $this->db->where("idv", $idv);  
           $query=$this->db->get('ville');  
           return $query->result();  
      }
      
      // fin operation province ville

      function fetch_province()
      {
        $this->db->order_by("idp", "ASC");
        $query = $this->db->get("province");
        return $query->result();
      }

      // operation catégorie d'entrise
      function make_query_category()  
      {  
            
           $this->db->select($this->select_column26);  
           $this->db->from($this->table26);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nomcat", $_POST["search"]["value"]);  
                $this->db->or_like("idcat", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column26[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idcat', 'DESC');  
           }  
      }

     function make_datatables_category(){  
           $this->make_query_category();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_category(){  
           $this->make_query_category();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_category()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table26);  
           return $this->db->count_all_results();  
      }

      function insert_category($data){
          $this->db->insert('tbl_category', $data);
      }

      function update_category($idcat, $data)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->update("tbl_category", $data);  
      }

      function delete_category($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->delete("tbl_category");  
      }

      function fetch_single_category($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $query=$this->db->get('tbl_category');  
           return $query->result();  
      }

      // fin operation categorie

      // operation catégorie d'entrise
      function make_query_category_news()  
      {  
            
           $this->db->select($this->select_column3);  
           $this->db->from($this->table3);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nom", $_POST["search"]["value"]);  
                $this->db->or_like("idcat", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column3[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('idcat', 'DESC');  
           }  
      }

     function make_datatables_category_news(){  
           $this->make_query_category_news();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_category_news(){  
           $this->make_query_category_news();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_category_news()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table3);  
           return $this->db->count_all_results();  
      }

      function insert_category_news($data){
          $this->db->insert('category', $data);
      }

      function update_category_news($idcat, $data)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->update("category", $data);  
      }

      function delete_category_news($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $this->db->delete("category");  
      }

      function fetch_single_category_news($idcat)  
      {  
           $this->db->where("idcat", $idcat);  
           $query=$this->db->get('category');  
           return $query->result();  
      }

      // fin operation categorie


      function get_info_entreprise_tag($id){
          $this->db->where('ceo',$id);
          $nom = $this->db->get("entreprise");
          return $nom;
      }

      function fetch_pays_register()
      {
        $this->db->order_by("nompays", "ASC");
        $query = $this->db->get("tbl_pays");
        return $query;
      }

       function fetch_province_register()
      {
        $this->db->order_by("nomp", "ASC");
        $query = $this->db->get("province");
        return $query;
      }

       function fetch_category_entreprise()
      {
        $this->db->order_by("nomcat", "ASC");
        $this->db->group_by("idcat");
        $query = $this->db->get("profile_entreprise");
        return $query;
      }

       function fetch_category_register()
      {
        $this->db->order_by("nomcat", "ASC");
        $query = $this->db->get("tbl_category");
        return $query;
      }

      function fetch_projet_tag($student_id)
      {
        $this->db->order_by("created_at", "DESC");
        $this->db->limit(1);
        $query = $this->db->get_where("projet", array(
          'student_id'  =>  $student_id
        ));
        return $query;
      }

      function fetch_projet_tag_by_code($codeP)
      {
        $this->db->order_by("created_at", "DESC");
        $this->db->limit(1);
        $query = $this->db->get_where("projet", array(
          'codeP'  =>  $codeP
        ));
        return $query;
      }

      function fetch_compterendu_tag_by_code($codeP)
      {
        $this->db->order_by("created_at", "DESC");
        $this->db->limit(1);
        $query = $this->db->get_where("compterendu", array(
          'codeP'  =>  $codeP
        ));
        return $query;
      }

      function fetch_projet_all()
      {
        $this->db->order_by("created_at", "DESC");
        $this->db->limit(100);
        $query = $this->db->get("projet");
        return $query;
      }

      function insert_nouvelle_entreprise($data)
      {
        $this->db->insert('entreprise', $data);
      } 

      function update_crud_entreprise($ceo, $data)  
      {  
           $this->db->where("ceo", $ceo);  
           $this->db->update("entreprise", $data);  
      }

       function fetch_ville_requete_crud($idp)
      {
        $this->db->where('idp', $idp);
        $this->db->order_by('nomv', 'ASC');
        $query = $this->db->get('ville');
        $output = '<option value="">Selectionner la ville</option>';
        foreach($query->result() as $row)
        {
         $output .= '<option value="'.$row->idv.'">'.$row->nomv.'</option>';
        }
        return $output;
      }

      function insert_paiement_pading($data){
          $this->db->insert('paiement_pading', $data);
          return $this->db->insert_id();
      }

      function get_name_user($id){
          $this->db->where("id", $id);
          $nom = $this->db->get("users")->result_array();
          foreach ($nom as $key) {
            return $key["first_name"];
          }

      }

      /*
       script de link link_canavas 
      ===============================
      *******************************
      */

      function show_detail_link_tag($student_id){
        $query = $this->db->get_where('link_canavas', 
          array(
            'student_id' => $student_id
          )
        )->result_array();
        return $query;
      }

      function show_detail_link_tag2($student_id){
        $query = $this->db->get_where('link_canavas2', 
          array(
            'student_id' => $student_id
          )
        )->result_array();
        return $query;
      }

      function insert_link_canavas($data){
          $this->db->insert('link_canavas', $data);
      }

      function insert_link_canavas2($data){
          $this->db->insert('link_canavas2', $data);
          return $this->db->insert_id();
      }

      function update_link_canavas($idlink, $data){

          $this->db->where("idlink", $idlink);
          $this->db->update('link_canavas', $data);
      }
      function update_link_canavas2($idlink, $data){
        
          $this->db->where("idlink", $idlink);
          $this->db->update('link_canavas2', $data);
      }

      function delete_link_canavas($idlink){
        
          $this->db->where("idlink", $idlink);
          $this->db->delete('link_canavas');
      }

      function delete_link_canavas2($idlink){
        
          $this->db->where("idlink", $idlink);
          $this->db->delete('link_canavas2');
      }

      /*
       script de link link_canavas 
      ===============================
      *******************************
      */

      function show_detail_swot_tag($student_id){
        $query = $this->db->get_where('swot', 
          array(
            'student_id' => $student_id
          )
        )->result_array();
        return $query;
      }

      function show_detail_swot_tag2($student_id){
        $query = $this->db->get_where('swot2', 
          array(
            'student_id' => $student_id
          )
        )->result_array();
        return $query;
      }

      function insert_swot_canavas($data){
          $this->db->insert('swot', $data);
      }

      function insert_swot_canavas2($data){
          $this->db->insert('swot2', $data);
      }

      function update_swot_canavas($idswot, $data){

          $this->db->where("idswot", $idswot);
          $this->db->update('swot', $data);
      }
      function update_swot_canavas2($idswot, $data){
        
          $this->db->where("idswot", $idswot);
          $this->db->update('swot2', $data);
      }

      function delete_swot_canavas($idswot){
        
          $this->db->where("idswot", $idswot);
          $this->db->delete('swot');
      }

      function delete_swot_canavas2($idswot){
        
          $this->db->where("idswot", $idswot);
          $this->db->delete('swot2');
      }

      /*
       script de link swot 
      ===============================
      *******************************
      */

      function show_detail_galery_tag($student_id){
        $this->db->order_by('idgalery', 'desc');
        $query = $this->db->get_where('galery', 
          array(
            'student_id' => $student_id
          )
        )->result_array();
        return $query;
      }

      function insert_galery($data){
          $this->db->insert('galery', $data);
      }

      function delete_galery_tag($idgalery){
          $this->db->where("idgalery", $idgalery);
          $this->db->delete('galery');
      }


      // script pour le projet 
      function insert_projet($data){
          $this->db->insert('projet', $data);
      }

      function update_projet($codeP, $data){

          $this->db->where("codeP", $codeP);
          $this->db->update('projet', $data);
      }
     
      function delete_projet($codeP){
        
          $this->db->where("codeP", $codeP);
          $this->db->delete('projet');
      }


       // script pour le projet 
      function insert_compterendu($data){
          $this->db->insert('compterendu', $data);
          return $this->db->insert_id();
      }

      function update_compterendu($codeP, $data){

          $this->db->where("codeP", $codeP);
          $this->db->update('compterendu', $data);
      }
     
      function delete_compterendu($codeP){
        
          $this->db->where("codeP", $codeP);
          $this->db->delete('compterendu');
      }

      // paiement en attente
      function fetch_padding_paiement(){
          $this->db->order_by('created_at',"desc");
          return $this->db->get('profile_paiement_padding');
      }

      // suppression paiement padding 
      function delete_paiement_pading($idp)  
      {  
         $this->db->where("idp", $idp);  
         $this->db->delete("paiement_pading");  
      }

      function get_info_padding_transaction($idp){
          $nom = $this->db->get_where("paiement_pading", array(
            'idp' =>  $idp
          ))->result_array();
          return $nom;
      }

      function insert_paiement_compte($data){
          $this->db->insert('paiement', $data);
          return $this->db->insert_id();
      }

      function get_expire_day_count($today){
          $jours = $this->db->query("SELECT DATE_ADD('".$today."', INTERVAL 30 DaY) AS jours")->result_array();
          foreach ($jours as $key) {
            $nom = $key['jours'];
            return $nom;
          }
          
      }

      function get_info_expiration_compte_users($id){
          $nom = $this->db->get_where("users", array(
            'id' =>  $id
          ))->result_array();
          return $nom;
      }

      // paiement normal
      function fetch_normal_paiement(){
          $this->db->order_by('created_at',"desc");
          return $this->db->get('profile_paiement');
      }

       // tous les projets 
      function fetch_all_projects(){
          $this->db->order_by('created_at',"desc");
          return $this->db->get('profile_projet');
      }

       // tous les projets 
      function fetch_all_visiteur(){
          $this->db->order_by('id',"desc");
          return $this->db->get('padding_users');
      }

       // tous les projets 
      function fetch_tag_compte_rendu($id_user){
          $this->db->order_by('created_at',"desc");
          return $this->db->get_where('profile_compte_rendu', 
            array('id_user' => $id_user)
          );
      }

       // tous les projets 
      function fetch_tag_all_compte_rendu(){
          $this->db->order_by('created_at',"desc");
          return $this->db->get('profile_compte_rendu');
         
      }

       // tous les projets 
      function fetch_tag_users_chat($id){
        
          return $this->db->get_where("groupe_chat", array(
            'id_users'  =>  $id
          ));
         
      }



      function get_info_paiement_transaction($idp){
          $nom = $this->db->get_where("paiement", array(
            'idp' =>  $idp
          ))->result_array();
          return $nom;
      }

      // suppression paiement normal
      function delete_paiement_normal($idp)  
      {  
         $this->db->where("idp", $idp);  
         $this->db->delete("paiement");  
      }

      // impression paiement de galerie
    function fetch_single_details_facture($codeFacture)
    {

        $this->db->where('codeFacture', $codeFacture);
        $data = $this->db->get('profile_paiement');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            RECU DE PAIEMENT  AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom de l\'entreprise</th>
               <th width="30%">Nom du ceo</th>
               <th width="5%">téléphone</th>

               <th width="15%">Montant</th>
               <th width="25%">motif</th>

               <th width="20%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $maison = $items["nom"];
              $idpersonne   = $items["idpersonne"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


            $data_paie = $this->db->query("SELECT SUM(montant) AS montant FROM paiement WHERE idpersonne=".$idpersonne." ");
            if ($data_paie->num_rows() > 0) {
              # code...
              foreach($data_paie->result_array() as $items2)
                {
                  $montantT =  $items2["montant"];
                }
            }
            else{
              $montantT = 0;
            }

            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td width="20%" align="center">
               
                '.$maison.'
                 <br />
                <img src="'.base_url().'upload/photo/'.$items["logo"].'" style="height: 40px; width: 50px; border-radius: 50%;"/></td> 
                <td align="center">
                '.$nom_complet.'
                <br/>
                 <img src="'.base_url().'upload/photo/'.$items["image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                </td>
                <td>'.$items["telephone"].'</td>
                <td>'.$items["montant"].'$</td>
                <td>'.$items["motif"].'</td>

                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="5">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/paiement_normale" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';


      
        return $output;
    }

    // impression paiement de galerie
    function fetch_single_details_facture_depense($iddepense)
    {

        $this->db->where('iddepense', $iddepense);
        $data = $this->db->get('profile_depense');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            EVALUATION DE COMPTE  AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom complet</th>
               <th width="20%">libellé</th>
               <th width="20%">Motif</th>

               <th width="5%">Montant en chiffre</th>
               <th width="15%">Montant en lettre</th>
               <th width="15%">livré par</th>

               <th width="10%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $nomPer = $items["nomPer"];
              $libelle   = $items["libelle"];
              $motif   = $items["motif"];
              $comptable   = $items["first_name"]." ".$items["last_name"];
              $montant_nombre   = $items["montant_nombre"];
              $montant_lettre   = $items["montant_lettre"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


            $data_paie = $this->db->query("SELECT SUM(montant_nombre) AS montant FROM profile_depense WHERE iddepense=".$iddepense." ");
            if ($data_paie->num_rows() > 0) {
              # code...
              foreach($data_paie->result_array() as $items2)
                {
                  $montantT =  $items2["montant"];
                }
            }
            else{
              $montantT = 0;
            }

            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td>'.$nomPer.'</td>
                <td>'.$libelle.'</td>
                <td>'.$motif.'</td>
                <td>'.$montant_nombre.'$</td>
                <td>'.$montant_lettre.'</td>
                <td>'.$comptable.'</td>
                
                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["jour"])), 0, 23)).'</td>

               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="6">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/paiement_normale" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';


      
        return $output;
    }

     // impression paiement entreprise
    function fetch_single_details_facture_entreprise($codeFacture)
    {

        $this->db->where('codeFacture', $codeFacture);
        $data = $this->db->get('profile_paiement');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            RECU DE PAIEMENT  AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom de l\'entreprise</th>
               <th width="30%">Nom du ceo</th>
               <th width="5%">téléphone</th>

               <th width="15%">Montant</th>
               <th width="25%">motif</th>

               <th width="20%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $maison = $items["nom"];
              $idpersonne   = $items["idpersonne"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


            $data_paie = $this->db->query("SELECT SUM(montant) AS montant FROM paiement WHERE idpersonne=".$idpersonne." ");
            if ($data_paie->num_rows() > 0) {
              # code...
              foreach($data_paie->result_array() as $items2)
                {
                  $montantT =  $items2["montant"];
                }
            }
            else{
              $montantT = 0;
            }

            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td width="20%" align="center">
               
                '.$maison.'
                 <br />
                <img src="'.base_url().'upload/photo/'.$items["logo"].'" style="height: 40px; width: 50px; border-radius: 50%;"/></td> 
                <td align="center">
                '.$nom_complet.'
                <br/>
                 <img src="'.base_url().'upload/photo/'.$items["image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                </td>
                <td>'.$items["telephone"].'</td>
                <td>'.$items["montant"].'$</td>
                <td>'.$items["motif"].'</td>

                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="5">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'entreprise/dashbord" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';


      
        return $output;
    }


    function update_paiement_etat($codeFacture, $data)  
    {  
         $this->db->where("codeFacture", $codeFacture);  
         $this->db->update("paiement", $data);  
    }

    function update_depense_etat($iddepense, $data)  
    {  
         $this->db->where("iddepense", $iddepense);  
         $this->db->update("depense", $data);  
    }

    function fetch_idv_candiat()
    {
      $this->db->order_by("nomv", "ASC");
      $this->db->group_by("idv");
      $query = $this->db->get("profile_entreprise");
      return $query;
    }

    function fetch_idp_candiat()
    {
      $this->db->order_by("nomp", "ASC");
      $this->db->group_by("idp");
      $query = $this->db->get("profile_entreprise");
      return $query;
    }

    function fetch_sexe_candiat()
    {
      $this->db->order_by("sexe", "ASC");
      $this->db->group_by("sexe");
      $query = $this->db->get("profile_entreprise");
      return $query;
    }

    // pagination des utilisateurs connectés
    function fetch_pagination_candidat_followe_count()
    {
      $this->db->limit(100);
      $query = $this->db->get("profile_entreprise");
      return $query->num_rows();
    }

    // pagination des utilisateurs connecters 2
    function fetch_details_pagination_candidat_admin($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_entreprise");
        $this->db->order_by("nom", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('admin_login');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination

    // pagination des utilisateurs coach 2
    function fetch_details_pagination_candidat_coach($limit, $start)
    {
        $output = '';

        $this->db->select("*");
        $this->db->from("profile_entreprise");
        $this->db->order_by("nom", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('id');
        $etat = '';
        $enligne = '';
        
        foreach($query->result() as $row)
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
        
        return $output;
    }
    // fin pagination

    // recherche candidats utilisateurs par fultres
    function fetch_data_search_candidats_user($query)
    {
      $this->db->select("*");
      $this->db->from("profile_entreprise");
      $this->db->limit(6);
      if($query != '')
      {
       $this->db->like('nom', $query);
       $this->db->or_like('first_name', $query);
       $this->db->or_like('last_name', $query);
       $this->db->or_like('description', $query);
       $this->db->or_like('telephone', $query);

      }
      $this->db->order_by('first_name', 'ASC');
      return $this->db->get();
    }

    // fultre selon la province 
   function fultrage_fetch_data_candidat_by_province($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('nom', 'ASC');
    $resultat = $this->db->get_where("profile_entreprise", array(
      'idp'     =>  $query
    ));

    return $resultat;
   
   
   }

   // fultre selon la categorie 
   function fultrage_fetch_data_candidat_by_category($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('nom', 'ASC');
    $resultat = $this->db->get_where("profile_entreprise", array(
      'idcat'     =>  $query
    ));

    return $resultat;
   
   
   }

   // fultre selon les villes 
   function fultrage_fetch_data_candidat_by_ville($query)
   {
    
    $this->db->limit(10);
    $this->db->order_by('nom', 'DESC');
    $resultat = $this->db->get_where("profile_entreprise", array(
      'idv'     =>  $query
    ));

    return $resultat;
   
   
   }

   function fetch_data_auto($query)
   {
      $this->db->like('nom', $query);
      $query = $this->db->get('profile_entreprise');
      if($query->num_rows() > 0)
      {
         foreach($query->result_array() as $row)
         {
          $output[] = array(
           'name'  => $row["nom"],
           'image'  => $row["logo"]
          );
         }
       echo json_encode($output);
      }
   }

    // impression candidature de projet
    function fetch_candidature_projet($codeP)
    {

        $this->db->where('codeP', $codeP);
        $data = $this->db->get('profile_projet');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "
         REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            APPEL  A CANDIDATURE PROJET D\'ENTREPRISE
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         foreach($data->result_array() as $key)
         {


           $output .= '';
           $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
           $output .= '
           <tr>
            <td width="15%"></td>
            <td width="70%" align="center">

             <img src="'.base_url().'upload/photo/'.$key["image"].'" width="150" height="100"/>
             <img src="'.base_url().'upload/photo/'.$key["logoEntreprise"].'" width="150" height="100" />
             
             <p>porteur du projet: <b>'.$key["first_name"].' '.$key["last_name"].' </b></p>
             <p>téléphone: <b>'.$key["telephone"].' </b></p>
             <p>adresse mail: <b>'.$key["email"].' </b></p>
             <p>start-up: <b><h4>'.$key["nom"].'</h4> </b></p>

            </td>

            <td width="15%">
           
            </td>


           </tr>

           ';
        
          $output .= '</table><hr>';
        }

        

            foreach($data->result_array() as $key)
            {


               $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
               $output .= '
               <tr>
                <td width="15%"></td>
                <td width="70%">

                <!--en tete-->
                <div class="col-md-12">
            
                      <ol>
                          CET APPEL EST ORGANISE EN PARTENARIAT AVEC LA START-UP '.$key["nom"].'
                        <li>
                          <ul>
                          OBJECTIF DE L\'OUTIL
                          <br>
                          L\'appel à candidature a pour objectif d\'inciter les porteurs de projets à se lancer dans un projet de création d\'entreprises grâce à un soutient approprié et un environnement favorable spécialement adapté.
                  
                          </ul> 
                        </li>

                        <li>
                          <ul>
                            POUR QUEL ENTREPRENEUR?
                            <br>
                            les porteurs de projets d\'entreprise seront sélectionnés suivant des critères suivants:
                            <li>la pertinance d\'idée d\'affaire;</li>
                            <li>le critère innovant du projet, en relation avec le secteur d\'activité choisi par le promoteur;</li>
                            <li>La viabilité économique du projet;</li>
                            <li>Implication du candidat et la qualité de l\'équipe.</li>

                          </ul> 
                        </li>

  


                      </ol>
                      <hr>
                </div>
                <!--fin en tete-->
                
                 <div class="col-md-12">
                    <div class="row">
                     
                      
                      <div class="col-md-12">
                        <h4>Votre idée</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Comment pourriez-vous définir votre idée(1 phrase)?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['idee1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Que ce qui est à l\'origine de votre idée?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos objectifs?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Que pourraient être les principales fonctions de votre entreprise?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee4']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quelle est la date probable du démarrage de vos activités?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee5']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos produits et/ou services</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos principaux produits et/ou services que vous proposez?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['produit1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quel est le caractère innovant du produit, du service, que vous proposez?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">A quel besoin du marché allez-vous répondre?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Les produis que vous allez proposer seront-ils brevetables ou déjà brevetés?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit4']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos clients</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Qui sont vos clients potentiels?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['client1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">leurs pratiques en matière d\'utilisation des produits que vous allez proposer</label>
                        <div class="col-md-12">
                          '.nl2br($key['client2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">S\'intéressent-ils au produit ou aux services du vendeur?</label>
                        <div class="col-md-12">
                          '.nl2br($key['client3']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Votre marché</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quel marché ciblez-vous et pourquoi?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['marche1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">La taille du marché sur lequel vous comptez développer vos activités</label>
                        <div class="col-md-12">
                          '.nl2br($key['marche2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos concurrents</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les produits et/ou les services concurents(directs et indirects) déjà proposés sur le marché?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['concurrence1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Comment vos produits et/ou services se différencient-ils de ceux existants sur le marché?</label>
                        <div class="col-md-12">
                          '.nl2br($key['concurrence2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos moyens</h4>
                      </div>
                      <div class="col-md-12">
                        <h5>moyens matériels</h5> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les moyens matériels dont vous disposez déjà?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['moyen1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">De quels moyens avez vous besoins pour mettre en oeuvre votre projet?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h5>moyens fincanciers</h5> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les financements et les ressources financement dont vous disposez actuellement?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos ressources financières personnelles pendant la période d\'incubation  ?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen4']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les différents types de financements dont vous pourriez avoir besoin?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen5']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Le partenariat</h4> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Souhaitez-vous travailler en partenariat avec d\'autre entreprises du même secteur d\'activité?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['partenaire1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Avez-vous déjà identifier certains partenaires potentiels? si oui, les quels?</label>
                        <div class="col-md-12">
                          '.nl2br($key['partenaire2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quelle opinion sur le travail en réseautage?</label>
                        <div class="col-md-12">
                          '.nl2br($key['partenaire3']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Forces et faiblesses de votre projet</h4> 
                      </div>  

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">
                          les difficultés potentielles qui sont obstacles pour votre entreprise
                        </label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['faiblesse1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les point fort de votre idée d\'entreprise?<br></label>
                        <div class="col-md-12">
                          '.nl2br($key['faiblesse2']).'
                        </div>
                      </div>

                      
                    </div>
                 </div>

                <!--footer -->

                  <div class="col-md-12">
                   <hr>
                    <h4>Notre Instruction</h4>
                    <ol>
                      <li>
                        <ul>
                          Instruction
                          <li>Un commité d\'experts sélectionnera les meilleurs projets sur dossier et sur entreptien;</li>
                          <li>Le lauréat fournira tous les éléments complémentaires jugés nécessaires par le commité de sélection afin d\'assurer la reussite de leur intégration dans l\'incubateur.</li>
                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Documments annexés
                          <li>Curriculum vitae de tous les membres de l\'équipe;</li>
                          <li>Tous les documments utiles à l\'expertise du dossier;</li>
                          <li>Si votre entreprise a déjà démarré, joindre à cette offre votre plan financier ou projet d\'affaire.</li>

                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Confidentialité
                          <li>L\'incubateur s\'engagent à ce que toutes les informations lui transmises restent confidentielles.</li>
              
                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Engagement
                          <li>Les lauréats auront à signer une convention d\'incubation.</li>
              
                        </ul> 
                      </li>


                    </ol>
                  </div>
                  <hr>

                <!--fin footer -->

                </td>

                <td width="15%">
               
                </td>


               </tr>

               ';
            
              $output .= '</table>';
               

              $output .= '

              

              ';
              
               
            }

            $output .= '

              </div>

              
          
              <div align="right" style="margin-botton:20px;">

                  <a href="'.base_url().'admin/evaluation" style="text-decoration: none; color: black;">signature:</a>
            
              </div>
              
            ';


      
        return $output;
    }

    // impression candidature de projet
    function fetch_candidature_projet_coach($codeP)
    {

        $this->db->where('codeP', $codeP);
        $data = $this->db->get('profile_projet');

        $nom_site = '';
        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "
        
         REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            APPEL  A CANDIDATURE PROJET D\'ENTREPRISE
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

         foreach($data->result_array() as $key)
         {


           $output .= '';
           $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
           $output .= '
           <tr>
            <td width="15%"></td>
            <td width="70%" align="center">

             <img src="'.base_url().'upload/photo/'.$key["image"].'" width="150" height="100"/>
             <img src="'.base_url().'upload/photo/'.$key["logoEntreprise"].'" width="150" height="100" />
             
             <p>porteur du projet: <b>'.$key["first_name"].' '.$key["last_name"].' </b></p>
             <p>téléphone: <b>'.$key["telephone"].' </b></p>
             <p>adresse mail: <b>'.$key["email"].' </b></p>
             <p>start-up: <b><h4>'.$key["nom"].'</h4> </b></p>

            </td>

            <td width="15%">
           
            </td>


           </tr>

           ';
        
          $output .= '</table><hr>';
        }

        

            foreach($data->result_array() as $key)
            {


               $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
               $output .= '
               <tr>
                <td width="15%"></td>
                <td width="70%">

                <!--en tete-->
                <div class="col-md-12">
            
                      <ol>
                          CET APPEL EST ORGANISE EN PARTENARIAT AVEC LA START-UP '.$key["nom"].'
                        <li>
                          <ul>
                          OBJECTIF DE L\'OUTIL
                          <br>
                          L\'appel à candidature a pour objectif d\'inciter les porteurs de projets à se lancer dans un projet de création d\'entreprises grâce à un soutient approprié et un environnement favorable spécialement adapté.
                  
                          </ul> 
                        </li>

                        <li>
                          <ul>
                            POUR QUEL ENTREPRENEUR?
                            <br>
                            les porteurs de projets d\'entreprise seront sélectionnés suivant des critères suivants:
                            <li>la pertinance d\'idée d\'affaire;</li>
                            <li>le critère innovant du projet, en relation avec le secteur d\'activité choisi par le promoteur;</li>
                            <li>La viabilité économique du projet;</li>
                            <li>Implication du candidat et la qualité de l\'équipe.</li>

                          </ul> 
                        </li>

  


                      </ol>
                      <hr>
                </div>
                <!--fin en tete-->
                
                 <div class="col-md-12">
                    <div class="row">
                     
                      
                      <div class="col-md-12">
                        <h4>Votre idée</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Comment pourriez-vous définir votre idée(1 phrase)?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['idee1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Que ce qui est à l\'origine de votre idée?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos objectifs?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Que pourraient être les principales fonctions de votre entreprise?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee4']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quelle est la date probable du démarrage de vos activités?</label>
                        <div class="col-md-12">
                          '.nl2br($key['idee5']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos produits et/ou services</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos principaux produits et/ou services que vous proposez?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['produit1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quel est le caractère innovant du produit, du service, que vous proposez?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">A quel besoin du marché allez-vous répondre?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Les produis que vous allez proposer seront-ils brevetables ou déjà brevetés?</label>
                        <div class="col-md-12">
                          '.nl2br($key['produit4']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos clients</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Qui sont vos clients potentiels?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['client1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">leurs pratiques en matière d\'utilisation des produits que vous allez proposer</label>
                        <div class="col-md-12">
                          '.nl2br($key['client2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">S\'intéressent-ils au produit ou aux services du vendeur?</label>
                        <div class="col-md-12">
                          '.nl2br($key['client3']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Votre marché</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quel marché ciblez-vous et pourquoi?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['marche1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">La taille du marché sur lequel vous comptez développer vos activités</label>
                        <div class="col-md-12">
                          '.nl2br($key['marche2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos concurrents</h4>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les produits et/ou les services concurents(directs et indirects) déjà proposés sur le marché?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['concurrence1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Comment vos produits et/ou services se différencient-ils de ceux existants sur le marché?</label>
                        <div class="col-md-12">
                          '.nl2br($key['concurrence2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Vos moyens</h4>
                      </div>
                      <div class="col-md-12">
                        <h5>moyens matériels</h5> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les moyens matériels dont vous disposez déjà?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['moyen1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">De quels moyens avez vous besoins pour mettre en oeuvre votre projet?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen2']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h5>moyens fincanciers</h5> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les financements et les ressources financement dont vous disposez actuellement?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen3']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont vos ressources financières personnelles pendant la période d\'incubation  ?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen4']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les différents types de financements dont vous pourriez avoir besoin?</label>
                        <div class="col-md-12">
                          '.nl2br($key['moyen5']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Le partenariat</h4> 
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Souhaitez-vous travailler en partenariat avec d\'autre entreprises du même secteur d\'activité?</label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['partenaire1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Avez-vous déjà identifier certains partenaires potentiels? si oui, les quels?</label>
                        <div class="col-md-12">
                          '.nl2br($key['partenaire2']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quelle opinion sur le travail en réseautage?</label>
                        <div class="col-md-12">
                          '.nl2br($key['partenaire3']).'
                        </div>
                      </div>

                      <div class="col-md-12">
                        <h4>Forces et faiblesses de votre projet</h4> 
                      </div>  

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">
                          les difficultés potentielles qui sont obstacles pour votre entreprise
                        </label>
                        
                        <div class="col-md-12">
                          '.nl2br($key['faiblesse1']).'
                        </div>
                      </div>

                      <div class="col-md-12 form-group">
                        <label class="text-dark" style="font-size:22px; color:rgb(40, 41, 35);">Quels sont les point fort de votre idée d\'entreprise?<br></label>
                        <div class="col-md-12">
                          '.nl2br($key['faiblesse2']).'
                        </div>
                      </div>

                      
                    </div>
                 </div>

                <!--footer -->

                  <div class="col-md-12">
                   <hr>
                    <h4>Notre Instruction</h4>
                    <ol>
                      <li>
                        <ul>
                          Instruction
                          <li>Un commité d\'experts sélectionnera les meilleurs projets sur dossier et sur entreptien;</li>
                          <li>Le lauréat fournira tous les éléments complémentaires jugés nécessaires par le commité de sélection afin d\'assurer la reussite de leur intégration dans l\'incubateur.</li>
                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Documments annexés
                          <li>Curriculum vitae de tous les membres de l\'équipe;</li>
                          <li>Tous les documments utiles à l\'expertise du dossier;</li>
                          <li>Si votre entreprise a déjà démarré, joindre à cette offre votre plan financier ou projet d\'affaire.</li>

                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Confidentialité
                          <li>L\'incubateur s\'engagent à ce que toutes les informations lui transmises restent confidentielles.</li>
              
                        </ul> 
                      </li>

                      <li>
                        <ul>
                          Engagement
                          <li>Les lauréats auront à signer une convention d\'incubation.</li>
              
                        </ul> 
                      </li>


                    </ol>
                  </div>
                  <hr>

                <!--fin footer -->

                </td>

                <td width="15%">
               
                </td>


               </tr>

               ';
            
              $output .= '</table>';
               

              $output .= '

              

              ';
              
               
            }

            $output .= '

              </div>

              
          
              <div align="right" style="margin-botton:20px;">

                  <a href="'.base_url().'user/evaluation" style="text-decoration: none; color: black;">signature:</a>
            
              </div>
              
            ';


      
        return $output;
    }

    // suppression visiteur en ligne 
    function delete_visiteur($id){
      $this->db->where('id', $id);
      $this->db->delete("padding_users");
    }

     // retourner les numéros  
    function get_email_du_site(){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $numeros = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $numeros = $key["email"];
          
        }
      }
      else{
         $numeros ="info@gmail.com";
      }
      return $numeros ;
      

    }

    // retourner les numéros  
    function get_info_du_site($column){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $infos = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $infos = $key[$column];
          
        }
      }
      else{
         $infos ="ce champ est vide";
      }
      return $infos ;
      

    }


    function update_messagerie($code, $data)  
    {  
         $this->db->where("code", $code);  
         $this->db->update("messagerie", $data);  
    }

    function delete_messagerie($code)  
    {  
         $this->db->where("code", $code);  
         $this->db->delete("messagerie");  
    }

    // chat groupe 
    function update_chat_messagerie($idgroupe, $data)  
    {  
         $this->db->where("idgroupe", $idgroupe);  
         $this->db->update("groupe", $data);  
    }

    function delete_chat_messagerie($idgroupe)  
    {  
         $this->db->where("idgroupe", $idgroupe);  
         $this->db->delete("groupe");  
    }

     // suppression de messages 
    function delete_message_tag($idmessage){
      $this->db->where('idmessage', $idmessage);
        $this->db->delete('messagerie');
    }


     // retourner les numéros  
    function get_logo_du_site(){
      $this->db->limit(1);
      $nom = $this->db->get("tbl_info");
      $numeros = '';
      if ($nom->num_rows() > 0) {
        foreach ($nom->result_array() as $key) {
          $numeros = $key["icone"];
          
        }
      }
      else{
         $numeros ="";
      }
      return $numeros ;
      

    }





    // recherche des utilisateurs par fultres
    function fetch_data_search_online_user_follow($query)
    {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->limit(9);
        if($query != '')
        {
         $this->db->like('id', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('full_adresse', $query);
         $this->db->or_like('telephone', $query);

        }
        $this->db->order_by('first_name', 'ASC');
        return $this->db->get();
    }

    // pagination des utilisateurs connectés
    function fetch_pagination_ti_followe_count(){
      $query = $this->db->get("users");
      return $query->num_rows();
    }

    // pagination des utilisateurs connecters
    function fetch_details_pagination_to_users_count($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('admin_login');
        $etat = '';
        $url = '';
        
        foreach($query->result() as $row)
        {

           
            
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
        
        return $output;
    }
  // fin pagination

     // pagination des utilisateurs connecters
    function entreprise_fetch_pagination_to_users_count($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('instuctor_login');
        $etat = '';
        $url = '';
        
        foreach($query->result() as $row)
        {

           
            
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
        
        return $output;
    }
  // fin pagination

    // pagination des utilisateurs connecters
    function entreprise_fetch_pagination_to_users_count_comptable($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('comptable_login');
        $etat = '';
        $url = '';
        
        foreach($query->result() as $row)
        {

           
            
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
        
        return $output;
    }
  // fin pagination

    // pagination des utilisateurs connecters
    function entreprise_fetch_pagination_to_users_count_user($limit, $start){
        $output = '';
        $this->db->select("*");
        $this->db->from("users");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('id');
        $etat = '';
        $url = '';
        
        foreach($query->result() as $row)
        {

           
            
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
        
        return $output;
    }
  // fin pagination


   // recherche des produits par fultres
   function fetch_data_search_online_user($query)
   {
    $this->db->select("*");
    $this->db->from("users");
    $this->db->limit(9);
    if($query != '')
    {
     $this->db->like('id', $query);
     $this->db->or_like('first_name', $query);
     $this->db->or_like('last_name', $query);
     $this->db->or_like('full_adresse', $query);
     $this->db->or_like('telephone', $query);

    }
    $this->db->order_by('first_name', 'ASC');
    return $this->db->get();
   }

   // pagination des utilisateurs connecters
      function fetch_details_pagination_online_connected($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("profile_online");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('admin_login');
        $etat = '';
        $url='';
        
        foreach($query->result() as $row)
        {
            if ($row->id_user != $id) {
              $url= $url = base_url().'admin/detail_users_profile/'.$row->id_user;
              $etat = '<div class="col-md-12"><span class="message">
                  <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id_user.'">
                &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                <span class="badge badge-success ml-3">en ligne</span>
                    </a> 
                  </span></div>';
            }
            else{
                $url = $url = base_url().'admin/profile';
                $etat = '

                <div class="col-md-12"><span class="message">
                  <a href="'.base_url().'admin/profile" class="text-warning">
                &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                <span class="badge badge-success ml-3">en ligne</span>
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
        
        return $output;
      }

       // pagination des utilisateurs connecters
      function Entreprise_fetch_online_connected($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("profile_online");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('instuctor_login');
        $etat = '';
        $url='';
        
        foreach($query->result() as $row)
        {
            if ($row->id_user != $id) {
              $url= $url = base_url().'entreprise/detail_users_profile/'.$row->id_user;
              $etat = '<div class="col-md-12"><span class="message">
                  <a href="'.base_url().'entreprise/chat_admin/'.$id.'/'.$row->id_user.'">
                &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                <span class="badge badge-success ml-3">en ligne</span>
                    </a> 
                  </span></div>';
            }
            else{
                $url = $url = base_url().'entreprise/profile';
                $etat = '

                <div class="col-md-12"><span class="message">
                  <a href="'.base_url().'entreprise/profile" class="text-warning">
                &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                <span class="badge badge-success ml-3">en ligne</span>
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
        
        return $output;
      }


      // pagination des utilisateurs connecters
      function Comptable_fetch_online_connected($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("profile_online");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('comptable_login');
        $etat = '';
        $url='';
        
        foreach($query->result() as $row)
        {
            if ($row->id_user != $id) {
              $url= $url = base_url().'comptable/detail_users_profile/'.$row->id_user;
              $etat = '<div class="col-md-12"><span class="message">
                  <a href="'.base_url().'comptable/chat_admin/'.$id.'/'.$row->id_user.'">
                &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                <span class="badge badge-success ml-3">en ligne</span>
                    </a> 
                  </span></div>';
            }
            else{
                $url = $url = base_url().'comptable/profile';
                $etat = '

                <div class="col-md-12"><span class="message">
                  <a href="'.base_url().'comptable/profile" class="text-warning">
                &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                <span class="badge badge-success ml-3">en ligne</span>
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
        
        return $output;
      }


      // pagination des utilisateurs connecters
      function Comptable_fetch_online_connected_user($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("profile_online");
        $this->db->order_by("first_name", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        $id = $this->session->userdata('id');
        $etat = '';
        $url='';
        
        foreach($query->result() as $row)
        {
            if ($row->id_user != $id) {
              $url= $url = base_url().'user/detail_users_profile/'.$row->id_user;
              $etat = '<div class="col-md-12"><span class="message">
                  <a href="'.base_url().'user/chat_admin/'.$id.'/'.$row->id_user.'">
                &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                <span class="badge badge-success ml-3">en ligne</span>
                    </a> 
                  </span></div>';
            }
            else{
                $url = $url = base_url().'user/profile';
                $etat = '

                <div class="col-md-12"><span class="message">
                  <a href="'.base_url().'user/profile" class="text-warning">
                &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                <span class="badge badge-success ml-3">en ligne</span>
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
        
        return $output;
      }





      /*
      * script de group de chat
      *

      ====================================================
      ====================================================
      ====================================================

      */

      function insert_groupe_chat($data)  
      {  
           $this->db->insert('groupe_chat', $data);  
      }

      function update_groupe_chat($code, $data)  
      {  
           $this->db->where("code", $code);  
           $this->db->update("groupe_chat", $data);  
      }


      function delete_groupe_chat($idgroupe)  
      {  
           $this->db->where("idgroupe", $idgroupe);  
           $this->db->delete("groupe_chat");  
      }

      function fetch_single_groupe_chat($code)  
      {   
           $this->db->where("code", $code);  
           $this->db->order_by("idgroupe", "DESC"); 
           $query=$this->db->get('groupe_chat');  
           return $query->result();  
      }

      function get_users_groupe_by_code($code){

       $resultat = $this->db->query("SELECT * FROM profile_groupe WHERE code='".$code."' GROUP BY id_user LIMIT 100 ");
        return $resultat;
      }



      function recherche_utilisateur_requete($query){
          $this->db->select("*");
          $this->db->from("users");
          $this->db->limit(7);
          if($query != '')
          {
             $this->db->like('id', $query);
             $this->db->or_like('telephone', $query);
             $this->db->or_like('first_name', $query);
             $this->db->or_like('first_name', $query);
             $this->db->or_like('email', $query);
          }
          $this->db->order_by('first_name', 'ASC');
          return $this->db->get();
      }

      // pagination des utilisateurs 
      function fetch_details_pagination_groupe($limit, $start){
          $output = '';
          $this->db->select("*");
          $this->db->from("users");
          $this->db->order_by("first_name", "ASC");
          $this->db->limit($limit, $start);
          $query = $this->db->get();

          $id = $this->session->userdata('admin_login');
          $etat = '';
          $url = '';

          $output .='<ul class="list-unstyled resultat">';
          
          foreach($query->result() as $row)
          {

             
              
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
          
          return $output;
      }
      // fin pagination
      // insertion  au groupe
      function insert_integration_groupe($data){
          $this->db->insert('groupe', $data);
          return $this->db->insert_id();
      }
      // suppression au groupe
      function returer_suppression_au_groupe_discution($code_groupe, $id_user)  
      {  

        $this->db->query("DELETE FROM groupe WHERE code_groupe='".$code_groupe."' AND id_user='".$id_user."' "); 

      }

      // get tittre 
      function get_name_groupe($code){
        $this->db->where("code", $code);
        $this->db->limit(1);
        $nom = $this->db->get("profile_groupe")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom"];
          return $titre ;
        }

      }

      // messagerie groupe
      function insert_message_chat_groupe($data){
        $this->db->insert('groupe', $data);
      }

      function Select_category()
      {
          $this->db->order_by('nom','ASC');
          $this->db->limit(50);
          return $this->db->get('category');
      }

      function Select_articles()
      {
          $this->db->order_by('nom','ASC');
          $this->db->limit(50);
          return $this->db->get('profile_article');
      }

      function Select_formations()
      {
          $this->db->order_by('idf','DESC');
          $this->db->limit(20);
          return $this->db->get('formations');
      }

      function Select_formations_ok($column, $table)
      {
          $this->db->group_by($column);
          $this->db->limit(20);
          return $this->db->get($table);
      }

       // script pour nos article 
  function make_query_article()  
  {  
      
     $this->db->select($this->select_column15);  
     $this->db->from($this->table15);
     $this->db->limit(10);
     
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("idart", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);
          $this->db->or_like("description", $_POST["search"]["value"]);
          $this->db->or_like("lien", $_POST["search"]["value"]);
          $this->db->or_like("nom_cat", $_POST["search"]["value"]);
          $this->db->or_like("type", $_POST["search"]["value"]);
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column15[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('idart', 'DESC');  
     }  
  }

   function make_datatables_article(){  
         $this->make_query_article();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_article(){  
         $this->make_query_article();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_article()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table15);  
         return $this->db->count_all_results();  
    }

    function insert_article($data)  
    {  
         $this->db->insert('article', $data);  
    }

    
    function update_article($idart, $data)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->update("article", $data);  
    }


    function delete_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $this->db->delete("article");  
    }

    function fetch_single_article($idart)  
    {  
         $this->db->where("idart", $idart);  
         $query=$this->db->get('article');  
         return $query->result();  
    } 
    //fin de la article information

    // filtrage avec limit 
    function fetch_details_view_articles_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("idart", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
        {

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
      return $output;
    }

     function fetch_details_view_articles()
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("idart", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    function fetch_data_search_view_article($query)
    {
        $this->db->select("*");
        $this->db->from("profile_article");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idart', $query);
         $this->db->or_like('nom', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('type', $query);
         $this->db->or_like('nom_cat', $query);
        }
        $this->db->order_by('idart', 'DESC');
        return $this->db->get();
    }

    function Select_artcle_orders()
    {
        $this->db->order_by('created_at','DESC');
        $this->db->limit(15);
        return $this->db->get('article');
    }

    // operation commentaire

    function insert_commentaire($data)  
    {  
         $this->db->insert('commentaire', $data);  
    }

    
    function update_commentaire($idcomment, $data)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $this->db->update("commentaire", $data);  
    }


    function delete_commentaire($idcomment)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $this->db->delete("commentaire");  
    }

    function fetch_single_commentaire($idcomment)  
    {  
         $this->db->where("idcomment", $idcomment);  
         $query=$this->db->get('profile_commentaire');  
         return $query->result();  
    } 


    function fetch_details_view_commentaire()
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_commentaire");
      $this->db->order_by("idcomment", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // filtrage avec limit 
    function fetch_details_view_commentaire_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_commentaire");
      $this->db->order_by("idcomment", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    function fetch_data_search_view_commentaire($query)
    {
        $this->db->select("*");
        $this->db->from("profile_commentaire");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idart', $query);
         $this->db->or_like('nom', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('type', $query);
         $this->db->or_like('nomcat', $query);
        }
        $this->db->order_by('idcomment', 'DESC');
        return $this->db->get();
    }


    // script pour galery2 
     //insertion des photos pour la galerie
    function insert_galery2($data)  
    {  
        $this->db->insert('galery2', $data);  
    }
    // fin pagination
    function fetch_pagination_galery_personnel(){
      $this->db->order_by("idg", "DESC");
      $query = $this->db->get("galery2");
      return $query->num_rows();
    }

    // pagination galery utilisateur
    function fetch_details_pagination_galery2($limit, $start){
      $output = '';
      $this->db->select("*");
      $this->db->from("galery2");
      // $this->db->order_by("nom", "ASC");
      $this->db->order_by("idg", "DESC");

      $this->db->limit($limit, $start);
      $query = $this->db->get();
      
      foreach($query->result() as $row)
      {
        
       $output .= '

          <div class="col-md-4" align="center" style="margin-bottom:24px;">
              <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
                <br />
            <input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
            <a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
              <i class="fa fa-trash"></i> supprimer
            </a>

            &nbsp;
            <a href="javascript:void(0);" class="text-success update" idg="'.$row->idg.'">
              <i class="fa fa-edit"></i> editer
            </a>

         </div>
       ';
      }
      
      return $output;
    }
    // fin pagination

    //suppression des photos pour la galerie
    function delete_photo_galery_personnele($idg)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->delete("galery2");  
    }
    // pagination contact

    function update_galery_entrep_personnele($idg, $data)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->update("galery2", $data);  
    }

    function fetch_single_galery_entreprise_personnele($idg)  
    {  
         $this->db->where("idg", $idg);  
         $query=$this->db->get('galery2');  
         return $query->result();  
    }

     // script pour tinfo_user 
   function make_query_tinfo_user()  
   {  
          
         $this->db->select($this->select_column20);  
         $this->db->from($this->table20);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_user", $_POST["search"]["value"]);  
              $this->db->or_like("poste", $_POST["search"]["value"]);
              $this->db->or_like("first_name", $_POST["search"]["value"]);
              $this->db->or_like("last_name", $_POST["search"]["value"]);
              $this->db->or_like("email", $_POST["search"]["value"]);
              $this->db->or_like("sexe", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column20[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_user', 'DESC');  
         }  
    }

   function make_datatables_tinfo_user(){  
         $this->make_query_tinfo_user();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_user(){  
         $this->make_query_tinfo_user();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_user()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table20);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_user($data)  
    {  
         $this->db->insert('tinfo_user', $data);  
    }

    
    function update_tinfo_user($idtinfo_user, $data)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $this->db->update("tinfo_user", $data);  
    }


    function delete_tinfo_user($idtinfo_user)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $this->db->delete("tinfo_user");  
    }

    function fetch_single_tinfo_user($idtinfo_user)  
    {  
         $this->db->where("idtinfo_user", $idtinfo_user);  
         $query=$this->db->get('tinfo_user');  
         return $query->result();  
    } 
  // fin de script tinfo_user

       // script pour tinfo_personnel 
   function make_query_tinfo_personnel()  
   {  
          
         $this->db->select($this->select_column16);  
         $this->db->from($this->table16);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_personnel", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("icone", $_POST["search"]["value"]);
              $this->db->or_like("description", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column16[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_personnel', 'DESC');  
         }  
    }

   function make_datatables_tinfo_personnel(){  
         $this->make_query_tinfo_personnel();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_personnel(){  
         $this->make_query_tinfo_personnel();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_personnel()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table16);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_personnel($data)  
    {  
         $this->db->insert('tinfo_personnel', $data);  
    }

    
    function update_tinfo_personnel($idtinfo_personnel, $data)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $this->db->update("tinfo_personnel", $data);  
    }


    function delete_tinfo_personnel($idtinfo_personnel)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $this->db->delete("tinfo_personnel");  
    }

    function fetch_single_tinfo_personnel($idtinfo_personnel)  
    {  
         $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
         $query=$this->db->get('tinfo_personnel');  
         return $query->result();  
    } 
  // fin de script tinfo_personnel

       // script pour tinfo_choix 
   function make_query_tinfo_choix()  
   {  
          
         $this->db->select($this->select_column18);  
         $this->db->from($this->table18);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_choix", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("icone", $_POST["search"]["value"]);
              $this->db->or_like("description", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column18[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_choix', 'DESC');  
         }  
    }

   function make_datatables_tinfo_choix(){  
         $this->make_query_tinfo_choix();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_choix(){  
         $this->make_query_tinfo_choix();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_choix()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table18);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_choix($data)  
    {  
         $this->db->insert('tinfo_choix', $data);  
    }

    
    function update_tinfo_choix($idtinfo_choix, $data)  
    {  
         $this->db->where("idtinfo_choix", $idtinfo_choix);  
         $this->db->update("tinfo_choix", $data);  
    }


    function delete_tinfo_choix($idtinfo_choix)  
    {  
         $this->db->where("idtinfo_choix", $idtinfo_choix);  
         $this->db->delete("tinfo_choix");  
    }

    function fetch_single_tinfo_choix($idtinfo_choix)  
    {  
         $this->db->where("idtinfo_choix", $idtinfo_choix);  
         $query=$this->db->get('tinfo_choix');  
         return $query->result();  
    } 
    // fin de script tinfo_choix

       // script pour tinfo_service 
   function make_query_tinfo_service()  
   {  
          
         $this->db->select($this->select_column17);  
         $this->db->from($this->table17);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_service", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("description", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column17[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_service', 'DESC');  
         }  
    }

   function make_datatables_tinfo_service(){  
         $this->make_query_tinfo_service();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_service(){  
         $this->make_query_tinfo_service();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_service()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table17);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_service($data)  
    {  
         $this->db->insert('tinfo_service', $data);  
    }

    
    function update_tinfo_service($idtinfo_service, $data)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $this->db->update("tinfo_service", $data);  
    }


    function delete_tinfo_service($idtinfo_service)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $this->db->delete("tinfo_service");  
    }

    function fetch_single_tinfo_service($idtinfo_service)  
    {  
         $this->db->where("idtinfo_service", $idtinfo_service);  
         $query=$this->db->get('tinfo_service');  
         return $query->result();  
    } 
  // fin de script tinfo_personnel

    // script pour tinfo_techno 
   function make_query_tinfo_techno()  
   {  
          
         $this->db->select($this->select_column19);  
         $this->db->from($this->table19);  
         if(isset($_POST["search"]["value"]))  
         {  
              $this->db->like("idtinfo_techno", $_POST["search"]["value"]);  
              $this->db->or_like("titre", $_POST["search"]["value"]);
              $this->db->or_like("icone", $_POST["search"]["value"]);
         }  
         if(isset($_POST["order"]))  
         {  
              $this->db->order_by($this->order_column19[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
         }  
         else  
         {  
              $this->db->order_by('idtinfo_techno', 'DESC');  
         }  
    }

   function make_datatables_tinfo_techno(){  
         $this->make_query_tinfo_techno();  
         if($_POST["length"] != -1)  
         {  
              $this->db->limit($_POST['length'], $_POST['start']);  
         }  
         $query = $this->db->get();  
         return $query->result();  
    }

    function get_filtered_data_tinfo_techno(){  
         $this->make_query_tinfo_techno();  
         $query = $this->db->get();  
         return $query->num_rows();  
    }       
    function get_all_data_tinfo_techno()  
    {  
         $this->db->select("*");  
         $this->db->from($this->table19);  
         return $this->db->count_all_results();  
    }

    function insert_tinfo_techno($data)  
    {  
         $this->db->insert('tinfo_techno', $data);  
    }

    
    function update_tinfo_techno($idtinfo_techno, $data)  
    {  
         $this->db->where("idtinfo_techno", $idtinfo_techno);  
         $this->db->update("tinfo_techno", $data);  
    }


    function delete_tinfo_techno($idtinfo_techno)  
    {  
         $this->db->where("idtinfo_techno", $idtinfo_techno);  
         $this->db->delete("tinfo_techno");  
    }

    function fetch_single_tinfo_techno($idtinfo_techno)  
    {  
         $this->db->where("idtinfo_techno", $idtinfo_techno);  
         $query=$this->db->get('tinfo_techno');  
         return $query->result();  
    } 
  // fin de script tinfo_techno

    // operation carousel

    function insert_carousel($data)  
    {  
         $this->db->insert('carousel', $data);  
    }

    function update_carousel($idc, $data)  
    {  
         $this->db->where("idc", $idc);  
         $this->db->update("carousel", $data);  
    }


    function delete_carousel($idc)  
    {  
         $this->db->where("idc", $idc);  
         $this->db->delete("carousel");  
    }

    function fetch_single_carousel($idc)  
    {  
         $this->db->where("idc", $idc);  
         $query=$this->db->get('carousel');  
         return $query->result();  
    } 

    function fetch_data_search_view_carousel($query)
    {
        $this->db->select("*");
        $this->db->from("carousel");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idc', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('created_at', $query);
        
        }
        $this->db->order_by('idc', 'DESC');
        return $this->db->get();
    }


    function fetch_details_view_carousel()
    {
      $output = '';
      $etat = '';
      $this->db->select("*");
      $this->db->from("carousel");
      $this->db->order_by("idc", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // filtrage avec limit 
    function fetch_details_view_carousel_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("carousel");
      $this->db->order_by("idc", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // information carousel du site
    function Select_info_carousel()
    {
        return $this->db->query('SELECT * FROM carousel  LIMIT 6');
    }
    // fin carousel


    /*
    ===============================
    ===============================
    * operation formations
    *operation fin
    */

    function insert_formations($data)  
    {  
         $this->db->insert('formations', $data);  
    }

    function update_formations($idf, $data)  
    {  
         $this->db->where("idf", $idf);  
         $this->db->update("formations", $data);  
    }


    function delete_formations($idf)  
    {  
         $this->db->where("idf", $idf);  
         $this->db->delete("formations");  
    }

    function fetch_single_formations($idf)  
    {  
         $this->db->where("idf", $idf);  
         $query=$this->db->get('formations');  
         return $query->result();  
    } 

    function fetch_data_search_view_formations($query)
    {
        $this->db->select("*");
        $this->db->from("formations");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idf', $query);
         $this->db->or_like('nom', $query);
         $this->db->or_like('date_debit', $query);
         $this->db->or_like('date_fin', $query);
         $this->db->or_like('fin_inscription', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('created_at', $query);
        
        }
        $this->db->order_by('idf', 'DESC');
        return $this->db->get();
    }


    function fetch_details_view_formations()
    {
      $output = '';
      $etat = '';
      $this->db->select("*");
      $this->db->from("formations");
      $this->db->order_by("idf", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // filtrage avec limit 
    function fetch_details_view_formations_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("formations");
      $this->db->order_by("idf", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // information formations du site
    function Select_info_formations()
    {
        return $this->db->query('SELECT * FROM formations  LIMIT 6');
    }
    // fin formations


     /*
    ===============================
    ===============================
    * inscription_formations 
    *operation fin
    */

    function insert_inscription_formations($data)  
    {  
         $this->db->insert('inscription_formations', $data); 
         return $this->db->insert_id(); 
    }

    function update_inscription_formations($idinscription, $data)  
    {  
         $this->db->where("idinscription", $idinscription);  
         $this->db->update("inscription_formations", $data);  
    }


    function delete_inscription_formations($idinscription)  
    {  
         $this->db->where("idinscription", $idinscription);  
         $this->db->delete("inscription_formations");  
    }

    function fetch_single_inscription_formations($idinscription)  
    {  
         $this->db->where("idinscription", $idinscription);  
         $query=$this->db->get('profile_inscription');  
         return $query->result();  
    } 

    function fetch_single_test_inscription_formations($idf,$email,$annee)  
    {  
         $query=$this->db->get_where('profile_inscription',
            array(
              'idf'     =>    $idf,
              'email'   =>    $email,
              'annee'   =>    $annee
            )
         );  
         return $query->num_rows();  
    } 

     function fetch_single_test_inscription_formations_home($idf,$email)  
    {  
         $query=$this->db->get_where('profile_inscription',
            array(
              'idf'     =>    $idf,
              'email'   =>    $email
            )
         );  
         return $query->num_rows();  
    } 

    function fetch_data_search_view_inscription_formations($query)
    {
        $this->db->select("*");
        $this->db->from("profile_inscription");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('idinscription', $query);
         $this->db->or_like('nom', $query);
         $this->db->or_like('nomcomplet', $query);
         $this->db->or_like('date_debit', $query);
         $this->db->or_like('date_fin', $query);
         $this->db->or_like('created_at', $query);
         $this->db->or_like('annee', $query);
        
        }
        $this->db->order_by('idinscription', 'DESC');
        return $this->db->get();
    }


    function fetch_details_view_inscription_formations()
    {
      $output = '';
      $etat = '';
      $this->db->select("*");
      $this->db->from("profile_inscription");
      $this->db->order_by("idinscription", "DESC");
      $this->db->limit(10);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }

    // filtrage avec limit 
    function fetch_details_view_inscription_formations_limit($limit)
    {
      $output = '';
       $etat = '';
      $this->db->select("*");
      $this->db->from("profile_inscription");
      $this->db->order_by("idinscription", "DESC");
      $this->db->limit($limit);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
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
      return $output;
    }


    // impression de resultat de formations 
    // filtrage avec limit 
    function fetch_details_view_inscription_pdf($idf, $annee)
    {
      $output = '';
      $etat = '';
      $query = $this->db->get_where("profile_inscription", array(
        'idf'     =>  $idf,
        'annee'   =>  $annee
      ));

      $output .= '<link href="' . base_url() . 'js/css/style.css" rel="stylesheet">';
      $output .= '

      <div class="col-md-12 mt-2 mb-2" >
          <a href="javascript:void(0)" class="btn btn-outline-warning select_all pull-left" id="#select_all" data-toggle="modal" data-target="#userModal3"><i class="fa fa-send"></i> Envoyer un sms</a>
      </div>

      <div class="col-md-12 mt-2 mb-2">
        <a class="btn btn-outline-warning pull-right mb-2" href="'.base_url().'admin/printFormation/'.$idf.'/'.$annee.'"><i class="fa fa-print mr-1"></i> Imprimmer la liste</a>
      </div>

      <table class="table-warning table-striped nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="10%">Avatar</th> 
                  <th width="10%">Titre </th>

                  <th width="20%">Date debit </th>
                  <th width="20%">Date fin </th>
                  <th width="10%">Apprenant Nom complet</th>

                  <th width="20%">Mise à jour</th>

                  <th width="5%">Niveau d\'étude</th> 
                  <th width="5%">Téléphone</th>  
              </tr>  
         </thead> 

         <tbody id="example-tbody">
      ';
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
        {

            


         $output .= '
         <tr>
          
          <td>
           <input type="checkbox" name="tel" value="'.$row->telephone.'" class="tels delete_checkbox">
          <img src="'.base_url().'upload/formations/'.$row->image.'" class="img img-responsive img-thumbnail" width="50" height="35" style="border-radius:50%;" /></td>

          <td>'.nl2br(substr($row->nom, 0,30)).' ....'.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
          <td>'.nl2br(substr($row->nomcomplet, 0,15)).' ....'.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

          <td>'.nl2br(substr($row->niveau_etude, 0,30)).' ....'.'</td>
          <td>'.nl2br(substr($row->telephone, 0,15)).'</td>
         

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

                  <th width="5%">Niveau d\'étude</th> 
                  <th width="5%">Téléphone</th>  

              </tr>  
         </tfoot>   
          
      </table>';
      return $output;
    }

     // filtrage avec limit 
    function fetch_details_view_formation_pdf($idf, $annee)
    {
      $output = '';
      $etat = '';
      $nom_formation ='';
      $query = $this->db->get_where("profile_inscription", array(
        'idf'     =>  $idf,
        'annee'   =>  $annee
      ));

      foreach($query->result() as $row)
      {
        $nom_formation = $row->nom;
      }

        $icone    = '';
        $email    = '';

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }



       $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h5>
            Liste des apprenants iscrits à la formation ".$nom_formation."
         <h5>
        ";

         $img =  base_url().'upload/tbl_info/'.$icone;

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <!--<a href="'.base_url().'upload/tbl_info/'.$icone.'" class="btn btn-primary"> voir l\'image</a>-->

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

         $output .= '</div>';

      $output .= '<link href="' . base_url() . 'js/css/style.css" rel="stylesheet">';
      $output .= '

      <style>
          body { margin:0;padding:0; }
          @media only screen and (max-width: 480px) {
              /* horizontal scrollbar for tables if mobile screen */
              .tablemobile {
                  overflow-x: auto;
                  display: block;
              }
          }
      </style>

      <table class="table-striped  nk-tb-list nk-tb-ulist dataTable no-footer tablemobile" data-auto-responsive="false" id="user_data" role="grid" aria-describedby="DataTables_Table_1_info">
          <thead class="tb-member-head thead-light">  
              <tr> 
                  <th width="15%">Nom</th> 
                  <th width="10%">Titre </th>

                  <th width="15%">Date debit </th>
                  <th width="15%">Date fin </th>
                  <th width="15%">Mail</th>

                  <th width="15%">Mise à jour</th>

                  <th width="5%">Niveau d\'étude</th> 
                  <th width="5%">Téléphone</th> 
                  
              </tr>  
         </thead> 

         <tbody>
      ';
      if ($query->num_rows() < 0) {
        
      }
      else{

        foreach($query->result() as $row)
        {

            


         $output .= '
         <tr>
          
          <td>'.nl2br(substr($row->nomcomplet, 0,15)).'</td>

          <td>'.nl2br(substr($row->nom, 0,30)).' ....'.'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23)).'</td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)).'</td>
          <td><a href="mailto:'.$row->email.'">'.$row->email.'</a></td>
          <td>'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</td>

          <td>'.nl2br(substr($row->niveau_etude, 0,30)).' ....'.'</td>
          <td>'.nl2br(substr($row->telephone, 0,15)).'</td>
         

         </tr>
         ';
        }
      }
      $output .= '
          </tbody>

         <tfoot>  
              <tr>  
                  <th width="15%">Nom</th> 
                  <th width="10%">Titre </th>

                  <th width="15%">Date debit </th>
                  <th width="15%">Date fin </th>
                  <th width="15%">Mail</th>

                  <th width="15%">Mise à jour</th>

                  <th width="5%">Niveau d\'étude</th> 
                  <th width="5%">Téléphone</th> 
                  
              </tr>  
         </tfoot>   
          
      </table>';
      return $output;
    }


    // information inscription_formations du site
    function Select_info_inscription_formations()
    {
        return $this->db->query('SELECT * FROM inscription_formations  LIMIT 6');
    }
    // fin inscription_formations

    // contact
  function make_query_contact()  
  {  
      
     $this->db->select($this->select_column12);  
     $this->db->from($this->table12);  
     if(isset($_POST["search"]["value"]))  
     {  
          $this->db->like("sujet", $_POST["search"]["value"]);  
          $this->db->or_like("nom", $_POST["search"]["value"]);  
          $this->db->or_like("email", $_POST["search"]["value"]);  
     }  
     if(isset($_POST["order"]))  
     {  
          $this->db->order_by($this->order_column12[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
     }  
     else  
     {  
          $this->db->order_by('id', 'DESC');  
     }  
  }

  function make_datatables_contact(){  
     $this->make_query_contact();  
     if($_POST["length"] != -1)  
     {  
          $this->db->limit($_POST['length'], $_POST['start']);  
     }  
     $query = $this->db->get();  
     return $query->result();  
  }

  function get_filtered_data_contact(){  
     $this->make_query_contact();  
     $query = $this->db->get();  
     return $query->num_rows();  
  }       
  function get_all_data_contact()  
  {  
     $this->db->select("*");  
     $this->db->from($this->table12);  
     return $this->db->count_all_results();  
  }



  function update_contact($id, $data)  
  {  
     $this->db->where("id", $id);  
     $this->db->update("contact", $data);  
  }


  function delete_contact($id)  
  {  
     $this->db->where("id", $id);  
     $this->db->delete("contact");  
  }

  function fetch_single_contact($id)  
  {  
     $this->db->where("id", $id);  
     $query=$this->db->get('contact');  
     return $query->result();  
  }


  /*
  *script de messagerie
  ===================================
  ==================================
  ===================================
  */

  // sauvegarde de message
  function insert_message_sender($data)  
  {  
       $this->db->insert('message_sender', $data);  
  }

  function update_message_sender($idsms, $data)  
  {  
     $this->db->where("idsms", $idsms);  
     $this->db->update("message_sender", $data);  
  }

  // suppression de message 
  function delete_message_sender($idsms)  
  {  
       $this->db->where("idsms", $idsms);  
       $this->db->delete("message_sender");  
  }

  function fetch_single_message_sender($idsms)  
  {  
     $this->db->where("idsms", $idsms);  
     $query=$this->db->get('message_sender');  
     return $query->result();  
  }

  // voir tous les messages 
   function count_all_message_users_byrole($idrole)
   {
    $query = $this->db->get_where("profile_user", array('idrole'  =>  $idrole));
    return $query->num_rows();
   }

  // voir tous les messages 
   function count_all_message_users()
   {
    $query = $this->db->get("profile_user");
    return $query->num_rows();
   }

  // voir tous les messages 
   function count_all_message_sender()
   {
    $query = $this->db->get("message_sender");
    return $query->num_rows();
   }

   function fetch_detailsmessage_sender($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("message_sender");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
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
      foreach($query->result() as $row)
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
        return $output;
   }

   function fetch_data_sms_sender($query)
   {
      $this->db->select("*");
      $this->db->limit(10);
      $this->db->from("message_sender");
      if($query != '')
      {
       $this->db->like('idsms', $query);
       $this->db->or_like('tel', $query);
       $this->db->or_like('etat', $query);
       $this->db->or_like('message', $query);
      }
      $this->db->order_by('created_at', 'DESC');
      return $this->db->get();
   }


   // pagination users 
   function fetch_detailsmessage_users($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("profile_user");
    $this->db->order_by("first_name", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
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
      foreach($query->result() as $row)
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
        return $output;
   }

   function fetch_data_sms_users($query)
   {
      $this->db->select("*");
      $this->db->limit(10);
      $this->db->from("profile_user");
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('first_name', $query);
       $this->db->or_like('last_name', $query);
       $this->db->or_like('nom', $query);
       $this->db->or_like('telephone', $query);
      }
      $this->db->order_by('first_name', 'ASC');
      return $this->db->get();
   }

   // filtrage bu role 
   // pagination users 
   function fetch_detailsmessage_users_byrole($limit, $start, $idrole)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("profile_user");
    $this->db->where("idrole", $idrole);
    $this->db->order_by("first_name", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();
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
      foreach($query->result() as $row)
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
        return $output;
   }


    /*
    les scripts pour confirmation de paiement
    ========================================
    =======================================
    =======================================
    */

    // script pour information  des paiements en attente
    function count_all_view_paiement_padding()
    {

      $this->db->group_by("token");
      $this->db->limit(30);
      $query = $this->db->get("profile_paiement_padding");
      return $query->num_rows();
    }

    // script pour information  des paiements 
    function count_all_view_paiement()
    {

      $this->db->group_by("token");
      $this->db->limit(30);
      $query = $this->db->get("profile_paiement");
      return $query->num_rows();
    }


    /*
    les scripts pour confirmation de paiement
    ========================================
    =======================================
    =======================================
    */


    // script pour le paiement en padding

    function fetch_details_view_paiement_padding($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_paiement_padding");
      $this->db->group_by("token");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $mobile = '';

        foreach($query->result() as $row)
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
      return $output;
    }


    // script pour le paiement normal

    function fetch_details_view_paiement($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_paiement");
      $this->db->group_by("token");
      $this->db->order_by("idp","DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $mobile = '';
        $etat_paiement ='';

        foreach($query->result() as $row)
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
      return $output;
    }

    function fetch_data_search_paiement_padding($query)
    {
        $this->db->select("*");
        $this->db->from("profile_paiement_padding");
        $this->db->group_by("token");
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('token', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('telephone', $query);
        }
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_search_paiement($query)
    {
        $this->db->select("*");
        $this->db->from("profile_paiement");
        $this->db->group_by("token");

        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('token', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('telephone', $query);
        }
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_search_depense($query)
    {
        $this->db->select("*");
        $this->db->from("profile_depense");
       
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('jour', $query);
         $this->db->or_like('nomPer', $query);
         $this->db->or_like('montant_nombre', $query);
         $this->db->or_like('montant_lettre', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('telephone', $query);
        }
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_search_module($query)
    {
        $this->db->select("*");
        $this->db->from("profile_module");
       
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('titre', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('created_at', $query);
         $this->db->or_like('annee', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('code', $query);
        }
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_search_module_user_tag($query, $id_user)
    {
        $this->db->select("*");
        $this->db->from("profile_module");
       
        $this->db->limit(10);
        if($query != '')
        {
         $this->db->like('titre', $query);
         $this->db->or_like('description', $query);
         $this->db->or_like('created_at', $query);
         $this->db->or_like('annee', $query);
         $this->db->or_like('first_name', $query);
         $this->db->or_like('last_name', $query);
         $this->db->or_like('code', $query);
        }
        $this->db->where('id_user', $id_user);
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_limit_paiement($query)
    {
        $this->db->select("*");
        $this->db->from("profile_paiement");
       
        if($query != '')
        {
          $this->db->limit($query);
        }
        return $this->db->get();
    }

    function fetch_data_limit_depense($query)
    {
        $this->db->select("*");
        $this->db->where("etat_validation", 1);
        $this->db->from("profile_depense");
       
        if($query != '')
        {
          $this->db->limit($query);
        }
        return $this->db->get();
    }

     function fetch_data_limit_module($query)
    {
        $this->db->select("*");
        $this->db->from("profile_module");
       
        if($query != '')
        {
          $this->db->limit($query);
        }
        return $this->db->get();
    }

    // pour le paiement 
    function fetch_data_paiement_date($jour1, $jour2)
    {
        $query = $this->db->query("SELECT * FROM profile_paiement WHERE date_paie BETWEEN '".$jour1."' AND '".$jour2."' ");
        return $query;
    }

    // pour le depense 
    function fetch_data_depense_date($jour1, $jour2)
    {
        $query = $this->db->query("SELECT * FROM profile_depense WHERE jour BETWEEN '".$jour1."' AND '".$jour2."' AND etat_validation=1 ");
        return $query;
    }

    // pour la somme du paiement 
    function fetch_sum_data_paiement_date($jour1, $jour2)
    {
        $montant;
        $query = $this->db->query("SELECT SUM(montant) AS montant FROM profile_paiement WHERE date_paie BETWEEN '".$jour1."' AND '".$jour2."' ");
        if ($query->num_rows() > 0) {
          # code...

          foreach ($query->result_array() as $key) {
            # code...
            $montant = $key['montant'];
          }
        }
        else{
          $montant = 0;
        }

        return $montant;
    }

    // pour la somme du paiement 
    function fetch_sum_data_depense_date_valide($jour1, $jour2)
    {
        $montant;
        $query = $this->db->query("SELECT SUM(montant_nombre) AS montant FROM profile_depense WHERE jour BETWEEN '".$jour1."' AND '".$jour2."' AND etat_validation=1 ");
        if ($query->num_rows() > 0) {
          # code...

          foreach ($query->result_array() as $key) {
            # code...
            $montant = $key['montant'];
          }
        }
        else{
          $montant = 0;
        }

        return $montant;
    }


    // pour la somme du depense 
    function fetch_sum_data_depense_date($jour1, $jour2)
    {
        $montant;
        $query = $this->db->query("SELECT SUM(montant_nombre) AS montant FROM profile_depense WHERE jour BETWEEN '".$jour1."' AND '".$jour2."' AND etat_validation=1 ");
        if ($query->num_rows() > 0) {
          # code...

          foreach ($query->result_array() as $key) {
            # code...
            $montant = $key['montant'];
          }
        }
        else{
          $montant = 0;
        }

        return $montant;
    }


    // appel de startups
    function fetch_membre_apprenant_inscrit()
    {
        $this->db->order_by('first_name','ASC');
        return $this->db->get('profile_entreprise');
    }

    // appel de dates 
    function fetch_categores_dates_compt()
    {
        $this->db->group_by('date_paie');
        $this->db->order_by('date_paie','DESC');
        return $this->db->get('paiement');
    }

    function fetch_single_personne_user($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('users');  
         return $query->result();  
    }

    function insert_paiement($data)  
    {  
         $this->db->insert('paiement', $data);  
    }

    function get_stat_paie(){
          $chart_data = '';
          $montant;
          $nom = $this->db->query("SELECT SUM(montant) AS montant,date_paie FROM profile_paiement WHERE etat_paiement=1 GROUP BY date_paie")->result_array();
          foreach ($nom as $key) {

            $sexe = "jour:".nl2br(substr(date(DATE_RFC822, strtotime($key["date_paie"])), 0, 23));
            $montant = $key["montant"];
            $chart_data .= "{ indexLabel:'".$sexe."', y:".$montant."}, ";
            
          }

          return $chart_data;

    }

    function get_stat_depense(){
          $chart_data = '';
          $montant;
          $nom = $this->db->query("SELECT SUM(montant_nombre) AS montant,jour,type FROM profile_depense WHERE etat_validation=1 GROUP BY jour")->result_array();
          foreach ($nom as $key) {

            $sexe = "jour:".nl2br(substr(date(DATE_RFC822, strtotime($key["jour"])), 0, 23));
            $montant = $key["montant"];
            $chart_data .= "{ indexLabel:'".$sexe."', y:".$montant."}, ";
            
          }

          return $chart_data;

    }

    function get_stat_depense_par_nature(){
          $chart_data = '';
          $montant;
          $nom = $this->db->query("SELECT SUM(montant_nombre) AS montant,jour,type FROM profile_depense WHERE etat_validation=1 GROUP BY type")->result_array();
          foreach ($nom as $key) {

            $sexe = "jour:".nl2br(substr(date(DATE_RFC822, strtotime($key["jour"])), 0, 23))." ".$key['type'];
            $montant = $key["montant"];
            $chart_data .= "{ indexLabel:'".$sexe."', y:".$montant."}, ";
            
          }

          return $chart_data;

    }

    // impression paiement de galerie
    function fetch_single_details_listePaiement($jour1,$jour2)
    {

       $data = $this->db->query("SELECT * FROM profile_paiement WHERE date_paie BETWEEN '".$jour1."' AND '".$jour2."' ");

        $montantT = $this->fetch_sum_data_paiement_date($jour1, $jour2);
       

        $nom_site = '';
        $icone    = '';
        $email    = '';
        $retour = "javascript:history.go(-1);";

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            LISTE DE PAIEMENT DU  ".nl2br(substr(date(DATE_RFC822, strtotime($jour1)), 0, 23))." AU 
            ".nl2br(substr(date(DATE_RFC822, strtotime($jour2)), 0, 23))." AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

        $output .= '</div>';

        $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%"  cellspacing="5" cellpadding="5" id="user_data" border="0">
              <tr>
               <th width="5%">statut l\'entreprise</th>
               <th width="30%">Nom du ceo</th>
               <th width="5%">téléphone</th>

               <th width="15%">Montant</th>
               <th width="25%">motif</th>

               <th width="20%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $maison = $items["nom"];
              $idpersonne   = $items["idpersonne"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td width="20%" align="center">
               
                '.$maison.'
                 <br />
                <img src="'.base_url().'upload/photo/'.$items["logo"].'" style="height: 40px; width: 50px; border-radius: 50%;"/></td> 
                <td align="center">
                '.$nom_complet.'
                <br/>
                 <img src="'.base_url().'upload/photo/'.$items["image"].'" style="height: 40px; width: 50px; border-radius: 50%;"/>
                </td>
                <td>'.$items["telephone"].'</td>
                <td>'.$items["montant"].'$</td>
                <td>'.$items["motif"].'</td>

                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


               </tr>
               ';

            }

            $output .= '
             <tr>
              <td colspan="5">
                <div align="right">Total montant payé</div>
              </td> 
              <td >'.$montantT.'$</td>
              
             </tr>
           ';

            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.$retour.'" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';

       

      
        return $output;
    }

    // script pour information  des depenses 
    function count_all_view_depense()
    {

      $this->db->limit(30);
      $query = $this->db->get("profile_depense");
      return $query->num_rows();
    }

    // script pour information  des module 
    function count_all_view_module()
    {

      $this->db->limit(30);
      $query = $this->db->get("profile_module");
      return $query->num_rows();
    }

    function count_all_view_module_user($id_user)
    {

      $this->db->limit(30);
      $this->db->where("id_user",$id_user);
      $query = $this->db->get("profile_module");
      return $query->num_rows();
    }
   

    function fetch_details_view_depense($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_depense");
      $this->db->order_by("iddepense","DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($query->result() as $row)
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
      return $output;
    }


    /*
      *script pour les operations depense
      *==========================
      *==========================
      *depense
      *=================================

    */
    // retour de nom de jours
    function get_info_mois(){
        $journee='';
        $nom = $this->db->query("SELECT MONTHNAME(now()) AS jour");
        foreach ($nom->result_array() as $key) {
          $journee=$key['jour'];
        }
        return $journee;
    }

     // retour de nom de jours
    function get_info_annee(){
        $journee='';
        $nom = $this->db->query("SELECT YEAR(now()) AS jour");
        foreach ($nom->result_array() as $key) {
          $journee=$key['jour'];
        }
        return $journee;
    }

    function insert_depense($data){
        $this->db->insert('depense', $data);
    }

    function update_depense($iddepense, $data)  
    {  
         $this->db->where("iddepense", $iddepense);  
         $this->db->update("depense", $data);  
    }

    function delete_depense($iddepense)  
    {  
         $this->db->where("iddepense", $iddepense);  
         $this->db->delete("depense");  
    }

    function fetch_single_depense($iddepense)  
    {  
         $this->db->where("iddepense", $iddepense);  
         $query=$this->db->get('profile_depense');  
         return $query->result();  
    }

    // impression paiement de galerie
    function fetch_single_details_listeDepense($jour1,$jour2)
    {

       $data = $this->db->query("SELECT * FROM profile_depense WHERE jour BETWEEN '".$jour1."' AND '".$jour2."' AND etat_validation=1 ");

        $montantT = $this->fetch_sum_data_depense_date_valide($jour1, $jour2);
       

        $nom_site = '';
        $icone    = '';
        $email    = '';
        $retour = "javascript:history.go(-1);";

        $info = $this->db->get('tbl_info')->result_array();
        foreach ($info as $key) {
          $nom_site = $key['nom_site'];
          $icone    = $key['icone'];
          $email    = $key['email'];
          
        }

        $output = '';
        $nomf;
        $created_at;
        $nom;
        $icone;

         

         $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO <br/>
         <h3>
            EVALUATION DE COMPTE LISTE  DU  ".nl2br(substr(date(DATE_RFC822, strtotime($jour1)), 0, 23))." AU 
            ".nl2br(substr(date(DATE_RFC822, strtotime($jour2)), 0, 23))." AU SYSTEME ".$nom_site."
         <h3>
         ";

         $output = '<div align="right">';
         $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data" >';
         $output .= '
         <tr>
          <td width="25%"><img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100"/></td>
          <td width="50%" align="center">
           <p><b>'.$message.' </b></p>
           <p><b>Mise à jour : </b>'.date('d/m/Y').'</p>

           <hr>
           
          </td>

          <td width="25%">
          <img src="'.base_url().'upload/tbl_info/'.$icone.'" width="150" height="100" />
          </td>


         </tr>
         ';
      
        $output .= '</table>';

        $output .= '</div>';

        $output .= '
            <div class="table-responsive">
             
             <br />
             <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
              <tr>
               <th width="5%">Nom complet</th>
               <th width="20%">libellé</th>
               <th width="20%">Motif</th>

               <th width="5%">Montant en chiffre</th>
               <th width="15%">Montant en lettre</th>
               <th width="15%">livré par</th>

               <th width="10%">Date</th>
               
              </tr>

          ';

            foreach($data->result_array() as $items)
            {
              $nomPer = $items["nomPer"];
              $libelle   = $items["libelle"];
              $motif   = $items["motif"];
              $comptable   = $items["first_name"]." ".$items["last_name"];
              $montant_nombre   = $items["montant_nombre"];
              $montant_lettre   = $items["montant_lettre"];
              $montantT;
              $montantRestant;

              $montant_a_payer = 30;


           
            // $montantRestant =  $montant_a_payer - $montantT;
            $retour = "javascript:history.go(-1);";



              $nom_complet = $items["first_name"].' '.$items["last_name"];
               $output .= '
               <tr>
                <td>'.$nomPer.'</td>
                <td>'.$libelle.'</td>
                <td>'.$motif.'</td>
                <td>'.$montant_nombre.'$</td>
                <td>'.$montant_lettre.'</td>
                <td>'.$comptable.'</td>
                
                <td width="15%">'.nl2br(substr(date(DATE_RFC822, strtotime($items["jour"])), 0, 23)).'</td>

               </tr>
               ';

               $output .= '
               <tr>
                <td colspan="6">
                  <div align="right">Total montant payé</div>
                </td> 
                <td >'.$montantT.'$</td>
                
               </tr>
               ';

               
            }
            $output .= '
             
        </table>

        </div>

        <hr>
    
        <div align="right" style="margin-botton:20px;">

            <a href="'.$retour.'" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center" style="

         background-image: url('.base_url().'upload/tbl_info/'.$icone.'); background-repeat: no-repeat; background-size: 40%; background-position: center; height:100px;">
        </div>
        
        ';

       

      
        return $output;
    }



    // fin operation categorie

    /*
    *script pour module
    *====================
    */
    function insert_module($data){
        $this->db->insert('module', $data);
        return $this->db->insert_id();
    }

    function update_module($idmodule, $data)  
    {  
         $this->db->where("idmodule", $idmodule);  
         $this->db->update("module", $data);  
    }

    function delete_module($idmodule)  
    {  
         $this->db->where("idmodule", $idmodule);  
         $this->db->delete("module");  
    }

    function fetch_single_module($idmodule)  
    {  
         $this->db->where("idmodule", $idmodule);  
         $query=$this->db->get('profile_module');  
         return $query->result();  
    }
    // script module 
    function fetch_details_view_module($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_module");
      $this->db->order_by("idmodule","DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($query->result() as $row)
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
      return $output;
    }

     function fetch_details_view_module_ok_user($limit, $start, $id_user)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_module");
      $this->db->where("id_user",$id_user);
      $this->db->order_by("idmodule","DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($query->result() as $row)
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
      return $output;
    }

    // users view modules 
    // script module 
    function fetch_details_view_module_user($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_module");
      $this->db->order_by("idmodule","DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();
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
      if ($query->num_rows() < 0) {
        
      }
      else{
        $btn1 = '';
        $btn2 ='';
        $evenement = '';
        $etat_paiement ='';
        $etat = '';

        foreach($query->result() as $row)
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
      return $output;
    }

    /*
    *========================
    * script pour les fronts 
    /*========================
    */

    function Select_category_menu()
    {
        $this->db->order_by('nom','ASC');
        $this->db->limit(6);
        return $this->db->get('category');
    }

    function Select_carousel_slider()
    {
        return $this->db->query("SELECT * FROM carousel ORDER BY RAND() LIMIT 1");
    }

    function Select_infopersonnel_slider()
    {
        $this->db->order_by('titre','ASC');
        $this->db->limit(3);
        return $this->db->get('tinfo_personnel');
    }

    function Select_tinfo_member_slider()
    {
        $this->db->order_by('first_name','ASC');
        $this->db->limit(100);
        return $this->db->get('tinfo_user');
    }

    function Select_tinfo_choix_slider()
    {
        $this->db->order_by('titre','ASC');
        $this->db->limit(6);
        return $this->db->get('tinfo_techno');
    }

    function Select_tinfo_services_slider()
    {
        $this->db->order_by('titre','ASC');
        $this->db->limit(6);
        return $this->db->get('tinfo_service');
    }

    function Select_partenaires_slider()
    {
        $this->db->order_by('created_at','ASC');
        $this->db->limit(50);
        return $this->db->get('galery2');
    }

    // operation  news 
    function insert_news($data)  
    {  
         $this->db->insert('news', $data);  
    }
    // modification de news 
    function update_news($idnews, $data)  
    {  
         $this->db->where("idnews", $idnews);  
         $this->db->update("news", $data);  
    }
    //suppression des photos pour la galerie
    function delete_news($idnews)  
    {  
         $this->db->where("idnews", $idnews);  
         $this->db->delete("news");  
    }

    //detail des photos pour la galerie
    function fetch_news($idnews)  
    {    $this->db->limit(1); 
         $this->db->where("idnews", $idnews);  
         $query = $this->db->get("news");  
         return $query;
    }

    // detail all 
    function Select_all_news()
    {   
        return $this->db->query('SELECT * FROM news');
    }

    function Select_all_to_news()
    {
        return $this->db->query("SELECT * FROM news  LIMIT 1 ");
    }

    // contact 
    function insert_contact($data)  
    {  
         $this->db->insert('contact', $data);  
         return $this->db->insert_id();
    }

    function fetch_pagination_articles()
    {
      $this->db->limit(50);
      $this->db->order_by('created_at', 'DESC');
      $query = $this->db->query("SELECT * FROM profile_article");
      return $query->num_rows();
    }

    function fetch_pagination_formations()
    {
      $this->db->limit(50);
      $this->db->order_by('created_at', 'DESC');
      $query = $this->db->query("SELECT * FROM formations");
      return $query->num_rows();
    }

    function fetch_pagination_formations_latest()
    {
      $jour = date("Y-m-d");
      $this->db->limit(4);
      $this->db->order_by('created_at', 'DESC');
      $this->db->where("fin_inscription >=", $jour);
      $query = $this->db->get("formations");
      return $query->num_rows();
    }

    function fetch_pagination_articles_bycat($idcat)
    {
      $this->db->limit(50);
      $this->db->order_by('created_at', 'DESC');
      $query = $this->db->get_where("profile_article", array(
        'idcat' =>  $idcat
      ));
      return $query->num_rows();
    }

    function Select_padding_articles_tri()
    {
        return $this->db->query('SELECT * FROM profile_article  ORDER BY RAND() LIMIT 3');
    }

    // recherche de articles
    function fetch_data_search_articles($query)
    {
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->limit(8);
      if($query != '')
      {
       $this->db->like('nom', $query);
       $this->db->or_like('description', $query);

      }
      $this->db->order_by('nom', 'ASC');
      return $this->db->get();
    }

    // recherche de articles
    function fetch_data_search_formations($query)
    {
      $this->db->select("*");
      $this->db->from("formations");
      $this->db->limit(8);
      if($query != '')
      {
       $this->db->like('nom', $query);
       $this->db->or_like('description', $query);

      }
      $this->db->order_by('created_at', 'DESC');
      return $this->db->get();
    }

     // detail des articles par formations
    function fetch_details_pagination_articles($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("created_at", "DESC");
      $this->db->limit($limit, $start);
      $query = $this->db->get();



      foreach($query->result() as $key)
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
      
      return $output;
    }


     // detail des articles par formations
    function fetch_details_pagination_articles_bycat($limit, $start, $idcat)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("profile_article");
      $this->db->order_by("created_at", "DESC");
      $this->db->where("idcat", $idcat);
      $this->db->limit($limit, $start);
      $query = $this->db->get();



      foreach($query->result() as $key)
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
      
      return $output;
    }

    function get_name_article_pub($idart){
        $this->db->where("idart", $idart);
        $nom = $this->db->get("profile_article")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom"];
          return $titre ;
        }

    }

    function get_name_article_publication($idcat){
        $this->db->where("idcat", $idcat);
        $nom = $this->db->get("profile_article")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom_cat"];
          return $titre ;
        }

    }

    function Select_article_by_tag($idart)
    {
        return $this->db->query("SELECT * FROM profile_article  WHERE idart=".$idart." ORDER BY created_at DESC LIMIT 1");
    }



    function Select_our_articles_tag($idart)
    {   
        $this->db->limit(1);
        return $this->db->get_where("profile_article", array(
          'idart' =>  $idart
        ));
    }

    function Select_our_commentaire_to_articles_tag($idart)
    {   
        $this->db->limit(1);
        return $this->db->get_where("commentaire", array(
          'idart' =>  $idart
        ));
    }

    function Select_article_all_ok()
    {
        return $this->db->query("SELECT * FROM profile_article  ORDER BY created_at DESC LIMIT 10");
    }

    // insertion des vues 
    function insert_vues_ip($data)  
    {  
       $this->db->insert('vues', $data);  
    }

    function Select_idart_tag_insert($idart, $machine)
    {   
        $this->db->limit(1);
        return $this->db->get_where("vues", array(
          'idart'   =>  $idart,
          'machine' =>  $machine
        ));
    }

    // script pour formation 
     // detail des articles par formations
    function fetch_details_pagination_formations($limit, $start)
    {
      $output = '';
      $this->db->select("*");
      $this->db->from("formations");
      $this->db->order_by("created_at", "DESC");

      $this->db->limit($limit, $start);
      $query = $this->db->get();

      $link ='';
      $jour = date('Y-m-d');


      foreach($query->result() as $key)
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
      
      return $output;
    }

    function fetch_details_pagination_formations_latest($limit, $start)
    {
      $output = '';
      $jour =date("Y-m-d");
      $this->db->select("*");
      $this->db->from("formations");
      $this->db->order_by("created_at", "DESC");
      $this->db->where("fin_inscription >=", $jour);
      $this->db->limit($limit, $start);
      $query = $this->db->get();

      $link ='';
      $jour = date('Y-m-d');


      foreach($query->result() as $key)
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
      
      return $output;
    }


    function get_name_formation_pub($idf){
        $this->db->where("idf", $idf);
        $nom = $this->db->get("formations")->result_array();
        foreach ($nom as $key) {
          $titre = $key["nom"];
          return $titre ;
        }

    }

    function Select_our_formation_tag($idf)
    {   
        $this->db->limit(1);
        return $this->db->get_where("formations", array(
          'idf' =>  $idf
        ));
    }

    // auto complete text offres d'emplois automatique
   function recherche_data_auto_articles($query)
   {

      $this->db->like('nom', $query);
      $this->db->or_like('description', $query);
      $this->db->or_like('nom_cat', $query);
      
      $query = $this->db->get('profile_article');
      if($query->num_rows() > 0)
      {
         foreach($query->result_array() as $row)
         {
          $output[] = array(
           'idart'  => $row["idart"],
           'name'  => $row["nom"],
           'image'  => $row["image"]
          );
         }
       echo json_encode($output);
      }
   }



























    








      



















   // validation
  function can_login($email, $password_ok)
  {
      $this->db->where('email', $email);
      $query = $this->db->get('users');
      if($query->num_rows() > 0)
      {
       foreach($query->result() as $row)
       {
          if($row->idrole == '1')
          {

             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('admin_login', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          elseif($row->idrole == '2')
          {
             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('id', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          elseif($row->idrole == '3')
          {
             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('instuctor_login', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          elseif($row->idrole == '4')
          {
             $password = md5($password_ok);
             $store_password = $row->passwords;
             if($password == $store_password)
             {
              $this->session->set_userdata('comptable_login', $row->id);
             }
             else
             {
              return 'mot de passe incorrect';
             }

          }
          else
          {
           return 'les informations incorrectes';
          }
          



       }
      }
      else
      {
       return 'adresse email incorrecte';
      }
    
  }


  function can_recuperation($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
               
            }
        }
        else
        {
        return 'Adresse email non trouvée!!!!';
        }
    }


    // sauvegarde des donnees  et controle d'acces 
      function create_backup() 
      {
          $this->load->dbutil();
          $options = array(
              'format' => 'txt', 
              'add_drop' => TRUE,
              'add_insert' => TRUE,
              'newline' => "\n"
          );
          $tables = array('');
          $file_name = 'etsyetu';
          $backup = & $this->dbutil->backup(array_merge($options, $tables));
          $this->load->helper('download');
          force_download($file_name . '.sql', $backup);
      }

      function import_db()
      {
          $this->load->database();
          // $this->db->truncate('users');
          // $this->db->truncate('categorie_aprenant');
          // $this->db->truncate('derogation');
          // $this->db->truncate('edition');
          // $this->db->truncate('formation');
          // $this->db->truncate('inscription_formation');
          // $this->db->truncate('messagerie');
          // $this->db->truncate('notification');
          // $this->db->truncate('online');
          // $this->db->truncate('paiement');
          // $this->db->truncate('presence');
          // $this->db->truncate('question');
          // $this->db->truncate('recouvrement');
          // $this->db->truncate('recupere');
          // $this->db->truncate('reponse');
          // $this->db->truncate('role');
          // $this->db->truncate('rubrique');
          // $this->db->truncate('tbl_info');
          // $this->db->truncate('tranche');
          

          $file_n = $_FILES["file_name"]["name"];
          move_uploaded_file($_FILES["file_name"]["tmp_name"], "upload/" . $_FILES["file_name"]["name"]);
          $filename = "upload/".$file_n;
          $mysql_host = 'localhost';
          $mysql_username = 'root';
          $mysql_password = '';
          $mysql_database = 'media';
          mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connect to MySQL: ' . mysql_error());
          mysql_select_db($mysql_database) or die('Error to connect MySQL: ' . mysql_error());
          $templine = '';
          $lines = file($filename);
          foreach ($lines as $line)
          {
                  if (substr($line, 0, 2) == '--' || $line == '')
                  {
                      continue;
                  }
                  $templine .= $line;
                  if (substr(trim($line), -1, 1) == ';')
                  {
                      mysql_query($templine) or print('Error \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                      $templine = '';
                  if (mysql_errno() == 1062) 
                  {
                  print 'no way!';
                  }
              }
          }
          unlink("upload/" . $file_n);

      }
    //fin validation et sauvegarde des données

}


?>
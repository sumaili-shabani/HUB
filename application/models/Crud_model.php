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

   //users
  var $table8 = "users";  
  var $select_column8 = array("id", "first_name", "last_name", "email","image","telephone","full_adresse","biographie","date_nais","facebook","twitter","linkedin","idrole","sexe");  
  var $order_column8 = array(null, "first_name", "last_name","telephone","sexe","id", null, null);
  // fin information



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

 

  function get_info_user(){
      $nom = $this->db->get("users")->result_array();
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
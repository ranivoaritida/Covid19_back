<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Accueil_model  extends CI_Model {

        function get_page_name(){
            $query= $this->db->query('Select * from pages order by idPages desc limit 1 ');
            $data=array();
             foreach ($query->result_array() as $row){
                $data[]=$row;
             }
             return $data;
        } 
		function get_page_content(){
            $query= $this->db->query('Select * from subject order by idSubject desc limit 2 ');
            $data=array();
             foreach ($query->result_array() as $row){
                $data[]=$row;
             }
             return $data;
        } 
	}
?>

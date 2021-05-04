<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Madagascar_model  extends CI_Model {

		function get_info($id) {
			  $request="Select * from pagesSubject where idSubject='%s'";
			  $request=sprintf($request,$id);
			  $query= $this->db->query($request);
			  $result= $query->row_array();
			  return $result;
		}
	}
?>

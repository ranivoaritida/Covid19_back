<?php  
 class Main_model extends CI_Model  
 {  
      public function can_login($username, $password)  
		  {  
			   $this->db->where('username', $username);  
			   $this->db->where('password', $password);  
			   $query = $this->db->get('users');  
			   //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
			   if($query->num_rows() > 0)  
			   {  
					return true;  
			   }  
			   else  
			   {  
					return false;       
			   }  
		  }  
		  public function modify($naissance)
		  {
				$sql = "update pages set  nom='%s' where idPages=2";
				$sql = sprintf($sql,$naissance);
				$this->db->query($sql);
		  }
		  public function modify_text($sousTitre,$content,$id)
		  {
				$sql = 'update subject set sousTitre="%s" , content="%s" where idSubject=%d';
				$sql = sprintf($sql,$sousTitre,$content,$id);
				$this->db->query($sql);
		  }
		  function get_info($id) {
			  $request="Select * from subject where idSubject=%d";
			  $request=sprintf($request,$id);
			  $query= $this->db->query($request);
			  $result= $query->row_array();
			  return $result;
		}
 }  
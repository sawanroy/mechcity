<?php 
class Admin_model extends CI_model{

	public function index($username,$password)
     {
          $q = $this->db->where(['username'=>$username,'password'=>$password])->get('admin');

          if($q->num_rows())
          {
               return $q->row()->sno;
          }  
          else
          {

          	return FALSE;
          }



	}
     public function faculty_model()
     {
          return $this->db->get('teachers');
     }
     
     public function infra_model()
     {
          return $this->db->get('infrastructure_feedback');
     }
     public function regstudent_model()
     {
          return $this->db->get('users');
     }
     public function sub_model()
     {
          return $this->db->get('subjects');
     }
}

?>
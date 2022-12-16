<?php 
class Login_model extends CI_model{

	public function index($username,$password)
     {
           $q = $this->db->where(['user_id'=>$username,'password'=>$password])->get('admin_mechcity');

          // 
          // $q=$this->db->get_where('truf_logins',['user_id'=>$username,'Password'=>$password]);
         if( $q->row())
         {
              return $q->row()->user_id;
         }else{
               return FALSE;
         }



	}
     public function options_subjects($semesterss,$branchss)
     {
          return $this->db->get_where('subjects',['semester'=>$semesterss,'branch'=>$branchss]);
        
     }

    public function option_teacher()
     {
          $query = $this->db->get('teachers');
          return $query;
     }  
}

?>
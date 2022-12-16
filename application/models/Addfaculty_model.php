<?php

class Addfaculty_model extends CI_model{
   
    public function index($array)
    {
        return $this->db->insert('teachers',$array);
          

    }
    public function add_submodel($array)
    {
    	 return $this->db->insert('subjects',$array);
    }
public function faculty_model2()
     {
          return $this->db->get('teachers');
     }
public function facultyfeed_model($teachers)
     {
          return $this->db->get_where('student_feedback',['teacher'=>$teachers]);
          
     }

}
?>
<?php 
class Feedback_model extends CI_model{

  public function index($array)
  {
  
  return $this->db->insert('student_feedback',$array);

}
public function infra($array)
  {
  
  return $this->db->insert('infrastructure_feedback',$array);

}
 
}

?>
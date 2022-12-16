<?php

class Res_model extends CI_model{
   
    public function index($array)
    {
        return $this->db->insert('users',$array);
          

    }


}
?>
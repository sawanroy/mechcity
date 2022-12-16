<?php
class Reg_controller extends CI_controller{

	public function index()
	{
          $post = $this->input->post();
                 unset($post['submit']);
                 $this->load->model('res_model','cmt');
                  
                  if($this->cmt->index($post))
                  {
                           //flash message sucessfuly
                  	echo "Accout created";

                  }
                  else
                  {
                           //unsucesssfull
                  	echo "there is some problem";

                  }
                 

	}
	

} 


?>
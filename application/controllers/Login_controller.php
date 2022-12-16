<?php 
class Login_controller extends CI_controller{

     public function index()
     {

     	 $this->load->library('form_validation');
	     $this->form_validation->set_rules('username', 'username','required|min_length[5]|max_length[20]');
		 $this->form_validation->set_rules('password', 'password', 'required');
	    if ($this->form_validation->run() == FALSE)
                {
                       	$this->load->view('index.php');

                }
                else
                {
					  $username=$this->input->post('username');
					  $password=$this->input->post('password');
					  $this->load->model('Login_model');
					  $this->load->model('Production_model');
					  $login_id=$this->Login_model->index($username, $password);
					  $signup_id=$this->Production_model->get_usr_session($username);
					  
					 if($login_id)
					 {	
             
					 	$data=array();
					 		 $data['user_id2']=$signup_id->user_id;
					 		// $data['name']=$login_id->user_id;
					 		$data['last']=$signup_id->Turf_Owner_Name;
					 		// // $data['Branch']=$user_detail->branch;
					 		// $data['semester']=$user_detail->semester;
					 		// $data['roll']=$user_detail->roll;
							 $this->session->set_userdata($data);
							 $this->session->set_userdata('user_id',$login_id);
							 //$this->session->set_userdata2($data2);
							 $name=$this->session->userdata('user_id2');
							 $name2=$this->session->userdata('user_id');
						
							return redirect('Production_controller/Dashboard');
							
						
					       
					 }
					 else
					 {
					 	 $this->session->set_flashdata('login_failed','invalid username & password');
				         return redirect('');
					 }
				
                }

     }

     public function login_logout()
	{
        $this->session->unset_userdata('user_id');
        return redirect('Admin/index');

	}

}


?>
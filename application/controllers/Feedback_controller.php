<?php 
class Feedback_controller extends CI_controller{

     public function index()
     {

					   $post = $this->input->post();
                             unset($post['submit']);
   					  $this->load->model('feedback_model');
   					  $data=$this->feedback_model->index($post);

					 if($data)
                     {
                           //flash message sucessfuly
                      $this->load->library('session');
              $this->session->set_userdata('user_id',$login_id);
              $this->session->set_flashdata('login_failed','sucessfully submitted');

                  	  return redirect('main_controller/panel_user');
                     }
                  else
                  {
                           //unsucesssfull
                  
        $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                  	  return redirect('main_controller/panel_user');

                  }
				
     }
     public function input_infra()
     {
       $post = $this->input->post();
                             unset($post['submit']);
              $this->load->model('feedback_model');
              $data=$this->feedback_model->infra($post);

           if($data)
                     {
                           //flash message sucessfuly
                      $this->load->library('session');
              $this->session->set_userdata('user_id',$login_id);
              $this->session->set_flashdata('login_failed','sucessfully submitted');

                      return redirect('main_controller/panel_user');
                     }
                  else
                  {
                           //unsucesssfull
                  
        $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('main_controller/panel_user');

                  }
     }

     public function con_feedback2()
     {
           $this->load->view('account/feedback2');

     }

     }


?>
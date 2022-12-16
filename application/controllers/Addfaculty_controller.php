<?php
class Addfaculty_controller extends CI_controller{

	public function index()
	{
          $post = $this->input->post();
                 unset($post['submit']);
                 $this->load->model('Addfaculty_model');
                  
                  if($this->Addfaculty_model->index($post))
                  {
                           //flash message sucessfuly
                  	$this->load->library('session');
                    $this->session->set_flashdata('login_failed','sucessfully submitted');
               return redirect('admin_controller/add_teacher');

                  }
                  else
                  {
                           //unsucesssfull
                  	$this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('admin_controller/add_teacher');

                  }
	}
	public function add_subcon()
  {
    $post = $this->input->post();
                 unset($post['submit']);
                 $this->load->model('Addfaculty_model');
                  
                  if($this->Addfaculty_model->add_submodel($post))
                  {
                           //flash message sucessfuly
                    $this->load->library('session');
                    $this->session->set_flashdata('login_failed','sucessfully submitted');
               return redirect('admin_controller/add_subject');

                  }
                  else
                  {
                           //unsucesssfull
                    $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('admin_controller/add_subject');

                  }
  }
  public function list_teacher()
{
  $this->load->model('admin_model');
    $teachers['c']=$this->admin_model->faculty_model();
  $this->load->view('admin/faculty_feedback',$teachers);
} 
 
 public function feedback()
 {
    $teachers=$this->input->post('teachers');
    $this->load->model('addfaculty_model');
    $list_feed['l']=$this->addfaculty_model->facultyfeed_model($teachers);
  $this->load->view('admin/teacher_feedback',$list_feed);
 }

} 


?>
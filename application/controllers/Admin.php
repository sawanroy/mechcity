<?php 
class Admin extends CI_controller{

public function index()
  {
       $this->load->view('index');

  }
public function register()
  { 
 
     $this->load->view('register');

  }
  public function feedback()
  { 
      $semesterss=$this->input->post('semester');
      $branchss=$this->input->post('branch');
      $this->load->model('login_model');
    $lists['h']=$this->login_model->options_subjects($semesterss,$branchss);
       $tech['n']=$this->login_model->option_teacher();
    $data=array_merge($lists,$tech);
    $this->load->view('account/user_account',$data);
  }
  public function login()
  { 
 
     $this->load->view('login2');

  }
  public function panel_user()
  {
    $this->load->view('production/index');
  }

  public function infra()
  { 
 
     $this->load->view('infrastructure2');

  }
  public function account()
  {
    $this->load->view('feedback');
  }


}


?>
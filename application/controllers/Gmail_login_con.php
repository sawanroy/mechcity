<?php
class Gmail_login_con extends CI_controller{
    public function index() {
    include_once APPPATH . "libraries/vendor/autoload.php";
   #$this->load->library('google'); 
    $google_client = new Google_Client();
  
    $google_client->setClientId('680643891993-406kfvt0crbmjch2768gkljv73o8o0bl.apps.googleusercontent.com'); //Define your ClientID
  
    $google_client->setClientSecret('C_H-ImsIEg7jjnhmm21D4MKa'); //Define your Client Secret Key
  
    $google_client->setRedirectUri( base_url('Gmail_login_con/index') ); //Define your Redirect Uri
  
    $google_client->addScope('email');
  
    $google_client->addScope('profile');
    $this->load->model('Customer_model');
    if(isset($_GET["code"]))
    {
     $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
  
     if(!isset($token["error"]))
     {
      $google_client->setAccessToken($token['access_token']);
  
      $this->session->set_userdata('access_token', $token['access_token']);
  
      $google_service = new Google_Service_Oauth2($google_client);
  
      $data = $google_service->userinfo->get();
  
      $current_datetime = date('Y-m-d H:i:s');
      
      if($this->Customer_model->Is_already_register($data['id']))
      {
       //update data
       $user_data = array(
        'first_name' => $data['given_name'],
        'last_name'  => $data['family_name'],
        'email_address' => $data['email'],
        'profile_picture'=> $data['picture'],
        'updated_at' => $current_datetime
       );
  
       $this->Customer_model->Update_user_data($user_data, $data['id']);
      }
      else
      {
       //insert data
       $user_data = array(
        'login_oauth_uid' => $data['id'],
        'first_name'  => $data['given_name'],
        'last_name'   => $data['family_name'],
        'email_address'  => $data['email'],
        'profile_picture' => $data['picture'],
        'created_at'  => $current_datetime
       );
  
       $this->Customer_model->Insert_user_data($user_data);
      }
      $this->session->set_userdata('user_data', $user_data);
     }
    }
    $login_button = '';
    if(!$this->session->userdata('access_token'))
    {
     $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/images/signin2.png" /></a>';
     $data['login_button'] = $login_button;
     $this->load->view('customer/index_login', $data);
    }
    else
    {
     $this->load->view('customer/index');
    }
   }
  
   public function google_logout()
   {
    $this->session->unset_userdata('access_token');
  
    $this->session->unset_userdata('user_data');
  
    redirect('Gmail_login_con/index');
   }
}


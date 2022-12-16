<?php 
class Production_controller extends CI_controller{

    public function add_turf_status($url1){
        $this->load->model('Production_model');
        $user_id=$this->session->userdata('user_id');
        $user['c']=$this->Production_model->truf_status_model($url1);
        $this->load->view('production/status',$user); 
        
    } 
    public function update_status(){
        $post = $this->input->post();
        unset($post['submit']);
        $name  = $this->input->post('Turf_sno');
        $Status= $this->input->post('Status');
        $this->load->model('Production_model');
        $user['c'] = $this->Production_model->update_turfstatus_model($name,$Status);
        redirect('Production_controller/show_truf_details');
    }

    public function add_owner_detail()
    {
        $post = $this->input->post();
        unset($post['submit']);
        $this->load->model('Production_model');
        
        if($this->Production_model->add_owner($post))
        {
            redirect('Production_controller/Dashboard');     
        }
        else{
            redirect('Production_controller/signup');
        }
    }

    public function Dashboard() 
    {
        
        $this->load->model('Production_model');
       
        $Booked['a']=$this->Production_model->booked_turf_model();
       
        $this->load->view('production/tables_dynamic',$Booked);
    }
    public function show_truf_owners(){
        $this->load->model('Production_model');
        $user['c']=$this->Production_model->get_user_detail();
        $this->load->view('production/owner_turf_details',$user);
    }

    public function add_owners_login_view(){
        $this->load->model('Production_model');
        $user['c']=$this->Production_model->get_user_detail();
        $this->load->view('production/turf_owner_add',$user);
    }
    public function add_owners_login(){
        $post = $this->input->post();
        unset($post['submit']);
        $this->load->model('Production_model');
        
        if($this->Production_model->add_owner_login_model($post))
        {
            redirect('Production_controller/Dashboard');     
        }
        else
        {
            redirect('Production_controller/add_owners_login_views');
        }
    }

    public function delete_turf($data){
        $this->load->model('Production_model');
        $this->Production_model->del_turf_owner($data);
        redirect('Production_controller/show_truf_owners'); 
    }
    public function edit_turf($url1){
    $this->load->model('Production_model');
    $truf_detail['c']=$this->Production_model->edit_turf_show_model_show($url1);
    $this->load->view('production/add_turf_edit',$truf_detail);
    }
    
    public function edit_turf_show_update(){
    $post['Turf_Name'] = $this->input->post('Turf_Name');
    $post['type'] = $this->input->post('type');
    $post['Select_area'] = $this->input->post('Select_area');
    $post['address'] = $this->input->post('address');
    $post['city'] = $this->input->post('city');
    $post['state'] = $this->input->post('state');
    $post['Disciption'] = $this->input->post('Disciption');
    $data1['truf_sno'] = $this->input->post('truf_sno');
    if($this->input->post('upload') != NULL ){
 
        $data = array();
  
        // Count total files
        $countfiles = count($_FILES['files']['name']);
   
        // Looping all files
        for($i=0;$i<$countfiles;$i++){
   
          if(!empty($_FILES['files']['name'][$i])){
   
            // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = $_FILES['files']['name'][$i];
   
            //Load upload library
            $this->load->library('upload',$config); 
   
            // File upload
            if($this->upload->do_upload('file')){
              // Get data about the file
              $uploadData = $this->upload->data();
              $filename = $uploadData['file_name'];
             // print_r($filename);
  
              // Initialize array
              $data['filenames'][] = $filename;
              
            
            }
          }
   
        }
        print_r($data['filenames'][1]);
        $image_path=base_url("uploads/".$data['filenames'][0]);
        $image_path1=base_url("uploads/".$data['filenames'][1]);
        $image_path2=base_url("uploads/".$data['filenames'][2]);

        print_r($image_path);
        unset($post['submit']);
        unset($post['upload']);
        $post['Upload_Image'] = $image_path; 
        $post['Uploadimage2'] = $image_path1; 
        $post['Uploadimage3'] = $image_path2; 
      
      
    }
    $this->load->model('Production_model');
    $this->Production_model->edit_turf_show_update_model($post,$data1['truf_sno']);
    redirect('Production_controller/list_turf_view_con');
 }

    public function signup()
    {
        $this->load->view('production/form');
    }

    public function add_turf()
    {
        $this->load->model('Production_model');
        $user['c']=$this->Production_model->get_user_detail();
        $this->load->view('production/add_turf',$user);
    }

    public function status()
    {

        $this->load->view('production/index');
    }

    public function add_turf_details(){
        $post = $this->input->post();
        // unset($post['submit']);
        // $config=[
        //     'upload_path'   => './uploads',
        //     'allowed_types' => 'gif|jpg|png|jpeg',

        // ];
         // Check form submit or not
    if($this->input->post('upload') != NULL ){
 
        $data = array();
  
        // Count total files
        $countfiles = count($_FILES['files']['name']);
   
        // Looping all files
        for($i=0;$i<$countfiles;$i++){
   
          if(!empty($_FILES['files']['name'][$i])){
   
            // Define new $_FILES array - $_FILES['file']
            $_FILES['file']['name'] = $_FILES['files']['name'][$i];
            $_FILES['file']['type'] = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES['files']['error'][$i];
            $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
            // Set preference
            $config['upload_path'] = 'uploads/'; 
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '5000'; // max_size in kb
            $config['file_name'] = $_FILES['files']['name'][$i];
   
            //Load upload library
            $this->load->library('upload',$config); 
   
            // File upload
            if($this->upload->do_upload('file')){
              // Get data about the file
              $uploadData = $this->upload->data();
              $filename = $uploadData['file_name'];
             // print_r($filename);
  
              // Initialize array
              $data['filenames'][] = $filename;
              
            
            }
          }
   
        }
        print_r($data['filenames'][1]);
        $image_path=base_url("uploads/".$data['filenames'][0]);
        $image_path1=base_url("uploads/".$data['filenames'][1]);
        $image_path2=base_url("uploads/".$data['filenames'][2]);

        print_r($image_path);
        unset($post['submit']);
        unset($post['upload']);
        $post['Upload_Image'] = $image_path; 
        $post['Uploadimage2'] = $image_path1; 
        $post['Uploadimage3'] = $image_path2; 
        $this->load->model('Production_model');
       if( $this->Production_model->add_turf_model($post))
       {
        redirect('Production_controller/show_truf_details');
       }
       else{
        redirect('Production_controller/add_turf');
       }
    }
}
    public function show_truf_details()
    {

        $this->load->model('Production_model');
       // $user_id=$this->session->userdata('user_id');
        $user['c']=$this->Production_model->show_turf_model();
        // $status['a']=$this->Production_model->truf_status_model($user_id);
        // $data=array_merge($user,$status);
        $this->load->view('production/projects',$user);

    }

    public function Create_turf_slots(){
        $this->load->model('Production_model');
        $user['c']=$this->Production_model->show_turf_model_2();
        $this->load->view('production/create_turf',$user);
    }

    public function add_slots_turf(){
        $post = $this->input->post();
        unset($post['submit']);
        $this->load->model('Production_model');
        if($this->Production_model->add_slots_turf_model($post))
        {
            redirect('Production_controller/Create_turf_slots');
        }else{
            redirect('Production_controller/Create_turf_slots');
        }

    }

    public function list_turf_view_con(){

         $this->load->model('Production_model');
     
        $user['c']=$this->Production_model->show_turf_model_2();
        
        $this->load->view('production/list_turf_view',$user);

    }

    public function del_turf_show($data){
        $this->load->model('Production_model');
        $this->Production_model->del_turf_show_model($data);
        redirect('Production_controller/list_turf_view_con'); 
    }
    
    public function Select_project_page(){
        $this->load->model('Production_model');
        $user_id=$this->session->userdata('user_id');
        $user['c']=$this->Production_model->show_turf_model_2();
        $this->load->view('production/Select_project_page',$user);

    }

    public function Select_project_page_con(){
        $data['Turf_name'] = $this->input->post('Turf_name');
        $data['days'] = $this->input->post('days');
        $this->load->model('Production_model');
        $user['c']=$this->Production_model->Select_project_page_model($data['Turf_name'],$data['days']);
        //redirect('Production_controller/show_truf_details');
        $this->load->view('production/projects',$user);
    }
    
    public function show_pwd($data){
        $this->load->model('Production_model');
       $user['c']= $this->Production_model->show_pwd_model($data);
       $this->load->view('production/login_usr',$user);
    }
  
 public function __construct()
{
  parent::__construct();
   if(! $this->session->userdata('user_id'))
    return redirect('Admin/index');
}
      
}
?>

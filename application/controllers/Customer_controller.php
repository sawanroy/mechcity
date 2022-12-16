<?php 
class Customer_controller extends CI_controller{

     
      public function index2(){
         $this->load->model('Production_model');
        $user_id=$this->session->userdata('user_id');
        $user['c']=$this->Production_model->show_turf_model_view();
        $this->load->view('customer/index',$user);
      }
      public function aboutus(){

            $this->load->view('customer/about');
      }
      public function contact(){
            $this->load->view('customer/contact');
      }
      public function all_ground(){
            $this->load->view('customer/listing');
      }
      public function single($url12){
            $this->load->model('Customer_model');
            $res['c']= $this->Customer_model->select_turf($url12);
            
            $this->load->view('customer/property-single',$res);
      }

       Public function search(){
            $post = $this->input->post();

            
            unset($post['submit']);
            $name  = $this->input->post('text');  
            $this->load->model('Customer_model');
            $res['c']= $this->Customer_model->search($name);
            
                  $this->load->view('customer/listing',$res);    
      }
     
        Public function cat_search_controller($type){
            $this->load->model('Customer_model');
            $type2=urldecode($type);
            // echo $type2;
           $res['c']= $this->Customer_model->cat_search_model($type2);
            
            
           $this->load->view('customer/listing',$res);   
        
        }

        public function type_select($urldata){  
            $this->load->model('Customer_model');
            $urlda= urldecode($urldata);
            $user['c']=$this->Customer_model->type_sel_search($urlda);
            //print_r($user);
          $this->load->view('customer/property-single',$user);

        }

        public function date_picker()
        {
            $post = $this->input->post();
            if($post){
            unset($post['submit']); 
           //print_r($post);
           $date  = $this->input->post('date');  
           $day  = $this->input->post('day'); 
           $turf_name = $this->input->post('Turf_name');
           $this->session->set_userdata('date',$date);     
           $this->load->model('Customer_model');
            $slots['d']=$this->Customer_model->date_picker_model($day,$turf_name);
            $user['c']=$this->Customer_model->type_sel_search($turf_name);
            $data=array_merge($user, $slots);
            $this->load->view('customer/property-single',$data); 
      }
      else{
            redirect('Customer_controller/index2');
      } 
        }
       public function buyer_details_input($turf_sno,$date){
            // print_r($turf_sno);
            // print_r($date);
            $this->load->model('Customer_model');
            $slots['d']=$this->Customer_model->get_turf_detail_model_buy($turf_sno);
            $this->load->view('customer/buynow',$slots);
       }

       public function pay(){
             $data['input']= $this->input->post();
             $data['rozerpay_key']=[
                   'key_id'=>'rzp_test_FQ5pY6YZcESwPA',
                   'key_secret'=>'8dxbtYtw4Rf60fYVNlIGMRJ6'

             ];
             $this->load->view('customer/roazerpay',$data);

       }

       public function success_payment(){
           
           $data['status']= $this->input->post('status');
           $data['Payment_id']= $this->input->post('razorpay_payment_id');
           
           $data['date']= $user_id=$this->session->userdata('date');
           $data['turf_sno']= $this->input->post('Truf_sno');
           $data['Cus_name']= $this->input->post('Cus_name');
           $data['Cus_email']= $this->input->post('Cus_email');
           $data['Cus_mobile']= $this->input->post('Cus_mobile');
           
            //  print_r($data);
            //  print_r($date1);
             $this->load->model('Customer_model');
      
             $this->Customer_model->insert_booked_details($data);
             redirect('Customer_controller/payment_status');
       }

       public function payment_status(){
             $this->load->model('Customer_model');
             
             $user_data = $this->session->userdata('user_data');
             $email=$user_data['email_address'];
             $booked['d']=$this->Customer_model->get_booked_details($email);
            // print_r( $booked);
             //print_r($turf_nam);
            $this->load->view('customer/order_invoice',$booked);
       }
     public function __construct()
{
  parent::__construct();
   if(! $this->session->userdata('user_data'))
    return redirect('Gmail_login_con/index');
}

}
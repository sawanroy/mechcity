<?php

class Customer_model extends CI_model{

public function search($data){
        $this->db->select('*');
        $this->db->from('truf_detail');
        // $this->db->where(['Turf_Name'=>$data]);
        $this->db->like('Turf_Name',$data);
        $this->db->or_like('Turf_Name',$data);
        $this->db->or_like('Turf_Name',$data);
        $this->db->or_like('Select_area',$data);
        $q= $this->db->get();

        
        if($q)
        {
        return $q;
        }
        else{
            return false;
        }
    

}
public function cat_search_model($data){
    $q=$this->db->where(['type'=>$data])->get('truf_detail');
        
        if($q)
        {
        return $q;
        }
        else{
            return false;
        }
    

}
function Is_already_register($id)
 {
  $this->db->where('login_oauth_uid', $id);
  $query = $this->db->get('google_users');
  if($query->num_rows() > 0)
  {
   return true;
  }
  else
  {
   return false;
  }
 }

 function Update_user_data($data, $id)
 {
  $this->db->where('login_oauth_uid', $id);
  $this->db->update('google_users', $data);
 }

 function Insert_user_data($data)
 {
  $this->db->insert('google_users', $data);
 }

 public function select_turf($turf_no){
    $q=$this->db->where(['sno'=>$turf_no])->get('truf_detail');
        
    if($q)
    {
    return $q;
    }
    else{
        return false;
    }


 }

 public function type_sel_search($data){
    $q=$this->db->where(['Turf_Name'=>$data])->get('truf_detail');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

}
public function date_picker_model($day,$turf_name){

 $q=$this->db->where(['Turf_name'=>$turf_name,'days'=>$day])->get('time_slots');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

}

public function booking_detail_input_model(){
    $q=$this->db->where(['sno'=>$turf_name,'days'=>$day])->get('time_slots');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    } 
}

public function get_turf_detail_model_buy($turf_sno){

    $q=$this->db->where(['sno'=>$turf_sno])->get('time_slots');
       if($q)
       {
           return $q;
       }
       else
       {
            return false;
       }
   
   }

   public function insert_booked_details($data){
         
    $this->db->insert('booked_turfs', $data);
    $this->db->set('status', $data['status']);
    $this->db->where('sno', $data['turf_sno']);
    $this->db->update('time_slots');
    
}

public function get_booked_details($name){
  //  return $this->db->get('booked_turfs');
  $this->db->select ( '*' ); 
  $this->db->from ( 'booked_turfs' );
  $this->db->join ( 'time_slots', 'time_slots.sno = booked_turfs.turf_sno' , 'left' );
  $this->db->join ( 'truf_detail', 'truf_detail.Turf_Name = time_slots.Turf_name' , 'left' );
  $this->db->where ( 'booked_turfs.Cus_email', $name);
  return $this->db->get();
  //return $query->result();
}

}

?>
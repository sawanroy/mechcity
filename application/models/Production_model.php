<?php
 
class Production_model extends CI_model{

public function add_owner($array)
    {
        return $this->db->insert('truf_owner',$array);
    }
    public function get_user_detail()
     {
          return $this->db->get('truf_owner');  
     }

     public function get_usr_session($username)
     {
        $q=$this->db->where(['user_id'=>$username])->get('truf_owner');
        $user_detail=$q->row();
        if($user_detail)
        {
        return $user_detail;
        }
        else
        {
            return false;
        }
    }

     public function check_user_exist($email_id)
      {
        $this->db->select('id');
        $this->db->where('Turf_Owner_Name',$email_id);
        $query = $this->db->get('truf_owner');
        $data = $query->row();
        if($query->num_rows() == 1) 
        {
            return $data->id;
        } else 

        {
            return false;
        }
   }

   public function add_turf_model($array){

    return $this->db->insert('truf_detail',$array);

   }
   public function show_turf_model(){
    $q=$this->db->get('time_slots');
    if($q)
    {
    return $q;
    }
    else{
        return false;
    }
   }

   public function show_turf_model_2(){
    $q=$this->db->get('truf_detail');
    if($q)
    {
    return $q;
    }
    else{
        return false;
    }
   }

   public function show_turf_model_view(){
    $q=$this->db->get('truf_detail');
    if($q)
    {
    return $q;
    }
    else{
        return false;
    }
   }

   public function truf_status_model($url1){
       $q=$this->db->where(['sno'=>$url1])->get('time_slots');
       if($q)
       {
           return $q;
       }
       else
       {
            return false;
       }
   }

   public function update_turfstatus_model($name,$Status){
    $this->db->set('status', $Status);
    $this->db->where('sno', $name);
    $this->db->update('time_slots');

   }

   public function turf_details_show_for_status($user_id){
    $q=$this->db->where(['user_id'=>$user_id])->get('time_slots');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

   }

   public function booked_turf_model(){
    $this->db->select ( '*' ); 
  $this->db->from ( 'booked_turfs' );
  $this->db->join ( 'time_slots', 'time_slots.sno = booked_turfs.turf_sno' , 'left' );
  $this->db->join ( 'truf_detail', 'truf_detail.Turf_Name = time_slots.Turf_name' , 'left' );
  $this->db->where ( 'time_slots.status','Booked');
  return $this->db->get();
   }
   public function add_owner_login_model($array)
   {
    return $this->db->insert('truf_logins',$array);
     
   }

public function del_turf_owner($data){
    $q=$this->db->where(['id'=>$data])->delete('truf_owner');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

}

public function edit_turf_owner($data){
    $q=$this->db->where(['status'=>'Booked'])->get('truf_detail');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

}

public function add_slots_turf_model($array){
    return $this->db->insert('time_slots',$array);

}

public function del_turf_show_model($data){
    $q=$this->db->where(['sno'=>$data])->delete('truf_detail');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }

}


public function Select_project_page_model($tname,$day){
    $q=$this->db->where(['Turf_name'=>$tname,'days'=>$day])->get('time_slots');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }
}

public function edit_turf_show_model_show($data){
    $q=$this->db->where(['sno'=>$data])->get('truf_detail');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }
}
public function edit_turf_show_update_model($data,$data_sno){
    $this->db->set($data);
    $this->db->where('sno', $data_sno);
    $this->db->update('truf_detail');
}
public function show_pwd_model($data){
     $q=$this->db->where(['user_id'=>$data])->get('truf_logins');
    if($q)
    {
        return $q;
    }
    else
    {
         return false;
    }
}



}

    ?>
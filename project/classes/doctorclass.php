<?php

class Doctors{
    
  private $conn;
  private $users_tbl;
   
  public $docname;
  public $email;
  public $password;
  public $phonenumber;
  public $gender;
  public $speciallist;
  public $profile_img;
  public $image_card;
  public $img_clinic;
  public $bio;
  public $id;
  public $city;
  public $area;//city
  public $location_clinic;
  public $token;
  public $waiting_time;
  public $offer;
  public $name_of_clinic;
  public $price;
  public $day;
  public $from_app;
  public $shortdescription;
  public $to_app;


  
  //						num_of_user_rated
  //	sum_of_rating	price							
  //					
  public function __construct($db){
    $this->conn=$db;
    $this->users_tbl="doctor";
      
  }
  
  public function register_doctor(){
    $user_query="insert into ".$this->users_tbl." (docname,email,password,gender,phonenumber,speciallist) values(   ?, ?,?,?,?,?)";
       
    $user_obj=$this->conn->prepare($user_query);
   
    $this->docname=htmlspecialchars(strip_tags($this->docname));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->password=htmlspecialchars(strip_tags($this->password));
    $this->gender=htmlspecialchars(strip_tags($this->gender));
     $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));
    $this->speciallist=htmlspecialchars(strip_tags($this->speciallist));
   
    $user_obj->bind_param("ssssss",$this->docname,$this->email,$this->password,$this->gender,$this->phonenumber,$this->speciallist);
   
    if ($user_obj->execute()) {
        return true;
    }else{
      print_r($user_obj);
        return false;
    }
  }

  //can be used to complete doctor register and update his data
  public function complete_register_doctor(){
    $update_query="update ".$this->users_tbl. " set  shortdescription=?,docname=?,email=?,password=?,city=?,phonenumber=?,speciallist=?,image=?,image_card=?,bio=?,area=?  where id=? ";  

    $query_obj=$this->conn->prepare($update_query);

    $this->docname=htmlspecialchars(strip_tags($this->docname));
    $this->email=htmlspecialchars(strip_tags($this->email));
    $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));
   $this->password=htmlspecialchars(strip_tags($this->password));
    $this->city=htmlspecialchars(strip_tags($this->city));
    $this->id=htmlspecialchars(strip_tags($this->id));
    $this->speciallist=htmlspecialchars(strip_tags($this->speciallist));
    $this->profile_img=htmlspecialchars(strip_tags($this->profile_img));
    $this->image_card=htmlspecialchars(strip_tags($this->image_card));
    $this->bio=htmlspecialchars(strip_tags($this->bio));
    $this->area=htmlspecialchars(strip_tags($this->area));
    $this->shortdescription=htmlspecialchars(strip_tags($this->shortdescription));
    
    $query_obj->bind_param("sssssssssssi",$this->shortdescription,$this->docname,$this->email,$this->password,$this->city,$this->phonenumber,$this->speciallist,$this->profile_img,$this->image_card,$this->bio,$this->area,$this->id);
    
    if ($query_obj->execute()&&$query_obj->affected_rows>0) {
        return true;
    }else{
      print_r($query_obj);
        return false;
    }

  }
  public function login(){

    $user_query="select * from ".$this->users_tbl." where email=?";

    $user_obj=$this->conn->prepare($user_query);

    $this->email=htmlspecialchars(strip_tags($this->email));

    $user_obj->bind_param("s",$this->email);
   
    if ($user_obj->execute()) {
        $data=$user_obj->get_result();
        
        return $data->fetch_assoc();
  
    }else{
      print_r($user_obj);
        return false;
    }

}
public function show_profile(){
  $get_user="select * from ".$this->users_tbl." where id=?";
  $query_obj=$this->conn->prepare($get_user);
  $this->id=htmlspecialchars(strip_tags($this->id));
  $query_obj->bind_param("i",$this->id);
  
  if ($query_obj->execute()) {
    $data=$query_obj->get_result();
    
    return $data->fetch_assoc();

}else{
    return false;
}



}

public function add_clinic(){
  $update_query="update ".$this->users_tbl. " set name_of_clinic=?,img_clinic=?,location_clinic=?,offer=?,waiting_time=?,price=?  where id=? ";  

  $query_obj=$this->conn->prepare($update_query);

  $this->name_of_clinic=htmlspecialchars(strip_tags($this->name_of_clinic));
  $this->img_clinic=htmlspecialchars(strip_tags($this->img_clinic));
  $this->location_clinic=htmlspecialchars(strip_tags($this->location_clinic));
  $this->offer=htmlspecialchars(strip_tags($this->offer));
  $this->waiting_time=htmlspecialchars(strip_tags($this->waiting_time));
  $this->id=htmlspecialchars(strip_tags($this->id));
  $this->price=htmlspecialchars(strip_tags($this->price));
  
  $query_obj->bind_param("sssdidi",$this->name_of_clinic,$this->img_clinic,$this->location_clinic,$this->offer,$this->waiting_time,$this->price,$this->id);
  
  if ($query_obj->execute()&&$query_obj->affected_rows>0) {
      return true;
  }else{
      return false;
  }
}
//day			doc_id
public function add_appotiment(){
  $user_query="insert into appotiment (day,from_app,to_app,doc_id) values( ?,?,?,?)";
       
  $user_obj=$this->conn->prepare($user_query);
 
  $this->day=htmlspecialchars(strip_tags($this->day));
  $this->from_app=htmlspecialchars(strip_tags($this->from_app));
  $this->to_app=htmlspecialchars(strip_tags($this->to_app));
  $this->id=htmlspecialchars(strip_tags($this->id));
 
  $user_obj->bind_param("sssi",$this->day,$this->from_app,$this->to_app,$this->id);
 
  if ($user_obj->execute()) {
      return true;
  }else{
      return false;
  }
}
public function get_id_by_email(){
  $user_query="select * from ".$this->users_tbl." where email=?";
  $user_obj=$this->conn->prepare($user_query);
  $this->email=htmlspecialchars(strip_tags($this->email));

  $user_obj->bind_param("s",$this->email);
 
  if ($user_obj->execute()) {
      $data=$user_obj->get_result();
      
      return $data->fetch_assoc();

  }else{
    print_r($user_obj);
      return false;
  }
}
public function add_token(){
  $update_query="update ".$this->users_tbl ." set  token=? where id=? ";

  $query_obj=$this->conn->prepare($update_query);

  $this->token=htmlspecialchars(strip_tags($this->token));

  $this->id=htmlspecialchars(strip_tags($this->id));

  $query_obj->bind_param("si",$this->token,$this->id);
  
  if ($query_obj->execute()&&$query_obj->affected_rows>0) {
      return true;
  }else{
      return false;
  }

}
public function edit_password(){
  $update_query="update ".$this->users_tbl ." set  password=?,token=''   where token=? and email=? ";

  $query_obj=$this->conn->prepare($update_query);

  $this->password=htmlspecialchars(strip_tags($this->password));
  $this->email=htmlspecialchars(strip_tags($this->email));
  $this->token=htmlspecialchars(strip_tags($this->token));

  $query_obj->bind_param("sss",$this->password,$this->token, $this->email);
  
  if ($query_obj->execute()&&$query_obj->affected_rows>0) {
      return true;
  }else{
      return false;
  }
}






}

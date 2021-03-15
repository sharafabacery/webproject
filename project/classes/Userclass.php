<?php
class Users{
  
    public $username;
    public $email;
    public $password;
    public $gender;
    public $dateofbirth;
    public $token;
    public $phonenumber;
    public $statment;
    public $num_s;
    public $type;
    public $doc_id;
    public $app_id;
    public $price;
    public $payment_method;
    public $combine_array;
    public $Country_city;
    public $Blood_Group;
    public $id;
    public $sid;
    public $rid;
    private $conn;
    private $users_tbl;
    //private $projects_tbl;

    public function __construct($db){
      $this->conn=$db;
      $this->users_tbl="user";
      //$this->projects_tbl="tbl_projects";
      
    }
    public function register(){
       
        $user_query="insert into ".$this->users_tbl." (username,email,password,gender,dateofbirth,phonenumber,type) values(  ? ,  ?, ?,?,?,?,?)";
       
        $user_obj=$this->conn->prepare($user_query);
       
        $this->type="patient";
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->gender=htmlspecialchars(strip_tags($this->gender));
        $this->dateofbirth=htmlspecialchars(strip_tags($this->dateofbirth));
        $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));
        $this->type=htmlspecialchars(strip_tags($this->type));
       
        $user_obj->bind_param("sssssss",$this->name,$this->email,$this->password,$this->gender,$this->dateofbirth,$this->phonenumber,$this->type);
       
        if ($user_obj->execute()) {
            return true;
        }else{
            print_r($user_obj);
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
            return false;
        }

    }
    public function search_all(){  
        $user_query="select * from doctor ";
        $user_obj=$this->conn->prepare($user_query);

        if ($user_obj->execute()) {
            $data=$user_obj->get_result();
            
            return $data;
      
        }else{
            return false;
        }


    }
    //to do search comination
    public function search_comination(){
        $a_array=$this->combine_array;
        $count_array=count($a_array);
        $keys_array=" ";
        $values=[];
        $counter=1;
        foreach($a_array as $key => $value){
            if ( $count_array>$counter) {
                $keys_array=$keys_array . $key." =?".' and ';
                $counter++;
            }else{
                $keys_array=$keys_array . $key." =? ";
            }

            array_push( $values,$value);

        }
        $user_query="select * from doctor where ".$keys_array;
        //echo $user_query;
        $user_obj=$this->conn->prepare($user_query);
        $types = str_repeat('s', count($values)); //types
        //print_r($values) ;
        $user_obj->bind_param($types,...$values);
       
        if ($user_obj->execute()) {
            $data=$user_obj->get_result();
            
            return $data;
      
        }else{
            return false;
        }


    }
    public function show_appotiment(){
        $user_query="select * from appotiment where  id =?";
        $user_obj=$this->conn->prepare($user_query);
        $this->sid=htmlspecialchars(strip_tags($this->sid));

        $user_obj->bind_param("i",$this->sid);
       
        if ($user_obj->execute()) {
            $data=$user_obj->get_result();
            
            return $data->fetch_assoc();
      
        }else{
            return false;
        }

    }
    public function get_one_reservation(){
        $user_query="select * from reservation where id=?";
             
        $user_obj=$this->conn->prepare($user_query);
       
        $this->rid=htmlspecialchars(strip_tags($this->rid));
       
        $user_obj->bind_param("i",$this->rid);
       
        if ($user_obj->execute()) {
          $data=$user_obj->get_result();
          
          return $data;
      
        }else{
            return false;
        }
      }
    //
    public function book_appotiment(){
        $this->id=htmlspecialchars(strip_tags($this->id));
        $this->doc_id=htmlspecialchars(strip_tags($this->doc_id));
        $this->app_id=htmlspecialchars(strip_tags($this->app_id));
       // $this->price=htmlspecialchars(strip_tags($this->email));
        $this->payment_method=htmlspecialchars(strip_tags($this->payment_method));
        
        $user_query="insert into reservation (user_id,doc_id,appotiment_id,payment_method)  values(?,?,?,?)";

       
        $user_obj=$this->conn->prepare($user_query);
        $user_obj->bind_param("iiis",$this->id,$this->doc_id,$this->app_id,$this->payment_method);
       
        if ($user_obj->execute()) {
            return true;
        }else{
            return false;
        }
       
        
        
    }
    //1.start in forget password feature
    public function get_id_by_email(){
        $user_query="select * from ".$this->users_tbl." where email=?";
        $user_obj=$this->conn->prepare($user_query);
        $this->email=htmlspecialchars(strip_tags($this->email));

        $user_obj->bind_param("s",$this->email);
       
        if ($user_obj->execute()) {
            $data=$user_obj->get_result();
            
            return $data->fetch_assoc();
      
        }else{
            return false;
        }
    }
    //2. add token after get id from user
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
    //3. last stip edit password for 
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
    public function update_password(){
        $update_query="update ".$this->users_tbl ." set  password=?   where  email=? ";

        $query_obj=$this->conn->prepare($update_query);

        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->email=htmlspecialchars(strip_tags($this->email));
      

        $query_obj->bind_param("ss",$this->password, $this->email);
        
        if ($query_obj->execute()&&$query_obj->affected_rows>0) {
            return true;
        }else{
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
    // public $Country_city;
//    public $Blood_Group;
   
    public function update_profile(){

        $update_query="update ".$this->users_tbl ." set  username=? ,email=? ,phonenumber=? ,dateofbirth=?,Country_city=?,Blood_Group=? where id=? ";

        $query_obj=$this->conn->prepare($update_query);

        $this->username=htmlspecialchars(strip_tags($this->username));
        $this->email=htmlspecialchars(strip_tags($this->email));
        $this->phonenumber=htmlspecialchars(strip_tags($this->phonenumber));
      //  $this->password=htmlspecialchars(strip_tags($this->password));
       // $this->gender=htmlspecialchars(strip_tags($this->gender));
        $this->dateofbirth=htmlspecialchars(strip_tags($this->dateofbirth));
        $this->Country_city=htmlspecialchars(strip_tags($this->Country_city));
        $this->Blood_Group=htmlspecialchars(strip_tags($this->Blood_Group));
        $this->id=htmlspecialchars(strip_tags($this->id));

        $query_obj->bind_param("ssssssi",$this->username,$this->email,$this->phonenumber,$this->dateofbirth,$this->Country_city,$this->Blood_Group,$this->id);
        
        if ($query_obj->execute()&&$query_obj->affected_rows>0) {
            return true;
        }else{
            return false;
        }


    }


    }


?>
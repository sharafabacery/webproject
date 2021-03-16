//user_id	doc_id	title	description	link_model
<?php
class MedicalHistory{
    private $conn;
    private $users_tbl;
    public $user_id;
    public $med_id ;
    public $doc_id;
    public $title;
    public $description;
    public $link_model;
    public function __construct($db){
        $this->conn=$db;
        $this->users_tbl="medicalhistory";
        //$this->projects_tbl="tbl_projects";
        
      }
      public function add_medical_History(){
         
          $user_query="insert into ".$this->users_tbl." (user_id,doc_id,title,description,link_model) values(  ? ,  ?, ?,?,?)";
         
          $user_obj=$this->conn->prepare($user_query);
         
          $this->user_id=htmlspecialchars(strip_tags($this->user_id));
          $this->doc_id=htmlspecialchars(strip_tags($this->doc_id));
          $this->title=htmlspecialchars(strip_tags($this->title));
          $this->description=htmlspecialchars(strip_tags($this->description));
          $this->link_model=htmlspecialchars(strip_tags($this->link_model));
         
          $user_obj->bind_param("iisss",$this->user_id,$this->doc_id,$this->title,$this->description,$this->link_model);
         
          if ($user_obj->execute()) {
              return true;
          }else{
              printf($user_obj);
              return false;
          }
  
      }
      public function update_midicalHistory(){

        $update_query="update ".$this->users_tbl ." set  title=? ,description=?  where user_id=?,doc_id=? ";

        $query_obj=$this->conn->prepare($update_query);

        $this->title=htmlspecialchars(strip_tags($this->title));
        $this->description=htmlspecialchars(strip_tags($this->description));
        $this->doc_id=htmlspecialchars(strip_tags($this->doc_id));
        $this->user_id=htmlspecialchars(strip_tags($this->user_id));


        $query_obj->bind_param("ssii",$this->title,$this->description,$this->user_id,$this->doc_id);
        
        if ($query_obj->execute()&&$query_obj->affected_rows>0) {
            return true;
        }else{
            return false;
        }


    }
    public function show_medical_History(){
        $get_user="select * from ".$this->users_tbl." where med_id=?";
        $query_obj=$this->conn->prepare($get_user);
        $this->med_id =htmlspecialchars(strip_tags($this->med_id ));
        $query_obj->bind_param("i",$this->med_id );
        
        if ($query_obj->execute()) {
            $data=$query_obj->get_result();
            
            return $data->fetch_assoc();
      
        }else{
            return false;
        }
    }
    public function view_all_medical_history(){
        $get_user="select * from ".$this->users_tbl." where user_id=?";
        $query_obj=$this->conn->prepare($get_user);
        $this->user_id =htmlspecialchars(strip_tags($this->user_id ));
        $query_obj->bind_param("i",$this->user_id );
        
        if ($query_obj->execute()) {
            $data=$query_obj->get_result();
            
            return $data;
      
        }else{
            return false;
        }
    }
    public function view_all_patient_doc_medical_history(){
        $get_user="select * from ".$this->users_tbl." where user_id=? and doc_id=?";
        $query_obj=$this->conn->prepare($get_user);
        $this->user_id =htmlspecialchars(strip_tags($this->user_id ));
        $this->doc_id =htmlspecialchars(strip_tags($this->doc_id ));
        $query_obj->bind_param("ii",$this->user_id,$this->doc_id );
        
        if ($query_obj->execute()) {
            $data=$query_obj->get_result();
            
            return $data;
      
        }else{
            return false;
        }
    }

}


?>
    
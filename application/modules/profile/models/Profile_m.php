<?php 

class Profile_m extends My_Model{
    
    function __construct(){
        parent::__construct();
    }

    public function check_user($id){        
        $this->db->where('for_id',$id);
    }
}
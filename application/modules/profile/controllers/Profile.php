<?php 

class Profile extends Front_Controller{
    function __construct(){
        parent::__construct();        
        add_hook('load_profile_sidebar','profile_sidebar',$this,'profile_sidebar',array());
        $this->load->model('profile_m');
    }
    
    public function index($id = '0'){
        if($id=='0'){
            $this->data['user']=$this->profile_m->getOne(config('tbl_users'),array('id'=>$this->session->userdata('user_id')));            
        }else{
            
        }        
        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('index',$this->data);
    }
    public function setting(){
        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('setting',$this->data);
    }

    public function privacy_setting(){        
        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('privacy',$this->data);
    }
    public function profile_sidebar(){
        echo $this->load->view('sidebar','',true);
    }
}
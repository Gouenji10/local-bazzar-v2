<?php 

class Profile extends Front_Controller{
    function __construct(){
        parent::__construct();        
        add_hook('load_profile_sidebar','profile_sidebar',$this,'profile_sidebar',array());
        $this->load->model('profile_m');
    }
    
    public function index(){
    
        $this->data['user']=$this->profile_m->getOne(config('tbl_users'),array('id'=>$this->session->userdata('user_id')));
        add_hook('check_user_address','check_user_address',modules::load('welcome'),'check_user_address',array());            

        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('index',$this->data);
    }
    public function setting(){
        
        add_hook('where','check_user',$this->profile_m,'check_user',array($this->session->userdata('user_id')));
        $this->data['user_meta']= $this->profile_m->getAll(config('tbl_meta'));
        remove_hook('where','check_user');

        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('setting',$this->data);
    }

    public function contact_save(){
        if($this->input->post()){
            $post_data = $this->input->post();
            add_hook('where','check_user',$this->profile_m,'check_user',array($this->session->userdata('user_id')));
            $check_data= $this->profile_m->getAll(config('tbl_meta'));
            remove_hook('where','check_user');
            if(empty($check_data)){
                foreach($post_data as $key => $value){
                    $insert_data = array(
                        'meta_key' =>'_'.$key,
                        'meta_value' =>$value,
                        'for_id' => $this->session->userdata('user_id'),
                    );
                    $this->profile_m->insert(config('tbl_meta'),$insert_data);
                }
                echo "success";
                exit;
            }else{
                foreach($post_data as $key => $value){                
                    $this->profile_m->db->set('meta_value',$value)->where('meta_key','_'.$key)->where('for_id',$this->session->userdata('user_id'))->update(config('tbl_meta'));
                }
                echo "updated";
                exit;
            }
        }
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
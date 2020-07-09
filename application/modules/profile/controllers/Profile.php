<?php 

class Profile extends Front_Controller{
    function __construct(){
        parent::__construct();
    }

    public function index($id = '0'){
        if($id=='0'){
            //echo "session profile data";
        }else{
            // echo "user data";
        }
        $this->template
        ->title('Post Ads')
        ->set_layout('homepage')
        ->set('page','profile')
        ->build('index');
    }
}
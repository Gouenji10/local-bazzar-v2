<?php 

class Acf extends Admin_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->template
			->title('Category')
			->set_layout('dashboard')
			->set('page','acf')
			->build('admin/index',$this->data);	
    }

}
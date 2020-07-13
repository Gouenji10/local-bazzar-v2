<?php 

class Cpt extends Admin_Controller{
    function __construct(){
        parent::__construct();        
    }

    public function index(){
        $this->template
            ->title('CPT')
            ->set_layout('dashboard')
            ->set('page','cpt')
            ->build('admin/index',$this->data);	
    }
    public function taxonomy(){
        $this->template
            ->title('CPT - Taxonomy')
            ->set_layout('dashboard')
            ->set('page','taxonomy')
            ->build('admin/taxonomy',$this->data);	
    }
}
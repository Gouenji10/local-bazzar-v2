<?php

class Pages extends Front_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('pages_m');
    }

    public function index(){

    }
    public function contact(){
        add_hook('contact_form','contact_form',$this,'get_contact_form',array());
        $this->template
		->title('Contact')
		->set_layout('homepage')
		->set('page','contact')
		->build('contact');   
    }
    public function get_contact_form(){
        $content=$this->pages_m->getOne(config('tbl_custom_fields'),array('slug'=>'contact-form'));
        add_action('get_contact','get_contact',array('home','getFields'),array('input_fields'=>$content['fields']));
    }
    public function about(){
        $this->template
		->title('About')
		->set_layout('homepage')
		->set('page','about')
		->build('about');   
    }
    public function faq(){
        $this->data['faqs']= $this->pages_m->getAll(config('tbl_faq'));
        $this->template
		->title('FAQ')
		->set_layout('homepage')
		->set('page','faq')
		->build('faq',$this->data);   
    }
}
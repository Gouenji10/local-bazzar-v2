<?php

class Pages extends Admin_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('pages_m');
    }
    
    public function faq(){
        $this->data['input_fields']=$this->pages_m->getOne(config('tbl_custom_fields'),array('slug'=>'faq'));
		$this->data['faqs']=$this->pages_m->getAll(config('tbl_faq'));
        $this->template
			->title('FAQ')
			->set_layout('dashboard')
			->set('page','faq')
			->build('admin/faq',$this->data);
    }

    public function faq_insert(){
        if($this->input->post()){
            $insert= array(
                'question'=> $this->input->post('question'),
                'answer'=> $this->input->post('answer'),
            );
            if($this->pages_m->insert(config('tbl_faq'),$insert)){
                echo "success";
            }else{
                exit;
            }

        }
    }
    public function load_edit_faq($id){
        $this->data['input_fields']=$this->pages_m->getOne(config('tbl_custom_fields'),array('slug'=>'faq'));
        $this->data['faq']=$this->pages_m->getOne(config('tbl_faq'),array('id'=>$id));
        add_action('load_edit_field','load_edit',array('home','getFields'),array('input_fields'=>$this->data['input_fields']['fields'],'values'=>$this->data['faq']));		
		exit();
    }
    public function faq_update($id){
        if($this->input->post()){
            $update= array(
                'question'=> $this->input->post('question'),
                'answer'=> $this->input->post('answer'),
            );
            if($this->pages_m->update(config('tbl_faq'),$update,array('id'=>$id))){
                echo "success";
            }else{
                exit;
            }

        }
    }
    public function faq_delete($id){
		if($this->pages_m->delete(config('tbl_faq'),array('id'=>$id))){
			echo "success";
			exit;
		}
		exit;
	}
}
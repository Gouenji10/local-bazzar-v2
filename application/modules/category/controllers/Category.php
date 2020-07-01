<?php

class Category extends Front_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('category_m');
    }

    public function hompage_category(){
        $this->data['categories'] = $this->category_m->getAll(config('tbl_category'));
        $this->load->view('index',$this->data);
    }

    public function get_catgeories(){
		$all_category = $this->category_m->select('id,title')->getAll(config('tbl_category'),null,0,array());
    	$category_list=array();
		foreach($all_category as $category){
			$category_list[$category['id']] = $category['title'];
        }        
    	return $category_list;
    }
    public function get_sub_category_id($id){
        add_hook('where','get_sub_category',$this->category_m,'get_sub_category',array($id));
        $all_sub_category = $this->category_m->select('id,title')->getAll(config('tbl_sub_category'),null,0,array());
        remove_hook('where','get_sub_category');
        $list=array();
           
        if($this->input->is_ajax_request()){
            foreach($all_sub_category as $sub_category){
                $value = array( 
                    "id"=>$sub_category['id'], 
                    "title"=>$sub_category['title']);
                    $list[] = $value;
            }
            echo json_encode($list);
            exit;
            
        }else{
            foreach($all_sub_category as $sub_category){
                $list[$sub_category['id']] = $sub_category['title'];
            }
            return $list;       
        }
    }
}
<?php

/**
 * 
 */
class Category extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('category_m');
	}

	public function index(){
		$this->data['input_fields']=$this->category_m->getOne(config('tbl_custom_fields'),array('slug'=>'category'));
		$this->data['categories']=$this->category_m->getAll(config('tbl_category'));
		$this->template
			->title('Category')
			->set_layout('dashboard')
			->set('page','category')
			->build('admin/index',$this->data);	
	}

	/* adding category*/

	public function add(){
		if($this->input->post()){
			$insert=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'icon'=>$this->input->post('icon'),
				'position'=>$this->input->post('position'),
			);
			if($this->category_m->insert(config('tbl_category'),$insert)){
				echo 'success';
				exit();
			}
		}
	} 
	/* loading edit view */
	public function load_edit_category($id){
		$this->data['input_fields']=$this->category_m->getOne(config('tbl_custom_fields'),array('slug'=>'category'));
		$this->data['category']=$this->category_m->getOne(config('tbl_category'),array('id'=>$id));
		add_action('load_edit_field','load_edit',array('home','getFields'),array('input_fields'=>$this->data['input_fields']['fields'],'values'=>$this->data['category']));		
		exit();
	} 

	public function edit($id){
		if($this->input->post()){
			$update=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'icon'=>$this->input->post('icon'),
				'position'=>$this->input->post('position'),
			);
			if($this->category_m->update(config('tbl_category'),$update,array('id'=>$id))){
				echo "success";
				exit();
			}
			exit();
		}
	}
	public function delete($id){
		if($this->category_m->delete(config('tbl_category'),array('id'=>$id))){
			echo "success";
			exit;
		}
		exit;
	}

	/*
	* Sub Category
	*/ 
	public function sub_category(){
		$this->data['input_fields']=$this->category_m->getOne(config('tbl_custom_fields'),array('slug'=>'sub-category'));
		$this->data['categories']= $this->get_catgeories();
		$this->data['subcategories']=$this->category_m->getAll(config('tbl_sub_category'));
		$this->template
			->title('Sub Category')
			->set_layout('dashboard')
			->set('page','sub-category')
			->build('admin/index-sub',$this->data);		
	}

	public function sub_add(){
		if($this->input->post()){
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'category'=>$this->input->post('category'),
				'icon'=>$this->input->post('icon'),
				'fields'=>serialize(array(
					'title'=>$this->input->post('field_title'),
					'field'=>$this->input->post('field_select'),
					'choices'=>$this->input->post('options')
					)
				)
			);
			if($this->category_m->insert(config('tbl_sub_category'),$data)){
				echo "success";
				exit;
			}
		}
	}

	/* loading edit view */
	public function load_edit_sub_category($id){
		$this->data['input_fields']=$this->category_m->getOne(config('tbl_custom_fields'),array('slug'=>'sub-category'));
		$this->data['sub_category']=$this->category_m->getOne(config('tbl_sub_category'),array('id'=>$id));
		$this->data['categories']= $this->get_catgeories();
		add_action(
			'load_edit_field',
			'load_edit',
			array(
				'home',
				'getFields'
			),
			array(
				'input_fields'=>$this->data['input_fields']['fields'],
				'values'=>$this->data['sub_category'],
				'additional'=>array('type'=>'select','data'=>$this->data['categories'])
			)
		);
		
		exit();
	} 

	public function sub_edit($id){
		if($this->input->post()){
			$update=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'category'=>$this->input->post('category'),
				'icon'=>$this->input->post('icon'),
				'fields'=>serialize(array(
					'title'=>$this->input->post('field_title'),
					'field'=>$this->input->post('field_select'),
					'choices'=>$this->input->post('options')
					)
				)
			);
			if($this->category_m->update(config('tbl_sub_category'),$update,array('id'=>$id))){
				echo "success";
				exit();
			}
			exit();
		}
	}
	public function sub_delete($id){
		if($this->category_m->delete(config('tbl_sub_category'),array('id'=>$id))){
			echo "success";
			exit;
		}
		exit;
	}



	public function get_catgeories(){
		$all_category = $this->category_m->select('id,title')->getAll(config('tbl_category'),null,0,array());
    	$category_list=array();
		foreach($all_category as $category){
			$category_list[$category['id']] = $category['title'];
		}
    	return $category_list;
	} 
}
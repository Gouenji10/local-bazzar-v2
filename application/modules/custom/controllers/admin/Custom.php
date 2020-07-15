<?php 

/**
 * 
 */
class Custom extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('custom_m');
	}

	public function index(){
		$this->data['input_fields']=$this->custom_m->getOne(config('tbl_custom_fields'),array('slug'=>'custom-field'));
		$this->data['custom_fields']=$this->custom_m->getAll(config('tbl_custom_fields'));
		$this->template
			->title('Custom Fields')
			->set_layout('dashboard')
			->set('page','custom')
			->build('admin/index',$this->data);		
	}

	public function insert(){
		if($this->input->post()){
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'fields'=>serialize(array(
					'title'=>$this->input->post('field_title'),
					'field'=>$this->input->post('field_select'),
					'required'=>$this->input->post('required'),
					'choices'=>$this->input->post('options')
					)
				)
			);
			if($this->custom_m->insert(config('tbl_custom_fields'),$data)){
				echo 'success';
				exit;
			}
		}
	}
	/* loading edit view */

	public function load_edit_custom($id){
		$this->data['input_fields']=$this->custom_m->getOne(config('tbl_custom_fields'),array('slug'=>'custom-field'));
		$this->data['values']=$this->custom_m->getOne(config('tbl_custom_fields'),array('id'=>$id));
		
		add_action('load_edit_field','load_edit',array('home','getFields'),array('input_fields'=>$this->data['input_fields']['fields'],'values'=>$this->data['values']));
	}



	public function edit($id){
		if($this->input->post()){
			$data=array(
				'title'=>$this->input->post('title'),
				'slug'=>$this->input->post('slug'),
				'fields'=>serialize(array(
					'title'=>$this->input->post('field_title'),
					'field'=>$this->input->post('field_select'),
					'required'=>$this->input->post('required'),
					'choices'=>$this->input->post('options')
					)
				)
			);
			if($this->custom_m->update(config('tbl_custom_fields'),$data,array('id'=>$id))){
				echo 'success';
				exit;
			}else{
				echo "error";
				exit;
			}
		}	
	}
	public function delete($id){
		if($this->custom_m->delete(config('tbl_custom_fields'),array('id'=>$id))){
			echo"success";
			exit;
		}
	}
}
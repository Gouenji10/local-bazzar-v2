<?php 
/**
 * 
 */
class Home extends Core_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_m');
	}
	public function index(){
		$this->template
		->title('Welcome')
		->set_layout('homepage')
		->set('page','home')
		->build('index');		
	}

	/*
	*Get the drawer view for add
	*/ 
	public function add_drawer($data){		
		$this->load->view('drawer/add',$data);
	}
	/*
	* Get the drawer view for edit
	*/ 
	public function edit_drawer(){
		$this->load->view('drawer/edit');	
	}
}

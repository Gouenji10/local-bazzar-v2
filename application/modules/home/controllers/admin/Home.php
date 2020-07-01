<?php 
	/*
	 * 
	 */
	class Home extends Admin_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// add_hook('admin_footer','js',$this,'js',array());
		}
		// public function js(){
			//echo js('dashboard/db-default.js');
		// }
		public function index(){
			$this->template
				->title('Welcome')
				->set_layout('dashboard')
				->set('page','home')
				->build('admin/index');		
		}
	}
?>
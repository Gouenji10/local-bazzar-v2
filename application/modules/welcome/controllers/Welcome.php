<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller 
{

	public function index()
	{
		if ($this->ion_auth->logged_in())
		{
			if ($this->ion_auth->is_admin()){
				redirect('admin/home', 'refresh');
				exit;
			}
		}
		$this->template
		->title('Welcome')
		->set_layout('homepage')
		->set('page','home')
		->build('welcome_message');
	}
}

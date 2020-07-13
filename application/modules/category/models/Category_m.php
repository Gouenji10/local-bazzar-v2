<?php 

/**
 * 
 */
class Category_m extends My_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_sub_category($id){
		$this->db->where('category',$id);
	}
}
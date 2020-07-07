<?php

class Ads extends Front_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('ads_m');
        $this->load->library('upload');
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        add_hook('basic_information','basic_information',$this,'basic_information',array());
        add_hook('general_information','general_information',$this,'general_information',array());      
        add_hook('global_information','global_information',$this,'global_information',array());      

        $this->template
		->title('Post Ads')
		->set_layout('homepage')
		->set('page','ads')
		->build('index');   
    }

    public function save_ads(){
        if($this->input->post()){            
            if($_FILES){
                $ads_image = $this->ads_image_upload($_FILES);
            }
            $insert_data=array(
                'title'=>$this->input->post('title'),
                'category '=>$this->input->post('category'),
                'sub_category'=>$this->input->post('sub_category'),
                'created_at '=>date('Y-m-d'),
                'expiry'=>$this->input->post('expiry'),
                'price'=>$this->input->post('price'),
                'zone'=>$this->input->post('zone'),
                'district'=>$this->input->post('district'),
                'city'=>$this->input->post('city'),
                'additional_info'=>serialize(array(
                    'content'=>$this->input->post(),
                    'images'=>$ads_image,
                )),
                'status '=>'draft',               
            );
            $this->ads_m->insert(config('tbl_ads'),$insert_data);
        }
        
    }

    public function ads_image_upload($files){

        $pathToUpload = './uploads/ads/' .date('Y').'/'.date('m').'/';
        if (!file_exists($pathToUpload) )
        {
            $create = mkdir($pathToUpload, 0777,TRUE);
        }
        $config['upload_path'] =$pathToUpload;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $count = count($_FILES['images']['name']);
        $image_name=array();
        
        for($i=0; $i<$count; $i++)
        {           
            $_FILES['images']['name']= $files['images']['name'][$i];
            $_FILES['images']['type']= $files['images']['type'][$i];
            $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
            $_FILES['images']['error']= $files['images']['error'][$i];
            $_FILES['images']['size']= $files['images']['size'][$i];  
            
            $this->upload->initialize($config);

            if ($this->upload->do_upload('images'))
            {
                $data = array('upload_data' => $this->upload->data());
                $image_name[] =$data['upload_data']['file_name'];                
            }
        }
        return $image_name;
    }


    public function basic_information(){
        $fields = $this->ads_m->getOne(config('tbl_custom_fields'),array('slug'=>'ads-information-form'));
        add_action('get_basic_form','get_basic_form',array('home','getFields'),array('input_fields'=>$fields['fields']));
    }
    
    public function general_information(){
        $fields = $this->ads_m->getOne(config('tbl_custom_fields'),array('slug'=>'ads-general-information-form'));
        add_action('get_general_form','get_general_form',array('home','getFields'),array('input_fields'=>$fields['fields']));
    }

    public function global_information(){
        $fields = $this->ads_m->getOne(config('tbl_custom_fields'),array('slug'=>'ads-global'));
        add_action('get_global_form','get_global_form',array('home','getFields'),array('input_fields'=>$fields['fields']));
    }

    public function get_zones(){
        $zones = $this->ads_m->select('id,zone')->getAll(config('tbl_nepal_location'),null,0,array());
    	$zone_list=array();
		foreach($zones as $zone){
			$zone_list[$zone['id']] = $zone['zone'];
		}
    	return $zone_list;        
    }
    
    public function get_district($id){
        
        $list= $this->ads_m->getOne(config('tbl_nepal_location'),array('id'=>$id));
        if($this->input->is_ajax_request()){
            echo   $list['district'];
            exit;
        }
        return $list['district'];
    }

    public function get_sub_category_fields($id){
        $data = $this->ads_m->getOne(config('tbl_sub_category'),array('id'=>$id));
        add_action('get_sub_category_fields','get_sub_category_fields',array('home','getFields'),array('input_fields'=>$data['fields']));
        // print_r($data);

    }
}
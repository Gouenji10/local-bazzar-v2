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

	public function getFields($post_data){
		// echo '<pre>';
		// print_r($post_data);

		$input_fields = unserialize($post_data['input_fields']);
				
		
		foreach ($input_fields['title'] as $titleKey => $titleValue){
			
			foreach ($input_fields['field'] as $fieldKey => $fieldValue){

				foreach($input_fields['choices'] as $choicesKey => $choicesValue){

					foreach($input_fields['required'] as $reqkey =>$reqvalue){
						
						if($titleKey==$fieldKey && $titleKey == $choicesKey && $fieldKey==$choicesKey && $titleKey==$reqkey){

							if(isset($post_data['values'])){
	
								foreach($post_data['values'] as $dataKey=>$dataValue){
									
									if($titleValue == $dataKey){
	
										$data = $dataValue;
									
									}elseif($dataKey=='fields'){
										
										$multiple['fields'] = $dataValue;
									}
								}
							}
							if(isset($post_data['additional'])){
								$additional=$post_data['additional']; 
							}
							switch ($fieldValue){
								
								case "check":?>
									<div class="form-group row mb-5 <?php echo str_replace(' ','_',$titleValue);?>">
										<div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> *</label>
											<div class="row px-3">
												<?php if(isset($choicesValue)){
													$choices = explode('|',$choicesValue);
													foreach($choices as $checkKey => $checkValue):?>
														<div class="custom-control custom-checkbox styled-checkbox col-md-6 col-lg-6 mb-2">
															<input class="custom-control-input" type="checkbox" name="<?php echo str_replace(' ','_',$titleValue);?>[]" id="<?php echo str_replace(' ','_',$titleValue).'-'.$checkKey;?>" value="<?php echo $checkValue;?>">
															<label class="custom-control-descfeedback" for="<?php echo str_replace(' ','_',$titleValue).'-'.$checkKey;?>"><?php echo $checkValue;?></label>														
														</div>
													<?php endforeach;
												}?>
											</div>
											
											
										</div>
									</div>
								<?php break;
	
								case "email":?>
									<div class="form-group row align-items-center mb-3 <?php echo str_replace(' ','_',$titleValue);?>">
										 <div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> *</label>	                          
											<input type="email" class="form-control" <?php echo $reqvalue=='yes'?'required':'';?> name="<?php echo str_replace(' ','_',$titleValue);?>" value="<?php echo isset($data)?$data:'';?>">
											<?php if($reqvalue=='yes'):?>
												<div class="invalid-feedback">
													<?php echo $titleValue;?> cannot be empty.
												</div>
											<?php endif;?>
										 </div>
									 </div>
								<?php break;
								
								case "gallery":?>
									<div class="form-group row d-flex align-items-center mb-3">
										<div class="col-xl-12 mb-3">
											<label class="form-control-label">Upload Images<span class="text-danger ml-2">*</span></label>                                
											<div class="ads-gallery"></div>
										</div>
									</div>
								<?php break;
								
								case "multiple":
									if(isset($multiple)):
										$this->custom_edit($multiple);
									else:?>
										<div class="form-group no-gutters row d-flex align-items-center mb-3 clone-data">
											<div class="col-lg-12">
												<div class="row mb-3">
													<div class="col-lg-4">
														<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> title *</label>
														<input type="text" class="form-control" required name="field_title[]">
														<div class="invalid-feedback">
															Field title cannot be empty.
														</div>
													</div>
													<div class="col-lg-3">
														<div class="select">
															<label class="text-capitalize form-control-label d-flex justify-content-lg-start "><?php echo $titleValue;?> type *</label>
															<select name="field_select[]" class="custom-select form-control my-select" required="">
																<option value="">Select option</option>
																<option value="check">Checkbox</option>
																<option value="email">Email</option>
																<option value="gallery">Gallery</option>
																<option value="multiple">Multiple fields</option>
																<option value="number">Number</option>
																<option value="password">Password</option>
																<option value="radio">Radio</option>
																<option value="text">Text</option>
																<option value="textarea">Textarea</option>
																<option value="select">Select</option>
																<option value="single">Single file</option>
															</select>
															<div class="invalid-feedback">
																Please select an option
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<label class="text-capitalize form-control-label d-flex justify-content-lg-start">Required *</label>
														<select name="required[]" class="custom-select form-control" required="">
															<option value="">Select</option>															
															<option value="yes">Yes</option>
															<option value="no">No</option>
														</select>
														<div class="invalid-feedback">
															Please select an option
														</div>
													</div>
	
													<div class="col-lg-3">
														<label class="text-capitalize form-control-label d-flex justify-content-lg-start invisible">*</label>
														<button type="button" class="btn btn-secondary mr-1 mb-2 clone"><i class="la la-plus"></i>Add more</button>
													</div>
												</div>	
												<div class="row select_option hide">
													<div class="col-md-12">	
														<label class="text-capitalize form-control-label d-flex justify-content-lg-start">Options (seprated by " | " )</label>
														<input type="text" class="form-control" name="options[]">                    						
													</div>
												</div>                    
											</div>
										</div>
										<div class="cloned">                    
										</div> 
									<?php endif;
	
								break;
								
								case "number":
								break;
								
								case "password":?>
									<div class="form-group row align-items-center mb-3 <?php echo str_replace(' ','_',$titleValue);?>">
										 <div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> *</label>	                          
											<input type="password" class="form-control" <?php echo $reqvalue=='yes'?'required':'';?> name="<?php echo str_replace(' ','_',$titleValue);?>" value="<?php echo isset($data)?$data:'';?>">
											<?php if($reqvalue=='yes'):?>
												<div class="invalid-feedback">
												 	<?php echo $titleValue;?> cannot be empty.
											 	</div>
											<?php endif;?>
										 </div>
									 </div>
								<?php break;
	
								case "radio":?>
									<div class="form-group row mb-3 <?php echo str_replace(' ','_',$titleValue);?>">
										<div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?>*</label>
											<div class="row">
												<?php 
													if(isset($choicesValue)):
														$options = explode('|',$choicesValue);
														foreach($options as $optionKey => $optionValue):?>
															<div class="col-lg-6">
																<div class="custom-control custom-radio styled-radio mb-3">
																	<input class="custom-control-input" type="radio" name="<?php echo str_replace(' ','_',$titleValue);?>" id="<?php echo str_replace(' ','_',$titleValue).'-'.$optionKey;?>" value="<?php echo $optionValue;?>" <?php echo $reqvalue=='yes'?'required':'';?> >
																	<label class="text-capitalize custom-control-descfeedback" for="<?php echo str_replace(' ','_',$titleValue).'-'.$optionKey;?>"><?php echo $optionValue;?></label>
																	<?php if($reqvalue=='yes'):?>
																		<div class="invalid-feedback">
																			Select any option
																		</div>
																	<?php endif;?>
																</div>
															</div>
														<?php endforeach;
													endif;
												?>										
											</div>
										</div>
									</div>
	
								<?php break;
	
								case "text":?>
									<div class="form-group row align-items-center mb-3 <?php echo str_replace(' ','_',$titleValue);?>">
										 <div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> *</label>	                          
											<input type="text" class="form-control" <?php echo $reqvalue=='yes'?'required':''; ?> name="<?php echo str_replace(' ','_',$titleValue);?>" value="<?php echo isset($data)?$data:'';?>">
											<?php if($reqvalue=='yes'):?> 
											 	<div class="invalid-feedback">
												 	<?php echo $titleValue;?> cannot be empty.
											 	</div>
											<?php endif;?>
										 </div>
									 </div>
								<?php break;
	
								case "textarea":?>
									<div class="form-group row d-flex align-items-center mb-3">								
										<div class="col-lg-12">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start"><?php echo $titleValue;?> *</label>
											<textarea class="form-control quill_editor" placeholder="Type your message here ..." rows="12" <?php echo $reqvalue=='yes'?'required':''; ?> name="<?php echo $titleValue;?>"><?php echo isset($data)?$data:'';?></textarea>
											<?php if($reqvalue=='yes'):?>
												<div class="invalid-feedback">
													Please enter a custom message
												</div>
											<?php endif;?>
										</div>
									</div>
								<?php break;
	
								case "select":?>
									<div class="form-group row d-flex align-items-center mb-3">
										<div class="col-lg-12">
											<div class="select">
												<label class="text-capitalize form-control-label d-flex justify-content-lg-start "><?php echo $titleValue;?> *</label>											
												<?php 
													if(isset($additional)){													
														if($additional['type']=='select'){
															$drop_down=$additional['data'];				
															$drop_down = array('0' => 'Select '.$titleValue) + $drop_down;
															echo form_dropdown($titleValue,$drop_down,isset($data)?$data:'',['class'=>'custom-select form-control', 'required'=>'']);
														}
													}elseif(isset($choicesValue)){
														$choices = explode('|',$choicesValue);														
														?>
														<select name="<?php echo $titleValue;?>" class="custom-select form-control"<?php echo $reqvalue=='yes'?'required=""':'';?>>
															<option value="">Select option</option>
															<?php 
																foreach($choices as $choice){
																	echo '<option value="'.$choice.'">'.$choice.'</option>';
																}
															?>
														</select>

													}												
													else{?>
														<select name="<?php echo $titleValue;?>" class="custom-select form-control"<?php echo $reqvalue=='yes'?'required=""':'';?>>
															<option value="">Select option</option>
														</select>
													<?php }
												?>
												<?php if($reqvalue=='yes'):?>
													<div class="invalid-feedback">
														Please select an option
													</div>
												<?php endif;?>
											</div>
										</div>
									</div>
								<?php break;
	
								case "single":
								break;
								
								default:
							}
						}
					}					
				}
            }
        } 
	}	

	public function custom_edit($custom){
		
            $i = 1;
			$field_data = unserialize($custom['fields']);
            $len = count($field_data['title']);
            foreach ($field_data['title'] as $tkey => $tvalue):
				foreach ($field_data['field'] as $fkey => $fvalue):
					foreach($field_data['choices'] as $ckey =>$cvalue):
						foreach($field_data['required'] as $rkey =>$rvalue):
							if($tkey==$fkey && $tkey==$ckey && $tkey==$rkey) :?>
								<div class="form-group no-gutters row d-flex align-items-center mb-3 clone-data">   							                       
									<div class="col-lg-12">
										<div class="row mb-3">
											<div class="col-lg-4">
												<label class="text-capitalize form-control-label d-flex justify-content-lg-start">Field title *</label>
												<input type="text" class="form-control" placeholder="Field Title" required name="field_title[]" value="<?php echo $tvalue;?>">
												<div class="invalid-feedback">
													Field title cannot be empty.
												</div>
											</div>
											<div class="col-lg-3">
												<div class="select">        
												<label class="text-capitalize form-control-label d-flex justify-content-lg-start ">Field type *</label>                                    
													<select name="field_select[]" class="custom-select form-control my-select" required="">
														<option value="">Select option</option>
														<option value="check" <?php echo $fvalue=='check'?'selected':''?>>Checkbox</option>
														<option value="email" <?php echo $fvalue=='email'?'selected':''?>>Email</option>
														<option value="gallery"<?php echo $fvalue=='gallery'?'selected':''?> >Gallery</option>
														<option value="multiple" <?php echo $fvalue=='multiple'?'selected':''?>>Multiple fields</option>
														<option value="number" <?php echo $fvalue=='number'?'selected':''?>>Number</option>
														<option value="password" <?php echo $fvalue=='password'?'selected':''?>>Password</option>
														<option value="radio" <?php echo $fvalue=='radio'?'selected':''?>>Radio</option>
														<option value="text" <?php echo $fvalue=='text'?'selected':''?>>Text</option>
														<option value="textarea" <?php echo $fvalue=='textarea'?'selected':''?> >Textarea</option>
														<option value="select"<?php echo $fvalue=='select'?'selected':''?> >Select</option>
														<option value="single" <?php echo $fvalue=='single'?'selected':''?>>Single file</option>	
													</select>
													<div class="invalid-feedback">
														Please select an option
													</div>
												</div>
											</div>
											<div class="col-lg-2">
												<label class="text-capitalize form-control-label d-flex justify-content-lg-start">Required *</label>
												<select name="required[]" class="custom-select form-control" required="">
													<option value="">Select</option>															
													<option value="yes" <?php echo $rvalue=='yes'?'selected':''?>>Yes</option>
													<option value="no" <?php echo $rvalue=='no'?'selected':''?>>No</option>
												</select>
												<div class="invalid-feedback">
													Please select an option
												</div>
											</div>
											<div class="col-lg-2">
											<label class="text-capitalize form-control-label d-flex justify-content-lg-start invisible">*</label>
												<button type="button" class="btn btn-secondary mr-1 mb-2 <?php echo $i==$len?'clone':'remove'; ?>"><i class="la <?php echo $i==$len?'la-plus':'la-minus'; ?>"></i><?php echo $i==$len?'Add more':'Remove'; ?></button>
											</div>
											
										</div>
										<div class="row select_option <?php echo $cvalue !=''?'':'hide';?>   ">
											<div class="col-md-12">	
												<label class="text-capitalize form-control-label d-flex justify-content-lg-start">Options (seprated by " | " )</label>
												<input type="text" class="form-control" name="options[]" value="<?php echo $cvalue;?>">                    						
											</div>
										</div>                       
									</div>
								</div>
							<?php $i++;endif;
						endforeach;
					endforeach;
                endforeach;
            endforeach;
        echo '<div class="cloned"></div> ';

	}
}

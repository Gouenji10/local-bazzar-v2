var site_url = 'http://localhost/Codeigniter/admin';
$(document).ready(function(){

	/* Onclick make cloned field */

	$(document).on('click','.clone',function(){
		var cloned = $(this).closest('.clone-data').clone()
		cloned.find('input').val('');
		cloned.find('select').val('');
		cloned.find('.select_option').addClass('hide');
		$(this).removeClass('clone').addClass('remove').html('<i class="la la-minus "></i>Remove');
		$(this).closest('form').find('.cloned').append(cloned);	
	});
	/* Onclick  remove the cloned field */ 
	$(document).on('click','.remove',function(){
		$(this).closest('.clone-data').remove();
	});

	/* Onclick open right drawer for edit */ 
	$(document).on('click','a.open-drawer',function(){
		$('.edit-sidebar').addClass('is-visible');
	});

	/* Onclick Close right drawer for edit */ 
	$(document).on('click','.off-sidebar-close',function(){
		$('.edit-sidebar').removeClass('is-visible');
	});

	/* select on change function */
	$(document).on('change','.my-select',function(){
		var value = $(this).val();
		if(value=='check' || value=="radio"|| value=='select'){
			$(this).closest('.clone-data').find('.select_option').toggleClass('hide');			
		}else{
			$(this).closest('.clone-data').find('.select_option').addClass('hide');
		}
	}) ;

	/*
	* jQuery starts for Custom fields 
	*/ 
	
	/*jQuery to add custom field */ 
	$(document).on('submit','form.custom-field_form_add',function(){
		$.post(site_url+'/custom/insert',$('form.custom-field_form_add').serialize(),function(response){
			if(response=='success'){
				notifi('success','Custom field successfully added!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to add Custom field!')
			}			
		});
		return false;
	});

	/*jQuery to add edit view */ 

	$(document).on('click','.edit-custom',function(){
		var id=$(this).data('id');
		$.post(site_url+'/custom/load_edit_custom/'+id,'',function(response){
			$('.edit-sidebar').find('form').attr('data-id',id);
			$('.edit-sidebar').find('.edit-view-content').html(response);
		})
		return false;
	});
	/* jQuery to submit custom edit form  */ 
	$(document).on('submit','form.custom-field_form_edit',function(){
		var id= $(this).data('id');
		$.post(site_url+'/custom/edit/'+id,$('form.custom-field_form_edit').serialize(),function(response){
			notifi('success','Custom field successfully edited!')
			setTimeout(function() {
			    document.location.reload()
			},2600);
		});
		return false;
	});
	/* jQuery to delete custom field*/ 
	$(document).on('click','.delete-custom',function(){
		var id = $(this).data('id');
		$.post(site_url+'/custom/delete/'+id,{},function(response){
			if(response=='success'){
				notifi('success','Custom field successfully deleted!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to delete Custom field!')
			}
		});
	});

	/*
	* jQuery starts for category 
	*/ 

	/*jQuery to submit add category*/
	$(document).on('submit','form.category_form_add',function(){
		$.post(site_url+'/category/add',$('form.category_form_add').serialize(),function(response){
			if(response=='success'){
				notifi('success','Category successfully added!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to add category!')
			}
		});
		return false;
	});

	/*jQuery to add edit view */ 
	$(document).on('click','.edit-category',function(){
		var id=$(this).data('id');
		$.post(site_url+'/category/load_edit_category/'+id,'',function(response){
			$('.edit-sidebar').find('form').attr('data-id',id);
			$('.edit-sidebar').find('.edit-view-content').html(response);
		})
		return false;
	});

	/*jQuery to submit edit category*/ 
	$(document).on('submit','form.category_form_edit',function(){
		var id= $(this).data('id');
		$.post(site_url+'/category/edit/'+id,$('form.category_form_edit').serialize(),function(response){
			if(response=='success'){
				notifi('success','Category successfully edited!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to update category!')
			}
			
		});
		return false;
	});
	
	/*jQuery to delete category*/ 
	$(document).on('click','.delete-category',function(){
		var id = $(this).data('id');
		$.post(site_url+'/category/delete/'+id,{},function(response){
			if(response=='success'){
				notifi('success','Category successfully deleted!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to delete category!')
			}
		});
	});

	/*
	* jQuery starts for sub category 
	*/ 
	
	/* Add Sub Category */ 
	$(document).on('submit','form.sub-category_form_add',function(){
		$.post(site_url+'/category/sub_add',$('form.sub-category_form_add').serialize(),function(response){
			if(response=='success'){
				notifi('success','Sub category successfully added!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to add sub category!')
			}
		});
		return false;
	});
	/*jQuery to add edit view */ 
	$(document).on('click','.edit-sub-category',function(){
		var id=$(this).data('id');
		$.post(site_url+'/category/load_edit_sub_category/'+id,'',function(response){
			$('.edit-sidebar').find('form').attr('data-id',id);
			$('.edit-sidebar').find('.edit-view-content').html(response);
		})
		return false;
	});

	/*jQuery to submit edit sub category*/ 
	$(document).on('submit','form.sub-category_form_edit',function(){
		var id= $(this).data('id');
		$.post(site_url+'/category/sub_edit/'+id,$('form.sub-category_form_edit').serialize(),function(response){
			if(response=='success'){
				notifi('success','Sub category successfully edited!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to update sub category!')
			}
			
		});
		return false;
	});
	
	/*jQuery to delete category*/ 
	$(document).on('click','.delete-sub-category',function(){
		var id = $(this).data('id');
		$.post(site_url+'/category/sub_delete/'+id,{},function(response){
			if(response=='success'){
				notifi('success','Sub category successfully deleted!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to delete sub category!')
			}
		});
	});

	/*
	* jQuery starts for FAQ 
	*/ 
	
	/* Add Sub Category */ 
	$(document).on('submit','form.faq_form_add',function(){
		$.post(site_url+'/pages/faq_insert',$('form.faq_form_add').serialize(),function(response){
			if(response=='success'){
				notifi('success','FAQ successfully added!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to add faq!')
			}
		});
		return false;
	});
	
	/*jQuery to add edit view */ 
	$(document).on('click','.edit-faq',function(){
		var id=$(this).data('id');
		$.post(site_url+'/pages/load_edit_faq/'+id,'',function(response){
			$('.edit-sidebar').find('form').attr('data-id',id);
			$('.edit-sidebar').find('.edit-view-content').html(response);
		})
		return false;
	});

	/*jQuery to submit edit sub category*/ 
	$(document).on('submit','form.faq_form_edit',function(){
		var id= $(this).data('id');
		$.post(site_url+'/pages/faq_update/'+id,$('form.faq_form_edit').serialize(),function(response){
			if(response=='success'){
				notifi('success','Faq successfully edited!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to update faq!')
			}
			
		});
		return false;
	});
	
	/*jQuery to delete category*/ 
	$(document).on('click','.delete-faq',function(){
		var id = $(this).data('id');
		$.post(site_url+'/pages/faq_delete/'+id,{},function(response){
			if(response=='success'){
				notifi('success','Faq successfully deleted!')
				setTimeout(function() {
				    document.location.reload()
				},2600);	
			}else{
				notifi('error','Failed to delete faq!')
			}
		});
	});

});





function notifi(type,text){
	new Noty({
		type:type,
		layout:"topRight",
		text:'<i class="la la-check-circle-o"></i> '+text,
		progressBar:true,
		timeout:2500,
		animation:{
			open:"animated bounceInRight",
			close:"animated bounceOutRight"
		}
	}).show()
}
var site_url = 'http://localhost/Codeigniter';
$(document).ready(function(){

	ClassicEditor
		.create( document.querySelector( '.quill_editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
			editor.height = "20em";			
		} )
		.catch( err => {
			console.error( err.stack );
		} );

	/*login form submit*/ 
	$(document).on('submit','#login_form',function(){
		$.post(site_url+'/auth/my_login',$('#login_form').serialize(),function(response){
			if(response=='success'){
				document.location.reload();
			}else{
				notifi('error',response);
			}
		});
		return false;
	});

	$(document).on('submit','#register_form',function(){
		$.post(site_url+'/auth/register_user',$('#register_form').serialize(),function(response){
			if(response=='success'){
				document.location.reload();
			}else{
				notifi('error',response);
			}
		});
		return false;
	});

	/* Homepage slider */
	
	$('.homepage-slider').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		nav:true,
		dots:false,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:1,				
			},
			1000:{
				items:1,
			}
		}
	});




	// ads form 

	$(document).on('change','.category-select select',function(){
		var val = $(this).val();
		var that = $(this)
		if(val !='0'){
			$.get(site_url+'/category/get_sub_category_id/'+val,'',function(response){				
				var obj = JSON.parse(response)
				for (var i = 0; i < obj.length; i++) {
					that.closest('#ad-form-content').find(".sub-category-select select").append(new Option(obj[i].title,obj[i].id));
				} 
			});
		}
	});

	$(document).on('change','.sub-category-select select',function(response){
		var val = $(this).val();
		var that = $(this);
		if(val != '0'){
			$.get(site_url+'/ads/get_sub_category_fields/'+val,'',function(response){
				$('#ad-form-content').find('.sub-category-content').html(response);
			})
		}
	})


	$('#ad-form-content').find('.delivery_charges').addClass('hide');
	$('#ad-form-content').find('.delivery_area').addClass('hide');

	$('#ad-form-content').find('.warranty_period').addClass('hide');
	$('#ad-form-content').find('.warranty_includes').addClass('hide');
	
	$(document).on('change','.home_delivery .custom-control-input',function(){
		var val= $(this).val();
		if(val == 'No'){
			$(this).closest('#ad-form-content').find('.delivery_charges').addClass('hide');
			$(this).closest('#ad-form-content').find('.delivery_area').addClass('hide');
		}else{
			$(this).closest('#ad-form-content').find('.delivery_charges').removeClass('hide');
			$(this).closest('#ad-form-content').find('.delivery_area').removeClass('hide');
		}
	});

	$(document).on('change','.warranty_type .custom-control-input',function(){
		var val= $(this).val();
		if(val == 'No Warranty'){
			$(this).closest('#ad-form-content').find('.warranty_period').addClass('hide');
			$(this).closest('#ad-form-content').find('.warranty_includes').addClass('hide');
		}else{
			$(this).closest('#ad-form-content').find('.warranty_period').removeClass('hide');
			$(this).closest('#ad-form-content').find('.warranty_includes').removeClass('hide');
		}
	});

	$(document).on('change','.custom-zone',function(){
		var id =$(this).val();
		var that = $(this);
		$.get(site_url+'/ads/get_district/'+id,'',function(response){
			var options = response.split(",");
			for (var i = 0; i < options.length; i++) {
				that.closest('#ad-form-content').find(".district select").append(new Option(options[i].trim(),options[i].trim()));
			} 
		})
	})
	$('.ads-gallery').imageUploader({
		extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
	  	mimes: ['image/jpeg', 'image/png', 'image/gif'],
	  	maxSize:50000000,
	  	maxFiles:8,
	});
	// ad submit
	// $(document).on('click','#ad_submit',function(){
	// 	// here loader activation
	// 	$.post(site_url+'/ads/save_ads',$('#post_ads').serialize(),function(response){
	// 		console.log(response);
	// 	});

	// });

	

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
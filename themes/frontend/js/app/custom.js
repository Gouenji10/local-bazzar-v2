var site_url = 'http://localhost/Codeigniter';
$(document).ready(function(){

	// Login 
	$(document).on('submit','#login_form',function(){
		$.post(site_url+'/auth/my_login',$('#login_form').serialize(),function(response){
			if(response=='1'){
				notification('success','Login Successful')
				setTimeout(function(){ window.location = site_url + '/profile'; },2000);
			}else if(response=='0'){
				notification('success','Login Successful')
				setTimeout(function(){ window.location = site_url + '/admin/home'; },2000);
			}
			else{
				notification('error',response);
			}
		});
		return false;
	});

	// Registration

	$(document).on('submit','#register_form',function(){
		$.post(site_url+'/auth/register_user',$('#register_form').serialize(),function(response){
			if(response=='success'){
				notification('success','Registration Successful.');
				// todo redirect to verification page
			}else{
				notification('error',response);
			}
		});
		return false;
	});

	/* Homepage Category slider */
	$(".category-carousel").owlCarousel({
		loop:true,
		dots:false,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:3,
				nav:true,
				loop:false
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
					that.closest('.ad-information').find(".sub-category-select select").append(new Option(obj[i].title,obj[i].id));
				} 
			});
		}
	});

	$(document).on('change','.sub-category-select select',function(response){
		var val = $(this).val();
		var that = $(this);
		if(val != '0'){
			$.get(site_url+'/ads/get_sub_category_fields/'+val,'',function(response){
				$('.ad-information').find('.sub-category-content').html(response);
			})
		}
	})


	$('.ad-information').find('.delivery_charges').addClass('hide');
	$('.ad-information').find('.delivery_area').addClass('hide');

	$('.ad-information').find('.warranty_period').addClass('hide');
	$('.ad-information').find('.warranty_includes').addClass('hide');
	
	$(document).on('change','.home_delivery .custom-control-input',function(){
		var val= $(this).val();
		if(val == 'No'){
			$(this).closest('.ad-information').find('.delivery_charges').addClass('hide');
			$(this).closest('.ad-information').find('.delivery_area').addClass('hide');
		}else{
			$(this).closest('.ad-information').find('.delivery_charges').removeClass('hide');
			$(this).closest('.ad-information').find('.delivery_area').removeClass('hide');
		}
	});

	$(document).on('change','.warranty_type .custom-control-input',function(){
		var val= $(this).val();
		if(val == 'No Warranty'){
			$(this).closest('.ad-information').find('.warranty_period').addClass('hide');
			$(this).closest('.ad-information').find('.warranty_includes').addClass('hide');
		}else{
			$(this).closest('.ad-information').find('.warranty_period').removeClass('hide');
			$(this).closest('.ad-information').find('.warranty_includes').removeClass('hide');
		}
	});

	$(document).on('change','.custom-zone',function(){
		var id =$(this).val();
		var that = $(this);
		$.get(site_url+'/ads/get_district/'+id,'',function(response){
			var options = response.split(",");
			for (var i = 0; i < options.length; i++) {
				that.closest('.contact-information').find(".district select").append(new Option(options[i].trim(),options[i].trim()));
			} 
		})
	})
	$('.ads-gallery').imageUploader({
		extensions: ['.jpg', '.jpeg', '.png', '.gif', '.svg'],
	  	mimes: ['image/jpeg', 'image/png', 'image/gif'],
	  	maxSize:50000000,
	  	maxFiles:8,
	});

	$(document).on('change','.ad_person input[type=radio]',function(){
		if($(this).val()=='me'){
			$.get(site_url+'/ads/user_detail','',function(response){
				console.log(response);
			})
		}else{

		}
	})


});

function notification(type,response){
	var n_title; 
	var icon;
	var timer;
	if(type =='success'){
		icon='la la-check-circle';
		n_title = "Success !";
		timer = 2;
	}else if(type == "error"){
		icon ='la la-times-circle';
		n_title = 'Hmmm...!'
		timer = 5;
	}
	$.ambiance({
		title:n_title,
		message: "<div class='icon "+type+"'><i class='"+icon+"'></i></div><div class='message'>"+response+".</div>",
		timeout: timer,
		fade:true
		
	});
}



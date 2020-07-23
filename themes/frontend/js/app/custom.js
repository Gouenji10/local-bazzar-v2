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
	$('.category-carousel').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows:true,
		responsive: [
		  {
			breakpoint: 1024,
			settings: {
			  slidesToShow: 3,
			  slidesToScroll: 3,
			  infinite: true,
			}
		  },
		  {
			breakpoint: 600,
			settings: {
			  slidesToShow: 2,
			  slidesToScroll: 2
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows:true,
			}
		  }
		  // You can unslick at a given breakpoint now by adding:
		  // settings: "unslick"
		  // instead of a settings object
		]
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

	$(document).on('change','.contact-information .custom-zone',function(){
		var id =$(this).val();
		var that = $(this);
		$.get(site_url+'/ads/get_district/'+id,'',function(response){
			var options = response.split(",");
			that.closest('.contact-information').find(".district select").empty();
			that.closest('.contact-information').find(".district select").append(new Option('Select District',''));
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
				
			})
		}else{

		}
	})

	// profile js start

	$(document).on('change','.profile-setting-content .custom-zone',function(){
		var id =$(this).val();
		var that = $(this);
		$.get(site_url+'/ads/get_district/'+id,'',function(response){
			var options = response.split(",");
			that.closest('.profile-setting-content').find(".district select").empty();
			that.closest('.profile-setting-content').find(".district select").append(new Option('Select District',''));
			for (var i = 0; i < options.length; i++) {
				that.closest('.profile-setting-content').find(".district select").append(new Option(options[i].trim(),options[i].trim()));
			} 
		})
	})

	$(document).on('submit','#profile_contact_form',function(){	
		$.post(site_url+'/profile/contact_save',$(this).serialize(),function(response){
			if(response=='success'){
				notification('success','Details added successful');	
				setTimeout(function(){ window.location = site_url + '/profile/setting'; },2000);				
			}else if(response=='updated'){
				notification('success','Details updated successfully');
				setTimeout(function(){ window.location = site_url + '/profile/setting'; },2000);
			}
			else{
				notification('error','Something went wrong. Please try again.');
			}
		})
		return false;
	})

	// single ad js start

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: true,
		centerMode: false,
		focusOnSelect: true,
	});


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

function check_user_address(){
	$(function() {
		$.ambiance({
			title:'Hmmm...!',
			message: "<div class='icon error'><i class='la la-times-circle'></i></div><div class='message'>It seems like your account have not enough details.</div>",
			timeout:0,
			permanent: true,
			link: site_url+'/profile/setting',
			linkName: "Click here to enter details. ",
			fade:true
			
		});
	});
}



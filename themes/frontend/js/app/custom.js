var site_url = 'http://localhost/Codeigniter';
$(document).ready(function(){

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


});

function notification(response){
	var title;
	var icon;
	if(response.title=='success'){
		icon='la la-check-circle';
		title = "Success !";
	}else{
		icon ='la la-times-circle';
		title = 'Hmmm...!'
	}
	$.ambiance({
		title:response.title,
		message: "<div class='icon'><i class='"+icon+"'></i></div><div class='message'>"+response.message+".</div>",
		timeout: 5,
		fade:true
		
	});
}
	



var coverageAreaTriggered = false;
$(window).scroll(function () {
  if (!coverageAreaTriggered ){
    var scrollTop = $(window).scrollTop(),
      windowHeight = $(window).height(),
      elem = $('.counter-section').offset().top,
      final = elem - windowHeight,
      distance = final - scrollTop;
    if (distance < 0) {
      counter();
      coverageAreaTriggered = true;
    }
  }
});

function counter(){
	// Homepage Counter	
	$('.counter-number').find('.counter').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 4000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});
}

// ClassicEditor.create( document.querySelector( '.quill_editor' ), {
// 	// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
// })
// .then( editor => {
// 	window.editor = editor;
// 	editor.height = "20em";			
// })
// .catch( err => {
// 	console.error( err.stack );
// });
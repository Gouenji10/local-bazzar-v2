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
		add_hook('sc_footer','sc_footer',$this,'sc_footer',array());
		$this->template
		->title('Welcome')
		->set_layout('homepage')
		->set('page','home')
		->build('welcome_message');
	}
	public function sc_footer(){
		?>
			<script>
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
			</script>
		<?php
	}
}

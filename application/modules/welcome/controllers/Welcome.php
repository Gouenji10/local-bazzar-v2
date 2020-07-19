<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller 
{
	function __construct(){
		parent::__construct();
		$this->load->model('welcome_m');
		add_hook('check_user_address','check_user_address',$this,'check_user_address',array());
	}

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

	public function check_user_address(){
		if($this->ion_auth->logged_in()){
			$user_details = $this->welcome_m->getAll(config('tbl_meta'),array('id'=>$this->session->userdata('user_id')));
			if(empty($user_details)){
				?>
					<script>
						check_user_address();
					</script>
				<?php
			}
			exit;
		}		
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

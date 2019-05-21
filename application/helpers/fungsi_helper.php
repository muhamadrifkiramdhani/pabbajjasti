<?php 
		
		function harus_login(){ 
			$ci =& get_instance();
			$user_session = $ci->session->userdata('id');
			if($user_session) {
				redirect(base_url('users/dashboard'));
			}
		}

		function not_login(){
			$ci =& get_instance();
			$user_session = $ci->session->userdata('id');
			if(!$user_session) {
				redirect(base_url('auth/login'));
			}
		}
 
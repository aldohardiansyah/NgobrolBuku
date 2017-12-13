<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller {

	public function index()
	{
		$username = $this->session->userdata('username');
		$data = array(
				'active' => 0
		);
		$this->M_User->last_login($username, $data);
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
    $this->session->unset_userdata('role_user');
		$this->session->sess_destroy();
		redirect('login', 'refresh');
	}

}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	private $data = array(
		'main_view' => 'auth/login/frontpage',
		'sidebar' => ''
		);

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('auth/basepage', $this->data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
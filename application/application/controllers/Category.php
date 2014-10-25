<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
	private $data = array(
		'main_view' => 'forum/sub-forum/frontpage',
		'sidebar' => 'forum/sub-forum/frontpage_sidebar'
		);

	public function __construct()
	{
		parent::__construct();
	}

	public function index($param = NULL)
	{
		$this->load->view('forum/basepage', $this->data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */
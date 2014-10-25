<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
	private $data = array(
		'main_view' => 'forum/index/frontpage',
		'sidebar' => 'forum/index/frontpage_sidebar',
		'data' => ''
		);

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('forum/index/base_model', 'model', TRUE);
	}

	public function index()
	{
		$data = $this->model->getData();
		$this->data['data'] = $data;
		
		$this->load->view('forum/basepage', $this->data);
	}

}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends CI_Model {
	private $table = 'threads';

	public function __construct()
	{
		parent::__construct();
	}

	public function getData($param = NULL)
	{
		$data = array('topics' => '', 'threads' => '');
		if(empty($param))
		{
			$data['topics'] = $this->_getTopic();
			$data['threads'] = $this->_getThreads();
		}else
		{
			$data['topics'] = $this->_getTopic($param['tp_title']);
			$data['threads'] = $this->_getThreads($data['topics']->tp_id]);
		}
		return $data;
	}

	private function _getTopic($param = NULL)
	{
		if(!empty($param))
		{
			return $this->db->get_where('topics', array('tp_title' => $param))->limit(1)->row();
		}
	}

	private function _getThreads($param = NULL)
	{
		if(!empty($param))
		{
			return $this->db->where('th_topic' => $param)->get($this->table)->result();
		}
	}
}

/* End of file base_model.php */
/* Location: ./application/models/index/base_model.php */
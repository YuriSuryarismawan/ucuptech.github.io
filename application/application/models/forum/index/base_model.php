<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends CI_Model {
	private $table = 'categories';

	public function __construct()
	{
		parent::__construct();
	}

	public function getData($param = NULL)
	{
		$data = array('cats' => '', 'topics' => '');
		if(empty($param))
		{
			$data['cats'] = $this->_getCategories();
			$data['topics'] = $this->_getTopics();
		}else
		{
			$data['cats'] = $this->_getCategories($param['cat_name']);
			$data['topics'] = $this->_getTopics($param['tp_title']);
		}
		return $data;
	}

	public function countChild($param){
		if(!empty($param))
		{
			return $this->db->get_where('topics', array('tp_cat' => $param))->num_rows();
		}
	}

	private function _getCategories($param = NULL)
	{
		if(empty($param))
		{
			return $this->db->get($this->table)->result();
		}else
		{
			return $this->db->where('cat_name', $param)->get($this->table)->result();
		}
	}

	private function _getTopics($param = NULL)
	{
		if(empty($param))
		{
			return $this->db->get('topics')->result();
		}else
		{
			return $this->db->where('tp_title', $param)->get('topics')->result();
		}
	}
}

/* End of file base_model.php */
/* Location: ./application/models/index/base_model.php */
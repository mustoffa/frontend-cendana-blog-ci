<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function show()
	{
		$data = $this->db->get('blog_post');
		return $data->result();
	}

	public function showID($id)
	{
		$this->db->where('id_post', $id);
		$data = $this->db->get('blog_post');
		return $data->row();
	}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');
	}

	public function index()
	{
		$data['post'] = $this->M_home->show();
		$this->template->views('home', $data);
	}

	public function showID($id)
	{
		$data['value'] = $this->M_home->showID($id);
		$this->template->views('show_post', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('ModelPenduduk');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->ModelPenduduk->all();
		$this->load->view('dashboard', $data);
	}
}

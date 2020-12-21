<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataStatistik extends CI_Controller {

	
    public function index()
	{
		$data['graph'] = $this->ModelStatistik->graph();
		$this->load->view('datastatistik/tes', $data);
	}
}

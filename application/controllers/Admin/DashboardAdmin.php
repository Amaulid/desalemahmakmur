
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Anda Belum Login!
 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   					 <span aria-hidden="true">&times;</span>
  					</button>
					</div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['totalDataKk'] = $this->ModelKepalaKeluarga->jumlahKk();
		$data['totalData'] = $this->ModelPenduduk->jumlahPenduduk();
		$data['totalsurat'] = $this->ModelSurat->jumlahSurat();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template_admin/footer');
	}
}

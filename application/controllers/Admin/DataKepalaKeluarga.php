<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKepalaKeluarga extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelKepalaKeluarga');
		$this->load->helper('url');

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
 
 
	public function index(){
		$data['title'] = 'Data Kepala Keluarga';
		$data['kepalaKeluarga'] = $this->ModelKepalaKeluarga->tampil_data();
		$this->load->view('datakk/dataKepalaKeluarga',$data);
	}
 
	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nikk','Nomer Induk Kartu Keluarga','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('nama_kepala_keluarga','Nama Kepala Keluarga','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('nama_istri', 'Nama Istri', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('nama_anak1','Nama Anak 1','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {
			$data['kepalaKeluarga'] = $this->ModelKepalaKeluarga->tampil_data()->result();
			$this->load->view('datakk/dataKepalaKeluarga',$data);
		}else {
			$data = array(
				'id_kk'					=> '',
				'nikk'					=> $this->input->post('nikk'),
				'nama_kepala_keluarga'	=> $this->input->post('nama_kepala_keluarga'),
				'nama_istri'			=> $this->input->post('nama_istri'),
				'nama_anak1'			=> $this->input->post('nama_anak1'),
			);
		$this->ModelKepalaKeluarga->tambah_data($data,'tb_datakepalakeluarga');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima Kasih Telah Menghubungi kami.</div>");
		redirect('Admin/DataKepalaKeluarga');

		
	}
}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Kepala Keluarga';
		$where = array('id_kk' =>$id);
		$data['kepalaKeluarga'] = $this->ModelKepalaKeluarga->edit_data($where, 'tb_datakepalakeluarga')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('datakk/editDataKk', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 					= $this->input->post('id_kk');
		$nikk 					= $this->input->post('nikk');
		$nama_kepala_keluarga 	= $this->input->post('nama_kepala_keluarga');
		$nama_istri 			= $this->input->post('nama_istri');
		$nama_anak1 			= $this->input->post('nama_anak1');
		$nama_anak2 			= $this->input->post('nama_anak2');
		$nama_anak3 			= $this->input->post('nama_anak3');

		$data = array(

			'nikk'					=> $nikk,
			'nama_kepala_keluarga'	=> $nama_kepala_keluarga,
			'nama_istri'			=> $nama_istri,
			'nama_anak1'			=> $nama_anak1,
			'nama_anak2'			=> $nama_anak2,
			'nama_anak3'			=> $nama_anak3
		);

		$where = array(
			'id_kk' 	=> $id
		);

		$this->ModelKepalaKeluarga->update_data($where,$data, 'tb_datakepalakeluarga');
		redirect('admin/DatakepalaKeluarga/index');
	}

	public function hapus($id)
	{
		$where = array('id_kk' => $id);
		$this->ModelKepalaKeluarga->hapus_data($where, 'tb_datakepalakeluarga');
		redirect('Admin/DatakepalaKeluarga/index');
	}

	public function detail($id_kk)
	{
		$data['title'] = 'Detail Data Kepala Keluarga';
		$data['kepalaKeluarga'] = $this->ModelKepalaKeluarga->detail($id_kk);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('datakk/detailDataKk',$data);
		$this->load->view('template_admin/footer');
	}
	
		public function pdf($id_kk)
	{

		$this->load->model('ModelKepalaKeluarga');
		$data['kepalaKeluarga'] = $this->ModelKepalaKeluarga->detail($id_kk);
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporan-data-siswa.pdf";
		$this->pdf->load_view('admin/printKk', $data);
	}
}
?>


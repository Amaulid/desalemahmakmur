<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url","tanggal");
		$this->load->model('ModelPenduduk');

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
		$data['title'] = 'Data Penduduk';
		$data['penduduk'] = $this->ModelPenduduk->tampil_data();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('datapenduduk/datapenduduk', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nik','NIK','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('name','Nama','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('tempat_lahir','Tempat lahir','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
			$this->form_validation->set_rules('tgl_lahir','Tanggal lahir','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('jenkel','Jenis Kelamin','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		$this->form_validation->set_rules('agama','Agama','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('status','Status Perkawinan','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('kewarganegaraan','Kewarganegaraan','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		
		if($this->form_validation->run() == FALSE) {

		$data['penduduk'] = $this->ModelPenduduk->tampil_data()->result();
		$this->session->set_flashdata('msg',"<div class='alert alert-danger'>Data Gagal Ditambahkan!</div>");
		$this->load->view('datapenduduk/datapenduduk', $data);
	}else {
		$data = array(
				'id'				=> '',
				'nik'				=> $this->input->post('nik'),
				'name'				=> $this->input->post('name'),
				'tempat_lahir'		=> $this->input->post('tempat_lahir'),
				'tgl_lahir'			=> $this->input->post('tgl_lahir'),
				'jenkel'			=> $this->input->post('jenkel'),
				'alamat'			=> $this->input->post('alamat'),
				'agama'				=> $this->input->post('agama'),
				'status'			=> $this->input->post('status'),
				'pekerjaan'			=> $this->input->post('pekerjaan'),
				'kewarganegaraan'	=> $this->input->post('kewarganegaraan')
			);
		$this->ModelPenduduk->tambah_data($data,'tb_penduduk');
		$this->session->set_flashdata('msg',"<div class='alert alert-success'>Data Berhasil Ditambahkan!</div>");
		redirect('Admin/DataPenduduk/index');
	}
		
	}

	public function edit($id)
	{
		$where = array('id' =>$id);
		$data['title'] = 'Edit Data';
		$data['penduduk'] = $this->ModelPenduduk->edit_data($where, 'tb_penduduk')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('datapenduduk/editDataPenduduk', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 				= $this->input->post('id');
		$nik 				= $this->input->post('nik');
		$name 				= $this->input->post('name');
		$tempat_lahir	 	= $this->input->post('tempat_lahir');
		$tgl_lahir	 		= $this->input->post('tgl_lahir');
		$jenkel 			= $this->input->post('jenkel');
		$alamat 			= $this->input->post('alamat');
		$agama 				= $this->input->post('agama');
		$status 			= $this->input->post('status');
		$pekerjaan 			= $this->input->post('pekerjaan');
		$kewarganegaraan 	= $this->input->post('kewarganegaraan');

		$data = array(

			'nik'				=> $nik,
			'name'				=> $name,
			'tempat_lahir'		=> $tempat_lahir,
			'tgl_lahir'			=> $tgl_lahir,
			'jenkel'			=> $jenkel,
			'alamat'			=> $alamat,
			'agama'				=> $agama,
			'status'			=> $status,
			'pekerjaan'			=> $pekerjaan,
			'kewarganegaraan'	=> $kewarganegaraan,
		);

		$where = array(
			'id' 	=> $id
		);

		$this->ModelPenduduk->update_data($where,$data, 'tb_penduduk');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Data Berhasil Diupdate!</div>");
		redirect('admin/DataPenduduk/index');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->ModelPenduduk->hapus_data($where, 'tb_penduduk');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Data Berhasil Dihapus!</div>");
		redirect('Admin/DataPenduduk/index');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Data Penduduk';
		$data['penduduk'] = $this->ModelPenduduk->detail($id);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('datapenduduk/detailDataPenduduk',$data);
		$this->load->view('template_admin/footer');
	}

	public function print()
    {   	
        $mpdf = new \Mpdf\Mpdf();
        $this->load->model('ModelPenduduk');
        $html = $this->load->view('datapenduduk/printdata',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('invoice.pdf','D'); // it will work as normal download
    }
}

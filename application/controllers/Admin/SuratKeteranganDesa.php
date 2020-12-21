<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratKeteranganDesa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
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
		$data['title'] = 'Surat Keterangan Desa';
		$data['surat'] = $this->ModelSkd->all();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratketerangandesa/index', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('no_surat','Nomer Surat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('jenis_surat','Jenis Surat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('alamat','alamat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);

		 		$this->form_validation->set_rules('nik','NIK','required', array(
				'required'		=> '%s harus diisi.'
		)
	);

		 		$this->form_validation->set_rules('tanggal_dibuat','Tanggal Dibuat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {
			$data['surat'] = $this->ModelSkd->tampil_data()->result();
			$this->load->view('suratdomisili/SuratDomisili',$data);
		}else {
			$data = array(
				'id_surat'			=> '',
				'no_surat'			=> $this->input->post('no_surat'),
				'jenis_surat'		=> $this->input->post('jenis_surat'),
				'nama'				=> $this->input->post('nama'),
				'alamat'			=> $this->input->post('alamat'),
				'nik'				=> $this->input->post('nik'),
				'tanggal_dibuat'	=> $this->input->post('tanggal_dibuat')

			);
		$this->ModelSkd->tambah_data($data,'tb_surat_pengantar');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Surat Berhasil dibuat.</div>");
		redirect('Admin/SuratDomisili/index');

		
	}
}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Surat';
		$where = array('id_surat' =>$id);
		$data['surat'] = $this->ModelSkd->edit_data($where, 'tb_surat_pengantar')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratdomisili/editsurat', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 			= $this->input->post('id_surat');
		$no_surat 		= $this->input->post('no_surat');
		$jenis_surat 	= $this->input->post('jenis_surat');
		$nama 			= $this->input->post('nama');
		$alamat 		= $this->input->post('alamat');
		$nik 			= $this->input->post('nik');
		$tanggal_dibuat = $this->input->post('tanggal_dibuat');

		$data = array(

			'no_surat'			=> $no_surat,
			'jenis_surat'		=> $jenis_surat,
			'nama'				=> $nama,
			'alamat'			=> $alamat,
			'nik'				=> $nik,
			'tanggal_dibuat'	=> $tanggal_dibuat
		);

		$where = array(
			'id_surat' 	=> $id
		);

		$this->ModelSkd->update_data($where,$data, 'tb_surat_pengantar');
		redirect('Admin/SuratDomisili/index');
	}

	public function hapus($id)
	{
		$where = array('id_surat' => $id);
		$this->ModelSkd->hapus_data($where, 'tb_surat_pengantar');
		redirect('Admin/SuratDomisili/index');
	}

	public function detail($id_surat)
	{
		$data['title'] = 'Detail Data Surat';
		$data['surat'] = $this->ModelSkd->detail($id_surat);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratdomisili/detailSurat',$data);
		$this->load->view('template_admin/footer');
	}

	public function print($id_surat)
    {   	
        $mpdf = new \Mpdf\Mpdf();
        $this->load->model('ModelSkd');
		$data['surat'] = $this->ModelSkd->detail($id_surat);
        $html = $this->load->view('suratdomisili/printSurat',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('invoice.pdf','D'); // it will work as normal download
    }
}
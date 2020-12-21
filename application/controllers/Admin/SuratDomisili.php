<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratDomisili extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('ModelPenduduk','ModelSettingDomisili');

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
		$data['surat'] = $this->ModelSurat->all();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratdomisili/suratDomisili', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('no_surat','Nomer Surat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		$this->form_validation->set_rules('nik','NIK','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('nama', 'Nama', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('jenkel', 'Jenis Kelamin', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);

		 		$this->form_validation->set_rules('agama', 'Agama', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('status','Status','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		 		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);

		 		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);

		 		$this->form_validation->set_rules('dibuat_oleh', 'Dibuat', 'required', array(
                'required'      => '%s harus diisi.'
        )
	);
		 		$this->form_validation->set_rules('tanggal_dibuat','Tanggal Dibuat','required', array(
				'required'		=> '%s harus diisi.'
		)
	);
		if($this->form_validation->run() == FALSE) {
			$data['surat'] = $this->ModelSurat->tampil_data();
			$this->load->view('template_admin/header');
			$this->load->view('template_admin/sidebar');
			$this->load->view('suratdomisili/SuratDomisili',$data);
			$this->load->view('template_admin/footer');
		}else {
			$data = array(
				'id_surat'			=> '',
				'no_surat'			=> $this->input->post('no_surat'),
				'nik'				=> $this->input->post('nik'),
				'nama'				=> $this->input->post('nama'),
				'tgl_lahir'			=> $this->input->post('tgl_lahir'),
				'jenkel'			=> $this->input->post('jenkel'),
				'agama'				=> $this->input->post('agama'),
				'status'			=> $this->input->post('status'),
				'pekerjaan'			=> $this->input->post('pekerjaan'),
				'alamat'			=> $this->input->post('alamat'),
				'dibuat_oleh'		=> $this->input->post('dibuat_oleh'),
				'tanggal_dibuat'	=> $this->input->post('tanggal_dibuat')

			);
		$this->ModelSurat->tambah_data($data,'tb_surat_domisili');
		$this->session->set_flashdata('msg',"<div class='alert alert-info'>Surat Berhasil dibuat.</div>");
		redirect('Admin/SuratDomisili/index');

		
	}
}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Surat';
		$where = array('id_surat' =>$id);
		$data['surat'] = $this->ModelSurat->edit_data($where, 'tb_surat_domisili')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratdomisili/editsurat', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 				= $this->input->post('id_surat');
		$no_surat 			= $this->input->post('no_surat');
		$nik 				= $this->input->post('nik');
		$nama 				= $this->input->post('nama');
		$tgl_lahir 			= $this->input->post('tgl_lahir');
		$jenkel				= $this->input->post('jenkel');
		$agama				= $this->input->post('agama');
		$status_perkawinan	= $this->input->post('status_perkawinan');
		$pekerjaan			= $this->input->post('pekerjaan');
		$alamat				= $this->input->post('alamat');

		$data = array(

			'no_surat'			=> $no_surat,
			'nik'				=> $nik,
			'nama'				=> $nama,
			'tgl_lahir'			=> $tgl_lahir,
			'jenkel'			=> $jenkel,
			'agama'				=> $agama,
			'status_perkawinan'	=> $status_perkawinan,
			'pekerjaan'			=> $pekerjaan,
			'alamat'			=> $alamat,
		);

		$where = array(
			'id_surat' 	=> $id
		);

		$this->ModelSurat->update_data($where,$data, 'tb_surat_domisili');
		redirect('Admin/SuratDomisili/index');
	}

	public function hapus($id)
	{
		$where = array('id_surat' => $id);
		$this->ModelSurat->hapus_data($where, 'tb_surat_domisili');
		redirect('Admin/SuratDomisili/index');
	}

	public function detail($id_surat)
	{
		$data['title'] = 'Detail Data Surat';
		$data['surat'] = $this->ModelSurat->detail($id_surat);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('suratdomisili/detailSurat',$data);
		$this->load->view('template_admin/footer');
	}

	public function print($id_surat)
    {   	
        $mpdf = new \Mpdf\Mpdf();
        $this->load->model('ModelSurat');
		$data['surat'] = $this->ModelSurat->detail($id_surat);
		$data['join'] = $this->ModelSurat->data_surat()->result();
        $html = $this->load->view('suratdomisili/printSurat',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('invoice.pdf','D'); // it will work as normal download
    }
}
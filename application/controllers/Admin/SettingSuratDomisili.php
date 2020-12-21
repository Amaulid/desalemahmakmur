<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingSuratdomisili extends CI_Controller {

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
		$data['setting'] = $this->ModelSettingDomisili->all();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('settingdomisili/setting', $data);
		$this->load->view('template_admin/footer');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Data Surat';
		$where = array('id' =>$id);
		$data['setting'] = $this->ModelSettingDomisili->edit_data($where, 'tb_setting_domisili')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('settingdomisili/editdomisili', $data);
		$this->load->view('template_admin/footer');
	}

	public function update()
	{
		$id 			= $this->input->post('id');
		$jenis_surat 	= $this->input->post('jenis_surat');
		$header 		= $this->input->post('header');
		$nama_kades 	= $this->input->post('nama_kades');
		$konten		 	= $this->input->post('konten');
		$end_konten 	= $this->input->post('end_konten');

		$data = array(

			'jenis_surat'		=> $jenis_surat,
			'header'			=> $header,
			'nama_kades'		=> $nama_kades,
			'konten'			=> $konten,
			'end_konten'		=> $end_konten
		);

		$where = array(
			'id' 	=> $id
		);

		$this->ModelSettingDomisili->update_data($where,$data, 'tb_setting_domisili');
		$this->session->set_flashdata('msg',"<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Data Berhasil Diupdate!</strong>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
			</div>");
		redirect('Admin/SettingSuratDomisili/index');
	}

	public function print($id_surat)
    {   	
        $mpdf = new \Mpdf\Mpdf();
        $this->load->model('ModelSettingDomisili');
		$data['surat'] = $this->ModelSettingDomisili->detail($id_surat);
        $html = $this->load->view('settingdomisili/preview',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
        //$mpdf->Output('invoice.pdf','D'); // it will work as normal download
    }
}
<?php 

class Auth extends CI_Controller {

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required' => 'Username Wajib diisi !']);
		$this->form_validation->set_rules('password','Password','required',['required' => 'Password Wajib diisi !']);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_login');
		}else{
			$auth = $this->ModelAuth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="box-body">
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Username atau Password salah!
              </div>
            </div>');
			redirect('auth/login');
			}else {
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch($auth->role_id){
					case 1 : redirect('Admin/DashboardAdmin');
							 break;
					case 2 : redirect('dashboard');
							 break;
					default: break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
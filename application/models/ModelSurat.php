<?php
class ModelSurat extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function all()
	{
		$data = $this->db->query("SELECT * from tb_surat_domisili");
		return $data->result();
	}

	public function tampil_data(){
		$data_kk = $this->db->get('tb_surat_domisili');
		return $data_kk->result();
	}

	public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_surat', $id)
						   ->limit(1)
						   ->get('tb_surat_domisili');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail($id_surat){
		$result = $this->db->where('id_surat',$id_surat)->get('tb_surat_domisili');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function jumlahSurat()
	{   
	    $query = $this->db->get('tb_surat_domisili');
	    if($query->num_rows() > 0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function data_surat()
	{
	      $this->db->select('*');
	      $this->db->from('tb_surat_domisili');
	      $this->db->join('tb_setting_domisili','tb_setting_domisili.id = tb_surat_domisili.id_surat');      
	      $query = $this->db->get();
	      return $query;
   }

}
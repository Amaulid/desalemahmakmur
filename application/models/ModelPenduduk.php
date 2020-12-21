<?php
class ModelPenduduk extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function tampil_data(){
		$data_kk = $this->db->get('tb_penduduk');
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
		$result = $this->db->where('id', $id)
						   ->limit(1)
						   ->get('tb_penduduk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail($id){
		$result = $this->db->where('id',$id)->get('tb_penduduk');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function jumlahPenduduk()
	{   
	    $query = $this->db->get('tb_penduduk');
	    if($query->num_rows() > 0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
}
<?php

class ModelKepalaKeluarga extends CI_Model{

	public function tampil_data(){
		$data_kk = $this->db->get('tb_datakepalakeluarga');
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
		$result = $this->db->where('id_kk', $id)
						   ->limit(1)
						   ->get('tb_datakepalakeluarga');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail($id_kk){
		$result = $this->db->where('id_kk',$id_kk)->get('tb_datakepalakeluarga');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function jumlahKk()
	{   
	    $query = $this->db->get('tb_datakepalakeluarga');
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
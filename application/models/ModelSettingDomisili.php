<?php
class ModelSettingDomisili extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function all()
	{
		$data = $this->db->query("SELECT * from tb_setting_domisili");
		return $data->result();
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function find($id){
		$result = $this->db->where('id', $id)
						   ->limit(1)
						   ->get('tb_setting_domisili');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail($id){
		$result = $this->db->where('id',$id)->get('tb_setting_domisili');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}
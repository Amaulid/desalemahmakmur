<?php
class ModelStatistik extends CI_Model{
 
  public function graph()
	{
		$data = $this->db->query("SELECT * from tb_penduduk");
		return $data->result();
	}
}
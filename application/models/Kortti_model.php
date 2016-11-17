<?php
class Kortti_model extends CI_Model 
{
	public function getKortti()
	{
		$this->db->select('id_kortti');
		$this->db->from('kortti');
		return $this->db->get()->result_array();

	}

}

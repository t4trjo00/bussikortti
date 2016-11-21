<?php
class Kortti_model extends CI_Model 
{
	public function getKortti()
	{
		$this->db->select('id_kortti, pin_kortti, saldo, asiakas_id_asiakas, maksu_id_maksu');
		$this->db->from('kortti');
		return $this->db->get()->result_array();

	}

}

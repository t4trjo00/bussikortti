<?php
class Kayttaja_model extends CI_Model 
{
	public function getKortti_kayttaja()
	{
		$this->db->select('pin_kortti, saldo, asiakas_id_asiakas');
		$this->db->from('kortti');
		//$this->db->where('asiakas_id_asiakas', $id);

		return $this->db->get()->result_array();

	}

}










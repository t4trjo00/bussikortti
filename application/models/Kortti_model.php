<?php
class Kortti_model extends CI_Model 
{
	public function getKortti()
	{
		$this->db->select('id_kortti, pin_kortti, saldo, asiakas_id_asiakas, maksu_id_maksu, toiminnassa');
		$this->db->from('kortti');
		return $this->db->get()->result_array();

	}

	public function delKortti($id)
	{
		$this->db->where('asiakas_id_asiakas',$id);
		$this->db->delete('kortti');
		$testi=$this->db->affected_rows();
		return $testi;

	}
}

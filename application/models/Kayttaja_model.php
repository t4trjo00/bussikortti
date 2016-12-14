<?php
class Kayttaja_model extends CI_Model 
{
	public function getKortti_kayttaja()
	{
		$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);

		$this->db->select('pin_kortti, saldo, asiakas_id_asiakas, toiminnassa');
		$this->db->from('kortti');
		$this->db->where('asiakas_id_asiakas', $id_tunnus);

		return $this->db->get()->result_array();

	}

	

	public function updateValittuSaldo($uusiData,$id_tunnus)
	{
		//$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);
		$this->db->where('asiakas_id_asiakas', $id_tunnus);
		$this->db->update('kortti', $uusiData);

		$testi=$this->db->affected_rows();
		return $testi;

	}

		public function updadeKuoletus($uusiData,$id_tunnus)
	{
	
		$this->db->where('asiakas_id_asiakas', $id_tunnus);
		$this->db->update('kortti', $uusiDatatoiminnassa);

		$testi=$this->db->affected_rows();
		return $testi;

	}

}










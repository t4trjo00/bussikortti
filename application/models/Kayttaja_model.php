<?php
class Kayttaja_model extends CI_Model 
{
//Hakee tietokannasta Käyttäjän tiedot tunnuksen id:n perusteella
	public function getKortti_kayttaja()
	{
		$id_tunnus = ($this->session->userdata['logged_in']['id_tunnus']);

		$this->db->select('pin_kortti, saldo, asiakas_id_asiakas, toiminnassa');
		$this->db->from('kortti');
		$this->db->where('asiakas_id_asiakas', $id_tunnus);

		return $this->db->get()->result_array();

	}

	
//Päivittää korttitablen saldo kohdan uudella datalla
	public function updateValittuSaldo($uusiData,$id_tunnus)
	{
		$this->db->where('asiakas_id_asiakas', $id_tunnus);
		$this->db->update('kortti', $uusiData);

		$testi=$this->db->affected_rows();
		return $testi;

	}

}










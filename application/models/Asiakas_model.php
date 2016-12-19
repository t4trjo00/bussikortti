<?php
class Asiakas_model extends CI_Model 
{
	// Hakee asiakkaan kaikki tiedot 
	public function getAsiakas()
	{
		$this->db->select('id_asiakas,etunimi,sukunimi,email,puhelin');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();

	}
	//Lisää uuden asiakkaan asiakastableen
	public function addAsiakas($lisaa_asiakas)
	{
		$this->db->set($lisaa_asiakas);
		$this->db->insert('asiakas');
		$testi=$this->db->affected_rows();
		return $testi;


	}
	//Päivittää asiakkaan tietoja uudella datalla
	public function updateValittuAsiakas($uusiData,$id)
	{
		$this->db->where('id_asiakas', $id);
		$this->db->update('asiakas', $uusiData);
		$testi=$this->db->affected_rows();
		return $testi;

	}
 	//Poistaa asiakastaulusta asiakkaan id:n perusteella
	public function delAsiakas($id)
	{
		$this->db->where('id_asiakas',$id);
		$this->db->delete('asiakas');
		$testi=$this->db->affected_rows();
		return $testi;

	}



}


<?php
class Asiakas_model extends CI_Model 
{
	public function getAsiakas()
	{
		$this->db->select('id_asiakas,etunimi,sukunimi,saldo,email');
		$this->db->from('asiakas');
		return $this->db->get()->result_array();

	}

}


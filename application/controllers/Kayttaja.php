<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayttaja extends CI_Controller 
	{
public function index() {
	echo "asdasd";

}



    function __construct() {
        parent::__construct();
        $this->load->model('Kayttaja_model');
       
    }

		public function kayttaja_page()
		{
			
			$this->load->model('Kayttaja_model');
			$data['kortit']=$this->Kayttaja_model->getKortti_kayttaja();
			$data['sivun_sisalto']='kortti/listaa_kortti_kayttaja';
			//$data['sivun_sisalto']='Kayttaja/kayttaja_page';
			$this->load->view('menu/sisalto',$data);
		}

		public function nayta_muokattava_saldo()
		{
			
			$data['kortit']=$this->Kayttaja_model->getKortti_kayttaja();
			$data['sivun_sisalto']='Kayttaja/nayta_muokattava_saldo';
			$this->load->view('menu/sisalto',$data);
		}
		
		public function lisaa_saldoa()
		{
			$btn=$this->input->post('btnTallenna');
			if (isset($btn)); 
			{
			
			$uusiData=$this->input->post('saldo');
			$id_tunnus=$this->input->post('asiakas_id_asiakas');
			$testi=$this->Kayttaja_model->updateValittuSaldo($uusiData,$id_tunnus);
			
			if ($testi>0) {
				echo '<script>alert("Päivitys onnistui")</script>';
				}
			
			else {
			echo '<script>alert("Päivitys epäonnistui")</script>';
				}
			}
		}


		public function muokattava_saldo()
		{
			$vanha_data=$this->Kayttaja_model->getKortti_kayttaja();
			$vanha_saldo=$vanha_data[0]['saldo'];
			$btn=$this->input->post('btnTallenna');
			if (isset($btn)); 
			{
			$id_tunnus=$this->input->post('id_tunnus');


				$lisaa_saldoa=array(
					"saldo"=>$this->input->post('saldo')+$vanha_saldo

					);
				$testi['kortit']=$this->Kayttaja_model->updateValittuSaldo($lisaa_saldoa,$id_tunnus);
			}
			$this->kayttaja_page();

		}



		public function paivita_toiminnassa()
		{
			$btn=$this->input->post('btnKuolleta');
			if (isset($_POST["btnKuolleta"])); 
			{
			
			$uusiDatatoiminnassa=$this->input->post('toiminnassa');;
			$id_tunnus=$this->input->post('asiakas_id_asiakas');
			$this->load->model('Kayttaja_model');
			$testi=$this->Kayttaja_model->updadeKuoletus($uusiDatatoiminnassa,$id_tunnus);
			
			if ($testi>0) {
				echo '<script>alert("Päivitys onnistui")</script>';
				}
			
			else {
			echo '<script>alert("Päivitys epäonnistui")</script>';
				}
			}
		}



	


































}
 

/* $data['sivun_sisalto']='Kayttaja/kayttaja_page';
		$this->load->view('menu/sisalto',$data);*/
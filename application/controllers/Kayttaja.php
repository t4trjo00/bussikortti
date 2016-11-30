<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayttaja extends CI_Controller 
	{
public function index() {
	echo "asdasd";

}



    function __construct() {
        parent::__construct();
       
    }

		public function kayttaja_page()
		{
			
			$this->load->model('Kayttaja_model');
			$data['kortit']=$this->Kayttaja_model->getKortti_kayttaja();
			$data['sivun_sisalto']='kortti/listaa_kortti_kayttaja';
			$this->load->view('menu/sisalto',$data);
		}
}
 

/* $data['sivun_sisalto']='Kayttaja/kayttaja_page';
		$this->load->view('menu/sisalto',$data);*/
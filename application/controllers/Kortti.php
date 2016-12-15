<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kortti extends CI_Controller 
	{
public function index() {
	echo "asdasd";
}



    function __construct() {
        parent::__construct();
       
    }

		public function listaa_kortti()
		{
			$this->load->model('Kortti_model');
			$data['kortit']=$this->Kortti_model->getKortti();
			$data['sivun_sisalto']='kortti/listaa_kortti';
			$this->load->view('menu/sisalto',$data);
		}

		public function poista_kortti($id)
			{
			$this->load->model('Kortti_model');
			$poista=$this->Kortti_model->delKortti($id);
			if ($poista>0) 
			{
			echo '<script>alert("poisto onnistui")</script>';
			}
			else {
			echo '<script>alert("Päivitys epäonnistui")</script>';
				}

			$data['kortit']=$this->Kortti_model->getKortti();
			$data['sivun_sisalto']='kortti/listaa_kortti';
			$this->load->view('menu/sisalto',$data);
		}
	
}
 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kortti extends CI_Controller 
	{
/* public function index() {
	echo "asdasd";
}*/



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
}
 
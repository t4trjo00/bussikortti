<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asiakas extends CI_Controller 
	{
public function index() {
	echo "Tämä on Home-controllerin index-funktio";
}



    function __construct() {
        parent::__construct();
       
    }

		public function listaa()
		{
			$this->load->model('Asiakas_model');
			$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
			$data['sivun_sisalto']='asiakas/listaa';
			$this->load->view('menu/sisalto',$data);
		}

}
 
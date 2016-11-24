<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
	{
public function index() {
	echo "asdasd";
}



    function __construct() {
        parent::__construct();
       
    }

		public function admin_page()
		{
			$this->load->model('Kortti_model');
			$data['kortit']=$this->Kortti_model->getKortti();
			$data['sivun_sisalto']='admin/admin_page';
			$this->load->view('menu/sisalto',$data);

		}
		



}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etusivu extends CI_Controller 
{
	public function index()
	{
		$data['sivun_sisalto']='Etusivu/index';
		$this->load->view('menu/sisalto',$data);


	}




}
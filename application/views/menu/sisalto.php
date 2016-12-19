<?php

if (isset($this->session->userdata['logged_in'])) 
{
	$username = ($this->session->userdata['logged_in']['username']);
	$admin = ($this->session->userdata['logged_in']['admin']);

if($admin==1) $this->load->view('menu/header');
	else $this->load->view('menu/header_user');
} 

	$this->load->view($sivun_sisalto);
	$this->load->view('menu/footer'); 
?>
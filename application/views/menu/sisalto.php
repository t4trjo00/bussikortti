<?php

if (isset($this->session->userdata['logged_in'])) 
{
$username = ($this->session->userdata['logged_in']['username']);
$admin = ($this->session->userdata['logged_in']['admin']);
if($admin==1) $this->load->view('menu/header');
else $this->load->view('menu/header_user');
} 
?>
<?php $this->load->view($sivun_sisalto); ?>
<?php $this->load->view('menu/footer'); ?>
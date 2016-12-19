<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


//session_start(); //we need to start session in order to access it through CI

Class User_authentication extends CI_Controller {

public function __construct() {
parent::__construct();


$this->load->helper('form');// Load form helper library
$this->load->library('form_validation');// Load form validation library
$this->load->library('session');// Load session library
$this->load->model('login_database');// Load database
}

// Show login page
public function index() {
  $this->load->view('login_form');
}



// Check for user login process
public function user_login_process() {

  $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
  $this->load->view('admin/admin_page');


}else{
  $this->load->view('login/login_form');
}
} else {
  $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password'));
  $result = $this->login_database->login($data);
if ($result == TRUE) {

    $username = $this->input->post('username');
    $result = $this->login_database->read_user_information($username);
if ($result != false) {
    $session_data = array(
      'username' => $result[0]->un_tunnus,
      'id_tunnus'=>$result[0]->id_tunnus,
      'admin'=>$result[0]->admin);


// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
  if (isset($this->session->userdata['logged_in'])) 
  {
    $username = ($this->session->userdata['logged_in']['username']);
    $admin = ($this->session->userdata['logged_in']['admin']);
      if($admin==1){ 
        $this->load->view('menu/header'); 
        $this->load->view('etusivu/index');
  }   else { 
        $this->load->view('menu/header_user');
        $this->load->view('etusivu/index');
  } 
}




}
} else {
  $data = array(
    'error_message' => 'Invalid Username or Password');
    $this->load->view('login/login_form', $data);
    }
  }
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
  'username' => '');
  $this->session->unset_userdata('logged_in', $sess_array);
  $data['message_display'] = 'Olet kirjautunut ulos';
  $this->load->view('login/login_form', $data);
}

}




?>
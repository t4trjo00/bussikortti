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
'password' => $this->input->post('password')
);
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
'error_message' => 'Invalid Username or Password'
);
$this->load->view('login/login_form', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'username' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Olet kirjautunut ulos';
$this->load->view('login/login_form', $data);
}

}



/*/ Show registration page
public function user_registration_show() {
$this->load->view('registration_form');
}


// Validate and store registration data in database
public function new_user_registration() {

// Check validation for user input in SignUp form
$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
if ($this->form_validation->run() == FALSE) {
$this->load->view('registration_form');
} else {
$data = array(
'user_name' => $this->input->post('username'),
'user_email' => $this->input->post('email_value'),
'user_password' => $this->input->post('password')
);
$result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
$data['message_display'] = 'Registration Successfully !';
$this->load->view('login_form', $data);
} else {
$data['message_display'] = 'Username already exist!';
$this->load->view('registration_form', $data);
}
}
}*/


//**************************************************************************************************


/*
session_start();

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   
   $this->load->helper('form');
   $this->load->library('form_validation');
   $this->load->library('session');
   
   $this->load->model('user','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
     $this->load->view('login/login_view');
   }
   else
   {
     //Go to private area
     redirect('Etusivu');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Väärä käyttäjänimi tai salasana.');
     return false;
   }
 }
}*/
?>
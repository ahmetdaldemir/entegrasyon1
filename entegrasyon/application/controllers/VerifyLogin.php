<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('User');
 }

 
 function index()
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');
 $password = $this->input->post('password');
   //query the database
   $result = $this->User->login($username, $password);

   if($result)
   {
      $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->id,
         'name' => $row->name,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     redirect('WelcomeB');
     return TRUE;
   }
   else
   {
  redirect('WelcomeB');
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>
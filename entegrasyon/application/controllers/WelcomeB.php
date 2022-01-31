<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeB extends CI_Controller {
 
	 function index()
 {
    if($this->session->userdata('logged_in'))
   { echo date("d-m-Y H:i:s");
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
		 $data['Page'] = "Yönetim Paneli - Anasayfa";
     $this->template->load('TemplateB', 'Beta/Dashboard',$data);
   }
   else
   {
        $this->load->view('Beta/Login/index');
   }
 }
 
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('WelcomeB', 'refresh');
 }
	
 
}

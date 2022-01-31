<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
 
	 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
     $data['Page'] = "Banner Yönetimi";
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

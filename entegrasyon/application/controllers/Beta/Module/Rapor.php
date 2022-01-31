<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor extends CI_Controller {
 
	 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
     $data['Page'] = "Rapor";
     $DB = $this->load->database("another_db",TRUE);
     $this->template->load('TemplateB', 'Beta/Module/Rapor',$data);
   }
   else
   {
        $this->load->view('Beta/Login/index');
   }
 }
 
	 
}

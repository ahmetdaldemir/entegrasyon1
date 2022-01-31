<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
 
	 function threed()
 {
   if($this->session->userdata('logged_in'))
   {
     $this->db->where("id","1")->set("threed",$this->input->post("threed"))->update("payment_setting");
     redirect("Beta/Dashboard");
   }
   else
   {
        $this->load->view('Beta/Login/index');
   }
 }
 
  
	
 
}

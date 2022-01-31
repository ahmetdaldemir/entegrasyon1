<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inovice extends CI_Controller {

    function index($Id,$platform="") {
        if ($this->session->userdata('logged_in')) {
            $this->load->helper('path');
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data["order"] = $this->db->where("id", $Id)->get("Fatura")->result();
            $data["id"] = $Id;
            $data["platform"] = $platform;
 
            $data["inovice"] = $this->db->where("OrderId", $Id)->get("FaturaUrun")->result();
            $this->db->where("id", $Id)->set("status", "1")->update("Fatura");
            //$DB = $this->load->database("anathor_db",TRUE);
              $this->load->view('Beta/Inovice/akakce', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }

        function akakce($Id,$platform="") {
        if ($this->session->userdata('logged_in')) {
            $this->load->helper('path');
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data["order"] = $this->db->where("id", $Id)->get("Fatura")->result();
            $data["id"] = $Id;
            $data["platform"] = $platform;
            $data["inovice"] = $this->db->where("OrderId", $Id)->get("FaturaUrun")->result();
            $this->db->where("id", $Id)->set("status", "1")->update("Fatura");
            $this->load->view('Beta/Inovice/akakce', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }
    
        function AllPrint($Id) {
        if ($this->session->userdata('logged_in')) {
            $this->load->helper('path');
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data["order"] = $this->db->where("id", $Id)->get("Fatura")->result();
            $data["id"] = $Id;
            $data["platform"] = $platform;
            $data["inovice"] = $this->db->where("OrderId", $Id)->get("FaturaUrun")->result();
            $this->db->where("id", $Id)->set("status", "1")->update("Fatura");
            $this->load->view('Beta/Inovice/fatura', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }
    
    
    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('WelcomeB', 'refresh');
    }

}

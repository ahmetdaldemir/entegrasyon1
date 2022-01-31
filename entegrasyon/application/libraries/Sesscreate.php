<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sesscreate {
    protected $CI;

            public function __construct()
            {
                      $this->CI =& get_instance();
                      $this->CI->load->database();
            }
function sessionusing()
{
	 
 
	       	$uniqueId = uniqid(rand(), TRUE);//generates random number 
					if(!$this->CI->session->has_userdata('my_session_id'))//if session is not set then it sets (if your session has already value then this step will be skip out)
					{
					 $session_code =  $this->CI->session->set_userdata("my_session_id", md5($uniqueId)); 
					}else{
            $session_code =  $this->CI->session->userdata("my_session_id"); 
          }
         return $session_code;
}
  
  
}
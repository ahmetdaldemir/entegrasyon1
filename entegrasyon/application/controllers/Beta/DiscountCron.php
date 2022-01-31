<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DiscountCron extends CI_Controller {

    function index() {
         $DB = $this->load->database("another_db",TRUE);
         $row =  $DB->select("quantity,product_id")->get("oc_product")->result();
        foreach($row as $val)
        {
          if($val->quantity == 0)
          {
            $DB->where("product_id",$val->product_id)->delete("oc_product_special");
          }
        }
      
    }
  
}
  
  ?>
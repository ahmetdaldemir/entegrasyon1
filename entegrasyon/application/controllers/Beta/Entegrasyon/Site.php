<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
    }

     public function order() {
       
       $DB = $this->load->database("pres_db",TRUE);
       
       $completed_requests = $DB->where("current_state","2")->count_all_results('pstk_orders');
       
       
       $SQL = $DB->where("current_state","2")->get("pstk_orders")->result();
   

       foreach($SQL as $val)
       {
   
         $array = array(
                'orderDate' => $val->invoice_date,
                'cargoCompany' => "Aras Kargo",
                'shippingAddressDetail' => $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->address1. " " . $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->address2,
                'recipientName' => $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->firstname . " " . $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->lastname,
                'shippingCountryCode' => "",
                'shippingDistrict' =>$DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->postcode,
                'shippingCity' => $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->city,
                'email' => $DB->where("id_customer",$val->id_customer)->get("pstk_customer")->row()->email,
                'phoneNumber' => $DB->where("id_address",$val->id_address_delivery)->get("pstk_address")->row()->phone_mobile,
                'companyName' =>$DB->where("id_address",$val->id_address_invoice)->get("pstk_address")->row()->company_name,
                'billingAddress' =>  $DB->where("id_address",$val->id_address_invoice)->get("pstk_address")->row()->address1." ". $DB->where("id_address",$val->id_address_invoice)->get("pstk_address")->row()->address2,
                'billingCity' =>  $DB->where("id_address",$val->id_address_invoice)->get("pstk_address")->row()->postcode,
                'billingDistrict' =>  $DB->where("id_address",$val->id_address_invoice)->get("pstk_address")->row()->city,
                'taxOffice' => "",
                'taxNumber' => "",
                'identityNo' => "00000000000",
                'barcode' => "00000000000000",
                'status' => "0",
                'orderId' => $val->id_order,
                'platform' => "Site",
            );
         
          
        
           
            $this->db->insert("Fatura", $array);
           $lastid = $this->db->insert_id();
         
              $ProductListArray = $DB->where("id_order",$val->id_order)->get("pstk_order_detail")->result();
          
                foreach($ProductListArray as $product){
                     
                         $arrays = array(
                            'OrderId' =>          $lastid,
                            'merchantSku'     => $product->product_reference,
                            'ProductsName'    => $product->product_name,
                            'ProductPrice'    => $product->unit_price_tax_incl,
                            'ProductQuantity' => $product->product_quantity,
                            'vat'             => "8",
                            'TotalPrice'      => $product->unit_price_tax_incl*$product->product_quantity,
                        );
                       
                      $this->db->insert("FaturaUrun", $arrays);
   
              }
            
               $DB->where("id_order",$val->id_order)->set("current_state","3")->update("pstk_orders");
               $DB->set("id_employee","1")->set("id_order",$val->id_order)->set("id_order_state","3")->insert("pstk_order_history");

    
        }
        $this->session->set_flashdata('siparis',''.$completed_requests.' Adet Mesaj Bulunmaktadır'); 
        redirect("Beta/Dashboard");
 
    }
 
  
  
}
 
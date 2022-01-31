<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gg extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
      
     }
//     function index() {
 
      
//         if ($this->session->userdata('logged_in')) {
//             $session_data = $this->session->userdata('logged_in');
//             $data['name'] = $session_data['name'];
//             $data['Page'] = "GG";
//             $data["Lastorder"] = $this->db->where("status", "1")->where("platform", "GG")->get("Fatura")->result();
//             $data["order"] = $this->db->where("status", "0")->where("platform", "GG")->get("Fatura")->result();
//             $this->template->load('TemplateB', 'Beta/Entegrasyon/GG', $data);
//         } else {
//             $this->load->view('Beta/Login/index');
//         }
//        }
  
  
    function siparisal() {
          include APPPATH . 'third_party/client.php';   

       $client = new ggClient();
$result = $client->getSale($this->input->post("sipariskodu"));
//   echo"<pre>";
//   print_r($result);
//      die(); 
      
//       echo $result->sales->sale->buyerInfo->name;
//       if($result->sales->sale->invoiceInfo == "")
//       {
//         echo "burda";
//       }else{
//         echo"değil";
//       }
//  die();
 
 
    $sorgu =   $this->db->where("orderId",$result->sales->sale->saleCode)->get("Fatura");
       if ($sorgu->num_rows() == 0) {
     
         echo"<pre>";
     print_r($result);
         if($result->sales->sale->invoiceInfo == "")
      { 
         $adres = $result->sales->sale->buyerInfo->address;
         $recipientName = $result->sales->sale->buyerInfo->name . " " . $result->sales->sale->buyerInfo->surname;
         $shippingDistrict =  $result->sales->sale->buyerInfo->district;
         $shippingCity = $result->sales->sale->buyerInfo->city;
         $companyName = $result->sales->sale->buyerInfo->name . " " . $result->sales->sale->buyerInfo->surname;
         $phoneNumber = $result->sales->sale->buyerInfo->mobilePhone;
         $taxOffice = "";
         $taxNumber ="";
       }else{
         $adres = $result->sales->sale->invoiceInfo->address;
         $recipientName = $result->sales->sale->invoiceInfo->fullname;
         $shippingDistrict =  $result->sales->sale->invoiceInfo->district;
         $shippingCity = $result->sales->sale->buyerInfo->city;
         $companyName = $result->sales->sale->invoiceInfo->companyTitle;
         $phoneNumber = $result->sales->sale->invoiceInfo->phoneNumber;
         $taxOffice = $result->sales->sale->invoiceInfo->taxOffice;
         $taxNumber = $result->sales->sale->invoiceInfo->taxNumber;
      }
              $array = array(
                'orderDate' => $result->sales->sale->moneyDate,
                'cargoCompany' => "Aras Kargo",
                'shippingAddressDetail' => $adres,
                'recipientName' => $recipientName,
                'shippingCountryCode' => "0",
                'shippingDistrict' => $shippingDistrict,
                'shippingCity' => $shippingCity,
                'email' => "",
                'phoneNumber' => $phoneNumber,
                'companyName' => $companyName,
                'billingAddress' => $adres,
                'billingCity' => $shippingCity,
                'billingDistrict' => $shippingDistrict,
                'taxOffice' => $taxOffice,
                'taxNumber' => $taxNumber,
                'identityNo' => $result->sales->sale->invoiceInfo->tcCertificate,
                'barcode' => $result->sales->sale->saleCode."/".$result->sales->sale->cargoCode,
                'status' => "0",
                'orderId' => $result->sales->sale->saleCode,
                'platform' => "GG",
            );
        
            $this->db->insert("Fatura", $array);
            $lastid = $this->db->insert_id();
       echo "burda";
              $arrays = array(
                'OrderId' => $lastid,
                'merchantSku'     => $result->sales->sale->productId,
                'ProductsName'    => $result->sales->sale->productTitle,
                'ProductPrice'    => $result->sales->sale->price,
                'ProductQuantity' => $result->sales->sale->amount,
                'vat'             => "8",
                'TotalPrice'      => $result->sales->sale->price*$result->sales->sale->amount,
               );
               $this->db->insert("FaturaUrun", $arrays);
          redirect("Beta/Entegrasyon/Gg");
      }else{
        echo"Daha Önce Eklenmiştir. <a href='http://dermela.com/entegrasyon/Beta/Entegrasyon/Akakce'>Geri Dön</a>";
      }
        }
  
  
  
//     function index() {
//         if ($this->session->userdata('logged_in')) {
//             $session_data = $this->session->userdata('logged_in');
//             $data['name'] = $session_data['name'];
//             $data['Page'] = "gg";
//             $DB2 = $this->load->database('another_db', TRUE);
//             $data["product"] = $DB2->query("SELECT *FROM oc_product INNER JOIN oc_product_description ON oc_product.product_id=oc_product_description.product_id where oc_product.quantity > 0")->result();
//              $this->template->load('TemplateB', 'Beta/Entegrasyon/Akakce', $data);
//         } else {
//             $this->load->view('Beta/Login/index');
//         }
//     }
      function urunlist() {
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data['Page'] = "gg";
            $DB2 = $this->load->database('another_db', TRUE);
            $data["product"] = $DB2->query("SELECT *FROM oc_product INNER JOIN oc_product_description ON oc_product.product_id=oc_product_description.product_id where oc_product.quantity > 0")->result();
            $this->load->view('Beta/Entegrasyon/ggurun', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }
  
function add($id) {
       include APPPATH . 'third_party/client.php';   
       $client = new ggClient();
 
       
    $DB2 = $this->load->database('another_db', TRUE);
       $xml ='<product> 
     <categoryCode>'.$DB2->where("product_id",$id)->get("oc_product")->row()->isbn.'</categoryCode>
     <storeCategoryId></storeCategoryId>
     <title>Pharmaton 30 Kapsül</title>
     <subtitle></subtitle>
     <specs>';
		 $xml .='<spec name="Durum" value="Sıfır" type="CheckBox" required="true"></spec>';
      $xml .='</specs>
     <photos><photo photoId="0"><url>https://dermela.com/image/'.$DB2->where("product_id",$id)->get("oc_product")->row()->image.'</url></photo>';
      $xml .='</photos>
     <pageTemplate>5</pageTemplate>
     <description><![CDATA[İçerik Hazırlanmaktadır]]></description>
     <startDate></startDate>
     <catalogId>0</catalogId>
     <catalogDetail>0</catalogDetail>
     <format>S</format>
     <startPrice></startPrice>
     <buyNowPrice>'.$DB2->where("product_id",$id)->get("oc_product_special")->row()->price.'</buyNowPrice>
     <netEarning></netEarning>
     <listingDays>60</listingDays>
     <productCount>'.$DB2->where("product_id",$id)->get("oc_product")->row()->quantity.'</productCount>
     <cargoDetail>
     <city>38</city>
         <cargoCompanies>
            <cargoCompany>yurtici</cargoCompany>
         </cargoCompanies>
         <shippingPayment>S</shippingPayment>
         <cargoDescription></cargoDescription>
         <shippingWhere>Country</shippingWhere>
      </cargoDetail>
     <affilateOption></affilateOption>
     <boldOption></boldOption>
     <catalogOption></catalogOption>
     <vitrineOption></vitrineOption>
     </product>';
     $result = $client->insertProducts(null,$xml,false,false);
        echo"<pre>";
 		print_r($result);
         }
  
  
}
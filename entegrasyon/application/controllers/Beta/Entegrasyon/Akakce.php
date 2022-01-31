<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akakce extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
    }

    function index() {
        if ($this->session->userdata('logged_in')) {
             $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data['Page'] = "Akakçe";
            $data["Lastorder"] = $this->db->where("status","1")->where("(platform = 'Akakçe' OR platform = 'GG' OR platform = 'Site' OR platform = 'Hepsi Burada')")->get("Fatura")->result();
            $data["order"] = $this->db->where("status", "0")->where("(platform = 'Akakçe' OR platform = 'GG' OR platform = 'Site' OR platform = 'Hepsi Burada')")->get("Fatura")->result();
            $this->template->load('TemplateB', 'Beta/Entegrasyon/Akakce', $data);
        } else {
            $this->load->view('Beta/Login/index');
        }
    }

    public function kargo() {
        $this->input->post("platform");
     	$this->db->where("orderId",$this->input->post("id"))->set("shipping_code",$this->input->post("kargono"))->update("Fatura");
    	if($this->input->post("platform") == "Akakçe")
    	{
           echo $this->input->post("id");
    	     $client = $this->connect();
           $at_param = array('orderID' => $this->input->post("id"), 'carrierID' => '2', 'trackingNo' => $this->input->post("kargono"));
           $carrierList = $client->setShipmentInfo($at_param);
            redirect("Beta/Entegrasyon/Akakce");
    	}
		  else if($this->input->post("platform") == "GG")
    	{
				 include APPPATH . 'third_party/client.php';
				 $client = new ggClient();
         $result = $client->sendCargoInformation($this->input->post("id"),$this->input->post("kargono"),"Aras","Tekir","www.araskargo.com","S");
         redirect("Beta/Entegrasyon/Akakce");
    	}else if($this->input->post("platform") == "Site"){

    	     $DB = $this->load->database("pres_db",TRUE);


             $DB->where("id_order",$this->input->post("id"))->set("tracking_number",$this->input->post("kargono"))->update("pstk_order_carrier");

    		 $DB->where("id_order",$this->input->post("id"))->set("current_state","4")->set("shipping_number",$this->input->post("kargono"))->update("pstk_orders");
             $DB->set("id_employee","1")->set("id_order",$this->input->post("id"))->set("id_order_state","4")->set("date_add",date("Y-m-d H:i:s"))->insert("pstk_order_history");
             $id_customer = $DB->where("id_order",$this->input->post("id"))->get("pstk_orders")->row()->id_customer;
              $email = $DB->where("id_customer",$id_customer)->get("pstk_customer")->row()->email;

//            $this->mesajs($this->input->post("id"),$this->input->post("kargono"));
              $this->load->library('email');
              $this->email->from('info@dermela.com', 'Sipariş Yönetimi');
              $this->email->to($email);
              $this->email->subject('Kargo Kodu');
              $this->email->message('Merhabalar  Kargo Takip Kodunuz : '.$this->input->post("kargono").'');
              $this->email->send();
              redirect("Beta/Entegrasyon/Akakce");
       }
     
    }

	
	
	  function mesajs($tel,$kod)
  {
     $numaralar = array(''.$this->db->where("orderId",$tel)->get("Fatura")->row()->phoneNumber.''); 
     $mesaj = 'SAYIN '.$this->db->where("orderId",$tel)->get("Fatura")->row()->recipientName.' Siparişiniz Kargoya Verilmiştir. Aras Kargo Takip Kodu : '.$kod.'  - İyi Günlerde Kullanmanızı Dileriz,Bilgi İçin 0507 286 26 21';// MESAJINIZ BURAYA GELECEK(Türkçe karakter olmadan)
     $baslik = 'DERMELA'; // BAŞLIK BURAYA GELECEK(Max 11 Karakter TR karakter olmadan)
     $veriler = array(
     'apiNo' =>'Nrw0jbdbRycroW2gUvDIv6pp9yWJ8bMxid8N2F2orRWq',
     'user' =>'5465007111',
     'pass' =>'198711ad',
     'mesaj'=> $mesaj,
     'numaralar' =>$numaralar,
     'baslik' =>   $baslik,
    );
   $ozel_mesaj = $this->sms_gonders("http://api.efecel.com.tr/",$veriler);
   }
  
   function sms_gonders ($Url,$strRequest) {
     $ch=curl_init();
    $veri = http_build_query($strRequest);
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1) ;
    curl_setopt($ch, CURLOPT_POSTFIELDS,$veri);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $result = curl_exec($ch);
    curl_close($ch);
     return $result;
	 }
	
	
	
	
    public function urunlist($id) {
        $query = $this->db->where("OrderId", $id)->get("FaturaUrun")->result();
        echo json_encode($query);
    }

    public function tedarik($id) {
        $query = $this->db->where("id", $id)->set("tedarik", "1")->update("Fatura");
        redirect("Beta/Entegrasyon/Akakce");
    }

    public function Hazir($id) {
        $query = $this->db->where("id", $id)->set("tedarik", "0")->update("Fatura");
        redirect("Beta/Entegrasyon/Akakce");
    }

    public function getOrder() {
        $client = $this->connect();
        $at_param = array('listType' => 'LIST_NEW', 'startDate' => '2011-08-19', 'endDate' => '2030-08-19');
        $carrierList = $client->getOrders($at_param);
    
        return $carrierList;
    }

    public function acceptOrder($OrdeId) {
        $client = $this->connect();
        $at_param = array('orderID' => $OrdeId);
        $carrierList = $client->acceptOrder($at_param);
    }

    public function rejectOrder($OrdeId) {
        $client = $this->connect();
        $at_param = array('orderID' => $OrdeId, 'rejectionReason' => "Stok Bulunamadı");
        $carrierList = $client->acceptOrder($at_param);
    }
    public function sil($OrdeId) {
        $this->db->where("id",$OrdeId)->delete("Fatura");
			 $this->db->where("OrderId",$OrdeId)->delete("FaturaUrun");
			 redirect("Beta/Entegrasyon/Akakce");
    }
    function connect() {
        $client = new SoapClient("http://www.akakce.com/akakcem/online-store/siparis-yonetimi/api/orderServices.asmx?wsdl", array('trace' => 1));
        $AuthHeader = array("username" => 'dermela', "password" => '01F31E3241DB10EA0D4AB3CF4E33BB05');
        $header = new SoapHeader('http://orderservices.akakce.com/', 'Authentication', $AuthHeader, false);
        $client->__setSoapHeaders(array($header));
        return $client;
    }

    public function order() {
        $data = $this->getOrder();
 
   if($data->getOrdersResult->orders->order == "")
 {
 			 $this->session->set_flashdata('siparis','0 Adet Mesaj Bulunmaktadır'); 
          redirect("Beta/Dashboard"); 
 }else{
      if (is_array($data->getOrdersResult->orders->order)) {

            $OrderListArray = $data->getOrdersResult->orders->order;
        } else {

            $OrderListArray = array();

            $OrderListArray[] = $data->getOrdersResult->orders->order;
        }
 
 
        foreach ($OrderListArray as $val) {
            
         $query =   $this->db->where("orderId",$val->orderID)->get("Fatura");
      
      if($query->num_rows() == 0)
      {
      
      
          if($val->customerInfo->deliverToName == ""){$name = $val->customerInfo->customerName;}else{$name = $val->customerInfo->deliverToName;}
              if($val->customerInfo->deliverToSurname == ""){$surname = $val->customerInfo->customerSurname;}else{$surname = $val->customerInfo->deliverToSurname;}
              $this->acceptOrder($val->orderID);
                $array = array(
                'orderDate' => $val->orderDate,
                'cargoCompany' => "Aras Kargo",
                'shippingAddressDetail' => $val->customerInfo->deliverStreetAddress,
                'recipientName' => $name . " " . $surname,
                'shippingCountryCode' => "0",
                'shippingDistrict' => $val->customerInfo->deliverDistrict,
                'shippingCity' => $val->customerInfo->deliverCity,
                'email' => $val->customerInfo->email,
                'phoneNumber' => $val->customerInfo->cellPhone,
                'companyName' => $val->customerInfo->corporateName,
                'billingAddress' => $val->customerInfo->deliverStreetAddress,
                'billingCity' => $val->customerInfo->deliverCity,
                'billingDistrict' => $val->customerInfo->deliverDistrict,
                'taxOffice' => $val->customerInfo->taxOffice,
                'taxNumber' => $val->customerInfo->taxNumber,
                'identityNo' => "00000000000",
                'barcode' => "00000000000000",
                'status' => "0",
                'orderId' => $val->orderID,
                'platform' => "Akakçe",
            );
            $this->db->insert("Fatura", $array);
            $lastid = $this->db->insert_id();

           
            foreach($val->products as $productas){
             
              
  if (is_array($productas)) {

            $ProductListArray = $productas;
        } else {

            $ProductListArray = array();

            $ProductListArray[] = $productas;
        }
              print_r($ProductListArray);
         }
          
         $toplam =  0;
          foreach($ProductListArray as $product){
             $arrays = array(
                'OrderId' => $lastid,
                'merchantSku'     => $product->vendorSKU,
                'ProductsName'    => $product->productName,
                'ProductPrice'    => $product->itemPrice,
                'ProductQuantity' => $product->itemQuantity,
                'vat'             => 8,
                'TotalPrice'      => $product->itemPrice*$product->itemQuantity,
            );
              $this->db->insert("FaturaUrun", $arrays);
  

                    $DB = $this->load->database('pres_db', TRUE);
                    $urun = $DB->where("reference",$product->vendorSKU)->get("pstk_product")->result();
                    
                    foreach($urun as $valUrun)
                    {
                        $urunAdedi = $DB->where("id_product",$valUrun->id_product)->get("pstk_stock_available")->result();
                        foreach($urunAdedi as $quantityUrun)
                        {
                            
                            $urunAdediBireysel = $quantityUrun->quantity - $product->itemQuantity;
                            $DB->where("id_product",$quantityUrun->id_product)->set("quantity",$urunAdediBireysel)->update("pstk_stock_available");
                            
                        }
                    }
            }
      
 }
        }
          $this->session->set_flashdata('siparis',''.count($OrderListArray).' Adet Mesaj Bulunmaktadır'); 
          redirect("Beta/Dashboard"); 
      }    
			 
    }
  
  
  
 
  
  
  public function akakce_products()
  {
      echo'<?xml version="1.0" encoding="utf-8" standalone="yes"?>
        <products xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
         $query = $this->db->where("stockAmount !=","0")->where("status !=","0")->where("mainCategoryId !=","1099")->where("brandId !=","0")->get("products")->result();
           foreach($query as $val){  
             if(empty($val->details)){$detail = "".$val->label." Ürününü bu sayfadan satın alabilirsiniz, diğer ürünlerimizi inceleyebilrisiniz";}else{$detail =$val->details; }
             if(isset($this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name)){ $a =$this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name; }else{ $a =""; }
             if(isset($this->db->where("id",$val->categoryId)->get("Category")->row()->name)){ $b =$this->db->where("id",$val->categoryId)->get("Category")->row()->name; }else{ $b =""; } 
             if(isset($this->db->where("id",$val->subCategoryId)->get("Category")->row()->name)){ $c = $this->db->where("id",$val->subCategoryId)->get("Category")->row()->name; }else{ $c =""; } 
             if($val->displayPrice >= 99 ){$kargo = 0.00;}else{$kargo = 4.50;}
             $price = $val->price - ($val->price*($val->discount /100));
             echo'<product>
            <sku><![CDATA['.$val->stockCode.']]></sku>
            <name><![CDATA['.$val->label.']]></name>
            <url><![CDATA['.$val->productLink.']]></url>
            <imgUrl><![CDATA['.$val->picture.']]></imgUrl>
            <additionalimages>
            <imgUrl></imgUrl>
             </additionalimages>
            <description><![CDATA['.$detail.']]></description>
            <distributor></distributor>
            <price>'.$price.'</price>
            <shipPrice>'.$kargo.'</shipPrice>
            <shipmentVolume>1</shipmentVolume>
            <dayOfDelivery>1</dayOfDelivery>
            <expressDeliveryTime></expressDeliveryTime>
            <quantity>'.$val->stockAmount.'</quantity>
            <productBrand><![CDATA['.$this->db->where("id_manufacturer",$val->brandId)->get("manufacturer")->row()->name.']]></productBrand>
            <productCategory>'.$a.' > '.$b.' > '.$c.'</productCategory>
            <barcode>'.$val->barcode.'</barcode>
            </product>';
            }
        echo'</products>';
  }
  
  
      public function TestgetOrder() {
        $client = $this->Testconnect();
        $at_param = array('listType' => 'LIST_NEW', 'startDate' => '2011-08-19', 'endDate' => '2030-08-19');
        $carrierList = $client->getOrders($at_param);
       print_r($carrierList);
    }
  
      function Testconnect() {
        $client = new SoapClient("http://www.akakce.com/akakcem/online-store/siparis-yonetimi/api/orderServices.asmx?wsdl", array('trace' => 1));
        $AuthHeader = array("username" => 'kullaniciadi', "password" => '2453D3686C69E174905D1E51D369259C');
        $header = new SoapHeader('http://178.251.45.210:8080/orderServices/orderServices.asmx?wsdl', 'Authentication', $AuthHeader, false);
        $client->__setSoapHeaders(array($header));
        return $client;
    }

  function mesaj()
  {
     $numaralar = array('05412516871'); 
     $mesaj = 'Deneme Mesaj | Mehabalar Sayın Müşterimiz, Siparişiniz Kargoya Verilmiştir. Aras Kargo Takip Kodu : 7842478785';// MESAJINIZ BURAYA GELECEK(Türkçe karakter olmadan)
     $baslik = 'DERMELA'; // BAŞLIK BURAYA GELECEK(Max 11 Karakter TR karakter olmadan)
     $veriler = array(
     'apiNo' =>'1',
     'user' =>'5354872623',
     'pass' =>'198711ad',
     'mesaj'=> $mesaj,
     'numaralar' =>$numaralar,
     'baslik' =>   $baslik,
    );
   $ozel_mesaj = $this->sms_gonder("http://api.efecel.com.tr/",$veriler);
		print_r($ozel_mesaj);
  }
  
   function sms_gonder ($Url,$strRequest) {

    $ch=curl_init();
    $veri = http_build_query($strRequest);
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1) ;
    curl_setopt($ch, CURLOPT_POSTFIELDS,$veri);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $result = curl_exec($ch);
    curl_close($ch);
     return $result;
	 }
  
}
 
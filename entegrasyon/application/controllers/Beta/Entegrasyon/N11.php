<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class N11 extends CI_Controller {

    // API Anahtar af428252-7e68-43a2-aefb-f75eea616502 için şifreniz aşağıdadır.
    // 30bNjkqk4aDhHTqX
    function __construct() {
        parent::__construct();
        $this->load->model('N11Model');
    }

    function index($id = "") {
        if ($this->session->userdata('logged_in')) {
            $this->FaturaAktar();
            $session_data = $this->session->userdata('logged_in');
            $data['name'] = $session_data['name'];
            $data['Page'] = "N11 Entegrasyon";
            if ($id == "") {
                $data["orderlist"] = "";
            } else {
                $data["orderlist"] = $this->db->where("OrderId", $id)->get("FaturaUrun")->result();
            }
            $this->template->load('TemplateB', 'Beta/Entegrasyon/N11', $data);
        } else {
            $this->load->view('Beta/Login/index');  
        }
    }

    public function OrderRejent($id) {
        $adres = "https://api.n11.com/ws/OrderService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->orderRequest = new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->orderRequest->id = $id;
        $n11sorgu = $n11baglanti->OrderDetail($gonder);
        if (is_array($n11sorgu->orderDetail->itemList->item)) {

            return $n11sorgu->orderDetail->itemList->item;
        } else {

            $urunler = array();

            return $urunler[] = $n11sorgu->orderDetail->itemList;
        }
    }

    public function itemAccept($id, $orderId, $urunid) {
        $adres = "https://api.n11.com/ws/OrderService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->orderItemList = new stdClass();
        $gonder->orderItemList->orderItem = new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->orderItemList->orderItem->id = $id;
        $n11sorgu = $n11baglanti->OrderItemAccept($gonder);
         
        foreach ($n11sorgu->orderItemList as $val)
        {
      $barcode = $val->shipmentInfo->campaignNumber;
   
                 
        }
 
         $this->db->where("id",$orderId)->set("barcode", $barcode)->update("Fatura");
        $this->db->where("siparismaddesiid", $id)->set("onay", "1")->update("FaturaUrun");
  redirect("Beta/Entegrasyon/N11/$id");
    }

    public function OrderItemReject($id) {
        $adres = "https://api.n11.com/ws/OrderService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->orderItemList = new stdClass();
        $gonder->orderItemList->orderItem = new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->orderItemList->orderItem->id = $id;
        $gonder->rejectReason = "Stokta Yok";
        $gonder->rejectReasonType = "OUT_OF_STOCK ";
        $n11sorgu = $n11baglanti->OrderItemReject($gonder);
        redirect("Beta/Entegrasyon/N11/$id");
    }

    public function FaturaAktar() {
 
        $options = array(
            'soap_version' => SOAP_1_1,
            'cache_wsdl' => WSDL_CACHE_NONE,
            'encoding' => 'UTF-8',
            'exceptions' => TRUE,
        );
        $n11baglantix = new SoapClient('https://api.n11.com/ws/OrderService.wsdl', $options);
        $gonderx = new stdClass();
        $gonderx->auth = new stdClass();
        $gonderx->searchData = new stdClass();
        $gonderx->searchData->period = new stdClass();
        $gonderx->pagingData = new stdClass();
        $gonderx->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonderx->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonderx->searchData->productId = "";
        $gonderx->searchData->status = "New"; //Approved
        $gonderx->searchData->buyerName = "";
        $gonderx->searchData->orderNumber = "";
        $gonderx->searchData->productSellerCode = "";
        $gonderx->searchData->recipient = "";
        $gonderx->searchData->period->startDate = "";
        $gonderx->searchData->period->endDate = "";
        $gonderx->searchData->sortForUpdateDate = "";
        
        $gonderx->pagingData->currentPage = "0";
        $gonderx->pagingData->pageSize = "0";
        $gonderx->pagingData->totalCount = "0";
        $gonderx->pagingData->pageCount = "10";
        $n11sorgux = $n11baglantix->OrderList($gonderx);
 
       if(empty($n11sorgux->orderList->order))
      {
        return 0;
      }else{
          if (is_array($n11sorgux->orderList->order)) {

            $n11OrderListArray = $n11sorgux->orderList->order;
        } else {

            $n11OrderListArray = array();

            $n11OrderListArray[] = $n11sorgux->orderList->order;
        }

        foreach ($n11OrderListArray as $values) {

            $adres = "https://api.n11.com/ws/OrderService.wsdl";
            $n11baglanti = new SoapClient($adres);
            $gonder = new stdClass();
            $gonder->auth = new stdClass();
            $gonder->orderRequest = new stdClass();
            $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
            $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
            $gonder->orderRequest->id = $values->id;
            $n11sorgu = $n11baglanti->OrderDetail($gonder);

     if (is_array($n11sorgu->orderDetail->itemList->item)) {

                $urunler = $n11sorgu->orderDetail->itemList->item;
            } else {

                $urunler = array();

                $urunler[] = $n11sorgu->orderDetail->itemList->item;
            }

            $this->db->from('Fatura');
            $this->db->where('orderId', $n11sorgu->orderDetail->id);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
         
                $array = array(
                'orderDate' => $n11sorgu->orderDetail->createDate,
                'cargoCompany' => "345",
                'shippingAddressDetail' => $n11sorgu->orderDetail->shippingAddress->address,
                'recipientName' => $n11sorgu->orderDetail->shippingAddress->fullName,
                'shippingCountryCode' => "TR",
                'shippingDistrict' => $n11sorgu->orderDetail->shippingAddress->district,
                'shippingCity' => $n11sorgu->orderDetail->shippingAddress->city,
                'email' => $n11sorgu->orderDetail->buyer->email,
                'phoneNumber' => $n11sorgu->orderDetail->shippingAddress->gsm,
                'companyName' => $n11sorgu->orderDetail->billingAddress->fullName,
                'billingAddress' => $n11sorgu->orderDetail->billingAddress->address,
                'billingCity' => $n11sorgu->orderDetail->billingAddress->city,
                'billingDistrict' => $n11sorgu->orderDetail->billingAddress->district,
                'taxOffice' => $n11sorgu->orderDetail->buyer->taxOffice,
                'taxNumber' => $n11sorgu->orderDetail->buyer->taxId,
                'identityNo' => $n11sorgu->orderDetail->buyer->tcId,
                'barcode' => $n11sorgu->orderDetail->itemList->item->shipmentInfo->shipmentCode,
                'status' => "0",
                'orderId' => $n11sorgu->orderDetail->id,
                'platform' => "N11",
            );
            $this->db->insert("Fatura", $array);
            $lastid = $this->db->insert_id();
            foreach ($urunler as $vals) {
                $arrays = array(
                    'OrderId' => $lastid,
                    'merchantSku' => $vals->productSellerCode,
                    'ProductsName' => $vals->productName,
                    'ProductPrice' => $vals->dueAmount/ $vals->quantity,
                    'ProductQuantity' => $vals->quantity,
                    'vat' => "8",
                    'siparismaddesiid' => $vals->id,
                    'TotalPrice' => $vals->sellerInvoiceAmount,
                );
                $this->db->insert("FaturaUrun", $arrays);
              
               $DB = $this->load->database("another_db",TRUE);
               
               
                 $urun = $DB->where("reference",$vals->productSellerCode)->get("pstk_product")->result();
                    
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
    }
      }
        public function update() {
         $a =  $this->db->get("cache_products")->result();
          foreach($a as $val)
          {
            $adres = "https://api.n11.com/ws/ProductService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->productSellerCode = new stdClass();
        $gonder->price = new stdClass();
        $gonder->currencyType = new stdClass();
        $gonder->stockItems = new stdClass();
        $gonder->stockItems->stockItem =new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->productSellerCode = $val->stockcode;
        $gonder->price =  $val->price*1.15;
        $gonder->currencyType = "";
        $gonder->stockItems->stockItem-> sellerStockCode = "";
        $gonder->stockItems->stockItem-> optionPrice= "";
        $n11sorgu = $n11baglanti->UpdateProductPriceBySellerCode($gonder);
          }
        
     }
	
	
	
	 public function productinformation() {
        
  $DB = $this->load->database("another_db",TRUE);
				 $query = $DB->where("model !=","0")->get("oc_product")->result();
 
		 foreach($query as $val)
		 {
			   $adres = "https://api.n11.com/ws/ProductService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->stockItems = new stdClass();
        $gonder->stockItems->stockItem =new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->sellerCode = $val->model;
        $n11sorgu = $n11baglanti->GetProductBySellerCode($gonder);
			 if($n11sorgu->result->status == "success")
			 {
				$a = $this->stokupdate($val->model,$val->quantity);
				 echo"<pre>";
				 print_r($a);
			 }
		 }
       
         
     }
    
	
	
	     public function stokupdate($model,$quantity) {
        				 
        $adres = "https://api.n11.com/ws/ProductStockService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->stockItems = new stdClass();
        $gonder->stockItems->stockItem =new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->stockItems->stockItem->sellerStockCode = $model;
        $gonder->stockItems->stockItem->quantity= $quantity;
			  $gonder->stockItems->stockItem->version ="";
        $n11sorgu = $n11baglanti->UpdateStockByStockSellerCode($gonder);
			  return $n11sorgu;
      }
    
         public function detail($id) {
        $adres = "https://api.n11.com/ws/OrderService.wsdl";
        $n11baglanti = new SoapClient($adres);
        $gonder = new stdClass();
        $gonder->auth = new stdClass();
        $gonder->orderRequest = new stdClass();
        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
        $gonder->orderRequest->id = $id;
        $n11sorgu = $n11baglanti->OrderDetail($gonder);
        echo"<pre>";
        print_r($n11sorgu);
    }
  
  
  
  public function api_add($id="")
{
	  header('Content-Type: text/html; charset=utf-8'); 
           $i = 0;
           $db2 = $this->load->database('another_db', TRUE); 
           $products = $db2->where("product_id",$id)->get("oc_product")->result();
            foreach($products as $product){ 
							
							try {
	//kodlar bu bloğa yazılır
 	  //$db2->query("select *from oc_product_to_category where product_id = ".$val->product_id." limit 1 order by category_id desc")->row()->category_id;
        $category =   $db2->where("product_id",$product->product_id)->limit("1")->order_by("category_id","desc")->get("oc_product_to_category")->row()->category_id;
        $adresx = "https://api.n11.com/ws/ProductService.wsdl";
        $n11baglantix = new SoapClient($adresx, array('encoding' => 'UTF-8'));
        $gonderx = new stdClass();
        $gonderx->auth = new stdClass();
        $gonderx->product = new stdClass();
        $gonderx->product->attributes = new stdClass();
        $gonderx->product->attributes->attribute = new stdClass();
        $gonderx->product->images = new stdClass();
        $gonderx->product->category = new stdClass();
        $gonderx->product->discount = new stdClass();
        $gonderx->product->stockItems = new stdClass();
        $gonderx->product->images->image = new stdClass();
        $gonderx->specialProductInfoList = new stdClass();
        $gonderx->product->stockItems->stockItem = new stdClass();
        $gonderx->specialProductInfoList->specialProductInf = new stdClass();
        $gonderx->product->stockItems->stockItem->attributes = new stdClass();
        $gonderx->product->stockItems->stockItem->attributes->attribute = new stdClass();
        $reference = $product->model;
        $gonderx->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";//
        $gonderx->auth->appSecret = "jZy7e2gBCylMA2gE"; //
         $gonderx->product->productSellerCode = $reference;
         
 $metin = $db2->where("product_id",$product->product_id)->get("oc_product_description")->row()->name;
// //metin karakter say�s�
 $uzunluk = strlen($metin);
// //yay�nlanacak karakter say�s�
  $sinir = 65;
  if ($uzunluk> $sinir) {
  $icerik = substr($metin,0,$sinir);
  }else{
  	$icerik = $db2->where("product_id",$product->product_id)->get("oc_product_description")->row()->name;
  }
  
	 
        $gonderx->product->title = $icerik;
        $gonderx->product->subtitle =  "%100 ORGINAL STOK GARANTİSİ";
        $gonderx->product->description = html_entity_decode($db2->where("product_id",$product->product_id)->get("oc_product_description")->row()->description); //$vals->description;
 	 	    $ozellikler = array();
	         $ozellikler["attribute"][] = array(
				     'name' => "Marka",
					   'value' => $db2->where("manufacturer_id",$product->manufacturer_id)->get('oc_manufacturer')->row()->name,
 			     	);
               $ozelliklers = $db2->where("product_id",$product->product_id)->get('oc_product_attribute');
						 if($ozelliklers->num_rows() > 0)
						 {
               foreach($ozelliklers->result() as $ozelliklervalue){
                  $ozellikler["attribute"][] = array(
                    'name' => $db2->where("attribute_id",$ozelliklervalue->attribute_id)->get('oc_attribute_description')->row()->name,
                    'value' =>  $ozelliklervalue->text,
                  );
               }
               
             }
	       $gonderx->product->attributes = array_merge($ozellikler);
         $gonderx->product->category->id = $product->jan;
         $gonderx->product->price =  $product->price;
         $gonderx->product->currencyType = "TL";
 	    $resim = array();
	    $resimler = $db2->where("product_id",$product->product_id)->get("oc_product_image")->result();
			$i = 2;	 foreach($resimler as $val)
		    {
			          	$resim["image"][] = array(
									'url' => "https://www.dermela.com/image/" .$val->image. "",
									'order' => $i
			 );

	$i++; }
   $resim_array = array_merge( $resim["image"][] = array(
                'url' => "https://www.dermela.com/image/" .$product->image. "",
                'order' => "1"
        ),$resim);
		  
 	      $gonderx->product->images = $resim_array;
        $gonderx->product->saleStartDate = "";
        $gonderx->product->saleEndDate = "";
        $gonderx->product->productionDate = "";
        $gonderx->product->expirationDate = "";
        $gonderx->product->productCondition = "1";
        $gonderx->product->preparingDay = "2";
        $gonderx->product->shipmentTemplate = "Şartlı Kargo";// Şartlı Kargo
               $secenekler = array();
						  $secenek = $db2->where("product_id",$product->product_id)->get('oc_product_option_value');
						 if($secenek->num_rows() > 0)
						 {
 							 		foreach($secenek->result() as $secenel_value)
		         {
							$renk = $db2->where("option_value_id",$secenel_value->option_value_id)->get("oc_option_value_description")->row()->name;
								 $secenekler["stockItem"][] = array(
																	 'sellerStockCode' => "",
																	 'optionPrice'     => $product->price,
																	 'quantity'        => $secenel_value->quantity,
																	 'bundle'          => "",
																	 'gtin'            => "",
																	 'mpn'             => "",
									                 "attributes"      => array(
																											"attribute" => array(
																													 'name' =>  "Renk",
																													 'value' =>  $renk,
																											 ),
								 
								                    ),
									);
 						 }
					   $gonderx->product->stockItems = array_merge($secenekler);
						 }else{
 							 $gonderx->product->stockItems->stockItem->sellerStockCode = $reference;
							 $gonderx->product->stockItems->stockItem->optionPrice = $product->price;
							 $gonderx->product->stockItems->stockItem->quantity = $product->quantity;
							 $gonderx->product->stockItems->stockItem->bundle = "";
							 $gonderx->product->stockItems->stockItem->gtin = "";
							 $gonderx->product->stockItems->stockItem->mpn = "";
 						 $gonderx->product->stockItems->stockItem->attributes->attribute = [];
 						 }
 
        $gonderx->specialProductInfoList->specialProductInf->key = "";
        $gonderx->specialProductInfoList->specialProductInf->value = "";
        $gonderx->product->discount->startDate = "";
        $gonderx->product->discount->endDate = "";
 						 $indirimlifiyat =  $db2->where("product_id",$product->product_id)->get("oc_product_special")->row()->price;
						 if($indirimlifiyat != "")
						 {
			  $gonderx->product->discount->type = "3";
        $gonderx->product->discount->value =  $db2->where("product_id",$product->product_id)->get("oc_product_special")->row()->price*(1.15);
						 }else{
					 $gonderx->product->discount->type = "";
           $gonderx->product->discount->value =  "";
						 }
 
           $n11sorgux = $n11baglantix->SaveProduct($gonderx);
    print_r($n11sorgux);
 
}catch(Exception $e){
	//hata var ise burada yakalanır
echo "mesaj -> ".$e->getMessage(); //hata çıktısı üretilir
}
 
							
							
       
$i++; }
 
  }
    
}

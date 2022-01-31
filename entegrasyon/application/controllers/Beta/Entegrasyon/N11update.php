<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class N11update extends CI_Controller {

    // API Anahtar af428252-7e68-43a2-aefb-f75eea616502 için şifreniz aşağıdadır.
    // 30bNjkqk4aDhHTqX
    function __construct() {
        parent::__construct();
     }


			public function index()
			{
			
			        $adres = "https://api.n11.com/ws/ProductService.wsdl";
			        $n11baglanti = new SoapClient($adres);
			        $gonder = new stdClass();
			        $gonder->auth = new stdClass();
			        $gonder->pagingData = new stdClass();
			        $gonder->auth->appKey = "9220f25d-7c0c-4780-b552-6cc3a55a2c84";
			        $gonder->auth->appSecret = "jZy7e2gBCylMA2gE";
			        $gonder->pagingData->currentPage = 0;
			        $gonder->pagingData->pageSize = 0;
			        $gonder->pagingData->totalCount = 0;
			        $gonder->pagingData->pageCount = 0;
 			        $n11sorgu = $n11baglanti->GetProductList($gonder);
 			       foreach ($n11sorgu->products->product as $val)
			        {
			              $this->api_add($val->productSellerCode);
			        }
							
			}
 
  
  public function api_add($id="")
{
	  header('Content-Type: text/html; charset=utf-8'); 
           $i = 0;
           $db2 = $this->load->database('another_db', TRUE); 
           $products = $db2->where("model",$id)->get("oc_product")->result();
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
         $gonderx->product->price =  $product->price*(1.20);
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
																	 'optionPrice'     => $product->price*(1.20),
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
							 $gonderx->product->stockItems->stockItem->optionPrice = $product->price*(1.20);
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
        $gonderx->product->discount->value =  $db2->where("product_id",$product->product_id)->get("oc_product_special")->row()->price*(1.20);
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

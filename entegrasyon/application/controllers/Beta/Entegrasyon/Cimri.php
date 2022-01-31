<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cimri extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
    }

     
  
  public function xml()
  {
      echo' <?xml version="1.0" encoding="UTF-8"?>
              <MerchantItems xmlns="http://www.cimri.com/schema/merchant/upload" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
         $query = $this->db->where("stockAmount !=","0")->where("status !=","0")->where("mainCategoryId !=","1099")->where("brandId !=","0")->get("products")->result();
           foreach($query as $val){  
             if(empty($val->details)){$detail = "".$val->label." Ürününü bu sayfadan satın alabilirsiniz, diğer ürünlerimizi inceleyebilrisiniz";}else{$detail =$val->details; }
             if(isset($this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name)){ $a =$this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name; }else{ $a =""; }
             if(isset($this->db->where("id",$val->categoryId)->get("Category")->row()->name)){ $b =$this->db->where("id",$val->categoryId)->get("Category")->row()->name; }else{ $b =""; } 
             if(isset($this->db->where("id",$val->subCategoryId)->get("Category")->row()->name)){ $c = $this->db->where("id",$val->subCategoryId)->get("Category")->row()->name; }else{ $c =""; } 
             if($val->displayPrice >= 99 ){$kargo = 0.00;}else{$kargo = 4.50;}
             $price = $val->price - ($val->price*($val->discount /100));
             echo'<MerchantItem>
            <merchantItemId><![CDATA['.$val->id_product.']]></merchantItemId>
             <merchantItemCategoryId><![CDATA['.$val->mainCategoryId.']]></merchantItemCategoryId>
 <merchantItemCategoryName><![CDATA['.$a.']]></merchantItemCategoryName>
 <brand><![CDATA['.$this->db->where("id_manufacturer",$val->brandId)->get("manufacturer")->row()->name.']]></brand>
 <model><![CDATA['.$val->stockCode.']]></model>
 <itemTitle><![CDATA['.$val->label.']]></itemTitle>
 <merchantItemField><![CDATA['.$val->label.']]></merchantItemField>
 <itemUrl><![CDATA['.$val->productLink.']]></itemUrl>
 <priceEft>'.$price.'</priceEft>
 <pricePlusTax>'.$price.'</pricePlusTax>
 <itemUrlMobile><![CDATA[http://www.kozmodiva.com/m/urun/'.url_title($val->label).'/'.$val->id_product.']]></itemUrlMobile>
 <itemImageUrl><![CDATA['.$val->picture.']]></itemImageUrl>
 <shippingFee>'.$kargo.'</shippingFee>
 <stockStatus>'.$val->stockAmount.'</stockStatus>
 <stockDetail><![CDATA[Ürün 1 Gün içerisinde stoklarımızda olacaktır]]></stockDetail>
 <shippingDay>1</shippingDay>
 <shippingDetail></shippingDetail>
 <typeOfWarranty>1</typeOfWarranty>
 <warrantyPeriod>1</warrantyPeriod>
 <eans>
 <ean>'.$val->barcode.'</ean>
  <eans/>
 <specs>
 <spec>
 <description><description/>
 <values><values/>
 <description><description/>
 <values><values/>
 <description><description/>
 <values><values/>
 <spec/>
 <specs/>
 <installments>
 <installment>
 <card></card>
 <month></month>
 <installmentPrice></installmentPrice>
 <continuance></continuance>
 </installment>
 </installments>
 <shippings>
 <shipping>
 <city></city>
 <shippingPrice></shippingPrice>
 </shipping>
 </shippings>
 </MerchantItem>'; }
        echo'</MerchantItems>';
   
         }
              }
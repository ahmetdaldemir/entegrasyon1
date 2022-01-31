<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Google extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('User');
    }


public function  products()
  {
      echo'<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">
 <channel>
  <title><![CDATA[kozmodiva.com]]></title>
  <link><![CDATA[http://www.kozmodiva.com]]></link>
  <description><![CDATA[Kozmodiva Kozmetik İtriyat Pazarlama]]></description>';
                $brand =array(1044,217,231,321,208,314,207,1050,1015,213,199,1054,210,206,1005,925,325,926,316,195,245,191,241,1051,1017,295,232,225,242,203,924,286,313,310,222,190,291,1047,201,205,297,917,237,315,323,934,929,322);
         $query = $this->db->where_in("brandId",$brand)->where("stockAmount !=","0")->where("status !=","0")->where("mainCategoryId !=","1099")->get("products")->result();
           foreach($query as $val){  
             if(empty($val->details)){$detail = "".$val->label." Ürününü bu sayfadan satın alabilirsiniz, diğer ürünlerimizi inceleyebilrisiniz";}else{$detail =$val->details; }
             if(isset($this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name)){ $a =$this->db->where("id",$val->mainCategoryId)->get("Category")->row()->name; }else{ $a =""; }
             if(isset($this->db->where("id",$val->categoryId)->get("Category")->row()->name)){ $b =$this->db->where("id",$val->categoryId)->get("Category")->row()->name; }else{ $b =""; } 
             if(isset($this->db->where("id",$val->subCategoryId)->get("Category")->row()->name)){ $c = $this->db->where("id",$val->subCategoryId)->get("Category")->row()->name; }else{ $c =""; } 
             if($val->displayPrice >= 99 ){$kargo = 0.00;}else{$kargo = 4.50;}
             echo'<item>
   <g:condition><![CDATA[new]]></g:condition>
   <g:id>'.$val->stockCode.'</g:id>
   <g:mpn><![CDATA['.$val->stockCode.']]></g:mpn>
   <title><![CDATA['.$val->label.']]></title>
   <g:brand><![CDATA['.$this->db->where("id_manufacturer",$val->brandId)->get("manufacturer")->row()->name.']]></g:brand>
   <g:gtin><![CDATA['.$val->barcode.']]></g:gtin>
   <g:availability><![CDATA[in stock]]></g:availability>
   <g:additional_image_link><![CDATA[]]></g:additional_image_link>
   <g:additional_image_link><![CDATA[]]></g:additional_image_link>
   <g:additional_image_link><![CDATA[]]></g:additional_image_link>
   <g:image_link><![CDATA['.$val->picture.']]></g:image_link>
   <description><![CDATA['.$detail.']]></description>
   <link><![CDATA['.$val->productLink.']]></link>
   <g:product_type><![CDATA['.$a.' > '.$b.' > '.$c.']]></g:product_type>
   <g:price>'.$val->displayPrice.' TRY</g:price>
   <g:google_product_category><![CDATA[]]></g:google_product_category>
  </item>';
            }
        echo' </channel>
</rss>';
  }
  
}
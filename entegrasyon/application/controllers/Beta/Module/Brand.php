<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {
 
	 function index($brand = "")
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
     $data['Page'] = "Ürün Takibi";
     $DB = $this->load->database("another_db",TRUE);
     $data['Brand'] =$DB->get("oc_manufacturer")->result();
     if($brand =="")
     {
       $data['product'] = "";
       $data["id_manufacturer"] = "";
      }else{
       $data["id_manufacturer"] = $brand;
			
				 $DB->select('oc_product.product_id,oc_product.price,oc_product.quantity,oc_product_description.name,oc_product_special.price as fiyat');
				 $DB->from('oc_product');
			  	$DB->join('oc_product_description', 'oc_product.product_id = oc_product_description.product_id');
				$DB->join('oc_product_special', 'oc_product.product_id = oc_product_special.product_id');
		 	 $DB->where('oc_product.manufacturer_id', $brand);
				 $data['products'] = $DB->get()->result();
			 
       $data['product'] =$this->db->where("brand",$brand)->get("branddiscount")->result();
      }
     $this->template->load('TemplateB', 'Beta/Module/Brand',$data);
   }
   else
   {
        $this->load->view('Beta/Login/index');
   }
 }
 
	public function sets()
 {
      $DB = $this->load->database("another_db",TRUE);
      $Brand = $DB->get("oc_manufacturer")->result();
     foreach($Brand as $val)
     {
       $data = array(
         'brand' => $val->manufacturer_id,
         'discount' => 1,
       );
       $this->db->insert("branddiscount",$data);
     }
 }
  	public function brandupdate()
 {
 			//$this->db->set("brand",$this->input->post("brand"))->set("discount",$this->input->post("discount"))->insert("branddiscount");
      $DB = $this->load->database("another_db",TRUE);
      $Brand = $DB->where("manufacturer_id",$this->input->post("brand"))->where("quantity >","0")->get("oc_product")->result();
				 foreach($Brand as $val)
				 {
					  $special = $DB->where("product_id",$val->product_id)->where("customer_group_id",1)->get("oc_product_special");
					 if ($special->num_rows() > 0) {

								foreach($special->result() as $vals)
								{
									$price = $val->price - (($val->price * $this->input->post("discount"))/100);
									$DB->where("product_special_id",$vals->product_special_id)->set("price",$price)->update("oc_product_special");
								}
					 }else{
					   	 $price = $val->price - (($val->price * $this->input->post("discount"))/100);
						   $DB->set("product_id",$val->product_id)->set("customer_group_id",1)->set("priority",0)->set("price",$price)->insert("oc_product_special");
					 }
				 }
			  redirect("Beta/Module/index/".$this->input->post('brand')."");
      }
  
	  	public function discountdelete()
 {
 			//$this->db->set("brand",$this->input->post("brand"))->set("discount",$this->input->post("discount"))->insert("branddiscount");
      $DB = $this->load->database("another_db",TRUE);
      $Brand = $DB->where("quantity","0")->get("oc_product")->result();
				 foreach($Brand as $val)
				 {
					  $special = $DB->where("product_id",$val->product_id)->where("customer_group_id",1)->delete("oc_product_special");

				 }
      }
	
}

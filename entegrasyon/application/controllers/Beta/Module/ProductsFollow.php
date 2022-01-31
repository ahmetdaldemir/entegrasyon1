<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsFollow extends CI_Controller {
 
	 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
     $data['Page'] = "Ürün Takibi";
     $data['ProductsFollow'] = $this->db->get("ProductsFollow")->result();
     $this->template->load('TemplateB', 'Beta/Module/ProductsFollow',$data);
   }
   else
   {
        $this->load->view('Beta/Login/index');
   }
 }
 
	 function add()
 {
     $DB = $this->load->database("another_db",TRUE);
     $id = $DB->where("model", $this->input->post("model"))->get("oc_product")->row()->product_id;
    $data = array(
      'model'    => $this->input->post("model"),
      'name'     =>  $DB->where("product_id",$id)->get("oc_product_description")->row()->name, 
      'site'     => $DB->where("model", $this->input->post("model"))->get("oc_product")->row()->price,
      'kampanya' => $DB->where("product_id",$id )->where("customer_group_id","1")->get("oc_product_special")->row()->price,  
      );
     $this->db->insert("ProductsFollow",$data);
     redirect("Beta/Module/ProductsFollow");
 }
  
 	 function model_update()
 {
     $DB = $this->load->database("another_db",TRUE);
     $id = $DB->get("oc_product")->result();
 $i = 1;   foreach($id as $val)
		{
			$DB->where("product_id",$val->product_id)->set("model","STK".$i)->update("oc_product");
	$i++;	}
 }
	
 	 function hb_product()
 {
     $DB = $this->load->database("another_db",TRUE);
 		 
		 $DB->select('oc_product.model,oc_product.ean,oc_product_description.name');
$DB->from('oc_product');
$DB->join('oc_product_description', 'oc_product.product_id = oc_product_description.product_id');
$query = $DB->get()->result();;
		 echo"<table>";
 $i = 1;   foreach($query as $val)
		{
	 echo"<tr>";
			echo"<td>$val->name</td>";
	    echo"<td>$val->model</td>";
	    echo"<td>$val->ean</td>";
	  echo"</tr>";
	$i++;	}
		 echo"<table>";
 }
		
}
